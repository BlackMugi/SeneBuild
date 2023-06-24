@extends("base")

    @section("title", "Suivis du Statut")
    @section("content")
    <section class="suivis">

        <h1 class="suivis">Suivis du statut</h1>

        @if ($requetes->isEmpty())
            <p class="text-info">Aucune demande enregistrée!</p>

            <div class="container1">
                <img class="empty-img" src="{{asset('image/empty.png')}}" alt="" srcset="">
            </div>

            <div class="container2">
                <a href="{{route("soumettre une demande")}}">
                <button class="inspect1">Faire une nouvelle demande</button>
                </a>
            </div>
            
            
        @else
            <div class="top-table">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>ID Demande</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Téléphone</th>
                            <th>Type de bâtiment</th>
                            <th>Commune</th>
                            <th>Niveau</th>
                            <th>Dimensions</th>
                            <th>Prix total</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($requetes as $requete)
                            <tr>
                                <td>{{ $requete->id }}</td>
                                <td>{{ $requete->prenom }}</td>
                                <td>{{ $requete->nom }}</td>
                                <td>{{ $requete->telephone }}</td>
                                <td>{{ $requete->type_batiment }}</td>
                                <td>{{ $requete->commune }}</td>

                                <td>@if ($requete->niveau == '1')
                                    <p class="text-primary-emphasis">RDC</p>
                                    @elseif ($requete->niveau == '2')
                                    <p class="text-primary-emphasis">R+1</p>
                                    @elseif ($requete->niveau == '3')
                                    <p class="text-primary-emphasis">R+2</p>
                                    @elseif ($requete->niveau == '4')
                                    <p class="text-primary-emphasis">R+3</p>
                                    @elseif ($requete->niveau == '5')
                                    <p class="text-primary-emphasis">R+4</p>
                                    @elseif ($requete->niveau == '6')
                                    <p class="text-primary-emphasis">R+5</p>
                                    @elseif ($requete->niveau == '7')
                                    <p class="text-primary-emphasis">R+6</p>
                                    @elseif ($requete->niveau == '8')
                                    <p class="text-primary-emphasis">R+7</p>
                                    @elseif ($requete->niveau == '9')
                                    <p  class="text-primary-emphasis">R+8</p>
                                    @elseif ($requete->niveau == '10')
                                    <p  class="text-primary-emphasis">R+9</p>
                                    @else
                                    <p  class="text-primary-emphasis">R+10</p>
                                    @endif
                                </td>
                                <td>{{ $requete->dimensions }} m²</td>
                                <td>{{ $requete->prix_total }} <strong>F.CFA</strong></td>
                                <td> @if ($requete->statut  === 'en cours')
                                    <p class="text-warning">En cours</p>
                                    @elseif ( $requete->statut  === 'Accepté')
                                        <p class="text-success">Accepté</p>
                                    @else
                                        <p class="text-danger">Refusé</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <a href="{{route("soumettre une demande")}}">
                        <button class="inspect">Faire une nouvelle demande</button>
                    </a>
                </div>
            </div>

        @endif
    </section>

@endsection
