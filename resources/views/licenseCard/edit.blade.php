<x-app>
    <x-slot name="title">Edit Page</x-slot>

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
                            <div class="text-s">Data yang telah diinputkan secara otomatis memperpanjang masa akhir STNK
                                selama 1 tahun kedepan!</div>
                        </div>
                    </div>
                </div>
            @endif
            <form action="{{ Route('licenseCard.update', $key->slug) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="space-y-12">
                    <div class="pb-12">
                        <h2 class="my-3 font-bold leading-7 text-center ">Informasi Kendaraan
                        </h2>
                        <hr class="pb-6">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label class="label" for="policeNumber">
                                    <span class="font-bold label-text">Nomor Polisi (BH)</span>
                                </label>
                                <input type="text" id="policeNumber" name="policeNumber"
                                    value="{{ $key->policeNumber }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('policeNumber')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="nameOfOwner">
                                    <span class="font-bold label-text">Nama Pemilik</span>
                                </label>
                                <input type="text" id="nameOfOwner" name="nameOfOwner"
                                    value="{{ $key->nameOfOwner }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('nameOfOwner')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="col-span-full">
                                <label for="address" class="block text-sm font-bold leading-6 ">Alamat</label>
                                <div class="mt-2">
                                    <textarea class="w-full textarea bg-base-1 00 input-bordered" name="address" placeholder="Type here">{{ $key->address }}</textarea>
                                    @error('address')
                                        <label class="label">
                                            <span class="label-text-alt text-error">{{ $message }}</span>
                                        </label>
                                    @enderror
                                </div>
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="brandAndType">
                                    <span class="font-bold label-text">Merk / Tipe</span>
                                </label>
                                <input type="text" id="brandAndType" name="brandAndType"
                                    value="{{ $key->brandAndType }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('brandAndType')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="categoryAndModel">
                                    <span class="font-bold label-text">Jenis / Model</span>
                                </label>
                                <input type="text" id="categoryAndModel" name="categoryAndModel"
                                    value="{{ $key->categoryAndModel }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('categoryAndModel')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="manufactureYear">
                                    <span class="font-bold label-text">Tahun Pembuatan</span>
                                </label>
                                <input type="text" id="manufactureYear" name="manufactureYear"
                                    value="{{ $key->manufactureYear }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('manufactureYear')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="cylindrerCapacity">
                                    <span class="font-bold label-text">Isi Silinder / Sumber Tenaga</span>
                                </label>
                                <input type="text" id="cylindrerCapacity" name="cylindrerCapacity"
                                    value="{{ $key->cylindrerCapacity }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('cylindrerCapacity')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="bodyNumber">
                                    <span class="font-bold label-text">Nomor Rangka</span>
                                </label>
                                <input type="text" id="bodyNumber" name="bodyNumber"
                                    value="{{ $key->bodyNumber }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('bodyNumber')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="engineNumber">
                                    <span class="font-bold label-text">Nomor Mesin</span>
                                </label>
                                <input type="text" id="engineNumber" name="engineNumber"
                                    value="{{ $key->engineNumber }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('engineNumber')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="color">
                                    <span class="font-bold label-text">Warna Kendaraan</span>
                                </label>
                                <input type="text" id="color" name="color" value="{{ $key->color }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('color')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="typeFuel">
                                    <span class="font-bold label-text">Bahan Bakar</span>
                                </label>
                                <input type="text" id="typeFuel" name="typeFuel" value="{{ $key->typeFuel }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('typeFuel')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="licensePlateColor">
                                    <span class="font-bold label-text">Warna Plat Kendaraan</span>
                                </label>
                                <input type="text" id="licensePlateColor" name="licensePlateColor"
                                    value="{{ $key->licensePlateColor }}" placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('licensePlateColor')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="dateOfExpire">
                                    <span class="font-bold label-text">Tanggal Akhir STNK</span>
                                </label>
                                <input type="date" id="dateOfExpire" name="dateOfExpire"
                                    value="{{ Carbon\carbon::parse($key->dateOfExpire)->format('Y-m-d') }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('dateOfExpire')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="extraTime">
                                    <span class="font-bold label-text">Berlaku s/d</span>
                                </label>
                                <input type="date" id="extraTime" name="extraTime" value="{{ Carbon\carbon::parse($key->extraTime)->format('Y-m-d') }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('extraTime')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="dateOfExpire">
                                    <span class="font-bold label-text"></span>
                                </label>
                                <div class="w-full">Masa berlaku telah diperpanjang secara otomatis sampai dengan <span
                                        class="font-semibold text-warning hover:text-red-500">{{ Carbon\carbon::parse($key->extraTime)->format('d F Y') }}</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="space-y-12">
                    <div class="pb-12">
                        <h2 class="my-3 font-bold leading-7 text-center ">Informasi Tambahan
                        </h2>
                        <hr class="pb-6">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label class="label" for="payDate">
                                    <span class="font-bold label-text">Tanggal Data Diinput</span>
                                </label>
                                <input type="date" id="payDate" name="payDate" value="{{ Carbon\carbon::parse($key->payDate)->format('Y-m-d') }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('payDate')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>

                            <div class="sm:col-span-3">
                                <label class="label" for="payment">
                                    <span class="font-bold label-text">Pembayaran</span>
                                </label>
                                <input type="number" id="payment" name="payment" value="{{ $key->payment }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('payment')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <div class="form-control">
                                    <label class="label" for="status">
                                        <span class="font-bold label-text">Status</span>
                                    </label>
                                    <label class="cursor-pointer label">
                                        <span class="label-text">Belum Bayar</span>
                                        <input type="hidden" name="status" {{ $key->status == 0 ? 'checked' : '' }}
                                            value="0" />
                                        <input type="checkbox" class="toggle" name="status"
                                            {{ $key->status == 1 ? 'checked' : '' }} value="1" /> <span
                                            class="label-text">Sudah Bayar</span>
                                    </label>
                                </div>
                                @error('status')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="sm:col-span-3">
                                <label class="label" for="telp">
                                    <span class="font-bold label-text">Nomor Telepon</span>
                                </label>
                                <input type="text" id="telp" name="telp" value="{{ $key->telp }}"
                                    placeholder="Type here"
                                    class="w-full input input-bordered input-md bg-base-100" />
                                @error('telp')
                                    <label class="label">
                                        <span class="label-text-alt text-error">{{ $message }}</span>
                                    </label>
                                @enderror
                            </div>
                            <div class="col-span-full">
                                <label for="description" class="block text-sm font-bold leading-6 ">Permohonan</label>
                                <div class="mt-2">
                                    <textarea class="w-full textarea bg-base-100 input-bordered" name="description" placeholder="Type here">{{ $key->description }}</textarea>
                                    @error('description')
                                        <label class="label">
                                            <span class="label-text-alt text-error">{{ $message }}</span>
                                        </label>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                    <div class="order-last sm:col-span-3 md:order-first">
                        <a href="{{ route('home') }}"
                            class="px-3 py-2 text-sm font-semibold text-white bg-red-600 border-0 rounded-md shadow-sm btn btn-block hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600 ">Batal</a>
                    </div>
                    <div class="sm:col-span-3">
                        <button
                            class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 border-0 rounded-md shadow-sm btn btn-block hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app>
