@extends('layout')

@section('content')

    <div class="container">
        <h1>Ajouter une nouvelle formation</h1>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                    
                @endforeach
            </ul>
        @endif

        <form method="post" action="{{route('formationStore')}} " enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">titre</label>
                <input type="text" class="form-control" name="nom" required>
            </div>

            <div class="form-group">
                <label for="">Prix</label>
                <input type="number" class="form-control" name="prix" step="any" required>
            </div>

            <div class="form-group">
                <label for="">description</label>
                <textarea class="form-control" name="description" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file"  required accept="image/png, image/jpeg, image/jpg" name="picture">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>



    </div>
    
@endsection