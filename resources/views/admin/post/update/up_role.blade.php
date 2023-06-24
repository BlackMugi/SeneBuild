
@extends("admin.content.base-admin")
@section('content')
<section class="cont">
    <!-- Autres contenus spécifiques à cette page -->
    <section class="suivis">

        <h1 class="suivis">Modifier Compte</h1>

        <form action="{{route('admin.up_role')}}" method="post">
            @csrf
            <input type="text" name="id" style="display: none" value="{{$users->id}}">
            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" value="{{ $users->name}}">
                <label for="floatingInput">Prenom & Nom</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" value="{{ $users->email}}">
                <label for="floatingInput">Adresse mail</label>
              </div>

            <label class="form-label" for="role">Rôle</label>
            <select class="form-select" id="is_admin" name="is_admin" required>
                <option disabled selected hidden><p class="text-body-tertiary">--Choisir--</p></option>
                <option value="0">Utilisateur</option>
                <option value="1">Administrateur</option>
            </select>
            <button type="submit" class="btn btn-info">Modifier</button>
        </form>
    </section>
</section>
@endsection
