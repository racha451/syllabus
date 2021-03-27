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
	

	



<h1 class="text-center">Nouveau module</h1>
<br><br>

<div class="container">
  
<br><br>



</div>

<div class="row justify-content-center">

<div class="col-md-8">





<form action="/store-modules" method="POST" class="form-example">
 
  @csrf
  
  
  
   
  <div class="container">
 
 <div class="card card-default">   
 <div class="card-body">
 
 
 @if($errors->any())
	
   <div class="alert alert-danger">
        <ul class="list-group">

              @foreach($errors->all() as $error)

                 <li class="list-group-item">{{ $error }}</li>

              @endforeach
        </ul>
		
	</div>
@endif

 <div class="form-group"> 
 <H5>Caucher les blocs auxquels ce module appartient </H5>
 <br>
 
 @foreach($blocs as $bloc)
	<div class="checkbox">
     
	 <label><input type="checkbox"  value="{{$bloc->id}}" name="check[]">{{$bloc->intitulé_fr}}</label>
	 
    </div>
	@endforeach
 <br>
  <input type="text" placeholder ="id-module" class="form-control" name="id" >
 
  <input type="text" placeholder ="Code-module" class="form-control" name="code" >

    <input type="text" class="form-control" placeholder ="Intitulé en Francais" name="intitulé_fr" >
   
	 <input type="text" class="form-control" placeholder ="Intitulé en Englais" name="intitulé_en" >


<select name="localisation" id="pet-select" class="form-control">
    <option value="">Localisation</option>
    <option value="Laval">Laval</option>
    <option value="Laval"> Paris-Ivry & Laval</option>

    <option value="ParisIvry">Paris/Ivry</option>
</select>



  <input type="text" placeholder ="TD(heures)" class="form-control" name="TD" >
  <input type="text" placeholder ="TP(heures)" class="form-control" name="TP" >
  <input type="text" placeholder ="Statut" class="form-control" name="statut" >   <input type="text" placeholder ="ECTS" class="form-control" name="ECTS" >
  <input type="text" placeholder ="Charge de travail(heures)" class="form-control" name="charge_travail" >
  <input type="text" placeholder ="Coefficient" class="form-control" name="coefficient" >
	
	
<textarea placeholder ="Résumé" class="form-control" cols="40"  name="resume"></textarea>

<textarea type="text" class="form-control" cols="15" placeholder ="Objectifs" name="objectis"></textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Prérequis" name="prerequis"></textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Méthodologie" name="methodologie"></textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Evaluation" name="evaluation"></textarea>

<textarea type="text" class="form-control" cols="15" placeholder ="Support" name="support"></textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Bibliographie" name="bibliographie"></textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Mots clés" name="mots_cles"></textarea>
<input type="submit" value="Rajouter!" class="btn btn-primary btn-sm float-right">
  
  
  
  
  
  
    </div>
    </div>
  
  </div>
  </div>
  
  </div>
</form>

</div>


 </body>
 
 </html>





