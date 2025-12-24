@extends('layouts.main')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Hi, I'm Zahin Muntaha Khan</h1>
                <p class="lead mb-4">BSc in CSE Student at Daffodil International University</p>
                <p class="mb-4">Passionate about programming, content writing, and team management. I create innovative solutions and engaging content.</p>
                <a href="/about" class="btn btn-custom btn-lg me-3">Learn More</a>
                <a href="/contact" class="btn btn-outline-light btn-lg">Get In Touch</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Zahin Muntaha Khan" class="img-fluid rounded-circle shadow-lg" style="max-width: 300px;">
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">My Projects</h2>
        @if (count($projects) > 0)
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card project-card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $project->name }}</h5>
                                <p class="card-text flex-grow-1">{{ $project->description }}</p>
                                @if ($project->link)
                                    <a href="{{ $project->link }}" target="_blank" class="btn btn-custom mt-auto">View Project</a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center">No projects found. Please add projects to the database.</p>
        @endif
    </div>
</section>

<!-- Skills Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Technical Skills</h2>
        @if (count($skills) > 0)
            <div class="text-center">
                @foreach ($skills as $skill)
                    <span class="skill-tag">
                        @if ($skill->icon_class)
                            <i class="{{ $skill->icon_class }} me-2"></i>
                        @endif
                        {{ $skill->name }} ({{ $skill->level }})
                    </span>
                @endforeach
            </div>
        @else
            <p class="text-center">No skills found. Please add skills to the database.</p>
        @endif
    </div>
</section>

<!-- Education Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Education</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">BSc in Computer Science and Engineering</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Daffodil International University, Dhaka</h6>
                        <p class="card-text">Average CGPA: 3.25</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Higher Secondary Certificate (HSC)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Nawab Siraj-Ud-Dowla Govt College, Natore</h6>
                        <p class="card-text">GPA: 5.00 (Science) | Batch: 2019 | 2019-2021</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Secondary School Certificate (SSC)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Natore Govt Girls' High School, Natore</h6>
                        <p class="card-text">GPA: 5.00 (Science)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Experience Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">Work Experience</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Assistant Press Secretary (APS)</h5>
                <h6 class="card-subtitle mb-2 text-muted">DIU Computer Programming Club</h6>
                <p class="card-text">Content writing, Media, Team Management</p>
                <p class="card-text">Takes on challenging new roles harnessing interpersonal skills, collaboration and problem-solving. Driven to deliver high-quality service and consistent results.</p>
            </div>
        </div>
    </div>
</section>

<!-- Volunteering Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center">Volunteering</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Job Utsob 2024</h5>
                        <p class="card-text">Content writing, Team Management</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Lecturer (Senior Scale)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Department of CSE, Daffodil International University</h6>
                        <p class="card-text">Volunteering and team management, Content writing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- References Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center">References</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Saila Sharmin</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Lecturer</h6>
                        <p class="card-text">Department of CSE, Daffodil International University, Dhaka</p>
                        <p class="card-text"><strong>Phone:</strong> 01787689999<br><strong>Email:</strong> shayla.cse@diu.edu.bd</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Md. Kamrul Hossain</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Associate Professor & Additional Director (DoR)</h6>
                        <p class="card-text">Department of CSE, Faculty of Science and Information Technology</p>
                        <p class="card-text"><strong>Phone:</strong> 01711069636, 01915641745<br><strong>Email:</strong> headged@daffodilvarsity.edu.bd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Links Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">Portfolio Links</h2>
        <div class="social-links">
            <a href="https://www.linkedin.com/in/zahin-muntaha-khan-245b96292/?originalSubdomain=bd" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100081554337406" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://sites.google.com/diu.edu.bd/zahinmuntahakhan/home" target="_blank"><i class="fas fa-globe"></i></a>
        </div>
    </div>
</section>
@endsection