@extends('layout.main')

@section('title', 'criar projeto')

@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card form-group" id="card-container-2">
        <div class="card-body">
            <form action="{{route('project.store')}}" method="POST">
                @csrf
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" cols="15"></textarea>
                <button type="submit" class="btn btn-primary"><i class="fas fa-folder-plus"></i> Criar card</button>
            </form>
        </div>
    </div>
@endsection
