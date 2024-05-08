<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\Penjualan as  Authenticatable;


class PenjualanModel extends Model
{

    public function getJWTIdentifier(){
        return $this->getKey();
    }

    public function getJWTCustomClaims(){
        return [];
    }

    protected $table = 't_penjualan';
    protected $primaryKey = 'penjualan_id';

    protected $fillable = ['user_id', 'pembeli', 'penjualan_kode', 'penjualan_tanggal','created_at', 'update_at', 'image'];


    public function user(){
        return $this->hasMany(UserModel::class, 'user_id', 'iser_id');
    }

    protected function image(): Attribute {
        return new Attribute(
            get: fn ($image) => url('/storage/posts/' . $image),
        );
    }
}