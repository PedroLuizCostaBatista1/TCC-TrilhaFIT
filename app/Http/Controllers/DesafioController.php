<?php
    namespace App\Http\Controllers;

    use Carbon\Carbon;

    class DesafioController extends Controller {
        public function index() {
            $proximosDesafios = Carbon::now()->next(Carbon::SUNDAY)->startOfDay();
            $tempoMilisegundos = $proximosDesafios->timestamp * 1000;

            return view('dashboard.desafios', compact('tempoMilisegundos'));
        }
    }
?>