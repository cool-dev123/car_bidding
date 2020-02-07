@extends('layouts.master')

@section('title')
    CarBidding | Users
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Пользователи</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/searchuser" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Имя</label>
                                    <input type="text" class="form-control uspageform" name="fname" placeholder="Имя">
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Фамилия</label>
                                    <input type="text" class="form-control uspageform" name="sname"
                                           placeholder="Фамилия">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Должнсть</label>
                                    <select class="form-control selects uspageform" name="usertype"
                                            id="exampleFormControlSelect1">
                                        <option value="">Все</option>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Пол</label>
                                    <select class="form-control selects uspageform" name="gender"
                                            id="exampleFormControlSelect1">
                                        <option value="all">Все</option>
                                        <option value="male">Мужчина</option>
                                        <option value="female">Женский</option>
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
                                E-Mail адрес
                            </th>
                            <th>
                                Пол
                            </th>
                            <th>
                                Дата регистрации
                            </th>
                            <th>
                                Аватар
                            </th>
                            <th class="text-right">
                                Смотреть профиль
                            </th>
                            </thead>
                            <tbody>
                            <?php
                            $number = count($users);
                            ?>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$number}}.
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->gender}}
                                    </td>
                                    <td>
                                        {{$user->created_at}}
                                    </td>
                                    <td>
                                        @if ($user->avatar == '')
                                            @if ($user->gender == 'male')
                                                <img src="/img/avatar/images.png" alt="avatar" class="avatarusers">
                                            @endif
                                            @if ($user->gender  == 'female')
                                                <img
                                                    src="/img/avatar/female-avatar-profile-icon-round-african-american-vector-18307298.jpg"
                                                    class="avatarusers" alt="...">
                                            @endif
                                        @else
                                            <img src="/img/{{$user->avatar}}" class="avatarusers" alt="...">
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="/admin/users/{{$user->id}}">
                                            <button type="button" class="btn btn-primary">Смотреть</button>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                $number--;
                                ?>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
@endsection

@section('scripts')

@endsection
