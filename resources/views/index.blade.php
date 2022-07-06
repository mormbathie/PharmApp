@extends('layout.base')
@section('contenu')
<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h3 class="border-bottom pb-2 mb-2 color-success">Liste des Medicaments</h3>
        <!---------le tableau ------------>
        <table class="table table-bordered table-hover mt-2">
            <div class="d-flex justify-content-end mb-4 mt-4">
                <a href="{{route('test')}}" class="btn btn-success">Ajouter</a>
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
                    @if(count($medicament)>0)
                    @foreach($medicament as $item)

                    <td>{{$item['id']}}</td>
                    <td>{{$item['nom']}}</td>
                    <td>{{$item['prix']}} FCFA</td>
                    <td>
                        <a href="{{route('edit',$item['id'])}}" class="btn btn-success">Detailles</a>
                        <a href="{{route('destroy',$item['id'])}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td style="font-size: 30px;">Aucun médicament n'est encore enregistré</td>
                </tr>
                @endif

            </tbody>
          </table>
        <!---------le tableau ------------>
    </div>
</main>
@endsection



