<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->string('img')->nulable();
            $table->integer('mark');

            $table->timestamps();
        });

        \App\Product::create([
            'title'=>'one',
            'img'=>'default.png',
            'mark'=>1
        ]);
        \App\Product::create([
            'title'=>'two',
            'img'=>'default.png',
            'mark'=>2
        ]);
        \App\Product::create([
            'title'=>'three',
            'img'=>'default.png',
            'mark'=>3
        ]);
        \App\Product::create([
            'title'=>'four',
            'img'=>'default.png',
            'mark'=>4
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
