<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokter extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'dokters';
    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'id_poli'
    ];
    
    
    
    public function poli()
    {
        return $this->belongsTo(Poli::class, 'id_poli');
    }
    //
}
