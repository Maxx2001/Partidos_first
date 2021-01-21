<div class="flex p-4 justify-center  flex-wrap">
    @foreach($events as $event)
        <div class="text-2xl py-4 px-12 w-2/5">
            <a href="{{ route('event', $event) }}">
                <div class="
                border-4
                border-green-dark
                rounded
                h-10
                pl-6
                 flex
                  items-center
                  bg-green-light">
                    <p class="">
                        {{$event->eventname}}
                    </p>
                    <p class="flex justify-end	w-full mr-6">
                        Your event
                    </p>
                </div>

                <div class="
                -mt-1
                border-4
                border-green-dark
                rounded
                p-2 bg-
                gray-light"
                >
                    <div class="px-4 py-2">
                        <p> <i class="far fa-user"></i>
                            You
                        </p>
                    </div>
                    <div class="px-4 px-2">
                        <p> <i class="far fa-calendar"></i> {{$event->date}}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

    @foreach($invited_events as $invited_event)
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
                        <p>
                            <i class="far fa-user"></i>
                            {{\App\Models\User::find($invited_event->user_id)->username}}</p>
                    </div>
                    <div class="px-4 px-2">
                        <p> <i class="far fa-calendar"></i> {{$invited_event->date}}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
