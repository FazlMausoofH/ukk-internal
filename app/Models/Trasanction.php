<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trasanction extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function menu()
    {
        return $this->BelongsTo(Menu::class, 'id');
    }
}
