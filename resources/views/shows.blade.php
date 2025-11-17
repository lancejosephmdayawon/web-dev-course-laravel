@extends('layout.main')
@section('content')

<div class="container mt-5">
    <h1>First Name: {{$firstName}}</h1>
    <h1>Middle Name: {{$middleName}}</h1>
    <h1>Last Name: {{$lastName}}</h1>
    <h1>Age: {{$age}}</h1>
</div>

@endsection