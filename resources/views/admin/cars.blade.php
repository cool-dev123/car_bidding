@extends('layouts.master')

@section('title')
    CarBidding | Cars
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Машины</h4>
                </div>
                <div class="cars-body">
                    <form action="/admin/filtercars" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" class="form-control uspageform" name="name" placeholder="Имя">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Стоянки</label>
                                    <select class="form-control selects uspageform" name="parking"
                                            id="exampleFormControlSelect1">
                                        <option value="">Не выбрано</option>
                                        @foreach($parkings as $parking)
                                            <option value="{{ $parking->address }}">{{ $parking->address }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Модель машины </label>
                                    <select class="form-control selects uspageform" name="model"
                                            id="exampleFormControlSelect1">
                                        <option value="">Не выбрано</option>
                                        @foreach($models as $model)
                                            <option value="{{ $model->id }}">{{ $model->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Состояния</label>
                                    <select class="form-control selects uspageform" name="state"
                                            id="exampleFormControlSelect1">
                                        <option value="">Не выбрано</option>
                                        @foreach($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Категории аукционов</label>
                                    <select class="form-control selects uspageform" name="auctioncat"
                                            id="exampleFormControlSelect1">
                                        <option value="">Не выбрано</option>
                                        @foreach($auctioncats as $auctioncat)
                                            <option value="{{ $auctioncat->id }}">{{ $auctioncat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Кузов машины </label>
                                    <select class="form-control selects uspageform" name="body"
                                            id="exampleFormControlSelect1">
                                        <option value="">Не выбрано</option>
                                        @foreach($bodies as $body)
                                            <option value="{{ $body->id }}">{{ $body->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="searchusers">Поиск</label>
                                    <button class="btn btn-primary searchusers" type="submit"><i
                                            class="now-ui-icons ui-1_zoom-bold"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    @foreach($cars as $car)
                        <div class="car-blok">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="/admin/cars/{{ $car->id }}">
                                        <h2>{{ $car->name }} | {{ $car->year }}</h2>
                                    </a>
                                </div>
                                @if($car->completed == '1')
                                    <div class="col-md-4">
                                        <button type="button" id="{{ $car->id }}" class="btn btn-danger unverif">Отменить</button>
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <button type="button" id="{{ $car->id }}" class="btn btn-success verif">Подвердить</button>
                                    </div>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="/img/{{ $car->mainpics }}" class="mainpicadmin"
                                         alt="mainpic">
                                </div>
                                <div class="col-md-9">
                                    <h4>ТЕКУЩАЯ ЦЕНА: {{ $car->currentPrice }}$</h4>
                                    <p>{{ $car->comments }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{ $cars->links() }}
                </div>
            </div>
@endsection

@section('scripts')

@endsection
