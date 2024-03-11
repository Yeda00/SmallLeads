@extends('layouts.main')

@section('title', 'Criar lead')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md3">
    <h1>Crie o seu lead </h1>
    <form action="/leads" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome da pessoa">
        </div>

        <div class="form-group">
            <label for="surname">Sobrenome</label>
            <input type="text" class="form-control" id="surname" name="surname" placeholder="Digite o sobrenome da pessoa">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email da pessoa">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone">
        </div>

        <div class="form-group">
            <label for="company_name">Nome da empresa</label>
            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Digite o nome da empresa">
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
        <input type="submit" class="btn btn-primary active" value="Criar Lead">
    </form>
</div>

@endsection