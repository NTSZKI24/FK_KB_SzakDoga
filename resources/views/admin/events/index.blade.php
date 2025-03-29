@extends("admin.layout")

@section("content")
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0">Események kezelése</h2>
        <a href="{{ route('admin.events.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Új esemény
        </a>
    </div>

    <!-- Events Table Card -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <!-- Table Header -->
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Név</th>
                            <th>Leírás</th>
                            <th>Dátum</th>
                            <th>Időpont</th>
                            <th>Helyszín</th>
                            <th>Vármegye</th>
                            <th>Típus</th>
                            <th>Korhatár</th>
                            <th>Létrehozó</th>
                            <th width="100">Kép</th>
                            <th width="100">Műveletek</th>
                        </tr>
                    </thead>
                    
                    <!-- Table Body -->
                    <tbody>
                        @forelse($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td><strong>{{ $event->eventname }}</strong></td>
                                <td style="max-width: 250px;">
                                    <div class="text-wrap">{{ Str::limit($event->eventdesc, 100) }}</div>
                                </td>
                                <td>{{ date('Y-m-d', strtotime($event->eventdate)) }}</td>
                                <td>{{ date('H:i', strtotime($event->eventtime)) }}</td>
                                <td>{{ $event->eventplace }}</td>
                                <td>{{ $event->county->county }}</td>
                                <td>{{ $event->type->type }}</td>
                                <td>{{ $event->eventage }}+</td>
                                <td>{{ $event->user->name }}</td>
                                <td>
                                    @if($event->image)
                                        <img src="{{ asset($event->image) }}" 
                                             alt="Event image" 
                                             class="img-thumbnail"
                                             style="max-height: 60px">
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{ route('admin.events.edit', $event->id) }}" 
                                           class="btn btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.events.destroy', $event->id) }}" 
                                              method="POST" 
                                              class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="btn btn-outline-danger"
                                                    onclick="return confirm('Biztosan törli ezt az eseményt?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="12" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="fas fa-inbox fa-3x mb-3 d-block"></i>
                                        <p class="h5">Nincsenek megjeleníthető események</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection