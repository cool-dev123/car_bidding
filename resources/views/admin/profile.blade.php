@extends('layouts.master')

@section('title')
    CarBidding | Admin profile
@endsection


@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Админ профиль</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Дата регистрации</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Created_at"
                                           value="{{Auth::user()->created_at}}">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label>Дата изменение</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Updated_at"
                                           value="{{Auth::user()->updated_at}}">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email адрес</label>
                                    <input type="email" class="form-control" placeholder="{{Auth::user()->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Имя</label>
                                    <input type="text" class="form-control" placeholder="Company"
                                           value="{{Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Фамилия</label>
                                    <input type="text" class="form-control" placeholder="Last Name"
                                           value="{{Auth::user()->sname}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Адрес</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                           value="{{Auth::user()->address}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Должнсть </label>
                                    <input type="text" class="form-control" placeholder="UserType"
                                           value="{{Auth::user()->usertype}}">
                                </div>
                            </div>
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>Телефон</label>
                                    <input type="text" class="form-control" placeholder="Phone"
                                           value="{{Auth::user()->phone}}">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" placeholder="PostCode"
                                           value="{{Auth::user()->postcode}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Дополнительно</label>
                                    <textarea rows="4" cols="80" class="form-control" placeholder="Text..."
                                              value="{{Auth::user()->additionally}}">{{Auth::user()->additionally}}</textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="../assets/img/security.jpg" alt="...">
                </div>
                <div class="card-body">
                    <div class="author">
                        <a href="#">
                            @if (Auth::user()->avatar == '')
                                @if (Auth::user()->gender == 'male')
                                    <img class="avatar border-gray" src="/img/avatar/images.png" alt="...">
                                @endif
                                @if (Auth::user()->gender == 'female')
                                    <img class="avatar border-gray"
                                         src="/img/avatar/female-avatar-profile-icon-round-african-american-vector-18307298.jpg"
                                         alt="...">
                                @endif
                            @else
                                <img class="avatar border-gray" src="/img/{{Auth::user()->avatar}}" alt="...">
                            @endif
                            <h5 class="title">{{Auth::user()->name}} {{Auth::user()->sname}}</h5>
                        </a>
                        <p class="description">
                            {{Auth::user()->usertype}}
                        </p>
                    </div>
                    <p class="description text-center">
                        {{Auth::user()->additionally}}
                    </p>
                </div>
                <hr>
                <div class="button-container">
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                    </button>
                    <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-g"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
