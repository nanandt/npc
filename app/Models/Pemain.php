<?php

namespace App\Models;

use App\Models\CabangOlahraga;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemain extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['cabang_olahraga_id', 'nama_pemain', 'thumbnail'];

    protected $primaryKey = 'pemain_id';

    public function cabang_olahraga()
    {
        return $this->belongsTo(CabangOlahraga::class, 'cabang_olahraga_id');
    }

}
