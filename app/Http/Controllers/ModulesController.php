<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules;
use App\Bloc;
use App\Bloc_modules;
class ModulesController extends Controller
{


     public function index(){
		 
		 
		 $module=Modules::All();
		 
		 return view('modules.index')->with('moduleskey',$module);
	 }
	    
		
	
	 
	 
	   public function show($moduleId){
		  
		  return view('modules.show')->with('singlemoduleInfos',Modules::find($moduleId));
		 
		  }

       public function create(){
		
		
		 $bb=Bloc::all();
		  return view('modules.create')->with('blocs',$bb);
		  }


       public function store(){
		   
		   
		  $this->validate(request(),[
		  
		  'id' => 'required',
		  'intitulé_fr' => 'required',
		  'code' => 'required'

		  ]);
		  
		  $data=(request()->all());
	
          $module= new Modules();
		  
          $module->id =$data['id'];
		  $module->code =$data['code'];
		  $module->intitulé_fr=$data['intitulé_fr'] ;
		  $module->intitulé_en=$data['intitulé_en'];
		  $module->localisation=$data['localisation'] ;
		  $module->TD=$data['TD'];
 
          $module->TP=$data['TP'];
		  $module->statut=$data['statut'] ;
		  $module->charge_travail=$data['charge_travail'];
		  $module->coefficient=$data['coefficient'] ;
		  $module->resume=$data['resume'];
		  
		  
		  $module->objectis=$data['objectis'];
		  $module->prerequis=$data['prerequis'] ;
		  $module->methodologie=$data['methodologie'];
		  $module->evaluation=$data['evaluation'] ;
		  $module->support=$data['support'];
		  
		  
		  $module->bibliographie=$data['bibliographie'];
		  $module->mots_cles=$data['mots_cles'] ;
		 
	    $xx= request()->check;
		 
		 
	    $tt= $module->intitulé_fr;
		
        $ss=$module->blocs()->attach($xx,['status' =>$tt]);
		
        $module->save();
		return redirect('/modules');




}





			
			
           public function modifier($moduleId){
            
			$module =Modules::find($moduleId);
			 return view('modules.modifier')->with('singlemoduleInfos',$module);
			}
			
			
			
			
			
				
			
           public function supprimer($moduleId){
            
			$module =Modules::find($moduleId);
			$module->delete(); 
			 return redirect('/modules');
			}
			
        public function update($moduleId){
			
		$data =request()->all();
		$module =Modules::find($moduleId);
		$module->id = $data ['id'];
		$module->intitulé_fr = $data ['intitulé_fr'];
		$module->intitulé_en = $data ['intitulé_en'];
		$module->localisation = $data ['localisation'];
		$module->TD = $data ['TD'];
		$module->TP = $data ['TP'];
		
			$module->statut = $data ['statut'];
		$module->ECTS = $data ['ECTS'];
		$module->charge_travail = $data ['charge_travail'];
		$module->coefficient = $data ['coefficient'];
		$module->resume = $data ['resume'];
		$module->objectis = $data ['objectis'];
		
		
		
		
		$module->prerequis = $data ['prerequis'];
		$module->methodologie = $data ['methodologie'];
		$module->evaluation = $data ['evaluation'];
		$module->support = $data ['support'];
		
		$module->mots_cles = $data ['mots_cles'];
		
		
		$module->save();
		
		return redirect('/modules');
		}
		






}
