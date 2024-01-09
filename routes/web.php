<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
 
    return "Cache cleared successfully";
 });
 Route::get('/', function () {
    return redirect(route('login'));
});
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', function () {
    // Your route logic
})->middleware('restrict.register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/clients', [App\Http\Controllers\HomeController::class, 'clientsview'])->name('admin/clients');
Route::post('/storeclients', [App\Http\Controllers\HomeController::class, 'storeclients'])->name('storeclients');
Route::get('/admin/employees', [App\Http\Controllers\HomeController::class, 'employeessview'])->name('admin/employees');
Route::post('/storeemployee', [App\Http\Controllers\HomeController::class, 'storeemployee'])->name('storeemployee');
Route::delete('/announcements/{id}', [App\Http\Controllers\HomeController::class,'deleteAnnouncement'])->name('announcements.delete');
Route::delete('/announcementsd/{id}', [App\Http\Controllers\HomeController::class,'deleteAnnouncementd'])->name('announcementsd.delete');

Route::delete('/clientdel/{id}', [App\Http\Controllers\HomeController::class,'clientdel'])->name('clientdel.delete');

Route::post('/upload-policy',[App\Http\Controllers\HomeController::class, 'uploadPolicy'])->name('upload-policy');
Route::get('/download-policy-file/{id}/{fileName}',[App\Http\Controllers\HomeController::class, 'downloadPolicyFile'])->name('download-policy-file');
Route::get('/download-ope-file/{id}/{employeeName}',[App\Http\Controllers\HomeController::class, 'downloadOpeFile'])->name('download-ope-file');

Route::post('/assignClient', [App\Http\Controllers\HomeController::class,'assignClient'])->name('assignClient');

Route::get('/employee/clients', [App\Http\Controllers\HomeController::class, 'userclientsview'])->name('employee/clients');

Route::get('/admin/announcement', [App\Http\Controllers\HomeController::class, 'adminannouncement'])->name('admin/announcement');
Route::get('/admin/policymanual', [App\Http\Controllers\HomeController::class, 'policymanual'])->name('admin/policymanual');

Route::get('/admin/dsc', [App\Http\Controllers\HomeController::class, 'admindse'])->name('admin/dsc');
Route::post('/storedse', [App\Http\Controllers\HomeController::class,'storedse'])->name('storedse');
Route::post('/storeannouncementofclients', [App\Http\Controllers\HomeController::class,'storeannouncementofclients'])->name('storeannouncementofclients');

Route::post('/storeannouncementofemployees', [App\Http\Controllers\HomeController::class,'storeannouncementofemployees'])->name('storeannouncementofemployees');

Route::get('/employee/timesheet', [App\Http\Controllers\HomeController::class, 'emptimesheet'])->name('employee/timesheet');

Route::get('/admin/timesheet', [App\Http\Controllers\HomeController::class, 'admintimesheet'])->name('admin/timesheet');

Route::get('/admin/outofexpense', [App\Http\Controllers\HomeController::class, 'adminoutofexpense'])->name('admin/outofexpense');
Route::post('/updateoutofexpense', [App\Http\Controllers\HomeController::class,'updateoutofexpense'])->name('updateoutofexpense');
Route::post('/empupdateoutofexpense', [App\Http\Controllers\HomeController::class,'empupdateoutofexpense'])->name('empupdateoutofexpense');

Route::get('/employee/profile', [App\Http\Controllers\HomeController::class, 'empprofile'])->name('employee/profile');
Route::post('/updatesingleemployeeprofile', [App\Http\Controllers\HomeController::class, 'updatesingleemployeeprofile'])->name('updatesingleemployeeprofile');
Route::post('/updateemployeeprofile', [App\Http\Controllers\HomeController::class, 'updateemployeeprofile'])->name('updateemployeeprofile');
Route::post('/updateclientprofiles', [App\Http\Controllers\HomeController::class, 'updateclientprofiles'])->name('updateclientprofiles');

Route::post('/updatedsc', [App\Http\Controllers\HomeController::class, 'updatedsc'])->name('updatedsc');


Route::get('/employee/client', [App\Http\Controllers\HomeController::class, 'empclient'])->name('employee/client');

Route::post('/updateclientprofile', [App\Http\Controllers\HomeController::class, 'updateclientprofile'])->name('updateclientprofile');

Route::post('/updatetimesheet', [App\Http\Controllers\HomeController::class, 'storeTimeSheet'])->name('updatetimesheet');
Route::post('/empupdatetimesheet', [App\Http\Controllers\HomeController::class, 'empupdatetimesheet'])->name('empupdatetimesheet');

Route::get('/employee/cal', [App\Http\Controllers\HomeController::class, 'empcal'])->name('employee/cal');

Route::get('/employee/issue', [App\Http\Controllers\HomeController::class, 'empissue'])->name('employee/issue');
Route::get('/employee/outofexpense', [App\Http\Controllers\HomeController::class, 'empoutofexpense'])->name('employee/outofexpense');
Route::post('/storeoutofexpense', [App\Http\Controllers\HomeController::class,'storeoutofexpense'])->name('storeoutofexpense');

Route::post('/issueClient', [App\Http\Controllers\HomeController::class, 'issueClient'])->name('issueClient');

Route::get('/admin/issue', [App\Http\Controllers\HomeController::class, 'adminissue'])->name('admin/issue');
Route::get('/admin/calendar', [App\Http\Controllers\HomeController::class, 'admincalendar'])->name('admin/calendar');
Route::get('/user/issue-tracker', [App\Http\Controllers\HomeController::class, 'userissue'])->name('user/issue-tracker');

Route::get('/user/calendar', [App\Http\Controllers\HomeController::class, 'usercal'])->name('user/calendar');
Route::get('/fetch-events/{clientId}', [App\Http\Controllers\HomeController::class,'fetchEvents'])->name('fetch-events');



Route::get('/user/change-pass', [App\Http\Controllers\HomeController::class, 'userpassword'])->name('user/change-pass');
Route::post('/check-email-exists', [App\Http\Controllers\HomeController::class,'checkEmailExists']);
// Route::delete('/delete-user/{id}', [App\Http\Controllers\HomeController::class,'deleteUser']);
Route::delete('/delete-employee/{id}', [App\Http\Controllers\HomeController::class,'deleteemp'])->name('employee.delete');
Route::delete('/delete-client/{id}', [App\Http\Controllers\HomeController::class,'deletecli'])->name('client.delete');
Route::delete('/delete-dsc/{id}', [App\Http\Controllers\HomeController::class,'deletedsc'])->name('dsc.delete');
Route::delete('/delete-ope/{id}', [App\Http\Controllers\HomeController::class,'deleteope'])->name('ope.delete');
Route::delete('/delete-time/{id}', [App\Http\Controllers\HomeController::class,'deletetime'])->name('time.delete');
Route::post('/send-notification', [App\Http\Controllers\HomeController::class,'sendNotification'])->name('send.notification');
Route::delete('/delete-pol/{id}', [App\Http\Controllers\HomeController::class,'deletepol'])->name('pol.delete');


Route::post('/updateuserpassword', [App\Http\Controllers\HomeController::class, 'updateuserpassword'])->name('updateuserpassword');

Route::post('/eventsstore', [App\Http\Controllers\HomeController::class, 'eventsstore'])->name('eventsstore');
Route::get('events', [App\Http\Controllers\HomeController::class,'event'])->name('events.event');
