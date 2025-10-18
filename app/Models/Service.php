<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'price', 'currency', 'image', 'status'];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
