<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BalanceFinalDepartamento
 *
 * @property $id
 * @property $fecha
 * @property $idTipoGasto
 * @property $montoGasto
 * @property $idTipoIngreso
 * @property $montoIngreso
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoGasto $tipoGasto
 * @property TipoIngreso $tipoIngreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BalanceFinalDepartamento extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'idTipoGasto' => 'required',
		'montoGasto' => 'required',
		'idTipoIngreso' => 'required',
		'montoIngreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','idTipoGasto','montoGasto','idTipoIngreso','montoIngreso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoGasto()
    {
        return $this->hasOne('App\Models\TipoGasto', 'id', 'idTipoGasto');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoIngreso()
    {
        return $this->hasOne('App\Models\TipoIngreso', 'id', 'idTipoIngreso');
    }
    

}
