<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menabung extends Model
{
    use HasFactory;

    protected $table = 'menabungs';

    protected $fillable = [
        'tabungan_id', 'nominal',
    ];

    public function tabungan()
    {
        return $this->belongsTo(Tabungan::class);
    }

}
