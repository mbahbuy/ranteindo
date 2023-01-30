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
                <h6 class="mb-1">Item</h6>
                <p class="leading-normal text-sm">Tambahkan atau hapus beberapa project item</p>
            </div>
            <div class="flex-auto p-4">
                @if ($items->count())
                    <div class="flex flex-wrap -mx-3">
                    @foreach ($items as $item)                        
                        <div class="w-full max-w-full shadow-soft-2xl px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl">
                                        <img src="https://img.youtube.com/vi/{{ $item->href }}/0.jpg" alt="img-blur-shadow" class="max-w-full shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
                                <div class="flex-auto px-1 pt-6">
                                    <p class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">Link : {{ $item->href }}</p>
                                    <h5>{{ $item->title }}</h5>
                                    <p class="mb-6 leading-normal text-sm">{{ $item->body }}</p>
                                    <div class="flex items-center justify-between">
                                        <form action="{{ route('views.videos.item.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="confirm('Anda berkenan menghapus item ini?')" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                @else
                    <div class="flex item-center">
                        <p class="w-full max-w-full text-center text-red-600">Anda belum menambahkan item.</p>
                    </div>
                @endif
            </div>
            <div class="p-4 pb-0 mb-0 bg-white item-center rounded-t-2xl">
                <p class="leading-normal text-sm justify-center text-center">Form penambahan item</p>
            </div>
            <div class="flex-auto p-4">
                <div class="flex justify-center mx-3">
                    <div class="w-full max-w-full shadow-soft-2xl justify-center px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-6/12">
                        <div class="relative justify-center flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                            <form role="form" method="POST" action="{{ route('views.videos.item') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="flex-auto px-1 pt-6">
                                    <div class="mb-6">
                                        <input  type="text" placeholder="Title ..." name="title" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                        @error('title')
                                            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                                <strong class="font-medium">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <input type="text" name="body" placeholder="Keterangan ..." class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('body')
                                            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                                <strong class="font-medium">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <img src="" class="max-w-full shadow-soft-2xl rounded-2xl yt-img-preview" />
                                        <input  type="text" placeholder="Link Youtube ..." id="yt-img" name="href" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                        <span>link YouTube id: EZUPEoj3Qjs</span>
                                        @error('href')
                                            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                                <strong class="font-medium">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-center">
                                  <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Tambahkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#yt-img').on("keyup change", function() {
        $('.yt-img-preview').prop("src","https://img.youtube.com/vi/" + this.value + "/0.jpg");
    } );
</script>

@endsection