<x-layouts>


<!-- ==================== Job Listings ==================== -->\

<div class="wrapper circle-bg">

    <div class="circle-color fixed">
        <div class="gradient-circle"></div>
        <div class="gradient-circle two"></div>
    </div>

    @include('partials._banner')

    <div class="main-content">
        @include('partials._search')
        <section class="blog-pg blog section-padding pt-100">
            <div class="container">
                <div class="posts">
                    <div class="row">
                    @if (count($details) == 0)
                        <p style="color: red">
                            There are no Jobs Available
                        </p>
                    @endif
                    @foreach ( $details as $work )
                        <x-listing-card :work="$work" />
                    @endforeach
                    </div>

                    {{ $details->links() }}
                </div>
            </div>
        </section>
    </div>
</div>
<!-- ==================== End Job Listings ==================== -->
</x-layouts>