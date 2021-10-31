<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Three extends Model
{
    use HasFactory;
    protected $table = "threes";
    protected $fillable =['customer_id','group','employee_name','three','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
