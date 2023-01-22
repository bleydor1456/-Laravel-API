<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $name
 * @property $editorial
 * @property $pages
 * @property $autor_Id
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore $autore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'name' => 'required',
		'editorial' => 'required',
		'pages' => 'required',
		'autor_Id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','editorial','pages','autor_Id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autore()
    {
        return $this->hasOne('App\Models\Autore', 'id', 'autor_Id');
    }
    

}
