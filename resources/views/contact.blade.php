@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="max-w-3xl mx-auto bg-gray-800 p-10 rounded-xl shadow-2xl border border-cyan/30">
    <h1 class="text-5xl font-extrabold text-gray-100 mb-4 text-center">Get in Touch</h1>
    <p class="text-center text-gray-400 mb-10">I am available for new job opportunities or to discuss complex projects.</p>

    <div class="space-y-6">
        <div class="flex items-center p-4 bg-gray-900 rounded-lg border-l-4 border-cyan">
            <svg class="w-6 h-6 text-cyan mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            <div>
                <p class="font-semibold text-gray-300">Email</p>
                <a href="mailto:khan22205101473@diu.edu.bd" class="text-cyan hover:underline">khan22205101473@diu.edu.bd</a>
            </div>
        </div>
        
        <div class="flex items-center p-4 bg-gray-900 rounded-lg border-l-4 border-cyan">
            <svg class="w-6 h-6 text-cyan mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            <div>
                <p class="font-semibold text-gray-300">GitHub</p>
                <a href="[Zahin's GitHub Profile Link]" target="_blank" class="text-cyan hover:underline">[GitHub Profile]</a>
            </div>
        </div>
        
        <div class="text-center pt-6">
            <p class="text-gray-500">I usually respond quickly.</p>
        </div>
    </div>
</div>
@endsection