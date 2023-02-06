@extends('layout.app')
@section('content')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Classe</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <h1>Classe</h1>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.index')}}">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.add')}}">Add</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.detail')}}">Moyenne Generale</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.premier')}}">1er de la classe</a>
      </nav>
    </div>
  </header>

  <div class="container">
    <div class="row">
        <h1>Moyenne générale de la classe : {{ $moy }}</h1>
    </div>
</main>


</div>
@endsection

  
