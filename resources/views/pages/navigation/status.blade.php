@extends("base")

    @section("title", "Suivis du Statut")
    @section("content")
        <div>
            {{(Auth::user()->name) }}
        </div>
    @endsection
