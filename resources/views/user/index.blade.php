@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Authentifizierte User: {{$auth_user->name}},  {{$auth_user->email}}, sein ID: {{$auth_id}}

                    @foreach ($users as $user)
                        <p>This is user {{ $user->id }} , {{$user->name}}</p>
                    @endforeach


                </div>        
                <div class="card-body">                    

                    @forelse ($users as $user)
                        <li>{{ $user->name }}</li>
                    @empty
                        <p>No users</p>
                    @endforelse                                        
                </div>
                <div class="card-body">                    


                @foreach ($users as $user)
                    @if ($user->id == 1)
                        @continue
                    @endif

                    <li>{{ $user->name }}</li>

                    @if ($user->id == 2)
                        @break
                    @endif
                @endforeach                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
