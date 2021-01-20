<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    protected $fillable = [
    	'scname','scemail','scphone','scaddress','scprofile'

    ];
}
