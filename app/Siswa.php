<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    // protected $fillable = ['nama', 'jurusan'];
    // fungsi dari $guarded menampung seluruh field
    protected $guarded = [];
    
    public function kelas(){
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
