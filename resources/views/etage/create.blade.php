@include('component.head')
@include('component.header')
@include('component.navbar')

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Ajouter un étage</h2>
        <form action="{{ route('etages.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom_etage" class="form-label">Nom de l'étage</label>
                <input type="text" class="form-control" id="nom_etage" name="nom_etage" required>
            </div>
            <div class="mb-3">
                <label for="id_local" class="form-label">ID du local</label>
                <input type="text" class="form-control" id="id_local" name="id_local" required>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter l'étage</button>
        </form>
    </div>
@endsection
