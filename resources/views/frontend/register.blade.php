@extends('frontend.layout')

@section('content')


    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <form>
            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Name">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input nama="email" input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">IC No</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="No KP">
            </div>
            </div>
            <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
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
    