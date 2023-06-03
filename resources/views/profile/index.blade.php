<x-app>
    <x-slot name="title">Profile Information</x-slot>
    <div class="card">
        <div class="rounded-lg card-body bg-base-300">
            @if ($errors->any())
                <div class="mb-4 shadow-lg alert alert-error">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="flex-shrink-0 w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <div>
                            <h3 class="font-bold">Pemberitahuan</h3>
                            <div class="text-s">Ada yang salah dengan pengeditan data, perhatikan ketentuan dan pastikan
                                data yang diedit sudah benar!</div>
                        </div>
                    </div>
                </div>
            @else
                <div class="mb-4 shadow-lg alert alert-warning">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="flex-shrink-0 w-6 h-6 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <div>
                            <h3 class="font-bold">Pemberitahuan</h3>
                            <div class="text-s">Jangan pernah memberikan informasi pribadi yang sensitif dan harap untuk
                                diingat ketika melakukan perubahan profil informasi!</div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="container rounded-lg bg-base-100">
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    <div class="p-5">
                        <div class="w-full form-control">
                            <label class="label">
                                <span class="label-text">Nama Akun</span>
                            </label>
                            <input type="text" placeholder="Type here" class="w-full input input-bordered"
                                name="name" value="{{ $auth->name }}" />
                            @error('name')
                                <label class="label">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="w-full form-control">
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="email" placeholder="Type here" class="w-full input input-bordered"
                                name="email" value="{{ $auth->email }}" />
                            @error('email')
                                <label class="label">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="w-full form-control">
                            <label class="label">
                                <span class="label-text">Password</span>
                                <small class="label-text-alt">Kosongkan jika tidak mengubah password!!</small>
                            </label>
                            <input type="password" placeholder="Jangan diisi jika tidak ingin mengubah password!!!"
                                class="w-full input input-bordered" name="password" />
                            @error('password')
                                <label class="label">
                                    <span class="text-red-500 label-text-alt">{{ $message }}</span>
                                </label>
                            @enderror
                        </div>
                        <div class="w-full mt-5 form-control">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

</x-app>
