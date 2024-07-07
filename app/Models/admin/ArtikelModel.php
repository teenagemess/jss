<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArtikelModel extends Model
{
    use HasFactory,SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artikel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['kategori_id','judul','deskripsi','image','jmlh_view','user_create','user_update','user_delete'];

    function kategoris(){
        return $this->hasOne(KategoriModel::class,'id','kategori_id');
    }
}
