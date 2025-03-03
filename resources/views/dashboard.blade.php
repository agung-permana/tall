@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center">

        <div class="flex items-center justify-center">
            <div>
                <p class="font-bold">Hallo, {{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
@endsection
