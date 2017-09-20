<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title1')->nullable();
            $table->string('title2')->nullable();
            $table->string('img')->nullable();

            $table->timestamps();
        });

        \App\Slider::create([
            'title1'=>'ТОВАРНЫЙ БЕТОН И РАСТВОР',
            'title2'=>'Оптом и в розницу',
            'img'=>'default.png'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
