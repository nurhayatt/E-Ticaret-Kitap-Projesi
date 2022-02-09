@extends('layouts.Admin.master')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if (session('status'))
                        <div class="aler alert-primary" role="aler">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Yazar Ekle</h4>
                            <p class="category">Yazar oluşturunuz</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{ route('admin.writer.create.post') }}"
                                method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yazar Adı</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yazar Resmi</label>
                                            <input type="file" name="image" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    </div>
                                     <div class="row">
                                       <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                          
                                            <input style="opacity:1; position: inherit;"type="file" name="image">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    </div>
                                     <div class="row">
                                       <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Yazar Bio</label>
                                            <textarea class="form-control"  name="bio" class="form-control"></textarea>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Yazar Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
