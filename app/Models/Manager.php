<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [];

    protected $dateFormat = 'd-m-Y';

    public function scopeFilter($query, string $filter = null)
    {
        $query->when($filter ?? false, fn($query, $filter) => $query
            ->where(fn($query)=>$query
                ->where('position', 'like', '%' . $filter . "%")
            )
        );
    }

    public function employees(){
        return $this->hasMany(Employee::class,'superior');
    }
}
