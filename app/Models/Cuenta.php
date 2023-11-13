<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cuenta
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $balance
 * @property $created_at
 * @property $updated_at
 *
 * @property Cheque[] $cheques
 * @property ChequeCuenta[] $chequeCuentas
 * @property OtrosIngreso[] $otrosIngresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cuenta extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'nombre' => 'required',
		'balance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','nombre','balance'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cheques()
    {
        return $this->hasMany('App\Models\Cheque', 'idCuenta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chequeCuentas()
    {
        return $this->hasMany('App\Models\ChequeCuenta', 'idCuenta', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function otrosIngresos()
    {
        return $this->hasMany('App\Models\OtrosIngreso', 'cuenta_id', 'id');
    }
    

}
