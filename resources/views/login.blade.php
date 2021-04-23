@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
                @if(Session::get('status'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{Session::get('status')}}!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif
                <form action="login" method="POST">
                @csrf
                
                    <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                    </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                </form>
        </div>

    </div>
</div>
@endsection