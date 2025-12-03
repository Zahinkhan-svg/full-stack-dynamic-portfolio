@extends('layouts.app')

@section('title', 'Home')

@section('content')
<header class="py-20 lg:py-32 relative text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-2xl font-light text-cyan mb-3 tracking-widest uppercase">
            Hello myself Zahin Muntaha Khan
        </h1>
        <h2 class="text-6xl lg:text-8xl font-extrabold text-gray-100 mb-6">
            I <span class="text-cyan">build things</span> with code.
        </h2>
        <p class="text-xl text-gray-400 mb-10 max-w-2xl mx-auto">
            I am a Software Engineer specializing in building high-performance applications using Laravel and modern web technologies.
        </p>
        <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-8 py-3 border border-cyan text-base font-medium rounded-full text-cyan bg-transparent hover:bg-cyan/10 transition duration-300 shadow-lg transform hover:scale-105">
            Explore My Projects
        </a>
    </div>
</header>

<section class="mt-20 pt-10 border-t border-gray-700">
    <h2 class="text-4xl font-extrabold text-gray-100 text-center mb-12">Who am I?</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="p-6 bg-gray-800 rounded-lg shadow-xl border-b-4 border-cyan hover:shadow-cyan/30 transition duration-300 transform hover:translate-y-[-4px]">
            <h3 class="text-xl font-bold mb-3 text-cyan">Pure Engineer</h3>
            <p class="text-gray-400">Committed to Clean Architecture, Design Patterns, and Rigorous Testing.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-xl border-b-4 border-cyan hover:shadow-cyan/30 transition duration-300 transform hover:translate-y-[-4px]">
            <h3 class="text-xl font-bold mb-3 text-cyan">Scalable Solutions</h3>
            <p class="text-gray-400">Building Cloud-Ready Monoliths and Microservices.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded-lg shadow-xl border-b-4 border-cyan hover:shadow-cyan/30 transition duration-300 transform hover:translate-y-[-4px]">
            <h3 class="text-xl font-bold mb-3 text-cyan">Comprehensive Skill Set</h3>
            <p class="text-gray-400">Full-Stack Proficiency: From Front-end to Database Optimization.</p>
        </div>
    </div>
</section>
@endsection