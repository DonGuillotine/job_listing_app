@props(['work'])

<div class="col-lg-6">
    <div class="item mb-80 wow fadeInUp" data-wow-delay=".3s">
        <div class="img">
            <img src="{{ $work->logo ? asset('storage/' . $work->logo) : asset('/img/no-image.png') }}" alt="">
        </div>
        <div class="cont">
            <div>
                <div class="info">
                    <a href="#0" class="date">
                        <span>{{ $work->company }}</span>
                    </a>
                   {{-- TAGS COMPONENT HERE --}}
                   <x-listing-tags :tagsCsv="$work->tags" />
                    {{-- END TAGS COMPONENT HERE --}}
                    
                </div>
                <h5>
                    <a href="/job_detail/{{ $work->id }}">{{ $work->title }}</a>
                </h5>
                <div class="btn-more">
                    <span class="icon pe-7s-map-marker mr-2"></span><a href="#0">{{ $work->location }}</a>
                </div>
            </div>
        </div>
    </div>
</div>