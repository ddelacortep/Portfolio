<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/habilidades', function () {
    return view('habilidades');
})->name('habilidades');

Route::get('/experiencia', function () {
    return view('experiencia');
})->name('experiencia');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/submit-form', function (\Illuminate\Http\Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    try {
        Mail::to('ddelacortep@gmail.com')->send(
            new ContactFormMail(
                $validated['name'],
                $validated['email'],
                $validated['message']
            )
        );

        return redirect()->route('contacto')->with('success', '¡Mensaje enviado correctamente!');
    } catch (\Exception $e) {
        return redirect()->route('contacto')->with('error', 'Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.');
    }
})->name('submitForm');   