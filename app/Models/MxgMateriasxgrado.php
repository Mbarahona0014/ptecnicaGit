<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class MxgMateriasxgrado
 *
 * @property $mxg_id
 * @property $created_at
 * @property $updated_at
 * @property $mxg_id_grd
 * @property $mxg_id_mat
 *
 * @property GrdGrado $grdGrado
 * @property MatMaterium $matMaterium
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MxgMateriasxgrado extends Model
{
    protected $primaryKey = 'mxg_id';
    static $rules = [
		'mxg_id_grd' => 'required',
		'mxg_id_mat' => 'required',
    ];
    protected $perPage = 20;
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mxg_id_grd','mxg_id_mat'];
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grdGrado()
    {
        return $this->hasOne('App\Models\GrdGrado', 'grd_id', 'mxg_id_grd');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function matMaterium()
    {
        return $this->hasOne('App\Models\MatMaterium', 'mat_id', 'mxg_id_mat');
    }
    

}
