
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

	<div class="container">

	
	<h1 class="text-center my-5">{{ $singlemoduleInfos->intitulé_fr}}</h1>
	
	
		<div class="container" align="right">
<tr><td><a href="/modules/{{$singlemoduleInfos->id}}/modifier" class="btn btn-info">Modifier les informations du module</a></td></tr>
<tr><td><a href="/modules/{{$singlemoduleInfos->id}}/supprimer" class="btn btn-danger">Supprimer le module</a></td></tr>

</div>
<br><br>
<div class= "card card-default">

<div class= "card-header">Informations</div>

<div class= "card-body">

<table>
	
	
<tr><td> Code module:</td><td> {{ $singlemoduleInfos->code}}</td></tr>

<td>Intitulé en Francais:</td><td> {{ $singlemoduleInfos->intitulé_fr}}</td></tr>
<tr><td>Intitulé en Englais:</td><td> {{ $singlemoduleInfos->intitulé_en}}</td></tr>
<tr><td>ECTS:</td><td> {{ $singlemoduleInfos->ECTS}}</td></tr>
<tr><td>TD:</td><td> {{ $singlemoduleInfos->TD}}heures</td></tr>
<tr><td>TP:</td><td> {{ $singlemoduleInfos->TP}}heures</td></tr>
<tr><td>PRaut:</td><td> {{ $singlemoduleInfos->PRaut}}</td></tr>
<tr><td>Localisation:</td><td> {{ $singlemoduleInfos->localisation}}</td></tr>
<tr><td>Statut:</td><td> {{ $singlemoduleInfos->statut}}</td></tr>
<tr><td>Coéfficient:</td><td> {{ $singlemoduleInfos->coéfficient}}</td></tr>
<tr><td>ECTS:</td><td> {{ $singlemoduleInfos->ECTS}}</td></tr>
<tr><td>Charge de travail:</td><td> {{ $singlemoduleInfos->charge_travail}}</td></tr>
<<tr><td>Résumé:</td><td> {{ $singlemoduleInfos->resume}}</td></tr>
<tr><td>Objectifs:</td><td> {{ $singlemoduleInfos->objectifs}}</td></tr>
<tr><td>Prérequis:</td><td> {{ $singlemoduleInfos->prerequis}}</td></tr>
<tr><td>Méthodologie:</td><td> {{ $singlemoduleInfos->methodologie}}</td></tr>
<tr><td>Evaluation:</td><td> {{ $singlemoduleInfos->evaluation}}</td></tr>
<tr><td>Support:</td><td> {{ $singlemoduleInfos->support}}</td></tr>
<tr><td>Bibliographie:</td><td> {{ $singlemoduleInfos->bibliographie}}</td></tr>
<tr><td>Créé le:</td><td> {{ $singlemoduleInfos->created_at}}</td></tr>
<tr><td>Mis à jour le:</td><td> {{ $singlemoduleInfos->created_at}}</td></tr>



<br><br>

</table>
</div>
</div></div>
<br><br>
	
	
        
    </body>
</html>
