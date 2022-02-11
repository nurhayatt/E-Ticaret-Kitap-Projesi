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
                            <h4 class="title">Kitap Düzenle</h4>
                            <p class="category">{{ $data[0]['name'] }}</p>
                        </div>
                        <div class="card-content">
                            <form action="{{ route('admin.book.edit.post', ['id'=>$data[0]['id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                          
                                            <input type="text" name="name"  value="{{$data[0]['name'] }}" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Kitap Resmi</label>
                                            <input type="file" name="image" style="opacity:1; position:inherit;">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <select class="form-control" name="writer_id" id="">
                                                @foreach ($writers as $key => $value)
                                                    <option @if($value['id']==$data[0]['writer_id']) @endif

                                                    value="{{ $value['id'] }}">
                                                        {{ $value['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                                     <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <select class="form-control" name="category_id" id="">
                                                @foreach ($catgory as $key => $value)
                                                    <option @if($value['id']==$data[0]['category_id']) @endif

                                                    value="{{ $value['id'] }}">
                                                        {{ $value['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <select class="form-control" name="publisher_id" id="">
                                                @foreach ($publishers as $key => $value)
                                                    <option   @if($value['id']==$data[0]['publisher_id']) @endif value="{{ $value['id'] }}">
                                                        {{ $value['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Kitap Fiyatı</label>
                                            <input type="text" name="price" class="form-control" value="{{$data[0]['price'] }}">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            
                                            <textarea class="form-control" name="description" cols="30" rows="10">{{ $data[0]['description'] }}</textarea>
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Kitap Düzenle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
