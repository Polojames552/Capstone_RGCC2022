<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DocrequestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return Redirect::to('login');
});

// Route::get('/', function () {
//     return view('auth.login');
// })->name('auth.login');

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });
   Route::get('/sampledash', function () {
         return view('sampledash');
     });
Route::middleware('auth','isAdmin')->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });
    Route::get('dashboard',[UserController::class ,'user_show']);

    Route::get('/Adduser', function () {
        return view('Adduser');
    });
    Route::get('/Transaction', function () {
        return view('Transaction');
    });

    Route::get('/NewRequest', function () {
        return view('NewRequest');
    });

    Route::get('/Unclaimed', function () {
        return view('Unclaimed');
    });

    // Route::get('/Claimed', function () {
    //     return view('Claimed');
    // });
    Route::get('NewRequest',[DocrequestController::class ,'new_req']);
    Route::get('Claimed',[DocrequestController::class ,'claimed']);
    Route::get('Unclaimed',[DocrequestController::class ,'unclaimed']);
 
    Route::get('sms',[DocrequestController::class ,'sms_send']);

 

});

//  Route::get('/dashboard', function () {
//      return view('dashboard');
//  })->middleware(['auth','isAdmin'])->name('dashboard');

   Route::middleware(['auth'])->group(function(){
 //delete
    //  Route::delete('request-delete/{id}', [DocrequestController::class ,'destroy']);
    Route::get('delete/{id}', [DocrequestController::class ,'destroy']);
    //  Route::get('/UserDash', function () {
    //    return view('UserDash');
    // });
    Route::get('UserDash',[UserController::class ,'user_profile']);

    Route::get('/UserReq', function () {
        return view('UserReq');
     });

     // Request Data
     Route::post('docu_request',[DocrequestController::class ,'store']);

    // Request Data
     Route::post('EditStudent/{id}',[UserController::class ,'update_student'])->name('EditStudent');
     Route::post('SendReady/{id}',[UserController::class ,'send_ready'])->name('SendReady');
     Route::post('claim/{id}',[UserController::class ,'claimed'])->name('claim');

   
  });



 
require __DIR__.'/auth.php';
