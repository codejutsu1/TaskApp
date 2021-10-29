@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')
    <!-- csrf Cross-site request forgery Attack -->

    <form action="store-data" method="POST" class="w-4/5 mx-auto mt-10 text-gray-700 font-semibold tracking-wider">
        @csrf
        <div>
            <label for="name">Todo Name</label>
            <input type="text" name="name" class="block w-full border border-gray-200 p-2">
        </div>
        <div class="mt-5">
            <label for="description">Todo Description</label>
            <textarea name="description" id="describe" rows="3" class="block p-2 w-full border border-gray-200"></textarea>
        </div>
        <div class="flex justify-end mt-5">
            <input type="submit" value="Submit" class="border-2 border-blue-600 p-3 px-6 tracking-widest rounded-md transition duration-500 ease-in hover:bg-white hover:text-blue-600 bg-blue-600 text-gray-200">
        </div>
    </form>


@endsection