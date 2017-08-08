<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\District
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Store[] $store
 * @mixin \Eloquent
 */
class District extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function store(){
        return $this->hasMany(Store::class);
    }
}
