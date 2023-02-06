
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
        <h1>Ajouter un etudiant</h1>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.index')}}">Home</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.add')}}">Add</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.detail')}}">Moyenne Generale</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="{{route('Classe.premier')}}">1er de la classe</a>
      </nav>
    </div>
  </header>

  <main>
    <div class="container">
        <div class="row">
            
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('Classe.index')}}" class="btn btn-primary">Afficher classe</a>
                </div>
                <div class="col-sm-6"></div>
            </div>
            <div class="row col-4 mt-4">
                <form action="{{route('Classe.store')}}" method="post">
                  @csrf
                    <input type="text" name="nom" placeholder="Nom" class="form-control" required>
                    <input type="text" name="prenom" placeholder="Prenom" class="form-control mt-4" required>
                    <select name="semestre" id="" class="form-control mt-4">
                        <option value="Semestre 1">Semestre 1</option>
                        <option value="Semestre 2">Semestre 2</option>
                        <option value="Semestre 3">Semestre 3</option>
                        <option value="Semestre 4">Semestre 4</option>
                        <option value="Semestre 5">Semestre 5</option>
                        <option value="Semestre 6">Semestre 6</option>
                    </select>
                    <select name="matiere" id="" class="form-control mt-4">
                        <option value="Laravel">Laravel</option>
                        <option value="Linux">Linux</option>
                        <option value="Oracle">Oracle</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="Java">Java</option>
                        <option value="Csharp">Csahrp</option>
                    </select>
                    <input type="number" name="note" placeholder="Note 1" class="form-control mt-4" required>
                    <input type="number" name="examen" placeholder="Examen" class="form-control mt-4" required>
                    <button type="submit" class="btn btn-success mt-4">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
  </main>

</div>
@endsection


