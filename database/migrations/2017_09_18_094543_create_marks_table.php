<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');

            $table->timestamps();
        });

        \App\Mark::create([
            'title'=>'Бетон марки 100'
        ]);
        \App\Mark::create([
            'title'=>'Бетон марки 150'
        ]);
        \App\Mark::create([
            'title'=>'Бетон марки 200'
        ]);
        \App\Mark::create([
            'title'=>'Бетон марки 250'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
