<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->



<nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Welcome page </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/new-module">Nouveau module</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/blocs">Blocs</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/new-module">Nouveau module</a>
      </li>
      

     <li class="nav-item">
        <a class="nav-link" href="bloc/module">Bloc/modules</a>
      </li>
      
    </ul>
  </div>
</nav>




    </head>
    <body>
	     <div class="overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light" style="max-width: 1400px; max-height: 1000;">

       <div class="container">
            <div class="content">
                <div class="title m-b-md">
                  <h1 class="text-center" my>  Modules</h1>
				  <br><br><br><br>
				  <div class= "card card-default">
				       
				      <div class= "card-header">Modules</div>
					  
					    <div class= "card-body">
					  </div>
				 
             <ul class="list-group">				 
				   @foreach ($moduleskey as $module)
				   <li class="list-group-item">
				   
				   {{ $module->intitulé_fr}}
				  
				   <a href="/modules/{{$module->id}} class="btn btn-primary btn-sm float-right">Contenu</a>
				   </li>
				   
				   @endforeach
                </div>
              </ul>
			  
			  </div>
                
             
                </div>
            </div>
         </div>
    </body>
	
</html>

