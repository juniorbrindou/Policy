@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="col-md-8 table-striped table-condensed table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form class="d-inline" method="POST" action="{{route('users.destroy',$user->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-danger btn-sm ">DELETE</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
