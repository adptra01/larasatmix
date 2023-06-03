<div class="m-4 bg-base-200 rounded-xl ">
    <div class="navbar btm-nav-sm">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="p-2 mt-3 shadow menu menu-compact dropdown-content bg-base-300 rounded-box w-52">
                    <li><a href="{{ Route('home') }}">Homepage</a></li>
                    <li><a href="{{ Route('profile') }}">Profile</a></li>
                    <li><a href="{{ Route('report') }}">Laporan</a></li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
        <div class="navbar-end">
            @php
                $options = ['light', 'dark', 'synthwave', 'retro', 'halloween', 'dracula', 'luxury'];
            @endphp
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn m-1 btn-sm">Tema</label>
                <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 gap-3">
                    @foreach ($options as $index => $item)
                        <li>
                            <a href="{{ route('theme', 1) }}"
                                onclick="event.preventDefault();
                                    document.getElementById('theme-form-{{ $index }}').submit();"
                                data-theme="{{ $item }}"
                                class="rounded font-bold text-green-600">
                                {{ $item }}
                            </a>
                            <form id="theme-form-{{ $index }}" class="hidden" action="{{ route('theme', 1) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $item }}">
                            </form>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
