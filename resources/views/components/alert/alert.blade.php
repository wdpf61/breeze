@props(['message', 'type'])

<div class="alert alert-{{$type}}">
    {{$message}}
    {{$slot}}
</div>