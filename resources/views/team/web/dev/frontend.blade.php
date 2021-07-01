@extends('welcome')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($front as $items)
                    <div class="col-4">
                        <div class="card" style="width: 18rem">
                            <img src={{$items['photo']}} class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$items['nom']}}</h5>
                                <p class="card-text">{{$items['fonction']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection