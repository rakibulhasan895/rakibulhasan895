<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration extends Model
{
    use HasFactory;
        protected $fillable = ['name','gname','number','village','union','zela','group','date','loantypes','loanamount','advanced',
        'Status','installment','created_at'
       ];
}
