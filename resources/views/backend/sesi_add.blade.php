@extends('backend.layout')

@section('content')


    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <form method="POST" action="{{route('user.register.post')}}">
          @csrf
          <h1> Tambah Sesi </h1>
         
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
                  <button type="button" class="close" data-dismiss="alert"
                      <span>&times;</span>
                    </button>
              </div>
          @endif

          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
          @endif
            <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input name="name" type="name" class="form-control" id="name" placeholder="Name" value="{{ old( 'name')}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{ old( 'email')}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputIc" class="col-sm-2 col-form-label">IC No</label>
            <div class="col-sm-10">
              <input name = "ic" type="no ic" class="form-control" id="inputIc" placeholder="No KP" value="{{ old( 'ic')}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
          </div>
        </form>
      </div>
    </section>
@endsection
    