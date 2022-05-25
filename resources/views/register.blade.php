@include('home.header');

<section>
   
    <main>
     
    
        <div class="only-form-pages">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <div class="only-form-box">		
                  <div class="welcome-text text-center mb-5">
                    <h5 class="mb-0">Create an account!</h5>
                    <span>Already have an account? <a href="/login">Log In!</a></span>
                  </div>
                      <form method="post" action="{{route('Student.create')}}">
                        @csrf
                        {{-- {{$id}} --}}
                        {{-- <input type="hidden" value="{{$packages}} " name="package_id"> --}}
                          <div class="com_class_form">
                              <div class="form-group user_type_cont">
                    <label class="user_type" for="usertype-1">
                      <input type="radio" checked="" name="usertype" id="usertype-1" value="job seeker" >
                      <span><i class="far fa-user"></i> Job Seeker</span>
                    </label>
                    <label class="user_type" for="usertype-2">
                      <input type="radio" name="usertype" id="usertype-2" value="employer" >
                      <span><i class="fas fa-landmark"></i> Employer</span>
                    </label>
                  </div>
                
                  <div class="form-group">
                                  <input class="form-control" type="email" size="40" placeholder="Email address* " required name="email">
                              </div>
                              
                  <div class="form-group">
                    <input class="form-control" type="text"  size="40" placeholder="Full name *" required name="name">
                  </div>
                  {{-- <div class="form-group">
                    <input class="form-control" type="text" size="40" placeholder="Phone* " required name="phone">
                </div> --}}
                              <div class="form-group">
                                  <input class="form-control" type="password" placeholder=" Password * " name="password" required>
                              </div>
                  <div class="form-group">
                    <input class="form-control" type="password" placeholder="Re-enter Password * "  required name="con_password">
                  </div>
                  @if($errors->any())
                  <span class="text-danger">
                  {{ implode('', $errors->all(":message")) }}
                  </span>
              @endif
      
                              
                              <div class="form-group">
                                  <input class="btn btn-primary" type="submit" value="Register" >
                              </div>
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox"> Remember me
                    </label>
                  </div>
                  
                          </div>
                      </form>
              <div class="social_login">
                    <p class="or_span"><span>or</span></p>
                    <button class="btn btn-facebook"><i class="fab fa-facebook-f"></i> Log In via Facebook</button>
                    <button class="btn btn-google"><i class="fab fa-google-plus-g"></i> Register via Google+</button>
                  </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </main>
</section>
@include('home.footer');