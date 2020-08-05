

<h1>Edit Task</h1>

<form action="{{route('todos.update', $todo->id)}}" method="post">

	@method('PUT')
	@csrf

	<input type="text" name="todo" id="todo" value="{{ $todo->todo }}">

	<button>Edit</button>
</form>