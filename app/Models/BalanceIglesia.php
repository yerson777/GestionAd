<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BalanceIglesia
 *
 * @property $id
 * @property $fecha
 * @property $monto
 * @property $iglesia_id
 * @property $periodos_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Iglesia $iglesia
 * @property Periodo $periodo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BalanceIglesia extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'monto' => 'required',
		'iglesia_id' => 'required',
		'periodos_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','monto','iglesia_id','periodos_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function iglesia()
    {
        return $this->hasOne('App\Models\Iglesia', 'id', 'iglesia_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function periodo()
    {
        return $this->hasOne('App\Models\Periodo', 'id', 'periodos_id');
    }
    

}
