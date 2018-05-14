<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactNote extends Model
{
	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
    protected $fillable = [
        'notes'
    ];

    /**
     * Get the contact that owns the note.
     */
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }
}
