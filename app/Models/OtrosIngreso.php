<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OtrosIngreso
 *
 * @property $id
 * @property $fecha
 * @property $comprobante
 * @property $monto
 * @property $idTipoIngreso
 * @property $cuenta_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cuenta $cuenta
 * @property TipoIngreso $tipoIngreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OtrosIngreso extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'comprobante' => 'required',
		'monto' => 'required',
		'idTipoIngreso' => 'required',
		'cuenta_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','comprobante','monto','idTipoIngreso','cuenta_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'cuenta_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoIngreso()
    {
        return $this->hasOne('App\Models\TipoIngreso', 'id', 'idTipoIngreso');
    }
    

}
