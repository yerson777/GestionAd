<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gasto
 *
 * @property $id
 * @property $numeroFactura
 * @property $fecha
 * @property $fechaFactura
 * @property $monto
 * @property $detalle
 * @property $imagen
 * @property $departamento_id
 * @property $idCheque
 * @property $created_at
 * @property $updated_at
 *
 * @property Cheque $cheque
 * @property Departamento $departamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Gasto extends Model
{
    
    static $rules = [
		'numeroFactura' => 'required',
		'fecha' => 'required',
		'fechaFactura' => 'required',
		'monto' => 'required',
		'detalle' => 'required',
		'imagen' => 'required',
		'departamento_id' => 'required',
		'idCheque' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numeroFactura','fecha','fechaFactura','monto','detalle','imagen','departamento_id','idCheque'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cheque()
    {
        return $this->hasOne('App\Models\Cheque', 'id', 'idCheque');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamento_id');
    }
    

}
