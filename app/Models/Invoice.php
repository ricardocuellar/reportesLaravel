<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'serie',
        'correlative',
        'base',
        'iva',
        'total',
        'user_id'
    ];
    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
}
