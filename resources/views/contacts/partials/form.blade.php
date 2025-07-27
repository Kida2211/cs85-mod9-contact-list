<div class="mb-3">
  <label class="form-label">Name</label>
  <input type="text" name="name" 
         value="{{ old('name', $contact->name) }}"
         class="form-control @error('name') is-invalid @enderror">
  @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Email</label>
  <input type="email" name="email" 
         value="{{ old('email', $contact->email) }}"
         class="form-control @error('email') is-invalid @enderror">
  @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Phone</label>
  <input type="text" name="phone" 
         value="{{ old('phone', $contact->phone) }}"
         class="form-control @error('phone') is-invalid @enderror">
  @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
