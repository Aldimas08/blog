<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    // protected $fillable = ['nama', 'jurusan'];
    // fungsi dari $guarded menampung seluruh field
    protected $guarded = [];
}
