@extends('welcome')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($back as $items)
                    @if ($loop->iteration <= 3)
                        <div class="col-4">
                            <div class="card" style="width: 18rem">
                                <img src={{ $items['photo'] }} class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $items['nom'] }}</h5>
                                    <p class="card-text">{{ $items['fonction'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @foreach ($front as $items)
                    @if ($loop->iteration <= 3)
                        <div class="col-4">
                            <div class="card" style="width: 18rem">
                                <img src={{ $items['photo'] }} class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $items['nom'] }}</h5>
                                    <p class="card-text">{{ $items['fonction'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.info.forminfo')
    @include('partials.home.presentation')
@endsection
