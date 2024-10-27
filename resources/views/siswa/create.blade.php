<x-app-layout>


    <section class="bg-white">
        <a href="{{ route('siswa.index') }}" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        &laquo; Tidak Jadi
        </a>
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Add a New Kasus</h2>
            <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @csrf : memastikan bahwa permintaan yang dikirimkan ke server berasal dari formulir yang sah --}}
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="pelapor" class="block mb-2 text-sm font-medium text-gray-900">Pelapor</label>
                        <input type="text" id="pelapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="wat yu nem" required="" name="pelapor">
                    </div>
                    <div class="w-full">
                        <label for="terlapor" class="block mb-2 text-sm font-medium text-gray-900">Terlapor</label>
                        <input type="text" id="terlapor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="nem terlapor" required="" name="terlapor">
                    </div>
                    <div class="w-full">
                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900">Kelas</label>
                        <input type="text" id="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="gerade" required="" name="kelas">
                    </div>
                    <div class="w-full">
                        <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Sekrinsut</label>
                        <input class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="foto" type="file" name="foto">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="laporan" class="block mb-2 text-sm font-medium text-gray-900">Laporan</label>
                        <textarea id="laporan" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500" placeholder="wat hepen" name="laporan" required></textarea>
                    </div>

                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                    Add product
                </button>
            </form>
        </div>
      </section>
</x-app-layout>
