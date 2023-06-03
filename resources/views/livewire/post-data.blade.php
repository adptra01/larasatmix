<div>
    <input type="text" wire:model="search" placeholder="Search…" class="w-full max-w-xs input input-bordered input-sm"
        tabindex="0" />
    @if ($posts->count() == 0)
        <ul tabindex="0" class="p-2 mt-3 shadow menu menu-compact dropdown-content bg-slate-100 rounded-box w-52">
            <li><a>Tidak ditemukan</a></li>
        </ul>
    @elseif ($posts->count() == 1)
        <ul tabindex="0"
            class="w-56 p-2 mt-3 text-black shadow menu menu-compact dropdown-content bg-slate-100 rounded-box">
            @foreach ($posts as $item)
                <li class="border-base-300 hover:bg-base-300">
                    <a href="{{ route('licenseCard.show', $item->slug) }}">
                        <span class="font-semibold hover:text-white">
                            {{ $item->nameOfOwner }} <br>
                            <small class="text-warning">{{ $item->policeNumber }}</small>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
