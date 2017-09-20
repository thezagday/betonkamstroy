@extends('layouts.admin_app')
@section('content')
    <div class="layout-content">
        <div class="layout-content-body">
            <h1 class="title-bar-title">Редактирование раздела "Отзывы"</h1>
            <p class="title-bar-description">Тут вы можете отредактировать раздел "Отзывы" </p><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="demo-form-wrapper">
                        <form action="" method="post" class="form form-horizontal">
                            @foreach ($backs as $item)

                                <input type="hidden" name="id" value="{{$item->id}}" disabled=""/>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="form-control-1"></label>
                                    <div class="col-sm-9">
                                        <div class="list-group">
                                            <a class="list-group-item" href="edit_item_back?id={!! $item->id !!}">
                                                <div class="pull-left m-r">
                                                    <img class="circle" width="40" height="40" src="{!! $item->img !!}" alt="img">
                                                </div>
                                                <div class="clear">
                                                    <small class="pull-right"><span class="icon icon-pencil"></span></small>
                                                    <h5 class="list-group-item-heading">{!! $item->name !!}</h5>
                                                    <small class="truncate">{!! $item->title !!}</small>
                                                </div>
                                            </a>
                                            <a class="list-group-item" href="delete_item_back?id={{$item->id}}">
                                                <div class="media">
                                                    <div class="media-middle media-body">
                                                        <h5 class="media-heading"><small>Удалить</small></h5>
                                                    </div>
                                                    <div class="media-middle media-right">
                                                        <span class="icon icon-remove"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="form-control-1"></label>
                                <div class="col-sm-9">
                                    <input type="button" class="btn-primary" id="input_btn" value="Добавить" onClick='location.href="add_back"'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

