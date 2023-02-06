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
        
        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('Classe.add')}}" class="btn btn-primary">Ajouter etudiant</a>
                <a href="{{route('Classe.detail')}}" class="btn btn-primary">Moyenne general de la classe</a>
                <a href="{{route('Classe.premier')}}" class="btn btn-primary">1er de la classe</a>
            </div>
            <div class="col-sm-6"></div>
        </div>
        <div class="row col-11">
            <table class="table table-striped">
                <thead>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Matiere</th>
                    <th>Note 1</th>
                    <th>Examen</th>
                    <th>Semestre</th>
                </thead>
                <tbody>
                  @php $i = 1; @endphp
                  @foreach ($c as $c)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$c->prenom}}</td>
                        <td>{{$c->nom}}</td>
                        <td>{{$c->matiere}}</td>
                        <td>{{$c->note}}</td>
                        <td>{{$c->examen}}</td>
                        <td>{{$c->semestre}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</main>


</div>
@endsection

  
