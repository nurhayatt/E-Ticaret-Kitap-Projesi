@extends('layouts.Admin.master')
@section('content')
                <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                         
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Sipariş Listesi</h4>
                                    <p class="category">Burada eklenen siparişleri listesini bulabilirsiniz. </p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Alıcı</th>
                                            <th>Adres</th>
                                            <th>Telefon</th>
                                            <th>Mesaj</th>
                                            <th>Düzenle</th>
                                            <th>Sil</th>
                                           
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $value)
                                                <tr>
                                                <td>{{ App\Model\User::getField($value['user_id'],'name')}}</td>
                                                <td>{{ $value["adress"]}}</td>
                                                <td>{{ $value["phone"]}}</td>
                                                <td>{{ $value["message"]}}</td>
                                                <td><a href="{{ route('admin.order.detail',['id'=>$value['id']]) }}">Düzenle</a></td>
                                                <td><a href="{{ route('admin.order.delete',['id'=>$value['id']]) }}">Sil</a></td>

                                            </tr>
                                            @endforeach
                                    
                                        </tbody>
                                    </table>
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
@endsection