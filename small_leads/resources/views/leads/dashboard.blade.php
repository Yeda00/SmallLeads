@extends('layouts.main')

@section('title', 'Criar lead')

@section('content')
<div style="width: 50%">
                <form action="/dashboard" method="GET" style="display: flex;">
                        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
                        <button style="margin-left: 20px;" type="submit" class="btn btn-warning active">Buscar</button>
                </form>
        </div>
       
    </div>

<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Nome</th>
      <th>Nome da empresa</th>
      <th>Convertido?</th>
      <th>Reunião Marcada?</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($leads as $lead)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="https://mdbootstrap.com/img/new/avatars/8.jpg"
              alt=""
              style="width: 45px; height: 45px"
              class="rounded-circle"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$lead->name}}</p>
            <p class="text-muted mb-0">{{$lead->email}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$lead->company_name}}</p>
      </td>

      <td>
        <p class="fw-normal mb-1">{{$lead->converted}}</p>
        
      </td>
      <td>
        @if($lead->meet == "")
        <a href="">Nao</a>
        @else 
        <a href="">{{$lead->meet}}</a>
        @endif
      </td>
      <td>
       <div style="display: flex; justify-content:space-around;" >
        <a href="/leads/edit/{{$lead->id}}" type="button" class="btn btn-info edit-btn">
            Editar
            </a>
            <form action="/leads/{{$lead->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn active ">Deletar</button>
            </form>
            <a href="/leads/{{$lead->id}}" type="button" class="btn btn-info edit-btn">
            Notas
            </a>
       </div>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>


<style>
  footer {
    text-align: center;
    background-color: #353e48;
    color: #fff;
    padding: 30px;
    position: fixed;
    bottom: 0;
    width: 100%;
}
</style>

@endsection