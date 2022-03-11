<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $velocidad
 * @property $corriente
 * @property $Torque
 * @property $Potencia
 * @property $sentido
 * @property $regulador1
 * @property $estadoMotor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'velocidad' => 'required',
		'corriente' => 'required',
		'Torque' => 'required',
		'Potencia' => 'required',
		'sentido' => 'required',
		'regulador1' => 'required',
		'estadoMotor' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['velocidad','corriente','Torque','Potencia','sentido','regulador1','estadoMotor'];



}
