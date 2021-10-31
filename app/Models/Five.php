<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Five extends Model
{
    use HasFactory;
    protected $table = "fives";
    protected $fillable =['customer_id','group','employee_name','five','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
