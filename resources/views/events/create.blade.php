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
                    <form method="post" action="{{route('events.store')}}">
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
                            <input type="text" name="eventdate" placeholder="Esemeny datuma">
                        </div>
                        <div>
                            <label for="">Esemeny idopontja</label>
                            <input type="text" name="eventtime" placeholder="Esemeny idopontja">
                        </div>
                        <div>
                            <label for="">Esemeny korhatara</label>
                            <input type="text" name="eventage" placeholder="Esemeny korhatara">
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
