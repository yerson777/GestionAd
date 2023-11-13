<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Iglesia
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $telefono
 * @property $created_at
 * @property $updated_at
 *
 * @property BalanceIglesia[] $balanceIglesias
 * @property Cheque[] $cheques
 * @property Departamento[] $departamentos
 * @property Miembro[] $miembros
 * @property Periodo[] $periodos
 * @property TipoGasto[] $tipoGastos
 * @property TipoIngreso[] $tipoIngresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Iglesia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','telefono'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balanceIglesias()
    {
        return $this->hasMany('App\Models\BalanceIglesia', 'iglesia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cheques()
    {
        return $this->hasMany('App\Models\Cheque', 'idIglesia', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departamentos()
    {
        return $this->hasMany('App\Models\Departamento', 'iglesia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function miembros()
    {
        return $this->hasMany('App\Models\Miembro', 'iglesia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function periodos()
    {
        return $this->hasMany('App\Models\Periodo', 'iglesia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoGastos()
    {
        return $this->hasMany('App\Models\TipoGasto', 'iglesia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoIngresos()
    {
        return $this->hasMany('App\Models\TipoIngreso', 'iglesia_id', 'id');
    }
    

}
