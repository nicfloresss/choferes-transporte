<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index()
    {
        $totalChoferes = DB::table('chofer')->count();
        $totalCamiones = DB::table('camion')->count();
        $totalPasajeros = DB::table('pasajero')->count();
        $totalRutas = DB::table('ruta')->count();

        $rutaMasBoletos = DB::table('boleto as b')
            ->join('ruta as r', 'b.numero_ruta', '=', 'r.numero_ruta')
            ->select(
                'r.numero_ruta',
                'r.origen_ruta',
                'r.destino_ruta',
                DB::raw('COUNT(b.codigo_pnr) AS total_boletos')
            )
            ->groupBy(
                'r.numero_ruta',
                'r.origen_ruta',
                'r.destino_ruta'
            )
            ->orderByDesc('total_boletos')
            ->first();

        return view('welcome', compact(
            'totalChoferes',
            'totalCamiones',
            'totalPasajeros',
            'totalRutas',
            'rutaMasBoletos'
        ));
    }
}
