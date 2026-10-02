@csrf
<div class="mb-3">
    <label for="name" class="form-label">Full name</label>
    <input type="text" id="name" name="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $student->name ?? '') }}">
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" id="email" name="email"
           class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email', $student->email ?? '') }}">
    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label for="phone" class="form-label">Phone</label>
    <input type="text" id="phone" name="phone"
           class="form-control @error('phone') is-invalid @enderror"
           value="{{ old('phone', $student->phone ?? '') }}">
    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea id="address" name="address" rows="2"
              class="form-control @error('address') is-invalid @enderror">{{ old('address', $student->address ?? '') }}</textarea>
    @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label for="date_of_birth" class="form-label">Date of birth</label>
    <input type="date" id="date_of_birth" name="date_of_birth"
           class="form-control @error('date_of_birth') is-invalid @enderror"
           value="{{ old('date_of_birth', isset($student) ? $student->date_of_birth->format('Y-m-d') : '') }}">
    @error('date_of_birth') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>