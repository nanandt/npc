<?php

namespace App\Models;

use App\Models\CabangOlahraga;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelatih extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['cabang_olahraga_id', 'nama_pelatih', 'slug', 'thumbnail'];

    protected $primaryKey = 'pelatih_id';

    public function cabang_olahraga()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }
}
