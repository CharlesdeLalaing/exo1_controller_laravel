<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <section>
        <div class="container-fluid mt-5">
            <div class="row row-cols-4 mt-5 justify-content-evenly">
                @foreach ($frontends as $frontend)
                    <div class="col">
                        <div class="card" style="">
                            <img class='card-img-top' src="{{ asset('images/' . $frontend->photo) }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $frontend->nom }}</h5>
                                <p class="card-text">{{ $frontend->fonction }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- le if en dessous sert à ce que si la div row de 12 est complete, va en faire une autre pour stocker dans une nouvelle row  on ferme la div d'avant et on laisse ouverte celle d'apres--}}
                    @if ($loop->iteration%3 == 0)
                        </div>
                        <div class="row row-cols-4 mt-5 justify-content-evenly"> {{-- regarde ici ya pas de fin --}}
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
