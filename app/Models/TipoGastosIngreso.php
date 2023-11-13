<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoGastosIngreso
 *
 * @property $id
 * @property $idTipoGasto
 * @property $idTipoIngreso
 * @property $created_at
 * @property $updated_at
 *
 * @property TipoGasto $tipoGasto
 * @property TipoIngreso $tipoIngreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoGastosIngreso extends Model
{
    
    static $rules = [
		'idTipoGasto' => 'required',
		'idTipoIngreso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTipoGasto','idTipoIngreso'];


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
