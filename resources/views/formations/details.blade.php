@extends('layout')

@section('content')
<h1>Détails de la formation</h1>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{route('formationUpdate', $formation->id)}} ">
                @csrf 
                @method('PUT')
                <div class="form-group">
                    <label for="">titre</label>
                    <input type="text" class="form-control" name="nom" required value="{{$formation->nom}}">
                </div>
        
                <div class="form-group">
                    <label for="">Prix</label>
                    <input type="number" class="form-control" name="prix" step="any" required value="{{$formation->prix}}" >
                </div>
        
                <div class="form-group">
                    <label for="">description</label>
                    <textarea class="form-control" name="description" rows="5" required>{{$formation->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
            <p>ecrit le {{$formation->created_at->format('d/m/Y')}} </p>
        </div>
        <div class="col-md-6">
            <form method="post" action="{{route('formationUpdatePicture', $formation->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="">Modifier l'image de la formation</label>
                    <input type="file" name="picture" required class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </form>
        </div>
    </div>

    <form method="POST" action="{{route('formationDelete',$formation->id)}} ">
        @csrf
        @method('DELETE')
        <Button class="btn btn-danger">Supprimer cet formation</Button>
    </form>
    <h2>Listes des chapitres</h2>

    @if(sizeof($formation->chapitres)>0)
    <ul>
        @foreach ($formation->chapitres as $chapitre)
        <li><h3>Titre du chapitre: {{$chapitre->nom}}</h3></li>
        <li>{{$chapitre->contenu}}</li>
        <form method="post" action="{{route('chapitreDelete', $chapitre->id)}} ">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
        </form>
        @endforeach
    </ul>

    @else
        <p>Il n'y a aucun chapitre</p>
    @endif
    <h2>Ajouter vos chapitres</h2>

    <form method="post" action="{{route('chapitreAdd',$formation->id)}} ">
        @csrf 

        <div class="form-group">
            <label for="">titre du chapitre</label>
            <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="form-group">
            <label for="">contenu du chapitre</label>
            <textarea class="form-control" name="contenu" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter le chapitre</button>
    </form>
</div>

@endsection