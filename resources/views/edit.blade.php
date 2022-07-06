@extends('layout.base')
@section('content')
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-2">Liste des Medicaments</h3>
        <!---------le tableau ------------>
        <table class="table table-bordered table-hover mt-2">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$vue['id']}}</th>
                <td>{{$vue['nom']}}</td>
                <td>{{$vue['prix']}} FCFA</td>
                <td>{{$vue['description']}}</td>
                <td class="">
                    <a href="#" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-danger">Supprimer</a>
                </td>
              </tr>
            </tbody>
          </table>
        <!---------le tableau ------------>
    </div>
</main>
@endsection
