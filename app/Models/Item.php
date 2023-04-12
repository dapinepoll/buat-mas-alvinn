<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['name','qty'];

    public function subItem(){
        //this->hasMany(model mana,foreign key dari model yang dihubungkan,primary key nya sndiri)
        return $this->hasMany(SubItem::class,'items_id','id');
    }
}
