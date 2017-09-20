@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование отзыва от "{{strip_tags($back->name)}}"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать отзыв от клиента "{{strip_tags($back->name)}}"</p><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update_item_back" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$back->id}}"/>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Имя</label>
                                <div class="col-sm-9">
                                    <input type="text" id="form-control-1" class="form-control" name="name" value="{{$back->name}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Текст</label>
                                <div class="col-sm-9">
                                    <textarea id="form-control-1" class="form-control" rows="5" type="text" name="title">{{$back->title}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="img" value="{{$back->img}}">
                                    <input type="file" name="img">
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
