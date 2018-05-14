<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Get the notes for the contact
     */
    public function notes()
    {
        return $this->hasMany('App\ContactNote');
    }
}
