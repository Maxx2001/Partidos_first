<div class="flex p-4 justify-center  flex-wrap">

    @forelse($invited_events as $invited_event)

{{--                    @if($event->user_id == \Illuminate\Support\Facades\Auth::id())--}}
{{--                        <p>Test</p>--}}
{{--                    @endif--}}
        <div class="text-2xl py-4 px-12 w-2/5">
            <a href="{{ route('event', $invited_event) }}">
                <div class="
                    border
                    rounded
                    h-10
                    pl-6
                     flex
                      items-center
                      bg-blue">
                    {{$invited_event->eventname}}
                </div>

                <div class="border rounded p-2 bg-gray-light">
                    <div class="px-4 py-2">
                        <p> <i class="far fa-user"></i>
                            {{\App\Models\User::find($invited_event->user_id)->username}}</p>
                    </div>
                    <div class="px-4 px-2">
                        <p> <i class="far fa-calendar"></i> {{$invited_event->date}}</p>
                    </div>
                </div>
            </a>
        </div>

    @empty
        <p>No events yet</p>
    @endforelse

    @forelse($events as $event)

        {{--                    @if($event->user_id == \Illuminate\Support\Facades\Auth::id())--}}
        {{--                        <p>Test</p>--}}
        {{--                    @endif--}}
        <div class="text-2xl py-4 px-12 w-2/5">
            <a href="{{ route('event', $event) }}">
                <div class="
                border
                rounded
                h-10
                pl-6
                 flex
                  items-center
                  bg-blue">
                    {{$event->eventname}}
                </div>

                <div class="border rounded p-2 bg-gray-light">
                    <div class="px-4 py-2">
                        <p> <i class="far fa-user"></i>
                            {{\App\Models\User::find($event->user_id)->username}}</p>
                    </div>
                    <div class="px-4 px-2">
                        <p> <i class="far fa-calendar"></i> {{$event->date}}</p>
                    </div>
                </div>
            </a>
        </div>

    @empty
        <p>No events yet</p>
    @endforelse


</div>
