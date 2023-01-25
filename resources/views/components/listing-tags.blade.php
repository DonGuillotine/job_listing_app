@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv)
@endphp

 <div class="tags">
    @foreach ( $tags as $one_tag)
        <a href="/?tag={{ $one_tag }}">{{ $one_tag }}</a> 
    @endforeach 
          
</div>
