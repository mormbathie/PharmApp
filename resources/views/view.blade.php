@extends('layout.base')
@section('titre')
@section('contenu')
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-2">Liste des Medicaments</h3>
        <!---------le tableau ------------>
        <table class="table table-bordered table-hover mt-2">
            <div class="d-flex justify-content-end mb-4 mt-4">
                <a href="#" class="btn btn-primary">Ajouter</a>
            </div>
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">prix</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($medicaments as $medoc)
                    <td>{{$medoc['id']}}</td>
                    <td style="text-transform:uppercase;">{{$medoc['nom']}}</td>
                    <td>{{$medoc['prix']}} FCFA</td>
                        <td class="">
                            <a href="#" class="btn btn-info">Editer</a>
                            <a href="#" class="btn btn-danger">Supprimer</a>
                        </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        <!---------le tableau ------------>
    </div>
</main>
@endsection

