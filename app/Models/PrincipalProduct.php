<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PrincipalProduct extends Model
{
    use HasFactory,SoftDeletes;

    public function principalDetail()
    {
        return $this->belongsTo('App\Models\Principal', 'principalId', 'id');
    }
}
