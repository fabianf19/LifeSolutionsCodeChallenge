<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_notes', function (Blueprint $table) {
            $table->increments('note_id');

            $table->integer('contact_id')->unsigned()->index()->nullable();
            $table->foreign('contact_id')->references('contact_id')->on('contacts')->onDelete('cascade');;

            $table->string('notes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_notes');
    }
}
