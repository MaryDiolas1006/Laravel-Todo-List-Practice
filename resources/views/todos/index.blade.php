<a href="{{route('todos.create')}}">Add Todos</a>

<h1>My Todos</h1>
<ul>

@foreach($todos as $todo)
	<li>
		{{ $todo->id }} {{ $todo->todo }}
		<a href="{{route('todos.show', ["todo" => $todo->id]) }}">View</a>
		@include('todos.partials.settings')
	</li>
@endforeach
</ul>