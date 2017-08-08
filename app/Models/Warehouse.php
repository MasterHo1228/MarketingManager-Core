<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Warehouse
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CellPhone[] $cellphone
 * @property-read \App\Models\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Warehouse whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Warehouse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Warehouse whereName($value)
 * @mixin \Eloquent
 */
class Warehouse extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function store(){
        return $this->belongsTo(Store::class);
    }

    //TODO Create a warehouse keeper Model.
//    public function keeper(){
//        return $this->hasOne(keeper::class);
//    }

    public function cellphone(){
        return $this->hasMany(CellPhone::class);
    }
}
