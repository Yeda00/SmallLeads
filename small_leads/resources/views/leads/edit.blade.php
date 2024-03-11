@extends('layouts.main')

@section('title', 'Editando ' . $lead->name)

@section('content')


<div id="event-create-container" class="col-md-6 offset-md3">
    <h1>Editando: {{$lead->name}} </h1>
    <form action="/leads/update/{{$lead->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da pessoa" value="{{$lead->name}}">
        </div>

        <div class="form-group">
            <label for="surname">Sobrenome</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Digite o sobrenome da pessoa" value="{{$lead->surname}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email da pessoa" value="{{$lead->email}}">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="{{$lead->phone}}">
        </div>

        <div class="form-group">
            <label for="company_name">Nome da empresa</label>
            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Digite o nome da empresa" value="{{$lead->company_name}}">
        </div>

        <div class="form-group">
            <label for="title">O cliente é pagante? </label>
            <select name="converted" id="converted" class="form-control">
                <option value="Não">Não</option>
                <option value="Sim">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="company_name">Adicione tags do lead</label>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="high_ticket"> High ticket
            </div>
            <div class="form-group">
                <input type="checkbox" name="tags[]" value="estrangeiro"> Estrangeiro
            </div>
        </div>
        <input type="submit" class="btn btn-primary active" value="Editar Lead">
    </form>
</div>

@endsection