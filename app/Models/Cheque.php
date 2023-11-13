<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cheque
 *
 * @property $id
 * @property $número
 * @property $nombre
 * @property $fecha
 * @property $detalle
 * @property $balance
 * @property $tipo
 * @property $token
 * @property $idIglesia
 * @property $idCuenta
 * @property $created_at
 * @property $updated_at
 *
 * @property ChequeCuenta[] $chequeCuentas
 * @property Cuenta $cuenta
 * @property Gasto[] $gastos
 * @property Iglesia $iglesia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cheque extends Model
{
    
    static $rules = [
		'número' => 'required',
		'nombre' => 'required',
		'fecha' => 'required',
		'detalle' => 'required',
		'balance' => 'required',
		'tipo' => 'required',
		'token' => 'required',
		'idIglesia' => 'required',
		'idCuenta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['número','nombre','fecha','detalle','balance','tipo','token','idIglesia','idCuenta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chequeCuentas()
    {
        return $this->hasMany('App\Models\ChequeCuenta', 'idCheque', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'idCuenta');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastos()
    {
        return $this->hasMany('App\Models\Gasto', 'idCheque', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iglesia()
    {
        return $this->hasOne('App\Models\Iglesia', 'id', 'idIglesia');
    }
    

}
