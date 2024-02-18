<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\investments;
use App\Models\User;
use App\Models\withdrawal;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    ////Redirect Logged-in user function
    public function __construct()
    {
        $this->middleware('guest')->only(['login']);
    }
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function login()
    {
        return view('frontend.login');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login_user(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) :
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        $userType = Auth::user()->user_type;

        if ($userType === '2ru') {

            $users = User::where('user_type', 0)->count();

            $admins = User::where('user_type', '2ru')->count();

            $investment = investments::all()->count();

            $pending_investment = Investments::where('status', 0)->count();

            $done_investment = Investments::where('status', 1)->count();

            $withdrawal = withdrawal::all()->count();

            $pending_withdrawal = withdrawal::where('status', 0)->count();

            $done_withdrawal = withdrawal::where('status', 1)->count();

            return view('backend.home', compact('users', 'admins', 'investment', 'pending_investment', 'done_investment', 'withdrawal', 'pending_withdrawal', 'done_withdrawal'));
        }

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
