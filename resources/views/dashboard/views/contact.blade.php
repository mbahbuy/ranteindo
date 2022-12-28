@extends('dashboard.layout.main')

@section('dashboard')

<div class="w-full p-6 mx-auto">
    @if (session()->has('success'))
        <div alert class="relative p-4 pr-12 mb-4 text-white border border-solid rounded-lg bg-gradient-to-tl from-green-600 to-lime-400 border-lime-300" id="alert">
        {{ session('success') }}
        <button type="button" onclick="closeAlert()" class="box-content absolute top-0 right-0 p-4 text-sm text-white bg-transparent border-0 rounded w-4 h-4 z-2">
            <span aria-hidden="true" class="text-center cursor-pointer">&#10005;</span>
        </button>
        </div>
        <script>
        function closeAlert() {
            const btn = document.getElementById('alert');
            btn.className += ' hidden ';
        }
        </script>
    @endif
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Title</h6>
            </div>
            <div class="flex-auto p-4">
                <div class="flex justify-center">
                    <p class="text-center">Title lama : <span>{{ $contacttitle }}</span></p>
                </div>
                <form method="POST" action="{{ route('views.contact.title') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center">
                        <input type="hidden" name="old_title" value="{{ $contacttitle }}">
                        <div class="flex flex-col max-w-full p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                            <input class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" id="title" name="title" placeholder="Services Title..." style="width: 500px">
                
                            <button type="submit" class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85 ">Rubah</button>
                        </div>
                    </div>
                    @error('title')
                    <div class="flex justify-center">
                        <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                            <strong class="font-medium">{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </form>
            </div>
        </div>
    </div>

    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">Contact Active</h6>
                <p class="leading-normal text-sm">Tambahkan atau hapus beberapa contact active</p>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <h6 class="mb-0">Emails</h6>
                        </div>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                @if ($email->count())
                                    @foreach ($email as $item)                                        
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $item->body }}</td>
                                            <td>
                                                <form action="{{ route('views.contact.info.email.delete', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="confirm('Anda berkenan menghapus email ini?')" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">-</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                    <div class="flex-auto p-4">
                        <form method="POST" action="{{ route('views.contact.info.email') }}">
                            @csrf
                            <div class="flex justify-center">
                                <div class="flex flex-col max-w-full p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                    <input class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="email" name="email" placeholder="Tambah email di sini..." style="width: 500px" required>
                        
                                    <button type="submit" class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85 ">Tambah</button>
                                </div>
                            </div>
                            @error('email')
                            <div class="flex justify-center">
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </form>
                    </div>
                </div>
                <div class="w-full max-w-full px-3 mt-6 md:w-6/12 md:flex-none">
                    <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
                        <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
                            <h6 class="mb-0">Nomor</h6>
                        </div>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                @if ($tlp->count())
                                    @foreach ($tlp as $item)                                        
                                        <tr>
                                            <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">{{ $item->body }}</td>
                                            <td>
                                                <form action="{{ route('views.contact.info.tlp.delete', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="confirm('Anda berkenan menghapus nomor ini?')" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">-</td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                    <div class="flex-auto p-4">
                        <form method="POST" action="{{ route('views.contact.info.tlp') }}">
                            @csrf
                            <div class="flex justify-center">
                                <div class="flex flex-col max-w-full p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                    <input class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" name="nomor" placeholder="Tambah nomor di sini..." style="width: 500px" required>
                        
                                    <button type="submit" class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85 ">Tambah</button>
                                </div>
                            </div>
                            @error('nomor')
                            <div class="flex justify-center">
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            </div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection