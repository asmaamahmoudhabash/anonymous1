<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('site_name', 'site_email', 'site_keywords', 'site_description', 'maintence', 'maintence_message');

}
