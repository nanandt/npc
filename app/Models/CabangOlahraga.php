<?php

namespace App\Models;

use App\Models\Pelatih;
use App\Models\Pemain;
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

    public function pemains()
    {
        return $this->hasMany(Pemain::class, 'cabang_olahraga_id');
    }

    public function pelatihs()
    {
        return $this->hasMany(Pelatih::class, 'cabang_olahraga_id');
    }
}
