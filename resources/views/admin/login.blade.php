@include('home.header');

<section>

    <main>
        <div class="only-form-pages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="only-form-box">
                            <div class="welcome-text text-center mb-5">
                                <h4 class="mb-0">Admin Login</h4>
                                {{-- <span>Create an account! <a href="/registeration">Registeration</a></span> --}}
                            </div>
                            <form method="post" action={{route('admin.admin_login')}}>
                                @csrf
                                <div class="com_class_form">

                                    <div class="form-group">

                                        <input class="form-control" type="text" name="email" size="40"
                                            placeholder=" Username or email address * ">
                                    </div>
                                    <div class="form-group">

                                        <input class="form-control" type="password" name="password"
                                            placeholder=" Password * ">
                                    </div>
                                    @if ($errors->any())
                                        <span class="text-danger">
                                            {{ implode('', $errors->all(':message')) }}
                                        </span>
                                    @endif

                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Login">
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> Remember me
                                        </label>
                                    </div>

                                   
                                </div>
                            </form>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
@include('home.footer');
