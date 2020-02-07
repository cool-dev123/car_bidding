@extends('layouts.master')

@section('title')
    CarBidding | States
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Состояния</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Добавить кузов машины</label>
                                <input type="text" class="form-control" id="valstateinp" placeholder="Add car state">
                            </div>
                        </div>
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label></label>
                                <button id="stateadd" type="button" class="btn btn-success">Добавить</button>
                            </div>
                        </div>
                    </div>
                    @if(count($states) == 0)
                        <div class="row onetime">
                            <div class="col-md-7"><h1>Создайте вашу первую категорию</h1></div>
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
                                    Имя
                                </th>
                                <th>
                                    Удалить
                                </th>
                                </thead>
                                <tbody id="statetable">
                                <?php
                                $numberstate = 1;
                                ?>
                                @foreach($states as $state)
                                    <tr id="{{ $state->id }}">
                                        <td>
                                            {{ $numberstate }}.
                                        </td>
                                        <td>
                                            {{ $state->name }}
                                        </td>
                                        <td>
                                            <button type="button" data-id="{{$state->id}}"
                                                    class="btn btn-danger delstatecar">Удалить
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    $numberstate++;
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
