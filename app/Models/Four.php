<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Four extends Model
{
    use HasFactory;
    protected $table = "fours";
    protected $fillable =['customer_id','group','employee_name','four','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
