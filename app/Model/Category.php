<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    protected $fillable=['parent_id','name','slug','image','is_special', 'is_menu','seo_keyword', 'seo_description', 'description', 'banner'];


    public function products()
    {
        return $this->belongsToMany(Product::class,'product_categories');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function getParent(){
        // return 1;
        return Category::find($this->parent_id);
    }
}
