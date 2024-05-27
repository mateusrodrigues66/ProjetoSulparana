<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducaoController extends Controller
{
    public function opcao1()
    {
        return view('producao.opcao1');
    }

    public function opcao2()
    {
        return view('producao.opcao2');
    }

    public function opcao3()
    {
        return view('producao.opcao3');
    }
}
?>