<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GrdGrado
 *
 * @property $grd_id
 * @property $grd_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property AlmAlumno[] $almAlumnos
 * @property MxgMateriasxgrado[] $mxgMateriasxgrados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GrdGrado extends Model
{
    protected $primaryKey = 'grd_id';  
    static $rules = [
		/* 'grd_id' => 'required', */
		'grd_nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    /* protected $fillable = ['grd_id','grd_nombre']; */
    protected $fillable = ['grd_nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function almAlumnos()
    {
        return $this->hasMany('App\Models\AlmAlumno', 'alm_id_grd', 'grd_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mxgMateriasxgrados()
    {
        return $this->hasMany('App\Models\MxgMateriasxgrado', 'mxg_id_grd', 'grd_id');
    }
    

}
