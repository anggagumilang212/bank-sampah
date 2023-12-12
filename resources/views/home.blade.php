<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator Bank Sampah</title>
    <link rel="icon" href="/backend/assets/img/angga2.jpg">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-800 ">

    @include('sweetalert::alert')

    <section class="p-6 text-gray-50">

        @foreach ($sampah as $item)
            <div class="p-6 py-5 m-2 rounded-md bg-cyan-400 text-gray-50">
                <div class="container mx-auto">
                    <div class="flex flex-col items-center justify-between lg:flex-row">
                        <img src="{{ asset('fotojenissampah/' . $item->jenis_sampah->foto) }}" class="w-20 rounded-full"
                            alt="fotosampah">
                        <h2 class="text-lg font-bold text-center tracki">Jenis Sampah :{{ $item->jenis_sampah->nama }}
                        </h2>
                        <div class="py-2 space-x-2 text-center lg:py-0">
                            <span class="text-lg font-bold">Total Harga :
                                RP.{{ number_format($item->jumlah * $item->jenis_sampah->harga, 3) }}</span>
                        </div>

                        <a href="{{ asset('delete-sampah/' . $item->id) }}" rel="noreferrer noopener"
                            class="block px-5 py-1 mt-4 text-gray-900 border border-gray-400 rounded-md lg:mt-0 bg-gray-50">Hapus</a>
                    </div>
                </div>
            </div>
        @endforeach



        <form novalidate="" action="/create-sampah" method="POST" class="container flex flex-col mx-auto space-y-12">
            @csrf
            <fieldset class="grid grid-cols-4 gap-6 p-6 bg-gray-900 rounded-md shadow-sm">
                <div class="space-y-2 col-span-full lg:col-span-1">
                    <p class="font-medium">Kalkulator Bank Sampah</p>
                    <p class="text-xs">Silahkan Masukkan Data Data Untuk Melihat Total Harga !!</p>
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    <div class="col-span-full sm:col-span-3">
                        <label for="username" class="text-sm">Jenis Sampah Dan Harga Per Kg</label>
                        <select class="w-full h-10 text-gray-900 border border-gray-700 rounded-md focus:ring focus:ri"
                            id="id_jenis_sampah" name="id_jenis_sampah">
                            <option value="">Pilih Jenis Sampah</option>
                            @foreach ($jenissampah as $items)
                                <option value="{{ $items->id }}">{{ $items->nama }} Rp.{{ $items->harga }}/kg
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-full sm:col-span-3">
                        <label for="website" class="text-sm">Jumlah Per Kilogram</label>
                        <input id="jumlahSampah" type="number" name="jumlah" placeholder="Masukkan Jumlah Per Kg"
                            class="w-full h-10 text-gray-900 border border-gray-700 rounded-md focus:ring focus:ri">
                    </div>

                    <div class="col-span-full">
                        <div class="flex items-center space-x-2">
                            <button type="submit" class="px-4 py-2 border border-gray-100 rounded-md">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </section>


    <footer class="m-5 bg-gray-900 rounded-md text-gray-50 ">
        <div class="container flex flex-col p-4 mx-auto divide-gray-400 md:p-8 lg:flex-row">
            <ul
                class="self-center py-6 space-y-4 text-center sm:flex sm:space-y-0 sm:justify-around sm:space-x-4 lg:flex-1 lg:justify-start">
                <li>Angga Gumilang</li>

            </ul>
            <div class="flex flex-col justify-center pt-6 lg:pt-0">
                <div class="flex justify-center space-x-4">
                    <a rel="noopener noreferrer" href="https://www.instagram.com/lionel_zexx/" title="Instagram"
                        class="flex items-center justify-center w-8 h-8 text-gray-900 rounded-full sm:w-10 sm:h-10 bg-violet-400">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-4 h-4">
                            <path
                                d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z">
                            </path>
                        </svg>
                    </a>

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
