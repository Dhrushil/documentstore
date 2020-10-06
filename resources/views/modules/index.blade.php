@extends('layouts.app')
@section('content')
@if (session()->has('success'))
<input-form :deleted="true"/> 
@endif
@if (session()->has('created'))
<input-form :created="true"/> 
@endif
@if (session()->has('updated'))
<input-form :updated="true"/> 
@endif
<input-form/>
@endsection

