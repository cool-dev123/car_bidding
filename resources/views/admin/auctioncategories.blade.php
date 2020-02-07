@extends('layouts.master')

@section('title')
    CarBidding | Auctions Categories
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Категории аукционов</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Добавить категориу аукциона</label>
                                <input type="text" class="form-control" id="valauctioncatinp"
                                       placeholder="Add auction categor">
                            </div>
                        </div>
                        <div class="col-md-2 pr-1">
                            <div class="form-group">
                                <label></label>
                                <button id="auctioncatadd" type="button" class="btn btn-success">Добавить</button>
                            </div>
                        </div>
                    </div>
                    @if(count($auctioncats) == 0)
                        <div class="row onetime">
                            <div class="col-md-7"><h1>Создайте ваш первый аукцион</h1></div>
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
                                <tbody id="auctioncattable">
                                    <?php
                                    $numberauctioncat = 1;
                                    ?>
                                    @foreach($auctioncats as $auctioncat)
                                        <tr id="{{$auctioncat->id}}">
                                            <td>
                                                {{ $numberauctioncat }}.
                                            </td>
                                            <td>
                                                {{ $auctioncat->name }}
                                            </td>
                                            <td>
                                                <button type="button" data-id="{{$auctioncat->id}}"
                                                        class="btn btn-danger delauctioncatcar">Удалить
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $numberauctioncat++;
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
