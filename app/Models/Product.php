<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'name', 'slug', 'price', 'sale', 'description'
    ];

    public function productEntries()
    {
        return $this->hasMany(ProductEntry::class, 'product_slug');
    }

    public function getDetailProduct($slug)
    {
        return DB::table('products')->join('product_entries', 'product_entries.product_slug', '=', 'products.slug')->join('colours', 'product_entries.colour_id', '=', 'colours.id')->where('slug', $slug)->get();
    }
}
