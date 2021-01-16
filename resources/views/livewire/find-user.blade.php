<div>
    <div>
        <p class="text-6xl text-center">Explore users</p>
        <div class="flex flex-col items-center">
            <input wire:model='search' type="text" class="border">
            @forelse($users as $user)
                @if(auth()->user()->isnot($user->searchable))
                    <p class="text-3xl border rounded-2xl py-2 px-4 m-2 w-32 text-center">{{ $user->searchable->username }}</p>
{{--                    <p>{{ $user -> id }}</p>--}}
{{--                    <a href="{{ route('add_friend', $user->searchable) }}" class="border rounded-xl m-4 p-4">--}}
{{--                        Add friend--}}
{{--                    </a>--}}
                @endif
            @empty
                <p>No results</p>

            @endforelse

        </div>

    </div>
</div>
