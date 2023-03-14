<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nome_empresa
 * @property string $razao_social
 * @property Produto[] $produtos
 */
class Loja extends Model
{
    protected $keyType = 'integer';

    protected $fillable = ['nome_empresa', 'razao_social'];

    public function produtos()
    {
        return $this->hasMany('App\Models\Produto');
    }
}
