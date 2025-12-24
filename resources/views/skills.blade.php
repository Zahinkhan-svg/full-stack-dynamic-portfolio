@extends('layouts.main')

@section('title', 'Skills - Zahin Muntaha Khan')

@section('content')
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">My Technical Skills</h2>
        @if (count($skills) > 0)
            <div class="row">
                @foreach ($skills as $skill)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                @if ($skill->icon_class)
                                    <i class="{{ $skill->icon_class }} fa-3x text-primary mb-3"></i>
                                @endif
                                <h5 class="card-title">{{ $skill->name }}</h5>
                                <p class="card-text text-muted">{{ $skill->category }}</p>
                                <span class="badge bg-primary">{{ $skill->level }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No skills found. Please add skills to the database.</p>
        @endif
    </div>
</section>
@endsection