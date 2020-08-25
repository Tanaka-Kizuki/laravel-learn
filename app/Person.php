<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\collection;

class Person extends Model
{
    protected $guarded = ['id'];

    public static $rules = [
        'name' => 'required',
        'mail' => 'email',
        'age' => 'interer',
    ];
    
    public function newCollection(array $models = []) {
        return new MyCollection($models);
    }

    public function getNameAndIdAttribute() {
        return $this->name. '[id =' .$this->id . ']';
    }

    public function getNameAndMailAttribute() {
        return $this->name . '(' . $this->mail . ')';
    }

    public function getNameAndAgeAttribute() {
        return $this->name . '(' . $this->age . ')';
    }

    public function getAllDataAttribute() {
        return $this->name . '(' . $this->age . ')' . '[' . $this->mail . ']';
    }

    public function getNameAttribute($value) {
        return strtoupper($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtoupper($value);
    }
}

class MyCollection extends Collection {
    public function fields() {
        $item = $this -> first();
        return array_keys($item->toArray());
    }
}
