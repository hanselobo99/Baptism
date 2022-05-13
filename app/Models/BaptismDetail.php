<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaptismDetail extends Model
{
    use HasFactory;

    protected $fillable = ['FathersName', 'MothersName', 'FathersResidence', 'Nationality', 'PlaceOfBirth',
        'DateOfBaptism', 'GodFathersName', 'GodFathersRes', 'GodMothersName', 'GodMothersRes',
        'MinisterOfBaptism', 'PlaceOfBaptism', 'DateOfConfirmation', 'DateOfMarriage', 'Remarks'];
    protected $hidden = ['created_at','updated_at'];
    public function baptismRecord(){
        return $this->belongsTo(BaptismRecord::class);
    }

}
