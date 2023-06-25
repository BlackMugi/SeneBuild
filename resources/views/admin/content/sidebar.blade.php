<div class="navbar">
    <div class="row">
        <a href="{{route('admin.post.index')}}"><button type="button" class="btn btn-light  mt-3"><i class="fas fa-home"></i> Accueil</button></a>
        <a href="{{route('admin.admin_dashboard')}}"><button type="button" class="btn btn-light mt-3"><i class="fas fa-chart-bar"></i> Tableau de bord</button></a>
        <a href="{{route('admin.role')}}"><button type="button" class="btn btn-light  mt-3"><i class="fas fa-users"></i> Rôles</button></a>
        <div class="dropdown mt-3">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" id="demandes-dropdown" data-bs-toggle="dropdown">
                <i class="fas fa-file-alt"></i> Demandes
            </button>
            <ul class="dropdown-menu" aria-labelledby="demandes-dropdown">
              <li><a class="dropdown-item" href="{{route('admin.demandes_en_cours')}}"><i class="fas fa-spinner"></i> Demandes en cours</a></li>
              <li><a class="dropdown-item" href="{{route('admin.demandes_acceptees')}}"><i class="fas fa-check"></i> Demandes acceptées</a></li>
              <li><a class="dropdown-item" href="{{route('admin.demandes_refusees')}}"><i class="fas fa-times"></i> Demandes rejetées</a></li>
              <li><a class="dropdown-item" href="{{route('admin.demandes')}}"><i class="fas fa-file-alt"></i>Liste des demandes</a></li>
            </ul>
        </div>
    </div>
    <div class="user-panel">
        <a href="{{route('dashboard')}}">
            <button type="button" class="btn btn-link mt-4"><i class="fas fa-user"></i>Espace Client</button>
        </a>
    </div>
</div>
