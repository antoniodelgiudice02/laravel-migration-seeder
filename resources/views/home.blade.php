<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <h1>Trains</h1>
    <ul>

      @forelse($trains as $train)

        <li>{{ $train->Stazione_di_arrivo }}</li>

      @endforelse
      
    </ul>
  </body>

</html>
