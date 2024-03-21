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
    <table class="table">
      <thead>
        <tr>
          <th>Train ID</th>
          <th>Agenzia</th>
          <th>Stazione di partenza</th>
          <th>Stazione di arrivo</th>
          <th>Orario di partenza</th>
          <th>Orario di arrivo</th>
          <th>Codice treno</th>
          <th>Numero carrozze</th>
          <th>In orario</th>
          <th>Cancellato</th>

        </tr>
      </thead>
      <tbody>
        @forelse($trains as $train)
        <tr>
        <td>{{$train->id}}</td>

          <td>{{$train->Azienda}}</td>
          <td>{{$train->Stazione_di_partenza}}</td>
          <td>{{$train->Stazione_di_arrivo}}</td>
          <td>{{$train->Orario_di_partenza}}</td>
          <td>{{$train->Orario_di_arrivo}}</td>
          <td>{{$train->Codice_treno}}</td>
          <td>{{$train->Numero_di_carrozze}}</td>
          <td>{{$train->In_orario}}</td>
          <td>{{$train->Cancellato}}</td>
        </tr>
        @empty
        <tr>
          <td colspan="100%">no trains</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </body>

</html>
