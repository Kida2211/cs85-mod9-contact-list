@extends('layout')

@section('content')
<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact) }}" method="POST">
  @csrf
  @method('PUT')
  @include('contacts.partials.form')
  <button class="btn btn-success">Update</button>
  <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
