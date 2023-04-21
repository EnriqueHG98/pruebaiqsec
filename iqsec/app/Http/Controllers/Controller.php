<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\beneficios;
use App\Models\clientebeneficios;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
// use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\DomPDF\Facade as PDF;
use PDF;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function registraUser(Request $request)
    {
        $user = User::create([
            'email' => $request->get('correo'),
            'nombre' => $request->get('nombre'),
            'password' => Hash::make($request->get('pass'))
        ]);
        $user->push();

        return $user;
    }

    public function ActivarBeneficios($id, Request $request)
    {
        $misbeneficios = clientebeneficios::create([
            'idCliente' => Auth::user()->id,
            'idBeneficio' => $id,
        ]);
        $misbeneficios->push();
        return "exito";
    }

    public function misBeneficios(Request $request)
    {
        $data = clientebeneficios::where(['idCliente' => Auth::user()->id])->get();
        return view('mis-beneficios', ['view' => 'mis-beneficios'])->with(compact('data'));
    }

    public function generaPdf(Request $request)
    {
        $data = clientebeneficios::where(['idCliente' => Auth::user()->id])->get();
        $pdf = PDF::loadView('pdf', ['data' => $data]);
        $pdf->loadHTML('<h1>Mis Beneficios</h1>');
        return $pdf->download('beneficios.pdf');
    }

    public function desactivarBeneficios($id, Request $request)
    {
        $beneficio = clientebeneficios::where(['idCliente' => Auth::user()->id, 'idBeneficio' => $id]);
        $beneficio->delete();
        return "Eliminado";
    }
}
