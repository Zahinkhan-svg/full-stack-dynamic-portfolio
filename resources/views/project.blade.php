@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
<h1 class="text-5xl font-extrabold text-gray-100 mb-12 text-center border-b border-cyan/50 pb-2">Selected Works</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach($projects as $project)
    <div class="bg-gray-800 p-6 rounded-xl shadow-xl border-t-4 border-cyan flex flex-col hover:shadow-cyan/50 transform hover:-translate-y-1 transition duration-300">
        <h2 class="text-2xl font-bold text-gray-100 mb-3">{{ $project['name'] }}</h2>
        <p class="text-gray-400 mb-4 flex-grow">{{ $project['description'] }}</p>
        
        <div class="mt-auto pt-4 border-t border-gray-700">
            <span class="text-sm font-semibold text-gray-400 block mb-2">Technologies Used:</span>
            <span class="text-sm text-cyan font-medium">{{ $project['tech'] }}</span>
        </div>
        
        <a href="{{ $project['link'] }}" target="_blank" class="mt-4 inline-flex items-center text-cyan font-semibold hover:text-cyan/80 transition duration-150">
            View Details →
        </a>
    </div>
    @endforeach
</div>
@endsection