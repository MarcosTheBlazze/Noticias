<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Noticias1 extends Model
{

    use HasFactory;

    const STATUS_ATIVO = "A";
    const STATUS_INATIVO = "I";
    const STATUS= [
        Noticias1::STATUS_ATIVO => "Ativo",
        Noticias1::STATUS_INATIVO => "Inativo"
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'noticias';
    protected $dates = ['created_at', 'update_at', 'data_publicacao'];


    public function gatStatusFormatadoAttribute(){
       return Noticias1::STATUS[$this->status];
    }

    public function setDataPublicacaoAttribute($value){
        $this->attributes['data_publicacao'] = Carbon::createFromFormat("d/m/Y", $value) 
        ->format("Y-m-d");
    }
}

