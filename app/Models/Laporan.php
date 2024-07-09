<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporans';
    protected $fillable = ['tanggal', 'detail', 'pelanggans_id', 'status_id'];
    protected $hidden = ['created_at', 'update_at'];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
