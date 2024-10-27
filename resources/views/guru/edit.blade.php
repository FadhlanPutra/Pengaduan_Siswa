<x-app-layout>

    <section class="bg-white">
        <a href="{{ route('guru.index') }}" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
        &laquo; Tidak Jadi
        </a>
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900">Edit Product</h2>
            <form action="{{ route('guru.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- @csrf : memastikan bahwa permintaan yang dikirimkan ke server berasal dari formulir yang sah --}}
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <select name="status" id="status">
                        <option value="{{ $siswa->status }}" selected>PILIH!👺</option>
                        <option value="sedang dalam tinjauan">Sedang Dalam Tinjauan</option>
                        <option value="done">Done</option>
                    </select>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                    Edit product
                </button>
            </form>
        </div>
      </section>

</x-app-layout>
