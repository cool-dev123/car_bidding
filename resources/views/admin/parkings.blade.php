@extends('layouts.master')

@section('title')
    CarBidding | Parkings
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Стоянки</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Добавить стоянку машин</label>
                                <input type="text" class="form-control" id="valparkinginp"
                                       placeholder="Add car parking">
                            </div>
                        </div>
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label></label>
                                <button id="parkingadd" type="button" class="btn btn-success">Добавить</button>
                            </div>
                        </div>
                    </div>
                    @if(count($parkings) == 0)
                        <div class="row onetime">
                            <div class="col-md-7"><h1>Создайте вашу первую стоянку</h1></div>
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
                                    Адрес
                                </th>
                                <th>
                                    Удалить
                                </th>
                                </thead>
                                <tbody id="parkingtable">
                                    <?php
                                    $numberparking = 1;
                                    ?>
                                    @foreach($parkings as $parking)
                                        <tr id="{{$parking->id}}">
                                            <td>
                                                {{ $numberparking }}.
                                            </td>
                                            <td>
                                                {{ $parking->address }}
                                            </td>
                                            <td>
                                                <button type="button" data-id="{{$parking->id}}"
                                                        class="btn btn-danger delparkingcar">Удалить
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $numberparking++;
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
