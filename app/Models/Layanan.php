<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanans';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_layanan', 'detail', 'kategoris_id'];

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($layanan) {
            $layanan->kategori()->delete();
        });
    }
}
