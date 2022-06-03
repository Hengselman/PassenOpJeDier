<?php
     use App\Models\Huisdier;
     // {{$huisdier->soort . " " . $huisdier->name}}
 ?>
@extends('default')
@section('title')
Kiekeboe
@endsection

@section('content')
    @include('huisdier.components.huisdierCard--show')
@endsection
@section('comments')
    @include('huisdier.components.huisdierCard--comments')
@endsection


