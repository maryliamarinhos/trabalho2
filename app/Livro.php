<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    /**
     * Quais campos pode preencher em atribuição em massa
     */
    protected $fillable = ['titulo', 'autor'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'livros';

    /**
     * get Created_at para formatar na data brasileira
     *
     */
    public function getCreatedAtAttribute($value)
    {
        return (Carbon::parse($value)->format('d/m/Y H:i:s'));
    }

}
