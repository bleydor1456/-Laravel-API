<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 *
 * @property $id
 * @property $name
 * @property $age
 * @property $country
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autore extends Model
{
    
    static $rules = [
		'name' => 'required',
		'age' => 'required',
		'country' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','age','country'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'autor_Id', 'id');
    }
    

}
