Hello I am {{$name}} {{$lastname}} 
@foreach($foods as $food)
	<li>{{$food}}</li>
@endforeach	

	
 @if(false)
 	"Hello"

 @else 
 "Hi"	
 @endif

 <br>

 @isset($test)
 nakaset si test variable

 @else 
 	"Hindi nakaset si variable"

 @endisset