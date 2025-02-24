<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('A sajat esemenyeim szerkesztese') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" action="{{url('/myevents/update',$event->id)}}">
                        @csrf
                        @method('post')
                        <div>
                            <label for="">Esemeny neve</label>
                            <input type="text" name="eventname" value="{{$event->eventname}}">
                        </div>
                        <div>
                            <label for="">Esemeny leirasa</label>
                            <input type="text" name="eventdesc" value="{{$event->eventdesc}}">
                        </div>
                        <div>
                            <label for="">Esemeny datuma</label>
                            <input type="text" name="eventdate" value="{{$event->eventdate}}">
                        </div>
                        <div>
                            <label for="">Esemeny idopontja</label>
                            <input type="text" name="eventtime" value="{{$event->eventtime}}">
                        </div>
                        <div>
                            <label for="">Esemeny korhatara</label>
                            <input type="text" name="eventage" value="{{$event->eventage}}">
                        </div>
                        <div>
                            <input type="submit" value="Szerkeszd az eseményed">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>