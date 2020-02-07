@extends('layouts.master')

@section('title')
    CarBidding | Users
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Модель машины</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1 founds">
                            <h2>Найдены: {{ count($models) }}</h2>
                        </div>
                    </div>
                    <div class="row searchboxmodel">
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
                    @if(count($models) == 0)
                        <div class="row onetime">
                            <div class="col-md-7"><h1>Ничего не найден </h1></div>
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
                    </div>
            </div>
        </div>
@endsection

@section('scripts')

@endsection
