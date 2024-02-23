@extends('layout.home')




@section('title',  'Pepina')
@section('page-title', 'Home')

@section('content')


{{-- @include('vendor/autoload.php'); --}}


<html>
<head>
  
</head>
<body>

    <h1>{{ $title ?? '' }}</h1>
    <p>{{$content ?? '' }}</p>
    <footer>

    </footer>
</body>
</html>


@endsection

