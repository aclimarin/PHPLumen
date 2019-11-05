<?php 

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'sala';
    protected $filable = [
        'Id',
        'Descricao'
    ];
}