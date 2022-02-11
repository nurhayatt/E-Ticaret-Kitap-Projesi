@extends('layouts.Admin.master')
@section('content')

             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Kategori Ekle</h4>
                                    <p class="category">Kategori oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{ route('admin.category.create.post')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if(session('status'))
                                                <div class="aler alert-primary" role="aler">
                                                    {{ session("status") }}
                                                </div>
                                                @endif
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Katergori Adı</label>
                                                    <input type="text" name="name" class="form-control" >
                                                <span class="material-input"></span></div>
                                            </div>
                                          
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary pull-right">Kategori Ekle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
@endsection