<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
