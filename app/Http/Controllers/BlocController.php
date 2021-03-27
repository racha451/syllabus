<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bloc;
use App\Modules;
class BlocController extends Controller
{
    
	
	public function index(){
		
		
		
		$bloc = Bloc::All();
		return view('blocs.index')->with('blocs',$bloc);
		
      	}
	
		public function afficher($idBloc){
		
	
		
		$bloc = Bloc::find($idBloc);
		return view('blocs.DetailBloc')->with('blockey',$bloc);
		
	   }
	
	
	
	
		public function supprimer($idBloc){
		
		$bloc = Bloc::find($idBloc);
		$bloc->delete();
		return redirect('/blocs');
	    }
	
	
	
	
	
	
	
	 public function nouveau(){
		 
		 return view('blocs.creation');
	 }
	 
	 
	 
	 	 public function store(){
		 
		 
		 $data=request()->all();
		 
		 $bloc =new Bloc();
	
       	 $bloc->code = $data['code'];
		 $bloc->intitulé_fr =$data['intitulé_fr'];
		 $bloc->intitulé_en =$data['intitulé_en'];
		 
	$bloc->save();
	
	return redirect('blocs');
	 }
	
	
	
	
	
	
	
	
	public function index2(){
		
		
		
		$bloc = Bloc::All();
		return view('modules.combine')->with('blockey',$bloc);
		
	}
	
	
}
