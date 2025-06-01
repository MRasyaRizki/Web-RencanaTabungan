<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;

    protected $table = 'tabungans';

    protected $fillable = [
        'user_id', 'foto', 'judul', 'target_nominal', 'target_tanggal', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function menabungs()
    {
        return $this->hasMany(Menabung::class);
    }

    public function totalTabungan()
    {
        return $this->menabungs()->sum('nominal');
    }
}
