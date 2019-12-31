<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getdata(){
        return $this->id . ': ' . $this->name . '(' . $this->age . ')';
    }
}
