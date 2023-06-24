
@extends("admin.content.base-admin")
@section('content')
<section class="cont">
    <!-- Autres contenus spécifiques à cette page -->
    <section class="suivis">
        <h1 class="suivis">Liste des Utilisateurs</h1>
        <div class="top-table">
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th>ID Utilisateur</th>
                        <th>Prénom & Nom</th>
                        <th>Email</th>
                        <th>Rôles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>@if ($user->is_admin===1)

                                <p class="text-success"><i class="fas fa-user-cog"></i>Administrateur</p>
                                @else
                                <p class="text-primary"><i class="fas fa-user"></i>Utilisateur</p>
                                @endif
                            </td>
                            <td>
                                @if ($user->email==="adminsenebuld@gmail.com")
                                <i class="fas fa-lock"></i> Compte originel
                                @else
                                <a href="{{ route('admin.update_role', ['id' => $user->id]) }}">
                                    <button type="button" class="btn btn-primary">Modifier</button>
                                </a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</section>
@endsection
