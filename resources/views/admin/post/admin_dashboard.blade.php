<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@extends("admin.content.base-admin")
@section('content')
<section class="cont">
    <h1>Tableau de Bord</h1>
    <section class="top-page">
        <div class="section-card">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Montant total:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{ number_format($sommePrixTotal, 0, ',', '.') }}</strong> F CFA
                        </p>
                        <i class="fab fa-dollar-sign"></i>
                    </div>
                </div>
            <a href="#" class="btn btn-primary">Details</a>
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

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Commissions:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{$nbruser}}</strong><i class="fas fa-user"></i>
                        </p>
                        <i class="fab fa-dollar-sign"></i>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Details</a>
            </div>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Commissions:</h5>
                    <div class="aligne">
                        <p>
                            <strong>{{$nbrrequete}}</strong><i class="fas fa-file-alt"></i>
                        </p>
                        <i class="fab fa-dollar-sign"></i>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Details</a>
            </div>
        </div>


        <div class="card" style="width: 45rem;">
            <div class="card-header">
                <strong>Taux d'adoption</strong>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="diagramme">
                        @if ($pourcentage <= 14.28)
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="height:20px; width: {{$pourcentage}}%; background-color: #ff4200">{{ number_format($pourcentage, 2) }}%</div>
                            </div>

                        @elseif ($pourcentage > 16.66 && $pourcentage <= 33.32)
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #ff8500">{{number_format ($pourcentage)}}%</div>
                            </div>

                        @elseif ($pourcentage > 33.32 && $pourcentage <= 49.98)
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #ffcc00">{{ number_format($pourcentage, 2) }}%</div>
                            </div>

                        @elseif($pourcentage > 49.98 && $pourcentage <= 66.64)
                            <div class="progress" role="progressbar" style="height:40px; " aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #fdf50e">{{ number_format($pourcentage, 2) }}%</div>
                            </div>

                        @elseif($pourcentage > 66.64 && $pourcentage <= 83.3)
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #c9f30b">{{ number_format($pourcentage, 2) }}%</div>
                            </div>

                        @elseif($pourcentage > 83.3 && $pourcentage <= 100)
                            <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="{{$pourcentage}}" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar" style="width: {{$pourcentage}}%; background-color: #01ca02">{{ number_format($pourcentage, 2) }}%</div>
                            </div>
                        @endif
                    </div>
                </blockquote>
            </div>
            <div class="" id="">
                
            </div>
        </div>

    </section>
</section>
@endsection
