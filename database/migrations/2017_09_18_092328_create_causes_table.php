<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('img')->nullable();

            $table->timestamps();
        });

        \App\Cause::create([
            'title'=>"Гарантируем соблюдение сроков.<br>Доставляем продукцию на собственной спецтехнике<br>Миксеры объемом 7м3",
            'img'=>'default.img'
        ]);
        \App\Cause::create([
            'title'=>"Мы являемся производителем и предлагаем наиболее выгодные условия сотрудничества",
            'img'=>'default.img'
        ]);
        \App\Cause::create([
            'title'=>"Качество продукции соответствует ГОСТу.<br>Мы используем итальянское высококачественное оборудование",
            'img'=>'default.img'
        ]);
        \App\Cause::create([
            'title'=>"Мы отгружаем ровно столько бетона, сколько вы заказали.<br>Доставка бетона по: Ляховичи, Барановичи, Несвиж, Клецк и их районам",
            'img'=>'default.img'
        ]);
        \App\Cause::create([
            'title'=>"Низкие цены и гибкие условия оплаты.",
            'img'=>'default.img'
        ]);
        \App\Cause::create([
            'title'=>"Система скидок",
            'img'=>'default.img'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('causes');
    }
}
