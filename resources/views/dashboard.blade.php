   @extends("base")
    @section("title", "Mon tableau de board")
    @section("content")

    <h1>Mon Tableau de bord</h1>
    <section class="top-page">

        <section class="dash">
            <div class="sect1">
                <div class="set1">
                   <a href="{{route('soumettre une demande')}}">
                    <div class="card" style="width: 18rem; height:19rem;">
                        <img src="{{('image/demande.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Soumettre une nouvelle demande</h5>
                        </div>
                      </div>
                    </a>
                </div>
                <div class="set1">
                    <a href="{{route('suivis du statut')}}">
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
                    <a href="{{route('profile.edit')}}">
                        <div class="card" style="width: 18rem; height:19rem;">
                            <img src="{{asset('image/profil.png')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Mon profile</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="set1">
                    <a href="{{route('ressources outiles')}}">
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
            <div>Bienvenu {{ (Auth::user()->name) }} !</div>
            @if (Auth::user()->is_admin =="1" )
            <a href="{{route("admin.post.index")}}">
                <button>Panneau d'administration</button>
            </a>

            @endif

        </section>
    </section>
    @endsection
