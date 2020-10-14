@extends('layouts.app')
@section('content')
<user-profile 
    username="{{$user->name}}" 
    userid="{{$user->id}}"
    useremail="{{$user->email}}"
>
@endsection
