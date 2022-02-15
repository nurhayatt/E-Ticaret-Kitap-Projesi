@extends('layouts.Admin.master')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Sipariş Detayı</h4>

                        </div>
                        <div class="card-content">

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Alıcı</label>
                                        {{ App\Model\User::getField($data[0]['user_id'], 'name') }}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Adres</label>
                                        {{ $data[0]['address'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Telefon</label>
                                        {{ $data[0]['phone'] }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group label-floating is-empty">
                                        <label>Mesaj</label>
                                        {{ $data[0]['message'] }}
                                    </div>
                                </div>
                            </div>
                            @foreach (json_decode($data[0]['json'], true) as $key => $value)
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group label-floating is-empty">
                                            <label>Kitap Adı</label>
                                            {{ $value['name'] }}
                                            <br>
                                              <label>Kitap Fiyaatı</label>
                                            {{ $value['price'] }}TL
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection
