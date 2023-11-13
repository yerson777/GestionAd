<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoIngreso
 *
 * @property $id
 * @property $nombre
 * @property $balance
 * @property $iglesia_id
 * @property $departamento_id
 * @property $created_at
 * @property $updated_at
 *
 * @property BalanceFinalDepartamento[] $balanceFinalDepartamentos
 * @property Departamento $departamento
 * @property Iglesia $iglesia
 * @property Ingreso[] $ingresos
 * @property Ingreso[] $ingresos
 * @property OtrosIngreso[] $otrosIngresos
 * @property TipoGastosIngreso[] $tipoGastosIngresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoIngreso extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'balance' => 'required',
		'iglesia_id' => 'required',
		'departamento_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','balance','iglesia_id','departamento_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balanceFinalDepartamentos()
    {
        return $this->hasMany('App\Models\BalanceFinalDepartamento', 'idTipoIngreso', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'departamento_id');
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
    public function ingresos()
    {
        return $this->hasMany('App\Models\Ingreso', 'idTipoIngresoFijo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresosf()
    {
        return $this->hasMany('App\Models\Ingreso', 'idTipoIngresoTemporal', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function otrosIngresos()
    {
        return $this->hasMany('App\Models\OtrosIngreso', 'idTipoIngreso', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoGastosIngresos()
    {
        return $this->hasMany('App\Models\TipoGastosIngreso', 'idTipoIngreso', 'id');
    }
    

}
