<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mnt extends Model
{
    use HasFactory;
    protected $table = "mnt";
    protected $fillable =['customer_id','employee_id','employee_name','month','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
