@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование раздела "Слайдер"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать раздел "Слайдер"</p>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/update_slider" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            <p>
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$slider->id}}">

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок 1</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title1" value="{{$slider->title1}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок 2</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title2" value="{{$slider->title2}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="img" value="{{$slider->img}}">
                                    <input type="file" name="img">
                                </div>
                            </div>


                            </p>
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