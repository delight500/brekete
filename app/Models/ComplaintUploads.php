<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplaintUploads extends Model
{
     protected $fillable = ['complaint_id', 'filename'];

    public function product()
    {
        return $this->belongsTo('App\Models\Complaints');
    }
}
