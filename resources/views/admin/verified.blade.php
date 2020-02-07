@extends('layouts.master')

@section('title')
    CarBidding | Cars
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Подверждённые аукционы </h4>
                </div>
                <div class="cars-body">
                    @foreach($cars as $car)
                        <div class="car-blok">
                            <div class="row">
                                <div class="col-md-8">
                                    <a href="/admin/cars/{{ $car->id }}">
                                        <h2>{{ $car->name }} | {{ $car->year }}</h2>
                                    </a>
                                </div>
                                    <div class="col-md-4">
                                        <button type="button" id="{{ $car->id }}" class="btn btn-danger unverif">Отменить</button>
                                    </div>
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
