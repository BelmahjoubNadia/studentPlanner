<x-app-layout>
    <div class="min-vh-100">

        <!-- Navbar is in layout already -->

        <!-- Welcome Section -->
        <div class="container py-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="display-5 fw-bold mb-3">Welcome to the place where your ideas come alive.</h1>
                    <h1 class="display-5 fw-bold mb-3">Dear <span class="user-name">{{ Auth::user()->name }}</span></h1>
                    <p class="para lead">Hope you’re having a great day. Let’s make it productive!</p>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('images/img1.webp') }}" alt="Welcome image" class="img-fluid">
                </div>

                <div class="">
                    <a href="{{ route('timetable') }}" class="btn btn1">Go to Timetable</a>
                    <a href="{{ route('todo') }}" class="btn btn2">Check To-Do List</a>
                </div>

            </div>
        </div>

        <!-- progress card -->
        <div class="container my-5">
            <div class="card shadow rounded mx-auto text-center" style="max-width: 700px;">
                <div class="card-body">
                    <h2 class="card-title mb-3"><i class="fa-solid fa-chart-line"></i> Weekly Progress</h2>
                    <p>You've completed <strong>7</strong> out of <strong>10</strong> tasks this week!</p>
                    <div class="progress" style="height: 20px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 70%;">70%</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Motivational Quote -->
        <div class="container my-5">
            <div class="card shadow rounded mx-auto" style="max-width: 700px;">
                <div class="card-body text-center">
                    <h2 class="card-title mb-3"><i class="fa-solid fa-quote-left"></i> Motivation</h2>
                    @php
                        $quotes = [
                            "Believe you can and you're halfway there.",
                            "Don't watch the clock; do what it does. Keep going.",
                            "Success is the sum of small efforts repeated daily.",
                            "The expert in anything was once a beginner.",
                            "Push yourself, because no one else is going to do it for you.",
                            "Your future is created by what you do today, not tomorrow.",
                            "Dream big. Start small. Act now.",
                            "The pain you feel today will be the strength you feel tomorrow.",
                            "Focus on progress, not perfection.",
                            "Discipline is choosing between what you want now and what you want most."
                        ];
                        $quote = $quotes[array_rand($quotes)];
                    @endphp
                    <p class="fst-italic fs-5">"{{ $quote }}"</p>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="container my-5">
            <div class="card shadow rounded mx-auto p-4" style="max-width: 700px;">
                <h2 class="card-title mb-3 text-center"><i class="fa-solid fa-envelope"></i> Contact Us</h2>
                <p>If you need help, feedback, or want to suggest a feature, feel free to reach out:</p>
                <ul class="list-unstyled text-secondary mb-0">
                    <li>Email: <a href="mailto:studentplanner@example.com" class="text-primary text-decoration-none">studentplanner@example.com</a></li>
                    <li>GitHub: <a href="https://github.com/BelmahjoubNadia/studentPlanner" target="_blank" class="text-primary text-decoration-none">View Project</a></li>
                </ul>
            </div>
        </div>

        <footer class="text-center text-muted small mb-5">
            &copy; {{ date('Y') }} Student Planner. All rights reserved.
        </footer>
    </div>
</x-app-layout>
