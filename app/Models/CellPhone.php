<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CellPhone
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CellPhoneModel[] $cellphone_models
 * @property-read \App\Models\Warehouse $warehouse
 * @mixin \Eloquent
 */
class CellPhone extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function warehouse(){
        return $this->belongsTo(Warehouse::class);
    }

    public function cellphone_models(){
        return $this->hasMany(CellPhoneModel::class);
    }
}
