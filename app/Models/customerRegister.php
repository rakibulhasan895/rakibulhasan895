<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerRegister extends Model
{
    use HasFactory;
        protected $table="customer_registers";
        protected $fillable = ['name','gname','number','group','village','union','zela','loantypes','date','loanamount','advanced',
        'Status','installment','created_at'
    ];

    //public function weeklycal(){
        //return $this->hasOne('App\Models\weeklycal');
    //}

}
