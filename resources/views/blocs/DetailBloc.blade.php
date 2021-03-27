
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Styles -->
       
    </head>
    <body>
	
	
	
	<h1 class="text-center my-5">{{$blockey->intitulé_fr}}</h1>
	<div class="container">
<div class= "card card-default">

<div class= "card-header">Informations</div>

<div class= "card-body">
<table>
<tr><td> Code bloc:</td><td> {{$blockey->code}}</td></tr>

<td>Intitulé en Francais:</td><td> {{ $blockey->intitulé_fr}}</td></tr>
<tr><td>Intitulé en Englais:</td><td> {{ $blockey->intitulé_en}}</td></tr>

<tr><td><a href="/blocs/{{$blockey->id}}/supprimer" class="btn btn-danger">Supprimer ce bloc</a></td></tr>



</table>

</div>
</div>
</div>
<br><br>
	
	
        
    </body>
</html>
