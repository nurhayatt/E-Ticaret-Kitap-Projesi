@extends('layouts.app')
@section('content')

  
    <div class="product">
        <div class="container">
            <div class="product-top">
                @foreach ($data->chunk(4) as $chunk)
                    <div class="product-one">
                        @foreach ($chunk as $key => $value)
                            <div class="col-md-3 product-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="{{ route('book.detail', ['selflink'=> $value['selflink']]) }}" class="mask"><img class="img-responsive zoom-img"
                                            src="images/p-1.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>{{ $value['name'] }}</h3>
                                        <p>{{ App\Model\Writers::getField($value['writer_id'],"name") }}</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span
                                                class=" item_price">{{ $value['price'] }}</span></h4>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                      
                        {{ $data->links() }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
