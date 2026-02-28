<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Editors extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function contact (){
        return $this->hasOne(Contact::class);
    }
}
