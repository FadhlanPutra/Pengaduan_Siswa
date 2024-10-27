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
                                <th scope="col" class="px-4 py-3">Edit Status</th>
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
                                <td class="px-4 py-3">
                                </td>
                                <td class="px-4 py-3">
                                    <img class="mx-auto h-full dark:hidden" src="{{ asset('storage/' . $siswa->foto) }}" alt="{{ $siswa->foto }}" width="150" height="150">
                                </td>
                                <td class="px-4 py-3">
                                    <span class="badge text-white p-2 rounded-lg @if ($siswa->status == 'sedang dalam tinjauan') bg-red-600 @elseif ($siswa->status == 'done') bg-green-600  @else bg-white-600 @endif">
                                        {{$siswa->status}}
                                    </span>
                                </td>
                                <td class="px-4 py-3">
                                    <a href="{{ route('guru.edit', $siswa->id) }}" class="bg-amber-600 p-2 m-2 rounded-lg text-white">Edit</a>
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

</x-app-layout>

