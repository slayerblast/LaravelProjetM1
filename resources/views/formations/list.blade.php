@extends('layout')

@section('content')

    @include('components.banner',['title' => 'Bannière listes des formations'])

<h1>liste des formations</h1>

@if (sizeof($formations)>0)
    <div class="row">
        @foreach ($formations as $formation)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{asset("storage/$formation->picture")}} " 
                    style="object-fit: cover" height="200">
                <div class="card-body">
                    <h5 class="card-title">{{$formation->nom}}</h5>
                    <p>{{$formation->description}}</p>
                    <p>La formation contient {{sizeof($formation->chapitres)}} de chapitre(s)</p>
                    <div> Catégorie(s) de la formation:
                        @foreach ($formation->categories as $categorie)
                        <span>{{$categorie->nom}} </span>
                        @endforeach
                    </div>
                    <div> type(s) de la formation :
                        @foreach ($formation->types as $type)
                        <span>{{$type->nom}} </span>
                        @endforeach
                    </div>
                  

                    <p>Le cout de la formation est de: {{$formation->prix}}€</p>
                    <div class="d-flex">
                        <a href="{{route('formationDetails',$formation->id)}}" class="btn btn-primary">Détails</a>
                        <form method="POST" action="{{route('formationDelete',$formation->id)}} ">
                            @csrf
                            @method('DELETE')
                            <Button class="btn btn-danger">Supprimer</Button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
   
@else
    <p>il n'y a aucun article.</p>    
@endif



{{--
<ul>
    @if(sizeof($formations)>0)
        @foreach ($formations as $formation)
            <li>
                <div> <a href="{{route('formationDetails', $formation->id)}} ">{{$formation->nom}}</a> </div>
                <div> {{$formation->description}} </div>
            </li>
        @endforeach
    @else
            <p>il n'y a pas d'article</p>
    @endif
</ul>
--}}

@endsection