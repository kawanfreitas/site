@extends('layout.main')

@section('title', 'welcome')

@section('content')
    <div class="search-container">
        <form action="{{route('welcome')}}" class="form-group">
            <input type="text" name="search" class="form-control" required placeholder="Search...">
        </form>
    </div>
    <div id="form-container">

            @foreach($projects as $item)
                @if(count($projects) != 0)
                    <div class="card col-md-12" id="card-container">
                        <img src="/img/logo.jpg" alt="{{$item->title}}">
                        <div class="card-body">
                            <p><i class="fas fa-pen-square"></i> {{$item->title}}</p>
                        </div>
                        <form action="{{route('project.show', [$item->id])}}" method="get">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$item->user_id}}">
                            <button type="submit" class="btn btn-primary">Saber mais</button>
                        </form>
                    </div>
                @endif
            @endforeach


        @if(count($projects) == 0)
            <div class="warn-p">
                <p>Nenhum card criado recentimente!</p>
            </div>
        @endif
    </div>


@endsection
