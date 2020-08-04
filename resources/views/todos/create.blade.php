<h1>Add Todo</h1>
<form action="{{route('todos.store')}}" method="post">
	@csrf

	<label for="todo">Todo:</label>
	<input type="text" name="todo" id="todo">
	<button>Add</button>
</form>