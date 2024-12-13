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
            $currentDate = now()->format('Ym');  // Format tahun dan bulan
            $latestNoRm = self::where('no_rm', 'like', $currentDate . '%')->latest()->first();

            // Menentukan ID berdasarkan yang terakhir, atau mulai dari 1 jika belum ada
            $latestId = self::max('id') + 1; // Ambil ID terbaru

            // Menyusun no_rm dengan format 'tahunbulan-id'
            $pasien->no_rm = $currentDate . '-' . str_pad($latestId, STR_PAD_LEFT);
        });
    }
}
