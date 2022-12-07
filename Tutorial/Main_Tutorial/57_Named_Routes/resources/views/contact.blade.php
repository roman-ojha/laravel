{{-- extending/using layout --}}
@extends('layout.admin')

{{-- providing the data using @section --}}
{{-- title --}}
@section('title', 'contact')
{{-- @section('<name>', '<value>') --}}


{{-- providing whole views/html code inside section --}}
@section('page-name')
    <h1>Contact page</h1>
@endsection

@section('banner')
    <h1>Contact page banner</h1>
@endsection

@section('main')
    <h1>Contact page Main</h1>
@endsection
