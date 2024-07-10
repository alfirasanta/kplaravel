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

    public function kategori()
    {
        return $this->hasMany(Kategori::class);
    }
}
