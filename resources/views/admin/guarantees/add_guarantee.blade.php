@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Добавление нового пункта "Наши гарантии" </h1>
            <p class="title-bar-description">Тут вы можете добавить новый пункт в раздел "Наши гарантии"</p><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="/add_guarantee" method="post" class="form form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Заголовок</label>
                                <div class="col-sm-9">
                                    <textarea id="form-control-1" class="form-control" rows="5" name="title" ></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1">Картинка</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="img" value="">
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
