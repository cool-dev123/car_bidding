@extends('layouts.master')

@section('title')
    CarBidding | Cars
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ $car->name }}</h4>
                </div>
                <div class="cars-body">
                    <div class="car-blok">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="/img/{{ $car->mainpics }}" class="mainpicadmin"
                                     alt="mainpic">
                            </div>
                            <div class="col-md-4">
                                <p>Год выпуска: {{ $car->year }}</p>
                                <p>Пробег: {{ $car->milage }}км</p>
                                <p>Цвет: {{ $car->color }}</p>
                                <p>Модель, номер двигателя: {{ $car->engNumber }}</p>
                                <p>Двигатель: {{ $car->engine }}</p>
                                <p>Коробка передач: {{ $car->transmission }}</p>
                            </div>
                            <div class="col-md-5">
                                <h6>Начальная цена: {{ $car->startingPrice }}$</h6>
                                <h6>Шаг аукциона: {{ $car->auctionStep }}$</h6>
                                <h6>Текущая цена: {{ $car->currentPrice }}$</h6>
                                <h6>Начало аукциона: {{ $car->auctionStart }}</h6>
                                <h6>Окончание аукциона: {{ $car->endOfAuction }}</h6>
                                @if($car->completed == '1')
                                    <button type="button" id="{{ $car->id }}" class="btn btn-danger unverif">Отменить
                                    </button>
                                @else
                                    <button type="button" id="{{ $car->id }}" class="btn btn-success verif">Подвердить
                                    </button>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 descript">
                                <h5>Описание</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 commentsadmin">
                                <p>{{ $car->comments }}</p>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-6">
                                @foreach($images as $image)
                                    <img class="carimages" src="/img/auctions/{{ $image->name }}" alt="">
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection

@section('scripts')

@endsection
