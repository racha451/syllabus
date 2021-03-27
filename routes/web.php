<?php

use Illuminate\Support\Facades\Route;
use App\Modules;
use App\Bloc;
use App\Bloc_modules;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('modules.welcome');
});

Route::get('modules','ModulesController@index');
Route::get('modules/{module}','ModulesController@show');
Route::get('new-module','ModulesController@create');
Route::post('store-modules','ModulesController@store');
Route::get('modules/{module}/modifier','ModulesController@modifier');

Route::get('modules/{module}/supprimer','ModulesController@supprimer');


Route::post('store-modules','ModulesController@store');
Route::post('modules/{module}/update-modules','ModulesController@update');


Route::get('modulebloc','ModulesController@index2');

Route::get('blocs','BlocController@index');
Route::get('blocs/{bloc}','BlocController@afficher'); 
Route::get('nouveau-bloc','BlocController@nouveau');

Route::post('store-blocs' ,'BlocController@store');

Route::get('blocs/{bloc}/supprimer','BlocController@supprimer'); 

Route::get('blocs/{bloc}','BlocController@afficher'); 

Route::get('Bloc_modules','Bloc_modulesController@index');

Route::get('bloc/module', function(){

	
	
	
	$blocs = Bloc::All();
	
	echo "<html>";
	
	 echo "<head>";
	echo"<style>";
	echo"
	table, th, td {
     border: 1px solid black;
	  margin-left: auto;
    margin-right: auto;
	margin-top: auto;
	  width: 60%;
	  }";
	  
	  
	  	echo"
	body{
   body{overflow:scroll;};
	  }";
	  
	  
	  
	
	echo"</style>";


	

	echo "</head>";
		
	echo "<body>";
    echo "<h1>";
	echo "Page Blocs/Modules ";
	echo "</h1>";
	echo"<br>";
	echo"<br>";
	
	
	echo "<table>";
	echo "<tr><td>BLOCS</td><td>MODULES ASSOCIES</td><tr>";
	
foreach($blocs as $bloc){
	echo("<tr>");
	
	echo("<td>");

	echo $bloc->intitulé_fr ;
	
    echo("</td>");  
   echo "<td>";
	foreach($bloc->modules as $mm){ 
	
     echo "<li>";
	 echo $mm-> intitulé_fr;
	 }
	 echo "</td>";
 echo("</tr>");

}
 echo "</table>";
    echo"</body>";
	echo"</div>";
	echo "</html>";});
;
	
	

