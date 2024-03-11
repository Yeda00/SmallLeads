@extends('layouts.main')

@section('title', 'Notas do Lead')

@section('content')



<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
        <div class="card">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp" class="card-img-top" alt="Fissure in Sandstone"/>
        <div class="card-body">
            <h2 class="card-title">{{$lead->name}} {{$lead->surname}}</h2>
            <p>Telefone : {{$lead->phone}} </p>
            <p class="events-participants">Email : {{$lead->email}}</p>

            @if($lead->meet =="")
                <p>oook</p>
            @else 
            <p>Link da reunião : <a href="{{$lead->meet}}">{{$lead->meet}}</a></p>
            @endif
        </div>
</div>
        </div>
        <div id="info-container" class="col-md-6">
        <form action="/leads/update/{{$lead->id}}" method="POST">

        @csrf
        @method('PUT')
        <h1>Deseja adicionar uma reunião?</h1>
        <br>
        <div class="form-group">
            <label for="meet">Link da reunião</label>
            <input type="text" class="form-control" id="meet" name="meet" placeholder="Digite o link da reuniao" value="{{$lead->meet}}">
        </div>
        <br>
        <input type="submit" class="btn btn-primary active" value="Criar reunião">
    </form>
        </div>

        <div class="col-md-12" id="description-container">
            
        </div>
    </div>
</div>

@endsection
