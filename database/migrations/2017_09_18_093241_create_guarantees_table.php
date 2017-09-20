<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuaranteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantees', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('img')->nullable();

            $table->timestamps();
        });

        \App\Guarantee::create([
            'title'=>'Производство импортное, полностью сертифицировано и автоматизировано',
            'img'=>'default.png'
        ]);
        \App\Guarantee::create([
            'title'=>'Если мы сорвем сроки доставки, то вернем вам 0,1 % от стоимости заказа',
            'img'=>'default.png'
        ]);
        \App\Guarantee::create([
            'title'=>'Если вы найдете стоимость дешевле, чем у нас - вернем вам разницу в цене',
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
        Schema::dropIfExists('guarantees');
    }
}
