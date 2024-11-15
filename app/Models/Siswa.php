<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'projek_id',
    ];

    public function projek(): BelongsTo
    {
        return $this->belongsTo(Projek::class, 'projek_id');

    }
}
