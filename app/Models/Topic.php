<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps = true; // Enable timestamps

    protected $fillable = [
        'Title',
        'Content',
        'NumberOfViews',
        'Published',
        'Trending',
        'Category_id',
        'image',

    ];
   
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
