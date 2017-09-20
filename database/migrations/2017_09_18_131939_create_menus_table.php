<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('anchor')->nullable();

            $table->timestamps();
        });

        \App\Menu::create([
            'title' =>'О компании',
            'anchor' =>'#about-comp'
        ]);
        \App\Menu::create([
            'title' =>'Продукция',
            'anchor' =>'#why-us'
        ]);
        \App\Menu::create([
            'title' =>'Доставка',
            'anchor' =>'#delivery'
        ]);
        \App\Menu::create([
            'title' =>'Оплата',
            'anchor' =>'#payment'
        ]);
        \App\Menu::create([
            'title' =>'Контакты',
            'anchor' =>'#contacts'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
