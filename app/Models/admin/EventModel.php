<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventModel extends Model
{
    use HasFactory,SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'event';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['nama_event','kategori_id','deskripsi','tanggal','tanggal_expired','biaya','user_create','user_update','user_delete'];

    function kategoris(){
        return $this->hasOne(KategoriModel::class,'id','kategori_id');
    }
}
