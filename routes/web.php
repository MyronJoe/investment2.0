<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

//frontend routes
Route::get('/stock', [HomeController::class, 'stock'])->name('stock');

Route::get('/cryptocurrency', [HomeController::class, 'cryptocurrency'])->name('cryptocurrency');

Route::get('/forex', [HomeController::class, 'forex'])->name('forex');

Route::get('/realestate', [HomeController::class, 'realestate'])->name('realestate');

Route::get('/about', [HomeController::class, 'About'])->name('about');

Route::get('/all-plans', [HomeController::class, 'All_plans'])->name('all-plans');

Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');

Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');

Route::post('/message', [HomeController::class, 'message'])->name('message');

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'Register'])->name('register');

Route::get('/register/{id}', [RegisterController::class, 'Register_refferal'])->name('register_refferal');

Route::post('/adduser', [RegisterController::class, 'AddUser'])->name('addUser');

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/user_login', [LoginController::class, 'login_user'])->name('login_user');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::controller(HomeController::class)->group(function () {

        Route::get('/home', 'Home')->name('home');

        Route::get('/dashboard', 'UserDashboard')->name('user_dashboard');

        Route::get('/investment-plans', 'investment_plans')->name('investment-plans');

        Route::get('/user-support', 'user_support')->name('user-support');

        Route::get('/deposit-history', 'deposit_history')->name('deposit-history');

        Route::get('/withdrawal-history', 'withdrawal_history')->name('withdrawal-history');

        Route::get('/pending-history', 'pending_history')->name('pending-history');

        Route::get('/confirmed-history', 'confirmed_history')->name('confirmed-history');

        Route::get('/active-history', 'active_history')->name('active-history');

        Route::get('/fund-account', 'fund_account')->name('fund-account');

        Route::get('/invest-now/{id}', 'Invest_now')->name('invest-now');

        Route::post('/invest', 'Invest')->name('invest');

        Route::get('/wallet-address', 'wallet_address')->name('wallet-address');

        Route::post('/wallet-confirm', 'wallet_confirm')->name('wallet-confirm');

        Route::post('/confirm', 'confirm')->name('confirm');

        Route::get('/prove', 'Prove')->name('prove');

        Route::post('/prove-confirm', 'Prove_confirm')->name('prove-confirm');

        Route::get('/investments', 'Investments')->name('investments');

        Route::get('/pending/{id}', 'pending')->name('pending');

        Route::get('/withdraw', 'withdraw')->name('withdraw');

        Route::post('/withdrawal', 'withdrawal')->name('withdrawal');

        Route::get('/withdrawals', 'withdrawals')->name('withdrawals');

        Route::get('/refferals', [HomeController::class, 'Refferals'])->name('refferals');
    });


    Route::controller(RegisterController::class)->group(function () {

        Route::get('/edit_user/{id}', 'Edit_user')->name('edit_user');

        Route::post('/update_user/{id}', 'Update_User')->name('update_user');

        Route::get('/change_password/{id}', 'change_password')->name('change_password');

        Route::post('/update_pass/{id}', 'update_pass')->name('update_pass');
    });
});


Route::middleware(['auth:sanctum', 'checkadmin',  config('jetstream.auth_session')])->group(function () {
    //================ADMIN USERS ALL ROUTES============================================

    Route::controller(AdminController::class)->group(function () {

        Route::get('/profile', 'Profile')->name('admin_profile');

        Route::get('/admin-dashboard', 'AdminDashboard')->name('admin_dashboard');

        Route::get('/admin_users', 'Admin_users')->name('admin_users');

        Route::get('/create_admin', 'create_admin')->name('create_admin');

        Route::post('/make_admin', 'Make_admin')->name('make_admin');

        Route::get('/delete_admin/{id}', 'delete_admin')->name('delete_admin');

        Route::get('/delete_user/{id}', 'delete_user')->name('delete_user');

        Route::get('/create-plan', 'Create_Plan')->name('create_plan');

        Route::post('/make_plan', 'Make_plan')->name('make_plan');

        Route::get('/all_plans', 'all_plans')->name('all_plans');

        Route::get('/edit_plan/{id}', 'edit_plan')->name('edit_plan');

        Route::get('/credit_user/{id}', 'credit_user')->name('credit_user');

        Route::post('/update_amount/{id}', 'update_amount')->name('update_amount');

        Route::post('/update_plan/{id}', 'update_plan')->name('update_plan');

        Route::get('/delete_plan/{id}', 'delete_plan')->name('delete_plan');

        Route::get('/delete_investment/{id}', 'delete_investment')->name('delete_investment');

        Route::get('/delete_withdrawal/{id}', 'delete_withdrawal')->name('delete_withdrawal');

        Route::get('/all_users', 'all_users')->name('all_users');

        Route::get('/all_investments', 'all_investments')->name('all_investments');

        Route::get('/all_withdrawals', 'all_withdrawals')->name('all_withdrawals');

        Route::get('/view_prove/{id}', 'view_prove')->name('view_prove');

        Route::get('/users_investments/{id}', 'users_investments')->name('users_investments');

        Route::get('/users_withdrawals/{id}', 'users_withdrawals')->name('users_withdrawals');

        Route::get('/change-pending/{id}', 'change_pending')->name('change-pending');

        Route::get('/change-done/{id}', 'change_done')->name('change-done');

        Route::get('/withdraw-pending/{id}', 'withdraw_pending')->name('withdraw-pending');

        Route::get('/withdraw-done/{id}', 'withdraw_done')->name('withdraw-done');

        Route::get('/view_message/{id}', 'View_message')->name('view_message');

        Route::get('/delete-message/{id}', 'Delete_message')->name('delete-message');

        Route::get('/all_messages', 'All_messages')->name('all_messages');

        Route::get('/site_setting', 'Site_setting')->name('site_setting');

        Route::post('/update_settings/{id}', 'Update_settings')->name('update_settings');

        Route::get('/make_investment2', 'make_investment2')->name('make_investment2');

        Route::get('/make_investment/{id}', 'make_investment')->name('make_investment');

        Route::get('/address', 'address')->name('address');

        Route::post('/update_address/{id}', 'update_address')->name('update_address');

        Route::get('/pending_investments', 'pending_investments')->name('pending_investments');

        Route::get('/active_investments', 'active_investments')->name('active_investments');

        Route::get('/completed_investments', 'completed_investments')->name('completed_investments');

        Route::get('/pending_withdrawals', 'pending_withdrawals')->name('pending_withdrawals');

        Route::get('/completed_withdrawals', 'completed_withdrawals')->name('completed_withdrawals');


    });
});
