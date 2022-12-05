<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class MatMaterium
 *
 * @property $mat_id
 * @property $mat_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MatMaterium extends Model
{
    protected $primaryKey = 'mat_id';
    static $rules = [
		'mat_nombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mat_nombre'];
}
