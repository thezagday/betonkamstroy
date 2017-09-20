@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование "{{strip_tags($work->title)}}"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать пункт меню "{{strip_tags($work->title)}}"</p><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="update_item_work" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{$work->id}}"/>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
                                <div class="col-sm-9">
                                    <textarea id="form-control-1" class="form-control" rows="5" type="text" name="title">{{$work->title}}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="img" value="{{$work->img}}">
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
