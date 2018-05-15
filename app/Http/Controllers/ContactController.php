<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\ContactNote;

class ContactController extends Controller
{
    
    /**
		* Retrieves all contacts from the database with their contacts
		*
		* @return array of type Contact with 
	*/
    public function index()
    {
        $all_contacts = Contact::all();
        foreach ($all_contacts as $contact) {
        	$contact['notes'] = $contact->notes;
        }

        $dict = array('data' => $all_contacts );

        return $dict;
    }
 
 	/**
		* Retrieves a specific contact from the database with their notes
		*
		* @param int $id The contact_id for the contact to find and show their notes
		*
		* @return The contact with their notes; 404 not found error otherwise
	*/
    public function show($id){
        
        // Look for contact with specific id
        $contact = Contact::find($id);

        if (sizeof($contact) > 0){
        	$contact['notes'] = $contact->notes;
        	return $contact;
        }else{
        	return response('No contact with that specific id found', 404);
        }
    }

    /**
		* Creates a new contact with the request parameters
		*
		* @param Request $request The request object
		*
		* @return The created contact
	*/
    public function store(Request $request){
        return Contact::create($request->all());
    }

	/**
		* Updates a contact with the request parameters
		*
		* @param int $id The contact id
		* @param Request $request The request object
		*
		* @return The updated contact; 404 not found error otherwise
	*/    
    public function update(Request $request, $id){
        $contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $contact->update($request->all());

        return $contact;
    }

    /**
		* Deletes a contact with the request parameters
		*
		* @param int $id The contact id
		* @param Request $request The request object
		*
		* @return 204 success code; 404 not found error otherwise
	*/ 
    public function delete(Request $request, $id){
        $contact = contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $contact->delete();

        return 204;
    }

    // --------------------------------------------------------------------------------------------------------
	// --------------------------------------------------------------------------------------------------------
	// CRUD Contact notes
	// --------------------------------------------------------------------------------------------------------
	// --------------------------------------------------------------------------------------------------------

    /**
		* Get all of the notes from a contact with the request parameters
		*
		* @param int $id The contact id
		* @param Request $request The request object
		*
		* @return The contact notes; 404 not found error otherwise
	*/ 
    public function contact_notes(Request $request, $id){
    	$contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        return $contact->notes;
    }

    /**
		* Create a note for a contact with the request parameters
		*
		* @param int $id The contact id
		* @param Request $request The request object
		*
		* @return The created note; 404 not found error otherwise
	*/ 
    public function create_note_contact(Request $request, $id){
		$contact = Contact::find($id);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $notes = $request->input('notes');

        $note = ContactNote::create(['notes' => $notes]);
        $contact->notes()->save($note);

		return $note;
    }

    /**
		* Updates a note with the request parameters
		*
		* @param int $id_contact The contact id
		* @param int $id_note The note id
		* @param Request $request The request object
		*
		* @return The updated note; 404 not found error otherwise
	*/ 
    public function update_note(Request $request, $id_contact, $id_note){
    	// This query could also be directly searched via relationships, similar to
    	// $contact_notes = ContactNote::find($id_note)->where('id_contact','=',$id_contact)->get();

    	$contact = Contact::find($id_contact);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $all_notes = $contact->notes;

        $found_note = null;

        foreach ($all_notes as $note) {
        	if ($note->id == $id_note){
        		$note->notes = $request->input('notes');
        		$found_note = $note;
        		$note->save();
        		break;
        	}
        }

        if ($found_note == null){
        	return response('No contact note with that specific id found', 404);
        }

        return $found_note;
    }

    /**
		* Deletes a note with the request parameters
		*
		* @param int $id_contact The contact id
		* @param int $id_note The note id
		* @param Request $request The request object
		*
		* @return 204 success code if deletion; 404 not found error otherwise
	*/ 
    public function delete_note(Request $request, $id_contact, $id_note){
    	$contact = Contact::find($id_contact);

        if (sizeof($contact) == 0){
        	return response('No contact with that specific id found', 404);
        }

        $all_notes = $contact->notes;

        $found_note = null;

        foreach ($all_notes as $note) {
        	if ($note->id == $id_note){
        		$found_note = $note;
        		break;
        	}
        }

        if ($found_note == null){
        	return response('No contact note with that specific id found', 404);
        }

        $found_note->delete();

        return 204;
    }

    /**
		* Deletes a note with specific note_id
		*
		* @param int $id_note The note id
		*
		* @return 204 success code if deletion; 404 not found error otherwise
	*/ 
    public function delete_note_id(Request $request, $id_note){
    	$note = ContactNote::find($id_note);

        if (sizeof($note) == 0){
        	return response('No contact note with that specific id found', 404);
        }

        $note->delete();

        return 204;
    }
}
