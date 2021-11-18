
@extends('layouts.app-base')



@section('content')
<div>
    <h1>Library</h1>
    <hr />
    <books-list :books="{{json_encode($books)}}" />
</div>
@endsection





