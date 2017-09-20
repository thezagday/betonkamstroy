@extends('layouts.app')

@section('content')
    <!-- Шапка-->
    <header>
        <div class="header"><a class="header__logo-a" href="/"><img class="header__logo" src="{{ asset('images/header__logo.png') }}"/></a>
            <ul class="header-menu" id="menu">
               @for ($i = 0; $i<count($menu);$i++)
                    @if ($i == count($menu)-1)
                        <li class="header-menu__item"><a class="active" href="{!! $menu[$i]->anchor !!}">{!! $menu[$i]->title !!}</a></li>
                    @else
                        <li class="header-menu__item"><a class="active" href="{!! $menu[$i]->anchor !!}">{!! $menu[$i]->title !!}</a></li>
                        <li class="header-menu__item header-menu__item-dot"></li>
                    @endif
                @endfor
            </ul>
            <div class="header__phones">
                <div class="header__phones-phone">{!! $contacts->code !!}<span class="header__phones-phone_yellow">{!! $contacts->phone !!}</span></div><a class="header__phones-btn" href="#header-btn" data-toggle="modal" data-target="#modal-box_call-back">Заказать звонок</a>
            </div>
            <!-- Мобильное меню - кнопка -->
            <input type="checkbox" name="mobile-menu" id="mobile-menu_stroke-cross" style="display:none;"/>
            <div class="mobile-menu">
                <label class="mobile-menu__strokes" for="mobile-menu_stroke-cross">
                    <div class="mobile-menu__stroke mobile-menu__stroke-cross1"></div>
                    <div class="mobile-menu__stroke mobile-menu__stroke-cross2"></div>
                    <div class="mobile-menu__stroke mobile-menu__stroke-cross3"></div>
                </label>
            </div>
            <!-- Мобильное меню - Меню -->
            <div class="mobile-menu__menu">
                <ul class="mobile-menu__item" id="mobile-menu">
                    @for ($i = 0; $i<count($menu);$i++)
                        @if ($i == count($menu)-1)
                            <li class="header-menu__item"><a class="active" href="{!! $menu[$i]->anchor !!}">{!! $menu[$i]->title !!}</a></li>
                        @else
                            <li class="header-menu__item"><a class="active" href="{!! $menu[$i]->anchor !!}">{!! $menu[$i]->title !!}</a></li>
                            <li class="header-menu__item header-menu__item-dot"></li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </header>
    <!-- /Шапка-->
    <!-- Слайдер-->
    <div class="cell slider-cell">
        <div class="slider"><img class="slider__img" src="{!! $slider->img !!}"/>
            <div class="slider-window">
                <div class="slider-text">
                    <div class="slider-text__item1"><span class="slider-text__item1-span">{!! $slider->title1 !!}</span></div>
                    <div class="slider-text__item2"><span class="slider-text__item2-span">{!! $slider->title2 !!}</span></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Слайдер-->
    <!-- Рассчитать стоимость бетона-->
    <div class="cell">
        <div class="calc-price-bg">
            <div class="calc-price">
                <div class="calc-price__title">Рассчитать стоимость бетона</div>
                <form class="calc-price-form">
                    <input class="form-input" type="text" id="name" name="name" placeholder="Имя"/>
                    <select class="form-input" name="concrete-mark">
                        @foreach ($products as $product)
                            <option value="{!! $product->title !!}">{!! $product->title !!}</option>
                        @endforeach
                    </select>
                    <select class="form-input" name="concrete-mark">
                        @foreach ($products as $product)
                            <option value="{!! $product->title !!}">{!! $product->title !!}</option>
                        @endforeach
                    </select>
                    <input class="form-input" type="text" id="tel" name="tel" placeholder="Номер телефона"/>
                    <input class="form-input" type="text" id="kol-vo" name="kol-vo" placeholder="Количество кубов"/>
                    <input class="form-input form-submit" type="submit" value="отправить"/>
                </form>
            </div>
        </div>
    </div>
    <!-- /Рассчитать стоимость бетона-->
    <!-- Наш ассортимент-->
    <div class="cell">
        <div class="our-range">
            <div class="our-range__title mod_posr">
                <div class="mod_anchor-padd" id="about-comp"></div>
                <h1>Наш ассортимент</h1>
            </div>
            <div class="our-range-items" >
                @foreach ($products as $product)
                    <div class="our-range-item" style="background-image: url('{!! $product->img !!}');">
                        <cart-title class="our-range-item__title">{!! $product->title !!}</cart-title>
                        <div class="our-range-item__btn" data-toggle="modal" data-target="#modal-box_assort" onclick="concreteMark()">ЗАКАЗАТЬ</div>
                    </div>
                @endforeach
                <!-- Наш ассортимент - три пустых вспомогательных элемента	-->
                <div class="our-range-item__empty" style="width:265px;"></div>
                <div class="our-range-item__empty" style="width:265px;"></div>
                <div class="our-range-item__empty" style="width:265px;"></div>
                <script src="scripts/card-add-field.js"></script>
            </div>
        </div>
    </div>
    <!-- Модальное окно - Ассортимент-->
    <div class="modal fade" id="modal-box_assort" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
        <div class="modal-box modal-box_assort modal-dialog">
            <form class="modal-box-form">
                <div class="modal-box__title">
                    <div class="modal-box__title-text">Заказать продукт</div>
                    <div class="modal-box__title-underline"></div>
                </div>
                <input class="modal-box-form__input" type="text" name="assort__name" placeholder="Имя" id="assort__name"/>
                <input class="modal-box-form__input" type="text" name="assort__tel" placeholder="Номер телефона" id="assort__tel"/>
                <input class="modal-box-form__input" type="text" name="assort__cubes" placeholder="Количество кубов" id="assort__name"/>
                <input class="modal-box-form__input" name="assort__mark-select" value="Бетон марки 150" id="assort__mark"/>
                <input class="modal-box-form__submit" type="submit" value="Оформить заказ"/>
                <div class="modal-box__note">*Ваши персональные данные в безопасности</div>
            </form>
        </div>
    </div>
    <!-- /Модальное окно - Ассортимент-->
    <!-- /Наш ассортимент-->
    <!-- Почему выбирают нас-->
    <div class="cell">
        <div class="cell-why-us">
            <div class="why-us">
                <div class="why-us__title mod_posr">
                    <div class="mod_anchor-padd" id="why-us"></div>
                    <h1>Почему выбирают нас</h1>
                </div>
                <div class="why-us-items">
                    <!-- Почему выбирают нас - ячейка-->
                    @foreach ($causes as $cause)
                    <div class="why-us-item"><img class="why-us-item__img" style="background-image: url('{!! $cause->img !!}'); background-position: center; background-repeat: no-repeat;"/>
                        <div class="why-us-item__text">
                            <p>{!! $cause->title !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- /Почему выбирают нас-->
    <!-- Как мы работаем-->
    <div class="cell">
        <div class="we-work">
            <div class="we-work__title mod_posr">
                <div class="mod_anchor-padd" id="delivery"></div>
                <h1>Как мы работаем</h1>
            </div>
            <div class="we-work-items">
                @foreach($works as $work)
                    <div class="we-work-item"><img class="we-work-item__img" src="{!! $work->img !!}"/>
                        <div class="we-work-item__title">{!! $work->title !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Как мы работаем-->
    <!-- Отправьте заявку-->
    <div class="cell">
        <div class="cell-send-app">
            <div class="send-app">
                <!-- Заголовок-->
                <div class="send-app__title1">Не нашли нужную информацию?</div>
                <div class="send-app__title2">Отправьте заявку и мы вышлем Вам полный прайс-лист</div>
                <!-- Форма отправки заявки-->
                <form class="send-app-form">
                    <input class="form-input" type="text" name="price-name" placeholder="Имя"/>
                    <input class="form-input" type="text" name="price-tel" placeholder="Номер телефона"/>
                    <input class="form-input" type="text" name="price-mail" placeholder="Электронная почта"/>
                    <input class="form-input form-submit" type="submit" value="отправить"/>
                </form>
            </div>
        </div>
    </div>
    <!-- /Отправьте заявку-->
    <!-- Наши гарантии-->
    <div class="cell">
        <div class="our-guarant-s">
            <div class="we-work__title mod_posr">
                <div class="mod_anchor-padd" id="payment"></div>
                <h1>Наши гарантии</h1>
            </div>
            <div class="we-work-items">
                @foreach($guarantees as $guarantee)
                    <div class="we-work-item"><img class="we-work-item__img" src="{!! $guarantee->img !!}"/>
                        <div class="we-work-item__title">{!! $guarantee->title !!}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Наши гарантии-->
    <!-- Компания и услуги-->
    <div class="cell cell-company"><img class="company__img-left" src="images/company__img-left.png"/><img class="company__img-right" src="images/company__img-right.png"/>
        <div class="company">
            <div class="company__title mod_posr">
                <div class="mod_anchor-padd" id="contacts"></div>
                <h1>{!! $material->title !!}</h1>
            </div>
            <div class="company__text">
                {!! $material->content !!}
                <br>
                <h3>Есть проблема? Звоните, и мы поможем ее решить.</h3>
            </div>
        </div>
    </div>
    <!-- /Компания и услуги-->
    <!-- Компания и услуги - II(ячейки - из "Почему выбирают нас - ячейка")-->
    <div class="cell">
        <div class="company-ii">
            <div class="why-us__title">
                <h1>Компания и услуги</h1>
            </div>
            <div class="why-us__description">99% наших клиентов остаются довольны качеством товара и качеством услуг</div>
            <div class="why-us-items why-us-slider">
                <?php $k = 0;$s = 2;?>
                @for($i = 0;$i<(count($backs)/2);$i++)
                    <div class="why-us-items__col">
                        @if($s<=count($backs))
                            @for($j = $k;$j<$s;$j++ )
                                <div class="why-us-item"><img class="why-us-item__img" style="background-image: url('{!! $backs[$j]->img !!}'); background-position: center; background-repeat: no-repeat;"/>
                                    <div class="why-us-item__text">
                                        <div class="why-us-item__text-title"><strong>{!! $backs[$j]->name !!}</strong></div>
                                        <p> <i>{!! $backs[$j]->title !!}</i></p>
                                    </div>
                                </div>
                            @endfor
                        @else
                            <div class="why-us-item"><img class="why-us-item__img" style="background-image: url('{!! $backs[$k]->img !!}'); background-position: center; background-repeat: no-repeat;"/>
                                <div class="why-us-item__text">
                                    <div class="why-us-item__text-title"><strong>{!! $backs[$k]->name !!}</strong></div>
                                    <p> <i>{!! $backs[$k]->title !!}</i></p>
                                </div>
                            </div>
                        @endif
                        <?php $k+=2;$s+=2;?>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Карта							-->
    <div class="cell">
        <div class="map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A84735db6315fd17908a7473944874eec13c4ab723519726c47260b0342ff76e2&amp;lang=ru_RU&amp;scroll=true&amp;source=constructor" width="100%" height="350" frameborder="0"></iframe></div>
    </div>
    <!-- /Карта		-->
    <!-- Подвал-->
    <footer>
        <div class="footer"><a class="footer__logo-a" href="./beton.html"><img class="footer__logo" src="images/footer__logo.png"/></a>
            <div class="footer__phone-mail">
                <div class="footer__mail"><i class="fa fa-envelope" aria-hidden="true"></i>{!! $contacts->mail !!}</div>
                <div class="footer__phones">
                    <div class="footer__phones-phone"><i class="fa fa-phone" aria-hidden="true"> </i>{!! $contacts->code !!}<span class="footer__phones-phone_yellow">{!! $contacts->phone !!}</span></div>
                </div>
            </div>
            <div class="footer__call-back" data-toggle="modal" data-target="#modal-box_call-back">Заказать звонок</div>
            <!-- Модальное окно - Заказать звонок-->
            <div class="modal fade" id="modal-box_call-back" tabindex="-1" role="dialog" aria-labelledby="assort-btn" aria-hidden="true">
                <div class="modal-box modal-dialog">
                    <form class="modal-box-form">
                        <div class="modal-box__title">
                            <div class="modal-box__title-text">Заказ обратного звонка</div>
                            <div class="modal-box__title-underline"></div>
                        </div>
                        <input class="modal-box-form__input" type="text" name="call-back__name" placeholder="Имя" id="call-back__name"/>
                        <input class="modal-box-form__input" type="text" name="call-back__tel" placeholder="Номер телефона" id="call-back__tel"/>
                        <input class="modal-box-form__submit" type="submit" value="Заказать звонок"/>
                        <div class="modal-box__note">*Ваши персональные данные в безопасности</div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Подвал-->
@endsection
