<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('img')->nullable();

            $table->timestamps();
        });

        \App\Work::create([
            'title'=>'Заявка на звонок',
            'img'=>'default.png'
        ]);
        \App\Work::create([
            'title'=>'Расчет стоимости',
            'img'=>'default.png'
        ]);
        \App\Work::create([
            'title'=>'Производство',
            'img'=>'default.png'
        ]);
        \App\Work::create([
            'title'=>'Доставка в срок',
            'img'=>'default.png'
        ]);
        \App\Work::create([
            'title'=>'Вы довольны результатом',
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
        Schema::dropIfExists('works');
    }
}
