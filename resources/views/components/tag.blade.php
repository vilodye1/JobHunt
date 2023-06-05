@props(['tags'])

@php
    $tags = explode(',',$tags);
@endphp

@foreach ($tags as $tag)
  <a href="/?tag={{$tag}}" class="bg-royalBlue text-white rounded-full px-2 py-0.5 hover:bg-hover">{{$tag}}</a>  
@endforeach

