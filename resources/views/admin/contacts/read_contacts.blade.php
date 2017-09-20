@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование контактов</h1>
            <p class="title-bar-description">Тут вы можете отредактировать информацию, которая может понадобиться посетителям сайта</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update_contacts" method="post" class="form form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Код</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="code" value="{!!$contact->code!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Телефон</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="phone" value="{!!$contact->phone!!}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Почта</label>
                                <div class="col-sm-9">
                                    <input id="form-control-1" class="form-control" type="text" name="mail" value="{!!$contact->mail!!}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn-primary" id="input_btn">Сохранить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop



