<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <section class="bg-gray-50 p-3 sm:p-5">
            <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                <!-- Start coding here -->
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center" action="" method="GET">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" autocomplete="off">
                                </div>
                                <button type="submit" class="m-5 flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    Search
                                </button>
                            </form>
                        </div>

                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button id="createModalButton" data-modal-target="createModal" data-modal-toggle="createModal" type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none">
                                    LAPOR ! 🔥
                                </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">No</th>
                                    <th scope="col" class="px-4 py-3">Pelapor</th>
                                    <th scope="col" class="px-4 py-3">Terlapor</th>
                                    <th scope="col" class="px-4 py-3">Kelas</th>
                                    <th scope="col" class="px-4 py-3">Laporan</th>
                                    <th scope="col" class="px-4 py-3">Bukti</th>
                                    <th scope="col" class="px-4 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $no = 1;
                                    ?>
                                {{-- @foreelse digunakan untuk menampilkan daftar item dengan cara yang efisien dan bersih. ini mirip dengan @foreeach tetapi memiliki fitur tambahan untuk menangani kasus dimana daftar item kosong --}}
                                @foreach ($siswas as $siswa)
                                <tr class="border-b">
                                    <td class="px-4 py-3">{{ $no++ }}</td>
                                    <td class="px-4 py-3">{{ $siswa->pelapor }}</td>
                                    <td class="px-4 py-3">{{ $siswa->terlapor }}</td>
                                    <td class="px-4 py-3">{{ $siswa->kelas }}</td>
                                    <td class="px-4 py-3">{{ $siswa->laporan }}</td>
                                    <td class="px-4 py-3">
                                        <img class="mx-auto h-full dark:hidden" style="width: 150px; height:150px; border-style:none;" src="{{ asset('storage/' . $siswa->foto) }}" alt="{{ $siswa->foto }}">
                                    </td>
                                    <td class="px-4 py-3">
                                        <span class="badge text-white p-2 rounded-lg @if ($siswa->status == 'sedang dalam tinjauan') bg-red-600 @elseif ($siswa->status == 'done') bg-green-600  @else bg-white-600 @endif">
                                            {{$siswa->status}}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach

                                <php style="margin-left:15px;">
                                    <?php
                                    // dump(request('search'));
                                    // $no --  ;
                                    // $msg = "";
                                    // $searchTerm = $searchTerm ?? null;

                                    // if ($no == 0 && is_null($searchTerm)) {
                                    //     $msg = "Data Belum Tersedia";
                                    // }
                                    // elseif ($no == 0 && isset($searchTerm)) {
                                    //     $msg = "Data Yang Anda Cari Tidak Ada";
                                    // }
                                    // elseif ($no > 0 && isset($searchTerm)) {
                                    //     $msg = "Menampilkan $no hasil pada pencarian $searchTerm";
                                    // }
                                    // else {
                                    //     $msg = "";
                                    // };

                                    // echo $msg;
                                    // echo request('search');
                                    // echo $searchTerm;
                                    // echo $no;
                                    ?>
                                    </php>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </section>


<!-- CREATE MODAL -->
<div id="createModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Kasus
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="createModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pelapor</label>
                        <input type="text" name="pelapor" id="pelapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Pelapor" required="">
                    </div>
                    <div>
                        <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Terlapor</label>
                        <input type="text" name="terlapor" id="terlapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Terlapor" required="">
                    </div>
                    <div>
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kelas" required="">
                    </div>
                    <div>
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sekrinsut</label>
                        <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="foto" type="file" name="foto">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporan</label>
                        <textarea name="laporan" id="laporan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis Laporan nya"></textarea>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Add new Kasus
                </button>
            </form>
        </div>
    </div>
</div>


</x-app-layout>

