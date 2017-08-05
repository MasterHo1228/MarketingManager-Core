<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $table = 'employees';

    protected $fillable = ['name','gender','email'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    protected $hidden = ['password', 'remember_token'];

    // Relationships

}
