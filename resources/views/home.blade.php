@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <div class="alert alert-danger">
                        <p>Lister les utilisateurs</p>
                    </div>
                    <div class="alert alert-danger">
                        <p>Mettre a la corbeille les utilisateurs</p>
                    </div>
                    <div class="alert alert-danger">
                        <p>modiffier les utilisateurs</p>
                    </div>
                    <div class="alert alert-danger">
                        <p> les utilisateurs</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
