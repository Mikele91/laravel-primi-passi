<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Contatti</h1>
        <ul>
            <li><a href="/">Home Page</a></li>
            <li><a href="/chi-siamo">chi-siamo</a></li>
        </ul>
        <h3>{{$nome}} {{$cognome}}</h3>
        <h3>{{$email}}</h3>
        <ul>
            @foreach ($framework as $item)
                <li>
                    {{$item}}
                </li>
                
            @endforeach
        </ul>

    </body>
</html>