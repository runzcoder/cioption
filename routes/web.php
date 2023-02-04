<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();


////// ADMIN ROUTES
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

Route::get('/admin/currency', [App\Http\Controllers\AdminController::class, 'currency'])->name('currency');
Route::post('/admin/add_currency', [App\Http\Controllers\AdminController::class, 'addCurrency'])->name('admin.add_currency');
Route::post('/admin/delete_currency/{id}', [App\Http\Controllers\AdminController::class, 'deleteCurrency'])->name('admin.delete_currency');

Route::get('/admin/payoption', [App\Http\Controllers\AdminController::class, 'payOption'])->name('payoption');
Route::post('/admin/add_payoption', [App\Http\Controllers\AdminController::class, 'addPayOption'])->name('admin.add_payoption');
Route::post('/admin/delete_payoption/{id}', [App\Http\Controllers\AdminController::class, 'deletePayOption'])->name('admin.delete_payoption');

Route::get('/admin/investment_type', [App\Http\Controllers\AdminController::class, 'investmentType'])->name('admin.investment_type');
Route::post('/admin/add_investment_type', [App\Http\Controllers\AdminController::class, 'addInvestmentType'])->name('admin.add_investment_type');
Route::post('/admin/delete_investment_type/{id}', [App\Http\Controllers\AdminController::class, 'disableInvestmentType'])->name('admin.delete_investment_type');

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');


Route::get('/admin/deposits', [App\Http\Controllers\AdminController::class, 'deposits'])->name('admin.deposits');
Route::get('/admin/view_deposit/{id}', [App\Http\Controllers\AdminController::class, 'viewDeposits'])->name('admin.view_deposit');
Route::get('/admin/approve_deposit/{id}', [App\Http\Controllers\AdminController::class, 'approveDeposit'])->name('admin.approve_deposit');
Route::get('/admin/decline_deposit/{id}', [App\Http\Controllers\AdminController::class, 'declineDeposit'])->name('admin.decline_deposit');


Route::get('/admin/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin.settings');
Route::post('/admin/add_settings', [App\Http\Controllers\AdminController::class, 'createSetting'])->name('admin.add_settings');
Route::post('/admin/edit_settings', [App\Http\Controllers\AdminController::class, 'editSetting'])->name('admin.edit_settings');
Route::post('/admin/delete_settings', [App\Http\Controllers\AdminController::class, 'deleteSetting'])->name('admin.delete_settings');



///// USERS ROUTES
Route::get('/dashboard/deposit_view', [App\Http\Controllers\DashboardController::class, 'depositView'])->name('dashboard.deposit_view');
Route::post('/dashboard/submit_deposit', [App\Http\Controllers\DashboardController::class, 'submitDeposit'])->name('dashboard.submit_deposit');
Route::get('/dashboard/deposit_confirm/{id}/{only_data?}', [App\Http\Controllers\DashboardController::class, 'depositConfirm'])->name('dashboard.deposit_confirm');
Route::post('/dashboard/upload_proof', [App\Http\Controllers\DashboardController::class, 'uploadProof'])->name('dashboard.upload_proof');
Route::get('/dashboard/cancel_deposit/{id}', [App\Http\Controllers\DashboardController::class, 'cancelDeposit'])->name('dashboard.cancel_deposit');

Route::get('/dashboard/create_investment/{id?}', [App\Http\Controllers\DashboardController::class, 'createInvestment'])->name('dashboard.create_investment');
Route::post('/dashboard/save_investment', [App\Http\Controllers\DashboardController::class, 'saveInvestment'])->name('dashboard.save_investment');
Route::post('/dashboard/cancel_investment/', [App\Http\Controllers\DashboardController::class, 'cancelInvestment'])->name('dashboard.cancel_investment');

Route::get('/dashboard/profits/', [App\Http\Controllers\DashboardController::class, 'profits'])->name('dashboard.profits');

Route::get('/dashboard/trx/', [App\Http\Controllers\DashboardController::class, 'trx'])->name('dashboard.trx');

Route::get('/dashboard/plans/', [App\Http\Controllers\DashboardController::class, 'plans'])->name('dashboard.plans');

Route::get('/dashboard/referrals/', [App\Http\Controllers\DashboardController::class, 'referrals'])->name('dashboard.referrals');
Route::get('/dashboard/referrals/claim/{id}/', [App\Http\Controllers\DashboardController::class, 'clemReward']);

Route::get('/dashboard/withdraw/', [App\Http\Controllers\DashboardController::class, 'withdraw']);

//// GENERAL ROUTES
Route::get("/get_pay_options", [App\Http\Controllers\DashboardController::class, 'getPayOptions'])->name('dashboard.get_pay_options');

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get("/faq", [App\Http\Controllers\PagesController::class, 'faq'])->name('faq');
Route::get("/about", [App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get("/contact", [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
