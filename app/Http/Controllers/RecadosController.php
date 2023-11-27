<?php

namespace App\Http\Controllers;

use App\Models\Recado;
use Illuminate\Http\Request;
use Exception;

class RecadosController extends Controller {
    public function index(Request $request) {
        $recados = Recado::query()->get();

        return view("recados", [
            "recados" => $recados
        ]);
    }

    public function create(Request $request) {
        // Validando os dados recebidos
        $validated = $request->validate([
            'nome' => 'required|max:150',
            'mensagem' => 'required'
        ]);

        $recado = new Recado([
            "nome" => $request->nome,
            "mensagem" => $request->mensagem,
            "data" => date("d/m/Y")
        ]);
        $recado->save();

        return true;
    }
}
