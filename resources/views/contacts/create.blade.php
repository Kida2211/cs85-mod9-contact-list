@extends('layout')

@section('content')
<h1>Add Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
  @csrf
  @include('contacts.partials.form', ['contact' => new App\Models\Contact])
  <button class="btn btn-success">Save</button>
  <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
