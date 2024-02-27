<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [

        "title", "description", "category_id", "image", "body","user_id" 


    ];

    public function categories(): BelongsToMany {

        return $this->belongsToMany(Category::class);

    }

    public function user(): BelongsTo {

        return $this->belongsTo(User::class);


    }
    
}
