<x-layouts>    
    
    <!-- ==================== Start header ==================== -->

    <header class="pages-header circle-bg valign position-re">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11">
                    <div class="capt">
                        <div class="text-center">
                            <h1 class="color-font mb-10 fw-700">Post a Job<br></h1>
                            <p>Post a Programming job</p>
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


                            <form method="POST" action="/" enctype="multipart/form-data">
                                @csrf
                                <div class="">
                                    <div class="form-group">
                                        <label for="title" class="inline-block text-lg mb-2">Title</label>
                                        <input class="p-2 border" type="text" name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="logo" class="inline-block text-lg mb-2">Logo</label>
                                        <input class="p-2 border" type="file" name="logo">
                                        @error('logo')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="company" class="inline-block text-lg mb-2">Company</label>
                                        <input class="p-2 border" type="text" name="company" value="{{ old('company') }}">
                                        @error('company')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="location" class="inline-block text-lg mb-2">Location</label>
                                        <input class="p-2 border" type="text" name="location" value="{{ old('location') }}">
                                        @error('location')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="website" class="inline-block text-lg mb-2">Website</label>
                                        <input class="p-2 border" type="text" name="website" value="{{ old('website') }}">
                                        @error('website')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="inline-block text-lg mb-2">Email Address</label>
                                        <input class="p-2 border" type="text" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="tags" class="inline-block text-lg mb-2">Tags(Comma Seperated Values)</label>
                                        <input class="p-2 border" type="text" name="tags" value="{{ old('tags') }}">
                                        @error('tags')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="inline-block text-lg mb-2">Description</label>
                                        <input class="p-2 border" type="text" name="description" value="{{ old('description') }}">
                                        @error('description')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button type="submit" class="butn bord"><span>Send Message</span></button>
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