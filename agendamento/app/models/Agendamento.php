<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamento';
    protected $fillable = [
        'Id',
        'IdSala',
        'EmailRequisitante',
        'DataHoraInicio',
        'DataHoraFim',
        'Situacao',
        'Descricao'
    ];

    protected $atendimento = [
        'DataHoraInicio' => 'Timestamp',
        'DataHoraFim' => 'Timestamp'
    ];

    public $timestamps = false;
}