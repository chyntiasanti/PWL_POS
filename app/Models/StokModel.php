<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StokModel extends Model
{
   protected $table = 't_stok';
   protected $primaryKey = 'stok_id';

   protected $fillable = ['stok_id','barang_id', 'user_id', 'stok_tanggal', 'stok_jumlah'];

   public function stok(): HasMany
   {
    return $this->hasMany(StokModel::class);
   }
}
