<x-main-layout>
    <div class="mt-28 flex justify-center">
        <form method=""  class="w-full max-w-lg ml-1 sm:ml-20 p-10 sm:p-0 ">
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-10">
                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" name="nama_product"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{$product->name}}"  disabled readonly>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-10">
                    <input type="text" id="disabled-input-2" aria-label="disabled input 2" name="harga"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="Rp.{{
                        number_format($product->price,2," ,",".") }}" disabled readonly>
                </div>

                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Nama
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" name="name" placeholder="Renzty" required>
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        No Telpon/Whatsapp
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" name="no_telp" placeholder="0821xxxxx" required>
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-2 mt-20">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="provinsi"
                        class="block py-2.5 px-3 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Provinsi</option>
                        @foreach ($provinces as $province)
                        <option value="{{$province->name}}">{{$province->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="kabupaten"
                        class="block py-2.5 px-3 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option selected>Pilih Kabupaten</option>
                        @foreach ($regencies as $regenci)
                        <option value="{{$regenci->name}}">{{$regenci->name}}</option>
                        @endforeach

                    </select>
                </div>

            </div>
            <div class="flex flex-wrap -mx-2 mb-10 mt-4">
                <label for="message" class="block mb-2 pl-2 text-sm font-medium text-gray-900 dark:text-white">
                    Alamat Lengkap</label>
                <textarea id="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Simpang Aru"></textarea>

            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 18 21">
                    <path
                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                </svg>
               Lanjutkan Transaksi
            </button>

        </form>

        <div
            class="max-w-sm mx-auto hidden sm:block bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

            <img class="rounded-t-lg sm:w-full w-1/2 p-4" src="{{url('storage/'.$product->image)}}" alt="product image" />
            <div class="sm:px-5 sm:pb-5 px-3 pb-2">
                <a href="#">
                    <div class="text-xl mt-3 font-semibold uppercase tracking-tight text-red-600 dark:text-indigo-500">
                        {{$product->name}}
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-sm md:text-3xl  font-bold text-gray-900 dark:text-white">Rp{{
                            number_format($product->price,2,",",".") }}</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-main-layout>