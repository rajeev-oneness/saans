<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    public function categoryDetail()
    {
        return $this->belongsTo('App\Models\Category', 'categoryId', 'id');
    }
    public function subCategoryDetail()
    {
        return $this->belongsTo('App\Models\SubCategory', 'subCategoryId', 'id');
    }
    public function principalDetail()
    {
        return $this->belongsTo('App\Models\Principal', 'principalId', 'id');
    }
    public function subPrincipalDetail()
    {
        return $this->belongsTo('App\Models\SubPrincipal', 'subPrincipalId', 'id');
    }

}
