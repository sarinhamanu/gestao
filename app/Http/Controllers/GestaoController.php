<?php

namespace App\Http\Controllers;

use App\Http\Requests\GestaoFormRequest;
use App\Models\Gestao;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class GestaoController extends Controller
{
public function Gestao (GestaoFormRequest  $request){
    $Gestao= Gestao::create([
        'titulo'=> $request->titulo,
        'descricao'=>$request->descricao,
        'data_inicio'=>$request->data_inicio,
        'data_termino'=>$request->data_terminio,
        'valor_projeto'=>$request->valor_projeto,
        'status'=>$request->status,
    ]);
    return response()->json([
    "success"=> true,
    "message"=> "Registro bem-sucedido",
    "data"=>$Gestao,
    ],200);
}
}
