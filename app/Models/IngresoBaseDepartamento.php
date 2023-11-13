<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class IngresoBaseDepartamento
 *
 * @property $id
 * @property $fecha
 * @property $monto
 * @property $idIngresos
 * @property $created_at
 * @property $updated_at
 *
 * @property Ingreso $ingreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class IngresoBaseDepartamento extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'monto' => 'required',
		'idIngresos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','monto','idIngresos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ingreso()
    {
        return $this->hasOne('App\Models\Ingreso', 'id', 'idIngresos');
    }
    

}
