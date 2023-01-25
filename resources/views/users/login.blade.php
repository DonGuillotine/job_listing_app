<x-layouts>    
    
    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="color-font mb-10 fw-700">Log in to your Account<br></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="circle-color">
            <div class="gradient-circle"></div>
            <div class="gradient-circle two"></div>
        </div>

        <div class="line bottom right"></div>
    </header>

    <!-- ==================== End header ==================== -->


    <!-- ==================== Start main-content ==================== -->

    <div class="main-content">

        <!-- ==================== Start Job Create ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="form p-5 border border-info rounded md-mb50">


                            <form method="POST" action="/users/authenticate">
                                @csrf
                                <div class="">

                                    <div class="form-group">
                                        <label for="email" class="inline-block text-lg mb-2">Email Address</label>
                                        <input class="p-2 border" type="text" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label for="password" class="inline-block text-lg mb-2">Password</label>
                                        <input class="p-2 border" type="password" name="password" value="{{ old('password') }}">
                                        @error('password')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <button type="submit" class="butn bord"><span>Sign In</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Job Create ==================== -->

    </div>

    <!-- ==================== End main-content ==================== -->
</x-layouts>