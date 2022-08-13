<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id', 'firstname', 'middlename', 'lastname', 'suffix'];
    public const SUFFIX = ['Jr', 'Sr', 'II'];

    public $primaryKey = 'employee_id';

    public $incrementing = false;

    public $keyType = 'string';

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->employee_id = str_pad(Employee::count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
