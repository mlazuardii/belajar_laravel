<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staf extends Model
{
    use SoftDeletes;
    protected $table = 'staf';
    protected $fillable = ['nama','alamat'];
    protected $dates = ['deleted_at'];
}
