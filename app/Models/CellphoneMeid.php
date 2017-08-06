<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CellphoneMeid extends Model {

    protected $fillable = [];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    // Relationships
    public function Cellphone(){
        return $this->belongsTo(Cellphone::class);
    }
    public function CellphoneModel(){
    return $this->belongsTo(CellPhoneModel::class);
    }
}
