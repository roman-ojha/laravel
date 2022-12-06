{{-- extending/using layout --}}
@extends('layout.admin')

{{-- providing the data using @section --}}
{{-- title --}}
@section('title', 'home')
{{-- @section('<name>', '<value>') --}}

{{-- providing whole views/html code inside section --}}
@section('page-name')
    <h1>Home page</h1>
@endsection

@section('banner')
    <h1>Home page banner</h1>
@endsection

@section('main')
    <h1>Home page Main</h1>
@endsection

{{-- if you want to redefine/replace the section that had been defined inside the layout then we can define it here --}}
@section('default-content1')
    {{-- if you want to append content that is proviede from here to the content that is available to laout then we can use '@parent' --}}
    @parent
    <h1>Content from Home page</h1>
@endsection
