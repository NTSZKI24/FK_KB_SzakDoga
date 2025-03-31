@extends("admin.layout")

@section("content")
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0">Felhasználók kezelése</h2>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Új felhasználó
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Név</th>
                            <th>Email</th>
                            <th>Regisztráció dátuma</th>
                            <th>Események száma</th>
                            <th>Státusz</th>
                            <th>Műveletek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                <td>{{ $user->events->count() }}</td>
                                <td>
                                    <span class="badge bg-{{ $user->status ? 'success' : 'danger' }}">
                                        {{ $user->status ? 'Aktív' : 'Inaktív' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('admin.users.edit', $user->id) }}" 
                                           class="btn btn-outline-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.users.toggle-status', $user->id) }}" 
                                            method="POST" 
                                            class="d-inline">
                                          @csrf
                                          @method('PATCH')
                                          <button type="submit" 
                                                  class="btn btn-{{ $user->status ? 'warning' : 'success' }} btn-sm"
                                                  onclick="return confirm('Biztosan {{ $user->status ? 'inaktiválja' : 'aktiválja' }} ezt a felhasználót?')">
                                              <i class="fas fa-{{ $user->status ? 'ban' : 'check' }}"></i>
                                              {{ $user->status ? 'Inaktiválás' : 'Aktiválás' }}
                                          </button>
                                      </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <div class="text-muted">
                                        <i class="fas fa-users fa-3x mb-3 d-block"></i>
                                        <p class="h5">Nincsenek felhasználók</p>
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