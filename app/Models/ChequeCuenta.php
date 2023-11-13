<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ChequeCuenta
 *
 * @property $id
 * @property $balance
 * @property $idCuenta
 * @property $idCheque
 * @property $created_at
 * @property $updated_at
 *
 * @property Banco[] $bancos
 * @property Cheque $cheque
 * @property Cuenta $cuenta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ChequeCuenta extends Model
{
    
    static $rules = [
		'balance' => 'required',
		'idCuenta' => 'required',
		'idCheque' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['balance','idCuenta','idCheque'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bancos()
    {
        return $this->hasMany('App\Models\Banco', 'cheque_cuenta_id', 'id');
    }
    
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
    public function cuenta()
    {
        return $this->hasOne('App\Models\Cuenta', 'id', 'idCuenta');
    }
    

}
