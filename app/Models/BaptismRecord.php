<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaptismRecord extends Model
{
    use HasFactory;

    protected $fillable = ['Rno', 'FirstName', 'MiddleName', 'LastName', 'DateOfBirth'];
    protected $hidden = ['created_at','updated_at'];
    public function baptismDetail()
    {
        return $this->hasOne(BaptismDetail::class);
    }

}
