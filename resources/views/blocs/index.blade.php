<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Styles -->
        
    </head>
    <body>
	
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Welcome page </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nouveau-bloc">Nouveau bloc</a>
      </li>
        </li>
	  <li class="nav-item">
        <a class="nav-link" href="/modules">Modules</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-width: 1400px; max-height: 1000px;">

	<h1 align="center" >Blocs</h1>
	
<br><br><br><br><br><br>

 
  <div class="container">
 
 <div class="card card-default">   
 <div class="card-body">
               
				 @foreach($blocs as $bloc)
                    <li class="list-group-item">				 
					{{$bloc->intitulé_fr}}
					<a href="/blocs/{{$bloc->id}}" class="btn btn-primary float-right">Détails</a>
                    </li>
                @endforeach
				
				
        
</div>
 	
</div>
<br><br>
<a href="nouveau-bloc" class="btn btn-primary float-right">Créer un bloc</a>

 </div>
  </div>
    </body>
</html>
