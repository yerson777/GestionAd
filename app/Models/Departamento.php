<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Departamento
 *
 * @property $id
 * @property $nombre
 * @property $tipo_presupuesto
 * @property $presupuesto
 * @property $balance
 * @property $tipo
 * @property $iglesia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Gasto[] $gastos
 * @property Iglesia $iglesia
 * @property TipoGasto[] $tipoGastos
 * @property TipoIngreso[] $tipoIngresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Departamento extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'tipo_presupuesto' => 'required',
		'presupuesto' => 'required',
		'balance' => 'required',
		'tipo' => 'required',
		'iglesia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','tipo_presupuesto','presupuesto','balance','tipo','iglesia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gastos()
    {
        return $this->hasMany('App\Models\Gasto', 'departamento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iglesia()
    {
        return $this->hasOne('App\Models\Iglesia', 'id', 'iglesia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoGastos()
    {
        return $this->hasMany('App\Models\TipoGasto', 'departamento_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoIngresos()
    {
        return $this->hasMany('App\Models\TipoIngreso', 'departamento_id', 'id');
    }
    

}
