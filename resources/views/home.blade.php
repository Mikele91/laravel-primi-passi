<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>HOME</h1>
        <ul>
            <li><a href="/">Home Page</a></li>
            <li><a href="/chi-siamo">chi-siamo</a></li>

        </ul>
        <h2>Programmato da {{$nome}} {{$cognome}}</h2>
        <ul>
            <h3>linguaggi conosciuti </h3>
            @foreach($linguaggiStudiati as $linguaggio)
                <li>{{$linguaggio}}</li>
            @endforeach
            
        </ul>
    </body>
</html>