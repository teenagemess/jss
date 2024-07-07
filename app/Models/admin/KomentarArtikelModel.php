<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KomentarArtikelModel extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'komentar_artikel';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['komentarID', 'komentar'];
}
