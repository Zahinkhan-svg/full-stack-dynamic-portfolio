@extends('layouts.main')

@section('title', 'About Me - Zahin Muntaha Khan')

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h1 class="display-4 fw-bold text-center mb-4">{{ $name }}</h1>
                        <p class="lead text-center text-muted mb-5">{{ $title }}</p>

                        <h3 class="h2 fw-bold mb-4">Brief Introduction</h3>
                        <p class="mb-5 fs-5">{{ $bio }}</p>

                        <h3 class="h2 fw-bold mb-4">Education & Experience</h3>
                        <div class="mb-5">
                            <h5 class="fw-bold">{{ $education }}</h5>
                            <p class="text-muted">{{ $experience }}</p>
                        </div>

                        <h3 class="h2 fw-bold mb-4">Skills</h3>
                        <div class="mb-5">
                            @foreach($skills as $skill)
                                <span class="skill-tag me-2 mb-2">
                                    {{ $skill }}
                                </span>
                            @endforeach
                        </div>

                        <h3 class="h2 fw-bold mb-4">Contact Information</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><strong>Email:</strong> khan22205101473@diu.edu.bd</li>
                                    <li class="mb-2"><strong>Phone:</strong> 01707492266</li>
                                    <li class="mb-2"><strong>Address:</strong> Uttar Patuapara, Natore</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="social-links text-center">
                                    <a href="https://www.linkedin.com/in/zahin-muntaha-khan-245b96292/?originalSubdomain=bd" target="_blank" class="me-3"><i class="fab fa-linkedin fa-2x"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100081554337406" target="_blank" class="me-3"><i class="fab fa-facebook fa-2x"></i></a>
                                    <a href="https://sites.google.com/diu.edu.bd/zahinmuntahakhan/home" target="_blank"><i class="fas fa-globe fa-2x"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection