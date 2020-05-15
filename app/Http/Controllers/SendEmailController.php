<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class SendEmailController extends Controller
{
    function index()
    {
     return view('comprar');
    }

function send(Request $request)
{
 $this->validate($request, [
    'nombre'     =>  'required',
    'apellido' => 'required',
    'email'  =>  'required|email',
    'mensaje' =>  'required',
    'ubicacion' => 'required',
    'empresa' => 'required',
    'cantidad' => 'required'
 ]);

    $data = array(
        'nombre'      =>  $request->nombre,
        'mensaje'   =>   $request->mensaje,
        'email'  =>   $request->email,
        'apellido' =>  $request->apellido,
        'ubicacion' => $request->ubicacion,
        'empresa' => $request->empresa,
        'cantidad' => $request->cantidad
    );

 Mail::to('ventas@termometrosdigitales.com.ar')->send(new SendMail($data));
 return back()->with('success', '¡Gracias por contactarnos!');
}
}
?>