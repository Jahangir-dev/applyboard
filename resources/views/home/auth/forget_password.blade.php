
@include('home.header');

<section>
    
   <!-- Main 
================================================== -->
<main>
    <div class="only-form-pages">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="only-form-box">
               		
                  <form action="{{url('forget_password')}}" method="post">
                      @csrf
                      <div class="com_class_form">
                          <div class="form-group">
                         <label><span class="normal-font-w">Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</span></label>
                              <input class="form-control" type="email" name="email" size="40" placeholder=" Username or email address * ">
                          </div>
                          <div class="form-group">
                              <input class="btn btn-primary" type="submit" value="Reset Password" >
                          </div>
                      </div>
                  </form>
                  @if (Session::has("success"))
                  <div class="alert alert-success alert-dismissible fade show">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      {{ Session::get('success') }}
                  </div>
              @elseif (Session::has("failed"))
                  <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      {{ Session::get('failed') }}
                  </div>
              @endif
                  @if($errors->any())
                  {{ implode('', $errors->all(':message')) }}
                  @endif
                  @if ($errors->has('email'))
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                  @endif
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</section>
@include('home.footer');

