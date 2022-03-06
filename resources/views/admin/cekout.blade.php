<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<div class="flex flex-wrap">
                    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                        <p class="text-xl pb-6 flex items-center">
                            <i class="fas fa-list mr-3"></i> Check Out
                        </p>
                        
                        <div class="leading-loose">
                            <form class="p-10 bg-white rounded shadow-xl">
                            <h4><b>Total Belanja: Rp 25.000,- </b> </h4>
                            <div class="mt-2">
                                    <label class="block text-sm text-black-600" for="name">Email</label>
                                    <input class="w-full px-2 py-2 text-black-600 bg-black-200 rounded" id="name" name="name" type="text" required="" placeholder="Masukkan Email" aria-label="Name">
                                </div>
                                <div class="">
                                    <label class="block text-sm text-black-600" for="name">Nama</label>
                                    <input class="w-full px-2 py-2 text-black-600 bg-black-200 rounded" id="name" name="name" type="text" required="" placeholder="Masukkan Nama" aria-label="Name">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-black-600" for="email">Alamat</label>
                                    <input class="w-full px-2  py-2 text-black-600 bg-black-200 rounded" id="alamat" name="alamat" type="text" required="" placeholder="Masukkan Alamat" aria-label="Alamat">
                                </div>
                                <div class="mt-2">
                                    <label class="block text-sm text-black-600" for="email">Telp</label>
                                    <input class="w-full px-2  py-2 text-black-600 bg-black-200 rounded" id="email" name="email" type="text" required="" placeholder="Masukkan No Telp" aria-label="Email">
                                </div>
                                <div class="mt-6">
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded">
                                    <a href="{{route('dashboard')}}" type="submit">Order</a>    
                                    </button>
                                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" >
                                    <a href="{{route('detailbarang')}}" type="submit"> Batal</a>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

</x-admin-layout>