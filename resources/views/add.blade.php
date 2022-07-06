@extends('layout.base')
@section('titre')
@section('contenu')
        <div class="container">

            <form action="{{route('add')}}" method="POST">
                @csrf
                <div class="mb-3 mt-5 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" required="">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom médicament">
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlInput1" class="form-label" required="">Prix</label>
                    <input type="text" class="form-control" id="prix" name="prix" placeholder="Prix médicament">
                </div>
                <div class="mb-3 col-sm-6">
                    <label for="exampleFormControlTextarea1" class="form-label" required="">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Ecrire..."></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">Enrregistrer</button>
            </form>
        </div>

@endsection

