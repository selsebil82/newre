<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['description', 'employee_id'];

    public function employee()
{
    return $this->belongsTo(Employee::class, 'employee_id');
}

}
