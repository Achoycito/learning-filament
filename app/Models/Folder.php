<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{

    protected $fillable = [
        'name',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
