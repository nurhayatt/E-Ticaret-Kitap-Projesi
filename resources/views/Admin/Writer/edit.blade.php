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
                            <h4 class="title">Yazar Düzenle</h4>
                            <p class="category">{{ $data[0]['name'] }}</p>
                        </div>
                        <div class="card-content">
                            <form enctype="multipart/form-data" action="{{ route('admin.writer.edit.post',['id'=>$data[0]['id']]) }}"
                                method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            
                                            <input type="text" name="name"  value="{{$data[0]['name'] }}"class="form-control">
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
                                            
                                            <textarea class="form-control"  name="bio"   class="form-control">{{$data[0]['bio'] }}</textarea>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Yazar Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
