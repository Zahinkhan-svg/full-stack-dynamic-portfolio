@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="bg-gray-800 p-10 rounded-xl shadow-2xl border border-cyan/30">
    <h1 class="text-5xl font-extrabold text-gray-100 mb-4 border-b border-cyan/50 pb-2">{{ $name }}</h1>
    <p class="text-2xl text-cyan mb-8">{{ $title }}</p>
    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
        <div class="lg:col-span-2">
            <h3 class="text-3xl font-bold text-gray-200 mb-4 border-b-2 border-gray-700 pb-1">Brief Introduction</h3>
            <p class="text-gray-400 leading-relaxed mb-8">{{ $bio }}</p>

            <h3 class="text-3xl font-bold text-gray-200 mb-4 border-b-2 border-gray-700 pb-1">Education & Experience</h3>
            <ul class="list-disc list-outside text-gray-400 space-y-3 pl-5 mb-8">
                <li class="font-semibold text-gray-300">{{ $education }}</li>
                <li>{{ $experience }}</li>
            </ul>
        </div>
        
        <div class="bg-gray-900 p-6 rounded-lg shadow-inner border border-gray-700">
            <h4 class="text-2xl font-bold text-cyan mb-4">Contact</h4>
            <ul class="space-y-3 text-gray-400">
                <li>**Email:** khan22205101473@diu.edu.bd</li>
                <li>**LinkedIn:** [Zahin's LinkedIn Profile Link]</li>
                <li>**GitHub:** [Zahin's GitHub Profile Link]</li>
            </ul>
        </div>
    </div>

    <h3 class="text-3xl font-bold text-gray-200 mt-10 mb-6 border-b-2 border-gray-700 pb-1">Skills</h3>
    <div class="flex flex-wrap gap-4">
        @foreach($skills as $skill)
            <span class="bg-gray-700 text-cyan text-lg font-medium px-4 py-2 rounded-lg shadow-md transition duration-150 hover:bg-gray-600 border border-cyan/50">
                {{ $skill }}
            </span>
        @endforeach
    </div>
</div>
@endsection