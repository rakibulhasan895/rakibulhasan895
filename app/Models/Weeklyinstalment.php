<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklyinstalment extends Model
{
    use HasFactory;
    protected $table = "weeklyinstalments";
    protected $fillable =['customer_id','group','employee_name','month','created_at'];
    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
