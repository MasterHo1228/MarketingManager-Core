<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CellPhoneModel
 *
 * @property-read \App\Models\CellPhone $cellphone
 * @mixin \Eloquent
 */
class CellPhoneModel extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function cellphone(){
        return $this->belongsTo(CellPhone::class);
    }
}
