@extends("admin.content.base-admin")
@section('content')
    <section class="cont">
        <!-- Autres contenus spécifiques à cette page -->
        <section class="suivis">
            <h1 class="suivis">Liste des demandes</h1>

            @if ($requetes->isEmpty())
                <p class="text-info">Aucune demande enregistrée!</p>

                <div class="container1">
                    <img class="empty-img" src="{{asset('image/empty.png')}}" alt="" srcset="">
                </div>


            @else
                <div class="top-table">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>Date</th>
                                <th>Type de Bâtiment</th>
                                <th>Montant</th>



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requetes as $requete)
                                <tr>
                                    <td>{{ $requete->created_at }}</td>
                                    <td>{{ $requete->type_batiment }}</td>
                                    <td>{{number_format($requete->prix_total, 0, ',', '.') }} <strong>F.CFA</strong></td>



                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Montant Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{number_format( $sommePrixTotal, 0, ',', '.') }}F CFA</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            @endif
        </section>
    </section>
@endsection
