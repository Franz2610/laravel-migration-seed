@extends('layouts.app')

@section('content')
<section>
<ul>
    @foreach ($trains as $train)
    <li>{{$train->azienda}}</li>
    @endforeach
</ul>
</section>
@endsection
