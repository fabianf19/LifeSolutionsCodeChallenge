<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// ---------------------------------------------------------------------------
// ---------------------------------------------------------------------------
// CRUD Contact
// ---------------------------------------------------------------------------
// ---------------------------------------------------------------------------

// Get all contacts with their notes
Route::get('contacts', 'ContactController@index');
// Get specific contact with their notes
Route::get('contacts/{id}', 'ContactController@show');
// Create a contact 
Route::post('contacts', 'ContactController@store');
// Update a contact with specific id
Route::put('contacts/{id}', 'ContactController@update');
// Delete a contact with specific id
Route::delete('contacts/{id}', 'ContactController@delete');

// ---------------------------------------------------------------------------
// ---------------------------------------------------------------------------
// CRUD Contact Notes
// ---------------------------------------------------------------------------
// ---------------------------------------------------------------------------

// Get all notes from contact with specific id
Route::get('contacts/{id}/notes', 'ContactController@contact_notes');
// Create a note to contact with specific id
Route::post('contacts/{id}/notes', 'ContactController@create_note_contact');
// Update a note from contact with specific id with note id
Route::put('contacts/{id_contact}/notes/{id_note}', 'ContactController@update_note');
// Delete a note from the contact with specific id
Route::delete('contacts/{id}/notes/{id}', 'ContactController@delete');