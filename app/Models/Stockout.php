<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stockout extends Model
{
    //
     protected $fillable = [
    	'date',
      'bon_no',
    	'observation',
      'created_by',
      'asker',
      'requisition_no'
    ];

}
