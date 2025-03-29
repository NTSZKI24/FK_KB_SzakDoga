@extends("admin.layout")

@section("content")
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Új esemény létrehozása</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="eventname" class="form-label">Esemény neve</label>
                            <input type="text" class="form-control @error('eventname') is-invalid @enderror" 
                                   id="eventname" name="eventname" value="{{ old('eventname') }}">
                            @error('eventname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="eventdesc" class="form-label">Leírás</label>
                            <textarea class="form-control @error('eventdesc') is-invalid @enderror" 
                                    id="eventdesc" name="eventdesc" rows="4">{{ old('eventdesc') }}</textarea>
                            @error('eventdesc')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="eventdate" class="form-label">Dátum</label>
                                <input type="date" class="form-control @error('eventdate') is-invalid @enderror" 
                                       id="eventdate" name="eventdate" value="{{ old('eventdate') }}">
                                @error('eventdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="eventtime" class="form-label">Időpont</label>
                                <input type="time" class="form-control @error('eventtime') is-invalid @enderror" 
                                       id="eventtime" name="eventtime" value="{{ old('eventtime') }}">
                                @error('eventtime')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="eventplace" class="form-label">Helyszín</label>
                            <input type="text" class="form-control @error('eventplace') is-invalid @enderror" 
                                   id="eventplace" name="eventplace" value="{{ old('eventplace') }}">
                            @error('eventplace')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="counties_id" class="form-label">Vármegye</label>
                                <select class="form-select @error('counties_id') is-invalid @enderror" 
                                        id="counties_id" name="counties_id">
                                    <option value="">Válasszon vármegyét</option>
                                    @foreach($counties as $county)
                                        <option value="{{ $county->id }}" 
                                            {{ old('counties_id') == $county->id ? 'selected' : '' }}>
                                            {{ $county->county }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('counties_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="types_id" class="form-label">Típus</label>
                                <select class="form-select @error('types_id') is-invalid @enderror" 
                                        id="types_id" name="types_id">
                                    <option value="">Válasszon típust</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" 
                                            {{ old('types_id') == $type->id ? 'selected' : '' }}>
                                            {{ $type->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('types_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="eventage" class="form-label">Korhatár</label>
                                <input type="number" class="form-control @error('eventage') is-invalid @enderror" 
                                       id="eventage" name="eventage" value="{{ old('eventage') }}">
                                @error('eventage')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="user_id" class="form-label">Létrehozó</label>
                                <select class="form-select @error('user_id') is-invalid @enderror" 
                                        id="user_id" name="user_id">
                                    <option value="">Válasszon felhasználót</option>
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}" 
                                            {{ old('user_id') == $user->id ? 'selected' : '' }}>
                                            {{ $user->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label">Kép</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Mégsem</a>
                            <button type="submit" class="btn btn-primary">Létrehozás</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection