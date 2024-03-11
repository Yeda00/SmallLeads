    @extends('layouts.main')

    @section('title', 'HDC Events')

    @section('content')
           
  

  


    
   
    <div class="px-4 pt-5 my-5 text-center border-bottom bg-dark">
    <h1 class="display-4 fw-bold  text-white">Gerencie leads de forma inteligente   </h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 text-secondary">Somos uma empresa inovadora especializada em soluções de gestão de leads, dedicada a impulsionar o sucesso de negócios em diversos setores</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <button type="button"  class="btn btn-primary active btn-lg px-4 me-sm-3"><a href="/leads/create">Criar lead</a></button>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" class=" imagem img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      </div>
    </div>
  </div>

            <div class="carrosel">
                
            </div>

            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Tenha um fácil acesso e controle dos seus leads</h1>
                    <p class="lead">. Nossa plataforma de software oferece uma abordagem abrangente e intuitiva para gerenciar e otimizar o ciclo de vida dos leads, desde a geração até a conversão em clientes.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-primary active btn-lg px-4 me-md-2 fw-bold"><a href="/dashboard">Meus leads</a></button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a href="/converted_list">Leads convertidos</a></button>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                    <img class="rounded-lg-3" src="https://mdbcdn.b-cdn.net/img/new/standard/city/041.webp" alt="" width="720">
                </div>
                </div>
            </div>

            <div class="b-example-divider"></div>

            <div class="bg-dark text-secondary px-4 py-5 text-center">
                <div class="py-5">
                <h1 class="display-5 fw-bold text-white">Recursos avançados</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="fs-5 mb-4">Com recursos avançados de automação, análise de dados em tempo real e integrações flexíveis, capacitamos as equipes de vendas e marketing a identificar, nutrir e acompanhar leads de forma eficaz, maximizando assim o retorno sobre o investimento em marketing e impulsionando o crescimento dos negócios. </p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    </div>
                </div>
                </div>
            </div>

            <div class="b-example-divider mb-0"></div>
    @endsection