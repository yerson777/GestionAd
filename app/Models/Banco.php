<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Banco
 *
 * @property $id
 * @property $balance
 * @property $fecha
 * @property $url
 * @property $tipo
 * @property $registro_id
 * @property $cheque_cuenta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property ChequeCuenta $chequeCuenta
 * @property Registro $registro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Banco extends Model
{
    
    static $rules = [
		'balance' => 'required',
		'fecha' => 'required',
		'url' => 'required',
		'tipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['balance','fecha','url','tipo','registro_id','cheque_cuenta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chequeCuenta()
    {
        return $this->hasOne('App\Models\ChequeCuenta', 'id', 'cheque_cuenta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function registro()
    {
        return $this->hasOne('App\Models\Registro', 'id', 'registro_id');
    }
    

}
