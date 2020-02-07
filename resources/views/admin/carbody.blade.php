@extends('layouts.master')

@section('title')
    CarBidding | Car Body
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Кузов машины</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Добавить кузов машины</label>
                                <input type="text" class="form-control" id="valbodyinp" placeholder="Add car body">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label></label>
                            <input type="file" name="avatar" id="bodyicon" value="Add-img">
                        </div>
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label></label>
                                <button id="bodyadd" type="button" class="btn btn-success">Добавить</button>
                            </div>
                        </div>
                    </div>
                    @if(count($bodies) == 0)
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
                                    Icon
                                </th>
                                <th>
                                    Удалить
                                </th>
                                </thead>
                                <tbody id="bodytable">
                                <?php
                                $numberbody = 1;
                                ?>
                                @foreach($bodies as $body)
                                    <tr id="{{$body->id}}">
                                        <td>
                                            {{ $numberbody }}.
                                        </td>
                                        <td>
                                            {{ $body->name }}
                                        </td>
                                        <td>
                                            <img src="/img/{{$body->icons}}" class="iconbody" alt="iconbody">
                                        </td>
                                        <td>
                                            <button type="button" data-id="{{$body->id}}"
                                                    class="btn btn-danger delbodycar">Удалить
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    $numberbody++;
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
