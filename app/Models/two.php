<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class two extends Model
{
    use HasFactory;
    protected $table = "twos";
    protected $fillable =['customer_id','group','employee_name','two','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    
}
