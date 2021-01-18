<div class="
                w-11/12
                border
                bg-blue
                bg-opacity-80
                rounded-xl
                h-full
                pt-4
                mt-4
                flex
                justify-center
                flex-wrap">

  @forelse($participants as $participant)
        <div class=" w-32 h-40 m-4 flex flex-col items-center">
            <img
                src="{{asset('/images/profile_pictures/default.jpg')}}"
                alt="Profile picture"
                class="w-24 rounded-full"
            >
            <p class="text-3xl text-center">{{$participant->username}}</p>
        </div>

        @empty
            <p>No participants yet</p>
    @endforelse
</div>
