@extends('default')

@section('title')
{{"Alle huisdieren"}}
@endsection

@section('content')
@include('huisdier.components.checkbox--index')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($huisdier as $huisdier)
        @include('huisdier.components.huisdierCard--index')
    @endforeach
</ul>
@endsection

