@extends('layout')

@section('title', 'Mensajes')

@section('content')
    <div class="content">
        <h1>Mensajes</h1>
        @forelse ($messages as $message)
            @if ($loop->first)
                <ul>
            @endif
            <li>
                @if (!$message->readed)
                <a href="{{ route('messages.show', $message) }}" class="destacado">
                @else
                <a href="{{ route('messages.show', $message) }}">
                @endif
                    {{ $message->name . ' - ' . $message->subject }}
                </a>
            </li>
            @if ($loop->last)
                </ul>
            @endif
        @empty
            No hay mensajes.
        @endforelse
    </div>
@endsection
