<div>
    @forelse($invites as $invite)
        <div class="mt-4 border p-4 rounded-2xl bg-blue">
            <p><a class="border rounded bg-gray p-2 text-xl" href="{{ route('event', \App\Models\Event::find($invite->event_id)) }}">{{ \App\Models\Event::find($invite->event_id)->eventname }} event invite</a></p>
            <div class="mt-6 flex content-around">
                <p class="mx-3"><a class='border rounded bg-green p-2' href="{{route('accept_invite', $invite)}}">Accept</a></p>
                <p class="mx-3"><a class='border rounded bg-red p-2' href="#">Decline</a></p>
            </div>
        </div>
    @empty
        <p>No invites yet</p>
    @endforelse
</div>
