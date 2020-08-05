<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo; //equal of require_once

class TodoController extends Controller
{
    public function hello() {
    	$total = 4+5;
    	return $total;
    }


    public function welcome() {
        $myFoods = ['rice', 'sir', 'break na po'];
        // dd($myFoods); //die and dump
        $name = "Mary";
        $lastname = "Lee";
    	return view('display')
    	->with('name', $name)
    	->with('lastname', $lastname)
    	->with('foods', $myFoods);
    	// other way
    	// return view('display', [
    	// 	'name' => $name
    	// 	'lastname' => $lastname

    	// ] );

    }

    public function index(){

        $todos = Todo::all();

    		return view('todos.index')->with("todos", $todos); //to access the file indes inside todos folder use(.)
    	}

    public function create(){
    	return view('todos.create');
    }	
    
    // created a store to accept a form
    public function store(Request $request) {
        // To get the values in form submitted, we need the request object to be passed as argument
            // $request->input(name_in_form)
            // $request->name_in_form

        // dd(request)

        // to query to database create a model object(initialize)
        $todo = new Todo;
        // assign property to the object using column name as property name
        $todo->todo = $request->todo;

        // save the instance of todo objet to database
        $todo->save();
        return redirect(route('todos.index'));
    }


    public function show(Todo $todo){
        // Todo $todo is equal to 
        // SElECT * FROM todos WHERE id = $todo


        // Todo $todo - model Todo will get the row with the is of $todo value

        // $todo variable will be the result of the  entire row of the model Todo

        // $resultTodo = Todo::findOrfail($todo);



        return view('todos.show')->with('todo', $todo); //variable and value
    }


    public function destroy(Todo $todo) {
          
        // $resultTodo = Todo::findOrfail($todo);

        $todo->delete();


        return redirect(route('todos.index'));


    }


    public function edit(Todo $todo) {

        return view('todos.edit')->with('todo', $todo);

    }


    public function update(Todo $todo, Request $request) {


        $todo->todo = $request->input('todo');
        $todo->save();

        // return back(); to return to own page


        return redirect(route('todos.index'));



    }

}
