<div>
    <div>
        <div class="flex">
            <i class="fas fa-search mt-1 mr-2 text-2xl"></i>
            <p class="text-2xl">Search users</p>
        </div>
        <input wire:model='search'
               type="text"
               class="
               border
               rounded-xl
               bg-gray-dark
                w-42
                h-12
                flex
                items-center
                text-2xl
                pl-2
                w-full">
        <div class="flex flex-col">
            @unless($search == '')
                @forelse($users as $user)
                    @if(auth()->user()->isnot($user->searchable))
                        <a href="{{ route('profile',$user->searchable) }}">
                            <p class="text-3xl border rounded-2xl py-2 px-4 m-2 text-center">
                                {{ $user->searchable->username }}
                            </p>
                        </a>
                    @endif
                @empty
                    <p>No results</p>
                @endforelse
            @endunless
        </div>
    </div>
</div>
