@extends('layouts.Admin.master')
@section('content')

             <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Yayın Evi Ekle</h4>
                                    <p class="category">Yayın Evi oluşturunuz</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{ route('admin.publisher.create.post')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                @if(session('status'))
                                                <div class="aler alert-primary" role="aler">
                                                    {{ session("status") }}
                                                </div>
                                                @endif
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Yayın Evi Adı</label>
                                                    <input type="text" name="name" class="form-control" >
                                                <span class="material-input"></span></div>
                                            </div>
                                          
                                        </div>
                                      
                                        <button type="submit" class="btn btn-primary pull-right">Yayın Evi Ekle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
@endsection