<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LayananModel extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'layanan';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['nama_layanan','deskripsi','image','jenis_layanan','user_create','user_update','user_delete'];
    public function jenislayanans(){
        return $this->hasOne(JenisLayananModel::class,'id','jenis_layanan');
    }
}
