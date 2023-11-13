<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Miembro
 *
 * @property $id
 * @property $nombre
 * @property $apellido_paterno
 * @property $apellido_materno
 * @property $fecha_nacimiento
 * @property $genero
 * @property $celular
 * @property $email
 * @property $iglesia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Iglesia $iglesia
 * @property Ingreso[] $ingresos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Miembro extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'celular' => 'required',
		'email' => 'required',
		'iglesia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_nacimiento','genero','celular','email','iglesia_id'];


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
        return $this->hasMany('App\Models\Ingreso', 'idMiembro', 'id');
    }
    

}
