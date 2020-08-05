<a href="{{route('todos.edit', ["todo" => $todo->id])}}">Edit</a>
<form action="{{route('todos.destroy', ["todo" => $todo->id] ) }}" method="POSt">
	{{-- to use the route delete at web.php need to use method spoofing @method('DELETE') it will overwrite the method="POST"--}}
			@method('DELETE') 

			@csrf
			
	<button>Delete</button>
</form>
