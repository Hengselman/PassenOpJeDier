@extends('default')
@section('title')
{{$huisdier->soort . " " . $huisdier->name}}
@endsection

@section('content')
    @include('huisdier.components.huisdierCard--show')
@endsection
@section('comments')
    @include('huisdier.components.huisdierCard--comments')
@endsection
