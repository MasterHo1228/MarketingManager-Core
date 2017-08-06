<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    public function warehouse(){
        return $this->hasOne(Warehouse::class);
    }

    public function employee(){
        return $this->hasMany(Employee::class);
    }

    //TODO Create manager tag in employee table
//    public function manager(){
//        return $this->hasOne(Manager::class);
//    }

}
