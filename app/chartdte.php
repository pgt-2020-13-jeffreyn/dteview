<?php
namespace App;

use illuminate\Database\Eloquent\Model;

class chartdte extends Model{
    protected $table = 'dte3';
    protected $filltable = ['tanggal','jam','Speed','Availability'];
}