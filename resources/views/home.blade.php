@extends('layouts.app2')

@section('content')
<h1 class="mb-5">Halo {{ auth()->user()->name }}</h1>
@endsection
