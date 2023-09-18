@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Dashboard</h1>
                @auth
                    <p>Welcome, {{ Auth::user()->name }}!</p>

                    <!-- Progress Information -->
                    <section class="progress-section">
                        <h2>Your Progress</h2>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                        <p>Complete your assignments to track your progress.</p>
                    </section>

                    <!-- Assignments -->
                    <section class="assignments-section">
                        <h2>Assignments</h2>
                        @if(isset($assignedAssignments) && is_countable($assignedAssignments) && count($assignedAssignments) > 0)
                            <ul>
                                @foreach ($assignments as $assignment)
                                    <li><a href="{{ route('assignments.show', $assignment->id) }}">{{ $assignment->title }}</a></li>
                                @endforeach
                            </ul>
                        @else
                            <p>No assignments available.</p>
                        @endif
                    </section>
                @else
                    <p>Please log in to access the dashboard.</p>
                @endauth
            </div>
        </div>
    </div>
@endsection