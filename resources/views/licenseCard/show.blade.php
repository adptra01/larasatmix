<x-app>
    <x-slot name="title">Show Page</x-slot>

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

            <!-- Invoice -->
            <div class="max-w-[85rem] px-2 sm:px-6 lg:px-8 my-4 sm:my-10">
                <!-- Grid -->
                <div class="flex items-center justify-between pb-5 mb-5 border-b border-gray-200 ">
                    <div>
                        <h2 class="text-2xl font-semibold text-white ">Surat Tanda Nomor Kendaraan Bermotor</h2>
                        <p class="text-xs font-semibold hover:text-warning ">Vehicle Registration Certificate</p>
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->

                <!-- Grid -->
                <div class="grid gap-3 md:grid-cols-2 ">
                    <div class="grid space-y-3">
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Nomor Polisi (BH):
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->policeNumber }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Nama Pemilik:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->nameOfOwner }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Alamat:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->address }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Nomor Telepon:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->telp }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">Merk / Tipe:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->brandAndType }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Jenis / Model:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->categoryAndModel }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Tahun Pembuatan:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->manufactureYear }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Silinder / Sumber Tenaga:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->cylindrerCapacity }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Nomor Rangka:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->bodyNumber }}</span>
                            </dd>
                        </dl>
                        <dl class="grid text-sm sm:flex gap-x-3">
                            <dt class="min-w-[200px] max-w-[250px] ">
                                Nomor Mesin:
                            </dt>
                            <dd class="font-medium text-white ">
                                <span class="block font-semibold">{{ $key->engineNumber }}</span>
                            </dd>
                        </dl>
                    </div>
                    <!-- Col -->

                    <div>
                        <div class="grid space-y-3">
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Warna Kendaraan:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span class="block font-semibold">{{ $key->color }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Bahan Bakar:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span class="block font-semibold">{{ $key->typeFuel }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Warna Plat Kendaraan:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span class="block font-semibold">{{ $key->licensePlateColor }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Tanggal Akhir STNK:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span
                                        class="block font-semibold">{{ Carbon\carbon::parse($key->dateOfExpire)->format('d-m-Y (d F Y)') }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Berlaku s/d:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span
                                        class="block font-semibold">{{ Carbon\carbon::parse($key->extraTime)->format('d-m-Y (d F Y)') }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Status:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span
                                        class="block font-semibold">{{ $key->status == 0 ? 'Belum Bayar' : 'Sudah Bayar' }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Tanggal Bayar:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span
                                        class="block font-semibold">{{ Carbon\carbon::parse($key->payDate)->format('l, d F Y') }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Total Pembayaran:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span class="block font-semibold">Rp. {{ $key->payment }}</span>
                                </dd>
                            </dl>
                            <dl class="grid text-sm sm:flex gap-x-3">
                                <dt class="min-w-[200px] max-w-[250px] ">
                                    Permohonan:
                                </dt>
                                <dd class="font-medium text-white ">
                                    <span class="block font-semibold">{{ $key->description }}</span>
                                </dd>
                            </dl>
                        </div>
                    </div>
                    <!-- Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Invoice -->
            <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-6">
                <div class="order-last sm:col-span-3 md:order-first">
                    <a href="{{ route('home') }}"
                        class="px-3 py-2 text-sm font-semibold text-white bg-gray-600 border-0 rounded-md shadow-sm btn btn-block hover:bg-gray-500 focus-visible:outline hover:text-black focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 ">Kembali</a>
                </div>
                <div class="sm:col-span-3">
                    <a href="{{ route('licenseCard.edit', $key->slug ) }}"
                        class="px-3 py-2 text-sm font-semibold text-black rounded-md shadow-sm border-0w bg-warning hover:text-white btn btn-block hover:bg-yellow-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-bg-yellow-600 ">Edit</a>
                </div>
            </div>
        </div>
</x-app>
