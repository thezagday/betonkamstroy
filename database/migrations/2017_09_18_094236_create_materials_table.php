<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();
            $table->text('content')->nullable();

            $table->timestamps();
        });

        \App\Material::create([
            'title'=>'КОМПАНИЯ И УСЛУГИ',
            'content'=>'Продажа и доставка бетона
Компания «БетонКАМстрой» известна на белорусском рынке с 2011 как надежный поставщик высококачественного бетона. Доставляем бетон на стройплощадки Ляховичей, Барановичей, Несвижа, Клецка и их районов

Оформить заявку на поставки бетона и раствора можно с 8:00 до 22:00 по телефону и электронной почте. Купить бетон в «БетонКАМстрой» могут как организации, так и физические лица.

Доставка бетона
Качественный бетон нуждается в правильном хранении и особых условиях транспортировки. Сотрудники «БетонКАМстрой» перевозят бетон в специально оборудованных машинах. Такой способ транспортировки позволяет сохранить однородность и подвижность смесей, избежать несвоевременного затвердевания. Благодаря этому продукция сохраняет свои изначальные свойства и характеристики. Гарантируем своевременную доставку бетона. Продажа бетона и доставка осуществляются оперативно, качественно.

Стоимость и сроки предоставления услуг
Мы заинтересованы в длительном и плодотворном сотрудничестве с нашими заказчиками. Наши клиенты, однажды заказав услугу, остаются довольны и обращаются снова. Вы тоже можете стать нашим постоянным клиентом. Цена бетона, доставки вас порадует. Гибкая ценовая политика, качество услуг и своевременность выполнения заявок - важнейшие приоритеты компании.


Есть проблема? Звоните, и мы поможем ее решить.'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
