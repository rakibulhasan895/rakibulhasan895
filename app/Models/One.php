<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class One extends Model
{
    use HasFactory;
    protected $table = "ones";
    protected $fillable =['customer_id','group','employee_name','one','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
    
}
