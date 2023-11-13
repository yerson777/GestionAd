<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingreso
 *
 * @property $id
 * @property $numero_de
 * @property $url
 * @property $imagen
 * @property $fecha
 * @property $balance
 * @property $idRegistro
 * @property $idMiembro
 * @property $idTipoIngresoFijo
 * @property $idTipoIngresoTemporal
 * @property $token
 * @property $created_at
 * @property $updated_at
 *
 * @property IngresoBaseDepartamento[] $ingresoBaseDepartamentos
 * @property Miembro $miembro
 * @property Registro $registro
 * @property TipoIngreso $tipoIngreso
 * @property TipoIngreso $tipoIngreso
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ingreso extends Model
{
    
    static $rules = [
		'numero_de' => 'required',
		'url' => 'required',
		'imagen' => 'required',
		'fecha' => 'required',
		'balance' => 'required',
		'idRegistro' => 'required',
		'idMiembro' => 'required',
		'token' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_de','url','imagen','fecha','balance','idRegistro','idMiembro','idTipoIngresoFijo','idTipoIngresoTemporal','token'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresoBaseDepartamentos()
    {
        return $this->hasMany('App\Models\IngresoBaseDepartamento', 'idIngresos', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function miembro()
    {
        return $this->hasOne('App\Models\Miembro', 'id', 'idMiembro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function registro()
    {
        return $this->hasOne('App\Models\Registro', 'id', 'idRegistro');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoIngreso()
    {
        return $this->hasOne('App\Models\TipoIngreso', 'id', 'idTipoIngresoFijo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    // public function tipoIngreso()
    // {
    //     return $this->hasOne('App\Models\TipoIngreso', 'id', 'idTipoIngresoTemporal');
    // }
    

}
