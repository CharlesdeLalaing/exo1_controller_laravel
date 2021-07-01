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
        <div class="row">
            @foreach ($backends as $backend)
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class='card-img-top' src="{{asset('images/' .$backend->photo)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$backend->nom}}</h5>
                            <p class="card-text">{{$backend->fonction}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
