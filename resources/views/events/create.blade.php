<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Esemenyek') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <H1>Hozz letre egy Esemenyt</H1>
                    <form method="post" action="{{route('events.store')}}" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div>
                            <label for="">Esemeny neve</label>
                            <input type="text" name="eventname" placeholder="Esemeny neve">
                        </div>
                        <div>
                            <label for="">Esemeny leirasa</label>
                            <input type="text" name="eventdesc" placeholder="Esemeny leirasa">
                        </div>
                        <div>
                            <label for="">Esemeny datuma</label>
                            <input type="text" name="eventdate" placeholder="Pl.: 2025-06-07">
                        </div>
                        <div>
                            <label for="">Esemeny idopontja</label>
                            <input type="text" name="eventtime" placeholder="Pl.: 19:00">
                        </div>
                        <div>
                            <label for="">Esemeny korhatara</label>
                            <input type="text" name="eventage" placeholder="Esemeny korhatara">
                        </div>
                        <div>
                            <label for="county_id">Megye</label>
                            <select name="counties_id">
                                @foreach($counties as $county)
                                    <option value="{{ $county->id }}">{{ $county->county }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="">Esemeny helyszine</label>
                            <input type="text" name="eventplace" placeholder="Esemeny helyszine">
                        </div>
                        <div>
                            <label for="">Fenykep feltoltese</label>
                            <input type="file" name="image">
                        </div>
                        <div>
                            <input type="submit" value="Hozd letre az Esemenyt">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
