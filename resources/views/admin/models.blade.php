@extends('layouts.master')

@section('title')
    CarBidding | Cars Models
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Модель машины</h4>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label></label>
                                <form action="/admin/searchmodel" method="GET">
                                    <div class="input-group no-border">
                                        <input type="text" name="model" class="form-control" placeholder="Search...">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <button class="searchbut" type="submit"><i
                                                        class="now-ui-icons ui-1_zoom-bold"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('upload.image')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row searching">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Добавить модель машины</label>
                                    <input type="text" class="form-control" id="valmodelinp" name="model" placeholder="Add car model">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label></label>
                                <input type="file" name="modelicon" id="modelicon" value="Add-img">
                            </div>
                            <div class="col-md-2 pr-1">
                                <div class="form-group">
                                    <label></label>
                                    <button id="modeladd" name="modeladd" type="submit" class="btn btn-success">Добавить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @if(count($models) == 0)
                        <div class="row onetime">
                            <div class="col-md-7"><h1>Создайте ваш первый модель </h1></div>
                            <div class="col-md-2"><img class="onepng" src="/img/design_img/number1_PNG14871.png" alt="">
                            </div>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    #
                                </th>
                                <th>
                                    Имя модельа
                                </th>
                                <th>
                                    Icon
                                </th>
                                <th>
                                    Удалить
                                </th>
                                </thead>
                                <tbody id="modeltable">
                                <?php
                                $numbermodels = 1;
                                ?>
                                @foreach($models as $model)
                                    <tr id="{{$model->id}}">
                                        <td>
                                            {{ $numbermodels }}.
                                        </td>
                                        <td>
                                            {{ $model->name }}
                                        </td>
                                        <td>
                                            <img src="/img/{{$model->icons}}" class="iconmodel"
                                                 alt="iconmodel">
                                        </td>
                                        <td>
                                            <button type="button" data-id="{{$model->id}}"
                                                    class="btn btn-danger delmodelcar">Удалить
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    $numbermodels++;
                                    ?>
                                @endforeach
                                </tbody>
                                @endif
                            </table>
                            {{ $models->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
