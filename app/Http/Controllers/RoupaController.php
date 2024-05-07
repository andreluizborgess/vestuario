<?php

namespace App\Http\Controllers;

use App\Http\Requests\Roupas;
use App\Models\Roupa;
use Illuminate\Http\Request;

class RoupaController extends Controller
{
    public function cadastroRoupas(Roupas $request)
    {


        $roupas = Roupa::create([


            'tecido' => $request->tecido,
            'tamanho' => $request->tamanho,
            'cor' => $request->cor,
            'categoria' => $request->categoria,
            'fabricação' => $request->fabricação,
            'estação' => $request->estação,
            'descrição' => $request->descrição,
        ]);
        return response()->json([
            "sucess" => true,
            "message" => "roupa cadastrada com sucesso",
            "data" => $roupas

        ], 200);
    }

    public function pesquisaCategoria(Request $request)
    {
        $roupas = Roupa::where('nome', 'like', '%' . $request->nome . '%')->get();
        if (count($roupas) > 0) {
            return response()->json([
                'status' => true,
                'data' => $roupas
            ]);
        }
    }
}
