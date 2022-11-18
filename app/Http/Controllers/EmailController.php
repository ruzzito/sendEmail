<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index()
    {
        $testMailData = [
            'title' => 'Bienvenido! Ahora formas parte de esta experiencia DiFo.',
            'body' => 'DiFo es un software web capacitado para mostrar resultados de tus deportes favoritos ya finalizados.'
        ];

        Mail::to('oficial.bytec@gmail.com')->send(new SendMail($testMailData));

        dd('Email enviado exitosamente!');
    }
}
