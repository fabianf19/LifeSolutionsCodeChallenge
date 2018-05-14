<?php

use Illuminate\Database\Seeder;
use App\Contact;
use App\ContactNote;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

    	// Delete all records from the Contact database
    	Contact::truncate();

    	$faker = \Faker\Factory::create();

        // And now, let's create a few contacts with some notes in our database:
        for ($i = 0; $i < 10; $i++) {
            $contact = Contact::create(['name' => $faker->name]);
            $contact_notes = [];

            for($j = 0; $j < 5: j++){
            	$contact_note = ContactNote::create(['notes' => $faker->sentence]);
            	array_push($contact_notes, $contact_note)
            }

            $contact->notes()->saveMany($contact_notes);
        }
    }
}
