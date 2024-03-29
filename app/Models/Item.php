<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'itemId';

    public function menu() {
        return $this->belongsTo(Menu::class, 'menuId');
    }
    public function rating()
    {
    return $this->hasMany(Rating::class);
    }

    public function dish()
    {
    	return $this->belongsTo(Menu::class);
    }

}
