<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoGasto
 *
 * @property $id
 * @property $nombre
 * @property $balance
 * @property $departamento_id
 * @property $iglesia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property BalanceFinalDepartamento[] $balanceFinalDepartamentos
 * @property Departamento $departamento
 * @property Iglesia $iglesia
 * @property TipoGastosIngreso[] $tipoGastosIngresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoGasto extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'balance' => 'required',
		'departamento_id' => 'required',
		'iglesia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','balance','departamento_id','iglesia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balanceFinalDepartamentos()
    {
        return $this->hasMany('App\Models\BalanceFinalDepartamento', 'idTipoGasto', 'id');
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
    public function tipoGastosIngresos()
    {
        return $this->hasMany('App\Models\TipoGastosIngreso', 'idTipoGasto', 'id');
    }
    

}
