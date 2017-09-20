<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('code',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('mail',255)->nullable();

            $table->timestamps();
        });

        \App\Contact::create([
            'code'=>'+37533',
            'phone'=>'318-96-32',
            'mail'=>'beton@mail.ru'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
