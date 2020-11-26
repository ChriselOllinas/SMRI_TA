@extends('includes.header')


 <!-- /.card -->
 <center>
            <!-- Horizontal Form -->
            <div class="login-form"> 
            <div class="card card-info">
              <div class="card-header" style="background-color: #08759B;">
                <h3 class="card-title" >Login</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
              <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                 @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                       <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                  </div>
                
                <!-- /.card-body -->
               
                
                  <button type="submit" class="btn btn-info" style="background-color: #08759B;">Login</button>
                
               
                <!-- /.card-footer -->
              </form>
            </div>
            </div>
            <!-- /.card -->
             </center>
