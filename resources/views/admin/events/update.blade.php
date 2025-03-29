@extends("admin.layout")

@section("content")
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Esemény szerkesztése</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="eventname" class="form-label">Esemény neve</label>
                            <input type="text" class="form-control @error('eventname') is-invalid @enderror" 
                                   id="eventname" name="eventname" value="{{ old('eventname', $event->eventname) }}">
                            @error('eventname')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="eventdesc" class="form-label">Leírás</label>
                            <textarea class="form-control @error('eventdesc') is-invalid @enderror" 
                                      id="eventdesc" name="eventdesc" rows="4">{{ old('eventdesc', $event->eventdesc) }}</textarea>
                            @error('eventdesc')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="eventdate" class="form-label">Dátum</label>
                                <input type="date" class="form-control @error('eventdate') is-invalid @enderror" 
                                       id="eventdate" name="eventdate" value="{{ old('eventdate', $event->eventdate) }}">
                                @error('eventdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="eventtime" class="form-label">Időpont</label>
                                <input type="time" class="form-control @error('eventtime') is-invalid @enderror" 
                                       id="eventtime" name="eventtime" value="{{ old('eventtime', $event->eventtime) }}">
                                @error('eventtime')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="eventplace" class="form-label">Helyszín</label>
                            <input type="text" class="form-control @error('eventplace') is-invalid @enderror" 
                                   id="eventplace" name="eventplace" value="{{ old('eventplace', $event->eventplace) }}">
                            @error('eventplace')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="counties_id" class="form-label">Vármegye</label>
                                <select class="form-select @error('counties_id') is-invalid @enderror" 
                                        id="counties_id" name="counties_id">
                                    @foreach($counties as $county)
                                        <option value="{{ $county->id }}" 
                                            {{ old('counties_id', $event->counties_id) == $county->id ? 'selected' : '' }}>
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
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}" 
                                            {{ old('types_id', $event->types_id) == $type->id ? 'selected' : '' }}>
                                            {{ $type->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('types_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="eventage" class="form-label">Korhatár</label>
                            <input type="number" class="form-control @error('eventage') is-invalid @enderror" 
                                   id="eventage" name="eventage" value="{{ old('eventage', $event->eventage) }}">
                            @error('eventage')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="image" class="form-label">Kép</label>
                            @if($event->image)
                                <div class="mb-2">
                                    <img src="{{ asset($event->image) }}" alt="Current image" class="img-thumbnail" style="max-height: 150px">
                                </div>
                            @endif
                            <input type="file" class="form-control @error('image') is-invalid @enderror" 
                                   id="image" name="image">
                            <div class="form-text">Hagyja üresen, ha nem szeretné módosítani a képet.</div>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('admin.events.index') }}" class="btn btn-secondary">Mégsem</a>
                            <button type="submit" class="btn btn-primary">Mentés</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop