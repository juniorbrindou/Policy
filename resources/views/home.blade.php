@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

<div class="alert @can('index',User::class) alert-info @endcan @cannot('index',User::class) alert-danger @endcan ">
                        <p>Lister les utilisateurs</p>
                    </div>
                    <div class="alert @can('destroy',App\User::class) alert-info @endcan ">
                        <p>Supprimer les utilisateurs</p>
                    </div>
                    <div class="alert @can('update',App\User::class) alert-info @endcan ">
                        <p>modiffier les utilisateurs</p>
                    </div>
                    <div class="alert @can('create',App\User::class) alert-info @endcan ">
                        <p>creer les utilisateurs</p>
                    </div>
                    <div class="alert @can('restaure',App\User::class) alert-info @endcan ">
                        <p>Lister les utilisateurs</p>
                    </div>
                    <div class="alert @can('forceDelete',App\User::class) alert-info @endcan ">
                        <p>Supprimer definitivement les utilisateurs</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
