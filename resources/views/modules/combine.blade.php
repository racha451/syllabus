


	 @foreach($blockey as $bloc)
                    <li class="list-group-item">				 
					{{$bloc->code}}	
                  </li>
     @endforeach

     @foreach($blockey as $bloc)              
			  foreach($bloc->modules as $module){
	         <li>{{$module -> intitulé_fr}} </li>;
	          }	})
          @endforeach
		  
