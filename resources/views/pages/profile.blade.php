@extends('layouts.app')
@section('profile')
    @auth
        <div>
            <h2 class="">{{ Auth::user()->name}}</h2>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </div>
    @endauth

@endsection