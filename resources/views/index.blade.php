@extends('layouts.app')
@section('title')
    My Todo App
@endsection
@section('content')


    <div class="w-full py-6">
        <div class="w-4/5 container mx-auto rounded-lg border border-gray-300">
            <ul class="tracking-wider">
                @foreach($todos as $todo)
                    <li><a href="details/{{ $todo->id }}" class="py-6 px-6 block border-b border-gray-300 text-gray-800 hover:bg-gray-300 delay-100 transition ease-in duration-300">{{ $todo->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection