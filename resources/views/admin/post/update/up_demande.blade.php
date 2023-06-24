
@extends("admin.content.base-admin")
@section('content')
<section class="cont">
    <!-- Autres contenus spécifiques à cette page -->
    <section class="suivis">

        <h1 class="suivis">Traitement de demande</h1>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Num Dossier</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th><i class="fas fa-phone"></i>Tel</th>
                    <th>Bâtiment</th>
                    <th>Niveau</th>
                    <th>Dimensions</th>
                    <th>État</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$requetes->id}}</td>
                    <td>{{$requetes->prenom}}</td>
                    <td>{{$requetes->nom}}</td>
                    <td>{{$requetes->telephone}}</td>
                    <td>{{$requetes->type_batiment}}</td>
                    <td>@if ($requetes->niveau ===1)
                        <p class="text-primary-emphasis">RDC</p>
                        @elseif ($requetes->niveau ==2)
                        <p class="text-primary-emphasis">R+1</p>
                        @elseif ($requetes->niveau ===3)
                        <p class="text-primary-emphasis">R+2</p>
                        @elseif ($requetes->niveau ===4)
                        <p class="text-primary-emphasis">R+3</p>
                        @elseif ($requetes->niveau===5)
                        <p class="text-primary-emphasis">R+4</p>
                        @elseif ($requetes->niveau ===6)
                        <p class="text-primary-emphasis">R+5</p>
                        @elseif ($requetes->niveau ===7)
                        <p class="text-primary-emphasis">R+6</p>
                        @elseif ($requetes->niveau ===8)
                        <p class="text-primary-emphasis">R+7</p>
                        @elseif ($requetes->niveau ===9)
                        <p  class="text-primary-emphasis">R+8</p>
                        @elseif ($requetes->niveau ===10)
                        <p  class="text-primary-emphasis">R+9</p>
                        @else
                        <p  class="text-primary-emphasis">R+10</p>
                        @endif
                    </td>
                    <td>{{$requetes->dimensions}} m²</td>
                    <td> @if ($requetes->statut  === 'en cours')
                        <p class="text-warning">En cours</p>
                        @elseif ( $requetes->statut  === 'Accepté')
                            <p class="text-success">Accepté</p>
                        @else
                            <p class="text-danger">Refusé</p>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <a href="{{route('admin.download', ['id' => $requetes->id])}}" class="btn btn-primary">Télécharger</a>

        <form action="{{route('admin.up_demande')}}" method="post">
            @csrf
            <input type="text" name="id" style="display: none" value="{{$requetes->id}}">

            <label class="form-label" for="role">Action</label>
            <select class="form-select" id="statut" name="statut" required>
                <option disabled selected hidden><p class="text-body-tertiary">--Choisir--</p></option>
                <option value="en cours">En cours</option>
                <option value="Accepté">Acceptée</option>
                <option value="Refusé">Refusée</option>
            </select>
            <button type="submit" class="btn btn-info">Modifier</button>
        </form>
    </section>
</section>
@endsection
