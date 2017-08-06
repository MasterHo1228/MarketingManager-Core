<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
