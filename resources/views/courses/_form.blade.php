@csrf
<div class="mb-3">
    <label for="name" class="form-label">Course name</label>
    <input type="text" id="name" name="name"
           class="form-control @error('name') is-invalid @enderror"
           value="{{ old('name', $course->name ?? '') }}">
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea id="description" name="description" rows="3"
              class="form-control @error('description') is-invalid @enderror">{{ old('description', $course->description ?? '') }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
<div class="row">
    <div class="col-md-4 mb-3">
        <label for="duration" class="form-label">Duration (weeks)</label>
        <input type="number" id="duration" name="duration" min="1"
               class="form-control @error('duration') is-invalid @enderror"
               value="{{ old('duration', $course->duration ?? '') }}">
        @error('duration') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label for="fee" class="form-label">Fee</label>
        <input type="number" step="0.01" min="0" id="fee" name="fee"
               class="form-control @error('fee') is-invalid @enderror"
               value="{{ old('fee', $course->fee ?? '') }}">
        @error('fee') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
    <div class="col-md-4 mb-3">
        <label for="difficulty" class="form-label">Difficulty</label>
        <select id="difficulty" name="difficulty"
                class="form-select @error('difficulty') is-invalid @enderror">
            <option value="">-- Select --</option>
            @foreach (['Easy', 'Medium', 'Hard'] as $level)
                <option value="{{ $level }}"
                    @selected(old('difficulty', $course->difficulty ?? '') === $level)>
                    {{ $level }}
                </option>
            @endforeach
        </select>
        @error('difficulty') <div class="invalid-feedback">{{ $message }}</div> @enderror
    </div>
</div>
<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
           @checked(old('is_active', $course->is_active ?? true))>
    <label class="form-check-label" for="is_active">Currently offered (active)</label>
</div>
<button type="submit" class="btn btn-primary">Save</button>
<a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancel</a>