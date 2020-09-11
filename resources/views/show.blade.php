@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
            $user=$book->find($event->id)->relUsers;
        @endphp
        Título: {{$event->title}}<br>
        Páginas: {{$event->pages}}<br>
        Autor: {{$user->name}} <br>
        Email do autor: {{$user->email}} <br>
    </div>
@endsection