@extends('layout')

@section('content')
<h1>Contacts</h1>
<a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @forelse($contacts as $contact)
      <tr>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>
          <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-sm btn-warning">Edit</a>
          <form action="{{ route('contacts.destroy', $contact) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="4">No contacts found.</td></tr>
    @endforelse
  </tbody>
</table>
@endsection
