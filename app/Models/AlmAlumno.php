<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AlmAlumno
 *
 * @property $alm_id
 * @property $alm_codigo
 * @property $alm_nombre
 * @property $alm_edad
 * @property $alm_sexo
 * @property $alm_observacion
 * @property $created_at
 * @property $updated_at
 * @property $alm_id_grd
 *
 * @property GrdGrado $grdGrado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class AlmAlumno extends Model
{
  protected $primaryKey = 'alm_id';  
    static $rules = [
		'alm_codigo' => 'required',
		'alm_nombre' => 'required',
		'alm_edad' => 'required',
		'alm_sexo' => 'required',
		'alm_observacion' => 'required',
		'alm_id_grd' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alm_codigo','alm_nombre','alm_edad','alm_sexo','alm_observacion','alm_id_grd'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grdGrado()
    {
        return $this->hasOne('App\Models\GrdGrado', 'grd_id', 'alm_id_grd');
    }
    

}
