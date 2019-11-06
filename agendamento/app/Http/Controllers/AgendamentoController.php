<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $agendamentos = $this->model->all();
        response()->json($agendamentos);
    }

    public function get($id)
    {
        $agendamento = $this->model->find($id);
        response()->json($agendamento);
    }

    public function save(Request $request)
    {
        $agendamento = $this->model->create($request->all());
        return response()->json($agendamento);
    }

    public function update($id, Request $request)
    {
        $agendamento = $this->model->find($id)
            ->update($request->all());

            return response()->json($agendamento);
    }

    public function cancelar($id)
    {
        $agendamento = $this->model->find($id);
        $agendamento->Situacao = "Cancelada";
        $agendamento->update($request->all());

        return response()->json($agendamento);
    }
    //
}
