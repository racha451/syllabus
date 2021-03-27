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
	

	



<h1 class="text-center"> Modifier</h1>
<br><br>
<div class="row justify-content-center">

<div class="col-md-8">


<form action="/modules/{{$singlemoduleInfos->id}}/update-modules" method="POST" class="form-example">
 
  @csrf
 <div class="form-group">
  <input type="text" placeholder ="Code-module" class="form-control" name="id" value="{{$singlemoduleInfos->id}}" >

    <input type="text" class="form-control" placeholder ="Intitulé en Francais" name="intitulé_fr" value="{{ $singlemoduleInfos->intitulé_fr}}" >
   
	 <input type="text" class="form-control" placeholder ="Intitulé en Englais" name="intitulé_en" value="{{ $singlemoduleInfos->intitulé_en}}" >


<select name="localisation" id="pet-select" class="form-control" value="{{ $singlemoduleInfos->localisation}}">
    <option value="">Localisation</option>
    <option value="Laval">Laval</option>
    <option value="Laval"> Paris-Ivry & Laval</option>

    <option value="ParisIvry">Paris/Ivry</option>
</select>




  <input type="text" placeholder ="TD(heures)" class="form-control" name="TD" value="{{ $singlemoduleInfos->TD}}" >
  <input type="text" placeholder ="TP(heures)" class="form-control" name="TP" value="{{ $singlemoduleInfos->TP}}">
  <input type="text" placeholder ="Statut" class="form-control" name="statut" value="{{ $singlemoduleInfos->statut}}" >   
  <input type="text" placeholder ="ECTS" class="form-control" name="ECTS" value="{{$singlemoduleInfos->ECTS}}">
  <input type="text" placeholder ="Charge de travail(heures)" class="form-control" name="charge_travail" value="{{ $singlemoduleInfos->charge_travail}}">
  <input type="text" placeholder ="Coefficient" class="form-control" name="coefficient" value="{{ $singlemoduleInfos->coefficient}}">
	
	
<textarea placeholder ="Résumé" class="form-control" cols="40"  name="resume" >{{$singlemoduleInfos->resume}}</textarea>

<textarea type="text" class="form-control" cols="15" placeholder ="Objectifs" name="objectis" >{{ $singlemoduleInfos->objectis}}</textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Prérequis" name="prerequis" >{{ $singlemoduleInfos->prerequis}}</textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Méthodologie" name="methodologie" >{{ $singlemoduleInfos->methodologie}}</textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Evaluation" name="evaluation" }>{{ $singlemoduleInfos->evaluation}}</textarea>

<textarea type="text" class="form-control" cols="15" placeholder ="Support" name="support" >{{ $singlemoduleInfos->support}}</textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Bibliographie" >{{ $singlemoduleInfos->bibliographie}}</textarea>
<textarea type="text" class="form-control" cols="15" placeholder ="Mots clés" name="mots_cles" >{{ $singlemoduleInfos->mots_cles}}</textarea>
<input type="submit" value="Enregistrer " class="btn btn-primary  btn-lg float-right">
  
  
  
  
  
  
  
  
  
  
  </div>
</form>

</div>


 </body>
 
 </html>





