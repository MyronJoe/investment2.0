<?php

namespace App\Http\Controllers;

use App\Models\Addresses;
use App\Models\investments;
use App\Models\message;
use App\Models\Plans;
use App\Models\User;
use App\Models\Utilities;
use App\Models\withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //Admin Profile
    public function Profile()
    {
        return view('backend.profile');
    }

    //user dashboard
    public function AdminDashboard()
    {

        $users = User::where('user_type', 0)->count();

        $admins = User::where('user_type', '2ru')->count();

        $investment = Investments::all()->count();

        $pending_investment = Investments::where('status', 0)->count();

        $done_investment = Investments::where('status', 1)->count();

        $withdrawal = withdrawal::all()->count();

        $pending_withdrawal = withdrawal::where('status', 0)->count();

        $done_withdrawal = withdrawal::where('status', 1)->count();

        return view('backend.home', compact('users', 'admins', 'investment', 'pending_investment', 'done_investment', 'withdrawal', 'pending_withdrawal', 'done_withdrawal'));
    }

    //Admin_users page
    public function Admin_users()
    {
        $data = User::where('user_type', '=', '2ru')->get();
        $num = User::where('user_type', '=', '2ru')->count();

        return view('backend.admin.admin_users', compact('data', 'num'));
    }

    //create_admin
    public function create_admin()
    {
        return view('backend.admin.create_admin');
    }

    //Make_admin
    public function Make_admin(Request $request)
    {
        //validate user form
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'phone_number' => 'required|string',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8|string'
        ]);

        //Checks if the user already exist b4 adding to the database
        $email =  User::where('email', $request->email)->exists();

        if ($email) {
            Alert::error('Email Already Exist');
            return redirect()->back();
        } else {

            $data  = new User();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone_number = $request->phone_number;
            $data->password = Hash::make($request->password);
            $data->image = 'default.png';
            $data->user_type = '2ru';

            $data->save();

            Alert::success('Admin created successfully');
            return redirect()->route('admin_users')->with('success', 'Admin created successfully');
        }
    }

    //delete_admin
    public function delete_admin($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('admin_users')->with('success', 'User Deleted Successfully');
    }

    //delete_user
    public function delete_user($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->back()->with('success', 'User Deleted Successfully');
    }

    //create_Plan page
    public function Create_Plan()
    {

        return view('backend.plans.makePlan');
    }

    //Make_plan
    public function Make_plan(Request $request)
    {
        $request->validate([
            'planName' => 'required',
            'min' => 'required',
            'max' => 'required',
            'RIO' => 'required',
            'payout' => 'required',
            'duration' => 'required',
        ]);

        $data  = new Plans();

        $data->name = $request->planName;
        $data->min = $request->min;
        $data->max = $request->max;
        $data->RIO = $request->RIO;
        $data->payout = $request->payout;
        $data->duration = $request->duration;

        $data->save();

        Alert::success('Plan Created Successfully');
        return redirect()->route('all_plans')->with('success', 'Plan Created Successfully');
    }

    public function all_plans()
    {

        $data = Plans::orderBy('created_at', 'asc')->paginate(30);

        return view('backend.plans.all_invest', compact('data'));
    }

    //edit_plan
    public function edit_plan($id)
    {

        $data = Plans::findorfail($id);

        return view('backend.plans.editPlan', compact('data'));
    }

    //update_plan
    public function update_plan($id, Request $request)
    {

        $request->validate([
            'planName' => 'required',
            'min' => 'required',
            'max' => 'required',
            'RIO' => 'required',
            'payout' => 'required',
            'duration' => 'required',
        ]);

        $data = Plans::findorfail($id);

        $data->name = $request->planName;
        $data->min = $request->min;
        $data->max = $request->max;
        $data->RIO = $request->RIO;
        $data->payout = $request->payout;
        $data->duration = $request->duration;

        $data->save();

        Alert::success('Plan Updated Successfully');
        return redirect()->route('all_plans')->with('success', 'Plan Updated Successfully');
    }

    //delete_plan
    public function delete_plan($id)
    {

        $data = Plans::findorfail($id);

        $data->delete();

        Alert::success('Plan Deleted Successfully');
        return redirect()->route('all_plans')->with('success', 'Plan Deleted Successfully');
    }

    //delete_investment
    public function delete_investment($id)
    {

        $data = investments::findorfail($id);

        $capital = User::findorfail($data->investor);



        $capital->capital -= $data->amount;

        $capital->balance -= $data->daily_income;

        $capital->save();
        $data->delete();

        Alert::success('Investment Deleted Successfully');
        return redirect()->back()->with('success', 'Investment Deleted Successfully');
    }

    //delete_withdrawal
    public function delete_withdrawal($id)
    {

        $data = withdrawal::findorfail($id);

        $data->delete();

        Alert::success('Withdrawal Deleted Successfully');
        return redirect()->back()->with('success', 'Withdrawal Deleted Successfully');
    }

    //all_users
    public function all_users()
    {

        $users = User::where('user_type', 0)->orderBy('created_at', 'desc')->paginate(30);

        $users_num = User::where('user_type', 0)->orderBy('created_at', 'desc')->count();

        return view('backend.users.users', compact('users', 'users_num'));
    }

    //all_investments
    public function all_investments()
    {

        $data = Investments::orderBy('created_at', 'desc')->paginate(30);

        $invest_num = Investments::orderBy('created_at', 'desc')->count();

        return view('backend.investments.investments', compact('data', 'invest_num'));
    }

    public function view_prove($id)
    {

        $data = Investments::findorfail($id);

        return view('backend.investments.view_prove', compact('data'));
    }

    //all_withdrawals
    public function all_withdrawals()
    {

        $data = withdrawal::orderBy('created_at', 'desc')->paginate(30);

        $invest_num = withdrawal::orderBy('created_at', 'desc')->count();

        return view('backend.withdrawals.withdrawals', compact('data', 'invest_num'));
    }

    //users_withdrawals
    public function users_withdrawals($id)
    {

        $data = withdrawal::where('user_id', $id)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = withdrawal::where('user_id', $id)->count();

        return view('backend.users.withdrawals', compact('data', 'invest_num'));
    }

    //users_investments
    public function users_investments($id)
    {

        $data = Investments::where('investor', $id)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = Investments::where('investor', $id)->count();

        return view('backend.users.investments', compact('data', 'invest_num'));
    }

    //change-pending
    public function change_pending($id)
    {

        $data = Investments::findorfail($id);

        // dd($data->investor);

        $data->status = 1;

        $data->save();

        Alert::success('Status Updated Successfully');
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    //change_done
    public function change_done($id)
    {

        $data = Investments::findorfail($id);

        // dd($data->investor);

        $data->status = 0;

        $data->save();

        Alert::success('Status Updated Successfully');
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    //withdraw-pending
    public function withdraw_pending($id)
    {

        $data = withdrawal::findorfail($id);

        $data->status = 1;

        $data->save();

        Alert::success('Status Updated Successfully');
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    //withdraw_done
    public function withdraw_done($id)
    {

        $data = withdrawal::findorfail($id);

        $data->status = 0;

        $data->save();

        Alert::success('Status Updated Successfully');
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    //All_messages
    public function All_messages()
    {

        $message = message::orderBy('created_at', 'desc')->get();

        return view('backend.message.message', compact('message'));
    }

    //View_message
    public function View_message($id)
    {
        $message = message::findOrFail($id);

        return view('backend.message.view_message', compact('message'));
    }

    //Delete-message
    public function Delete_message($id)
    {
        $message = message::findOrFail($id);

        $message->delete();

        return redirect()->route('all_messages')->with('success', 'Message Deleted Successfully.');
    }

    //Site_setting
    public function Site_setting()
    {

        $utilities = Utilities::orderBy('created_at', 'desc')->get();

        return view('backend.site_settings.site_settings', compact('utilities'));
    }

    //wallet address
    public function address()
    {

        $address = Addresses::orderBy('created_at', 'desc')->get();

        return view('backend.address.address', compact('address'));
    }

    //update wallet address
    public function update_address($id, Request $request)
    {

        $request->validate([
            'bit_address' => 'required',
            // 'bit_network' => 'required',
            'eth_address' => 'required',
            // 'eth_network' => 'required',
            'usd_address' => 'required',

            'bank' => 'required',
            'bank_name' => 'required',
            // 'usd_network' => 'required',
        ]);

        $data = Addresses::findOrFail($id);

        $data->bit_address = $request->bit_address;
        $data->bank = $request->bank;
        $data->bank_name = $request->bank_name;
        // $data->bit_network = $request->bit_network;
        $data->eth_address = $request->eth_address;
        // $data->eth_network = $request->eth_network;
        $data->usd_address = $request->usd_address;
        // $data->usd_network = $request->usd_network;

        $data->save();

        Alert::success('Details Updated Successfully.');
        return redirect()->route('admin_dashboard')->with('success', 'Details Updated Successfully.');
    }

    //update site settings
    public function Update_settings($id, Request $request)
    {

        $request->validate([
            // 'wallet_address' => 'required|string',
            'site_link' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|string',
            // 'phone' => 'required|string',
            'email' => 'required|string',
            'description' => 'required|string',
            'site_name' => 'required|string',
        ]);

        $data = Utilities::findOrFail($id);

        $data->site_link = $request->site_link;
        $data->wallet_address = $request->wallet_address;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->site_name = $request->site_name;

        if ($request->whitelogo) {
            $imageName = time() . '_white_logo_' . $request->whitelogo->getClientOriginalExtension();

            $request->whitelogo->move('frontend/assets/uploads', $imageName);

            $data->whiteLogo = $imageName;
        }

        if ($request->darklogo) {
            $imageName = time() . '_darklogo' . $request->darklogo->getClientOriginalExtension();

            $request->darklogo->move('frontend/assets/uploads', $imageName);

            $data->darkLogo = $imageName;
        }

        if ($request->faveicon) {
            $imageName = time() . '_faveicon' . $request->faveicon->getClientOriginalExtension();

            $request->faveicon->move('frontend/assets/uploads', $imageName);

            $data->faveicon = $imageName;
        }

        $data->save();

        Alert::success('Settings Updated Successfully.');
        return redirect()->route('admin_dashboard')->with('success', 'Settings Updated Successfully.');
    }

    //make_investment2
    public function make_investment2(){

        Investments::where('status', 1)->update('amount + 1000');

        return redirect()->back()->with('success', 'Done');

    }



    //make_investment
    public function make_investment($id)
    {

        $data = Investments::findorfail($id);

        if ($data->status != 1) {
            Alert::error('Investment Not Active Yet');
            return redirect()->back()->with('error', 'Investment Not Active Yet');
        } else {

            if ($data->day_num !== $data->duration) {
                $data->day_num += 1;

                $data->daily_income += $data->daily_percent;

                $balance = User::findorfail($data->investor);

                $balance->balance += $data->daily_percent;

                $balance->save();
                $data->save();

                Alert::success('Investment Updated Successfully');
                return redirect()->back()->with('success', 'Investment Updated Successfully');
            } else {
                $data->status = 2;

                $data->save();
                Alert::error('Investment Duration Completed');
                return redirect()->back()->with('error', 'Investment Duration Completed');
            }
        }
    }


    //active_investments
    public function active_investments()
    {
        $data = Investments::where('status', 1)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = Investments::where('status', 1)->orderBy('created_at', 'desc')->count();

        return view('backend.investments.active_investments', compact('data', 'invest_num'));
    }

    //completed_investments
    public function completed_investments()
    {
        $data = Investments::where('status', 2)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = Investments::where('status', 2)->orderBy('created_at', 'desc')->count();

        return view('backend.investments.completed_investments', compact('data', 'invest_num'));
    }

    //pending_investments
    public function pending_investments()
    {
        $data = Investments::where('status', 0)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = Investments::where('status', 0)->orderBy('created_at', 'desc')->count();

        return view('backend.investments.pending_investments', compact('data', 'invest_num'));
    }

    //pending_withdrawals
    public function pending_withdrawals()
    {

        $data = withdrawal::where('status', 0)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = withdrawal::where('status', 0)->orderBy('created_at', 'desc')->count();

        return view('backend.withdrawals.pending_withdrawals', compact('data', 'invest_num'));
    }

    //completed_withdrawals
    public function completed_withdrawals()
    {

        $data = withdrawal::where('status', 1)->orderBy('created_at', 'desc')->paginate(30);

        $invest_num = withdrawal::where('status', 1)->orderBy('created_at', 'desc')->count();

        return view('backend.withdrawals.completed_withdrawals', compact('data', 'invest_num'));
    }
}
