<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
       protected $table="customers";
       protected $fillable = ['name','gname','number','group','village','union','zela','employee','loantypes','date','loanamount','advanced',
        'Status','installment','payment','paymentmethod','created_at'
        ];
/*
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    */
    public function instalments()
    {
        return $this->hasMany(Weeklyinstalment::class);
    }
        public function instalmentones()
    {
        return $this->hasMany(One::class,'customer_id');
    }
        public function instalmenttwos()
    {
        return $this->hasMany(two::class);
    }
        public function instalmentthrees()
    {
        return $this->hasMany(Three::class);
    }
        public function instalmentfours()
    {
        return $this->hasMany(Four::class);
    }
        public function instalmentfives()
    {
        return $this->hasMany(Five::class);
    }

}
