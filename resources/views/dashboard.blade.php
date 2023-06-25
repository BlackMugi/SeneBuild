<link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@extends("base")
    @section("title", "Mon tableau de board")
    @section("content")

    <section class="header">
        <h1 id="h1">Mon Tableau de bord</h1>
    </section>

    <section class="top-page">

        <section class="dash">
            <div class="sect1">
                <div class="set1">
                   <a id="liens" href="{{route('soumettre une demande')}}">
                    <div class="card" style="width: 18rem; height:19rem;">
                        <img src="{{('image/demande.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Soumettre une nouvelle demande</h5>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="set1">
                    <a id="liens" href="{{route('suivis du statut')}}">
                        <div class="card" style="width: 18rem; height:19rem;">
                            <img src="{{('image/suivis.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Suivis du statut</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="sect1">
                <div class="set1">
                    <a id="liens" href="{{route('profile.edit')}}">
                        <div class="card" style="width: 18rem; height:19rem;">
                            <img src="{{asset('image/profil.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Mon profile</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="set1">
                    <a id="liens" href="{{route('ressources outiles')}}">
                        <div class="card" style="width: 18rem; height:19rem;">
                            <img src="{{('image/documentation.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Ressources utiles</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="info">
            <h4 style="margin-top:10%;  margin-left:11%; margin-right:11%;">Bienvenu {{ (Auth::user()->name) }} !</h4>
            @if (Auth::user()->is_admin =="1" )
                <a href="{{route("admin.post.index")}}">
                    <button class="btn btn-primary" style="width:90%; margin-left:5%; margin-right:5%; margin-top:10%;" type="button"><i class="fas fa-user-cog"></i>Panneau d'administration</button>
                </a>
            @endif

        </section>
    </section>
    @endsection
