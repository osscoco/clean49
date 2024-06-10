<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomerMail;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
    return view('layout');
});

Route::post('/', function (Request $request) {

    $data = [
        'subject' => 'Nouvelle demande Clean49 WebSite',
        'data' => $request->all()
    ];

    Mail::to('zohaire49@outlook.com')->send(new CustomerMail($data));

    return redirect()->back()->with('success', 'Email envoyé avec succès !');

})->name('send-message');