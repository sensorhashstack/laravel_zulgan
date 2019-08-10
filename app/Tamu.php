<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ByTestGear\Incrementable\Traits\Incrementable;

class Tamu extends Model
{
    protected $incrementable = 'id';
    
    // This will cause the code to reset once
    // a new project_id is found.
    protected $incrementableGroups = ['id'];

    protected $table = 'tamu';
    protected $fillable = ['nama','alamat','notelp','email','pesan'];
}
