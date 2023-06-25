<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends("admin.content.base-admin")
@section('content')
<section class="cont">
    <h1 id="h1">Tableau de Bord</h1>
    <section class="top-page">
        <div class="section-card">
            <div class="card" id="cassh-total"style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Montant total:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{ number_format($sommePrixTotal, 0, ',', '.') }}</strong> F CFA
                        </p>
                        <i class="fab fa-dollar-sign"></i>
                    </div>
                </div>
            <a href="{{route('admin.comission')}}" class="btn btn-primary">Details</a>
            </div>

            <div class="card" id="daily-cash" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Montant du jour:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{ number_format($sommePrixTotal1, 0, ',', '.') }}</strong> F CFA
                        </p>
                        <i class="fab fa-dollar-sign"></i>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Details</a>
            </div>

            <div class="card" id="user" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nombre d'Utilisateurs:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{$nbruser}}</strong>
                        </p>

                        <i class="fas fa-user" id="fas"></i>
                    </div>
                </div>
                <a href="{{route('admin.role')}}" class="btn btn-primary">Details</a>
            </div>

            <div class="card" id="file" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nombre de Demandes:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{$nbrrequete}}</strong>
                        </p>
                        <i class="fas fa-file-alt" id="fas"></i>
                    </div>
                </div>
                <a href="{{route('admin.demandes')}}" class="btn btn-primary">Details</a>
            </div>
        </div>


        <div class="card-content">
            <div class="card" id="main-card" style="width: 45rem; height:20rem;">
                <div class="card-header">
                    <strong>Taux d'adoption</strong>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="diagramme">
                            @if ($pourcentage <= 14.28)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #ff4200">{{ number_format($pourcentage, 2) }}%</div>
                                </div>

                            @elseif ($pourcentage > 16.66 && $pourcentage <= 33.32)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #ff8500">{{number_format ($pourcentage)}}%</div>
                                </div>

                            @elseif ($pourcentage > 33.32 && $pourcentage <= 49.98)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #ffcc00">{{ number_format($pourcentage, 2) }}%</div>
                                </div>

                            @elseif($pourcentage > 49.98 && $pourcentage <= 66.64)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #fdf50e">{{ number_format($pourcentage, 2) }}%</div>
                                </div>

                            @elseif($pourcentage > 66.64 && $pourcentage <= 83.3)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #c9f30b">{{ number_format($pourcentage, 2) }}%</div>
                                </div>

                            @elseif($pourcentage > 83.3 && $pourcentage <= 100)
                                <div class="progress" role="progressbar" style="height:30px;" id= "barr" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #01ca02">{{ number_format($pourcentage, 2) }}%</div>
                                </div>
                            @endif
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="card" id="top-card" style="width: 26rem;">
                <div class="card-header">
                  Quote
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
              </div>
        </div>

        <div class="card-content">
            <div class="card" id="main-card" style="width: 45rem; height:20rem;">
                <div class="card-header">
                    <strong>Taux de Répartition</strong>
                </div>
                <div class="grndyff">
                    <p>Grand Yoff</p>
                    <div class="progress" role="progressbar" style="height:30px;" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: {{$pourcentageGrandYoff}}%">{{ number_format($pourcentageGrandYoff, 2) }}%</div>
                    </div>
                </div>

                <div class="thies">
                    <p>Thiès</p>
                    <div class="progress" role="progressbar" style="height:30px;" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-info text-dark" style="width: {{$pourcentageThies}}%">{{ number_format($pourcentageThies, 2) }}%</div>
                    </div>
                </div>
            </div>
            <div class="card" id="top-card" style="width: 26rem;">
                <div class="card-header">
                  Quote
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                </div>
            </div>
        </div>


    </section>
</section>
@endsection
