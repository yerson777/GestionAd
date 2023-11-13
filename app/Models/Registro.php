<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $numeros
 * @property $control_de_numeros
 * @property $filas
 * @property $sabado
 * @property $balance
 * @property $token
 * @property $created_at
 * @property $updated_at
 *
 * @property Banco[] $bancos
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'numeros' => 'required',
		'control_de_numeros' => 'required',
		'filas' => 'required',
		'sabado' => 'required',
		'balance' => 'required',
		'token' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numeros','control_de_numeros','filas','sabado','balance','token'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bancos()
    {
        return $this->hasMany('App\Models\Banco', 'registro_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'idRegistro', 'id');
    }
    

}
