@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('login.action') }}" method="POST">
            @csrf
            <div class="box">
                <div class="container">
                    <div class="top">
                        <span>COOMPLEX</span>
                        <p>Welcome!</p>
                    </div>
                    <div class="mb-3">
                        <i class="ri-user-line"></i>
                        <input class="form-control" type="username" name="username" placeholder="Username"
                            value="{{ old('username') }}" />
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>
                    <button class="btn btn-primary">Login</button>
                    <button class="btn btn-danger" href="#">Register</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection