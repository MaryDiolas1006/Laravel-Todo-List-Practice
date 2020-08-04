<a href="{{route('todos.create')}}">Add Todos</a>

<h1>My Todos</h1>
<ul>

@foreach($todos as $todo)
	<li>
		{{ $todo->id }} {{ $todo->todo }}
		<a href="">View</a>
		<a href="">Edit</a>
		<form action="">
			<button>Delete</button>
		</form>
	</li>
@endforeach
</ul>