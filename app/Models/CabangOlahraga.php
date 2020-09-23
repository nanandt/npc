<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CabangOlahraga extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nama'];

    protected $hidden = [];

    protected $primaryKey = 'cabang_olahraga_id';
}
