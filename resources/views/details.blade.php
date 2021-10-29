@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')

    <div class="mx-auto w-4/5 border border-gray-200 tracking-wider mt-10 text-center">
        <div class="bg-gray-100 py-4 text-lg">
            <b>Todo details</b>
        </div>
        <div class="tracking-wider pb-8">
            <h5 class="py-4 font-semibold">{{ $todos->name }}</h5>
            <p class="pb-4">{{  $todos->description}}</p>
            <div class="flex w-2/5 justify-center mx-auto">
                <a href="/edit/{{ $todos->id }}" class="px-4 py-2 rounded-lg mr-4 bg-blue-600 text-white"><span>Edit</span></a>
                <a href="/delete/{{ $todos->id }}" class="px-4 py-2 rounded-lg mr-4 bg-red-600 text-white"><span>Delete</span></a>
            </div>
        </div>
    </div>



@endsection