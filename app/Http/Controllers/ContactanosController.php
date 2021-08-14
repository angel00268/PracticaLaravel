<?php

namespace App\Http\Controllers;
use App\Mail\CotactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required'
        ]);
        $correo  = new CotactanosMailable($request->all());
        Mail::to($request->correo)->send($correo);
        return redirect()->route('contactanos.index')->with('info','Mensaje enviado');
    }
}
