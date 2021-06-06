<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dato
 *
 * @property $id
 * @property $Nombre
 * @property $Apellido
 * @property $Edad
 * @property $Sexo
 * @property $Telefono
 * @property $Direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dato extends Model
{
    
    static $rules = [
		'Nombre' => 'required',
		'Apellido' => 'required',
		'Edad' => 'required',
		'Sexo' => 'required',
		'Telefono' => 'required',
		'Direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre','Apellido','Edad','Sexo','Telefono','Direccion'];



}
