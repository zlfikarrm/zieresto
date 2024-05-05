<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stok extends Model
{
    use HasFactory;

    protected $table = 'stok';
    protected $fillable = ['jumlah', 'menu_id'];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'menu_id', 'id');
    }
}
