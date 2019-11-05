<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sala;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    private $model;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Agendamento $agendamento)
    {
        $this->model = $agendamento;
    }


    public function getAll()
    {
        return "getAll";
    }

    public function get($id)
    {
        return "get " . $id;
    }

    public function save(Request $request)
    {
        dd($request->all());
    }

    public function update($id, Request $request)
    {
        dd($id, $request->all());
    }

    public function cancelar($id)
    {
        return "cancelar " . $id;
    }

    public function ativar($id)
    {
        return "ativar " . $id;
    }
    //
}
