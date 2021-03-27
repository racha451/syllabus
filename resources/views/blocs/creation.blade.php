<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

        <!-- Styles -->
       
    </head>
<body>
	

	



<h1 class="text-center">Créer un nouveau bloc</h1>
<br><br>
 <div class="container">



<form action="/store-blocs" method="POST" class="form-example">
 
  @csrf
 <div class="form-group">
  <input type="text" placeholder ="Code-Bloc" class="form-control" name="code" >
  <input type="text" class="form-control" placeholder ="Intitulé en Francais" name="intitulé_fr" >  
  <input type="text" class="form-control" placeholder ="Intitulé en Englais" name="intitulé_en" >



<input type="submit" value="Rajouter!"  class="btn btn-primary  btn-lg float-right">
   
  

</form>

</div>
  
  </div>

 </body>
 
 </html>

