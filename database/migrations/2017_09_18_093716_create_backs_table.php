<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('img')->nullable();

            $table->timestamps();
        });

        \App\Back::create([
            'name'=>'Загдай Роман Евгеньевич',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
            'img'=>'default.png'
        ]);
        \App\Back::create([
            'name'=>'Иванов Иван Иванович',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
            'img'=>'default.png'
        ]);
        \App\Back::create([
            'name'=>'Петров Петр Петрович',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
            'img'=>'default.png'
        ]);
        \App\Back::create([
            'name'=>'Сидоров Сидор Сидорович',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
            'img'=>'default.png'
        ]);
        \App\Back::create([
            'name'=>'Антонов Антон Антонович',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
            'img'=>'default.png'
        ]);
        \App\Back::create([
            'name'=>'Михайлов Михаил Михайлович',
            'title'=>'Гарантируем исполнение сроков.Доставляем продукцию на сообственной спецтехнике.',
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
        Schema::dropIfExists('backs');
    }
}
