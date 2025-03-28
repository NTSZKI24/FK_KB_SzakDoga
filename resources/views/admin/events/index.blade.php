<h1>Esemenyek listaja</h1>
    <div class="row">
        <div class="col-12">
        <a href="{{route('cars.create')}}" class="btn btn-primary">Hozzáadás </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>Leiras</th>
                        <th>Datum</th>
                        <th>Idopont</th>
                        <th>Varmegye</th>
                        <th>Helyszin</th>
                        <th>Korhatar</th>
                        <th>Tipus</th>
                        <th>Kep</th>
                        <th>Keszitette</th>
                    </tr>
                </thead>
                <tbody>
                    @if(sizeof($cars) > 0)
                        @foreach($cars as $car)
                            <tr>
                                <td>{{  }}</td>
                                <td>{{  }}</td>
                                <td>{{  }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{  }}</td>
                                <td>{{  }}</td>
                                <td>{{  }}</td>
                                <td>{{ }}</td>
                                <td>{{ }}</td>
                                <td>{{}}</td>
                                <td  class="d-flex" style="gap: 5px;">
                                    <a class="btn btn-warning" 
                                    href="{{route('cars.updateForm', ['car'=> $car->id])}}">
                                        Módosítás
                                    </a>
                                    <form method="post" action="{{route('cars.delete', ['car'=> $car->id])}}">
                                        @method("DELETE")
                                        @csrf()
                                    <button class="btn btn-danger" type="submit">
                                        Törlés
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h1 class="text-center">Nem található adat!</h1>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>