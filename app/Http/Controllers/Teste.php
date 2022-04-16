<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
    public function index() 
    {
        // echo 'Hello World!!!';
        // dd('Hello World!!!');
        $nome = 'Pedro';
        $teste = [
            'nome' => 'nome do teste',
            'idade' => '30'
        ];
        $teste2 = ['teste21', 'teste22', 'teste23'];
        echo json_encode($teste);
        return response(['nome' => $nome, 'teste' => $teste, 'teste2' => $teste2]);
        // return view('teste', ['nome' => $nome]);
    }
}
