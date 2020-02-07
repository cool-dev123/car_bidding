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
                    <div class="row">
                        <div class="col-md-5 pr-1 founds">
                            <h2>Найдены: {{ count($cars) }}</h2>
                        </div>
                    </div>
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
                </div>
            </div>
@endsection

@section('scripts')

@endsection
