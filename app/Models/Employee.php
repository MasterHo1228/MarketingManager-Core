<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $position
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CellPhone[] $cellphones
 * @property-read \App\Models\Store $store
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Employee extends Model {

    protected $table = 'employees';

    protected $fillable = ['name','gender','email'];

    protected $dates = [];

    public static $rules = [
        // Validation rules
    ];

    protected $hidden = ['password', 'remember_token'];

    // Relationships
    public function store(){
        return $this->belongsTo(Store::class);
    }

    public function cellphones(){
        return $this->hasMany(CellPhone::class);
    }
}
