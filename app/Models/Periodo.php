<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Periodo
 *
 * @property $id
 * @property $mes
 * @property $año
 * @property $fechaInicio
 * @property $fechaFin
 * @property $token
 * @property $iglesia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property BalanceIglesia[] $balanceIglesias
 * @property Iglesia $iglesia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Periodo extends Model
{
    
    static $rules = [
		'mes' => 'required',
		'año' => 'required',
		'fechaInicio' => 'required',
		'fechaFin' => 'required',
		'token' => 'required',
		'iglesia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mes','año','fechaInicio','fechaFin','token','iglesia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function balanceIglesias()
    {
        return $this->hasMany('App\Models\BalanceIglesia', 'periodos_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iglesia()
    {
        return $this->hasOne('App\Models\Iglesia', 'id', 'iglesia_id');
    }
    

}
