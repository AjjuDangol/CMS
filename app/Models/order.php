<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = 'orderId';

    public function item() {
        return $this->belongsTo(Item::class, 'itemId');
    }

    public function order() {
        return $this->belongsTo(User::class, 'id');
    }
}
