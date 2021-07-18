@extends('layout.main')

@section('title', 'painel')

@section('content')
    @if(count($user->projects) == 0)
        <div class="warn-container">
            <p>nenhum projeto criado recentemente </p><a href="{{route('project.create')}}">Criar novo projeto</a>
        </div>
    @else
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">usuario</th>
            <th scope="col">acao</th>
        </tr>
        </thead>
        @foreach($user->projects as $users)
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{$users->title}}</td>
                    <td></td>
                    <td>
                        <a href="{{route('projects.destroy', [$users->id])}}" class="btn  btn-primary">Delete</a>
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
    @endif
@endsection
