@extends('layout.main')

@section('title', 'show')

@section('content')
    <div class="card" id="show-container">
        <img src="/img/logo.jpg">
        <div class="card-body">
            <ul>
                <li><i class="fas fa-user"></i> {{$user->name}}</li>
                <li><i class="fas fa-play"></i> {{$project->title}}</li>
                <li><i class="fas fa-book"></i> {{$project->description}}</li>
            </ul>
        </div>
    </div>
@endsection
