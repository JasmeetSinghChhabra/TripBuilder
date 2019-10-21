@extends('layouts.master')
@section('content')
<h1> some content</h1>
<p> {{ 2 == 2 ? "Hello True" : "Does not equal" }}
@endsection