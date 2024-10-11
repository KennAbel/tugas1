@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Events in Surabaya</h1>
<div class="grid grid-cols-3 gap-4">
    @foreach ($events as $event)
        <div class="border p-4 rounded-lg shadow">
            <h2 class="text-xl font-semibold">{{ $event->title }}</h2>
            <p>{{ $event->venue }} - {{ $event->date }}</p>
            <p class="mt-2">{{ $event->description }}</p>
            <a href="{{ route('events.show', $event->id) }}" class="text-blue-500">Read more</a>
        </div>
    @endforeach
</div>
@endsection
