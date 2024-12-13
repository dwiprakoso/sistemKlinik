<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'pasiens';
    protected $guarded = ['no_rm'];

    protected static function booted()
    {
        static::creating(function ($pasien) {
            $latestId = self::max('id') + 1; // Ambil ID terbaru
            $currentYear = now()->format('Y'); // Tahun sekarang
            $currentMonth = now()->format('m'); // Bulan sekarang
            $pasien->no_rm = "$currentYear" . "$currentMonth"-"$latestId";
        });
    }
}
