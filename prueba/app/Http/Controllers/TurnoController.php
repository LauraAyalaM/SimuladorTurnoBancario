<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnoController extends Controller
{
    private $tipos = [
        'caja' => 'C',
        'servicio' => 'S',
        'creditos' => 'CR'
    ];

    public function index(Request $request)
    {
        if (!$request->session()->has('filas')) {
            $request->session()->put('filas', [
                'caja' => [],
                'servicio' => [],
                'creditos' => []
            ]);
        }

        return view('turno', [
            'filas' => session('filas')
        ]);
    }

    public function generar(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'tipo' => 'required|in:caja,servicio,creditos'
        ]);

        $filas = session('filas');
        $tipo = $request->tipo;

        $prefijo = $this->tipos[$tipo];
        $numero = count($filas[$tipo]) + 1;
        $turno = $prefijo . str_pad($numero, 3, '0', STR_PAD_LEFT);

        $personasAntes = count($filas[$tipo]);

        $filas[$tipo][] = [
            'nombre' => $request->nombre,
            'turno' => $turno
        ];

        session(['filas' => $filas]);

        return view('resultado', [
            'nombre' => $request->nombre,
            'tipo' => ucfirst($tipo),
            'turno' => $turno,
            'personasAntes' => $personasAntes
        ]);
    }

    public function atender(Request $request, $tipo)
    {
        $filas = session('filas');

        if (!empty($filas[$tipo])) {
            array_shift($filas[$tipo]);
            session(['filas' => $filas]);
        }

        return redirect()->route('turno.index');
    }

    public function reset(Request $request)
    {
        $request->session()->forget('filas');
        return redirect()->route('turno.index');
    }
}