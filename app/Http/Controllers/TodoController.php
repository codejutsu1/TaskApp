<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;


class TodoController extends Controller
{
    public function index(){
        $todo = Todo::all();
        return view('index')->with('todos', $todo);
    }

    public function create(){
        return view('create');
    }

    public function details(Todo $todo){
        return view('details')->with('todos', $todo);
    }

    public function edit(Todo $todo){
        return view('edit')->with('todos', $todo);
    }

    public function update(Todo $todo){
        try{
            $this->validate(request(),[
                'name'=>['required'],
                'description'=>['required'],
            ]);
        }catch (ValidateException $e){}

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/');
    }

    public function delete(Todo $todo){
        $todo->delete();

        return redirect('/');
    }
    
    public function store(){
        try{
            $this->validate(request(),[
                'name'=>['required'],
                'description'=>['required']
            ]);
        } catch (ValidationException $e){

        }

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo created successfully');

        return redirect('/');

        // Validate the data by marking all field as required, get all request/data coming in
        // Store the data in an object
        // Save them in a database
        // display a success message and redirect to homepage

    }
}
