<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Folder extends Model
{

    protected $fillable = [
        'name', 'parent_id', 'category_id'
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function parent(): BelongsTo {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    public function children(): HasMany {
        return $this->hasMany(Folder::class, 'parent_id');
    }

    public function documents(): HasMany {
        return $this->hasMany(Document::class);
    }
}
