<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photoes';
    public $timestamps = true;
    protected $fillable = array('url', 'photoable_type', 'photoable_id');

    public function photoable()
    {
        return $this->morphTo();
    }

}
