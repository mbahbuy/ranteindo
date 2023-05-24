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
                <h6 class="mb-1">Visibility</h6>
            </div>
            <div class="flex-auto p-4">
                <form method="POST" action="{{ route('views.manager.visibility') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center">
                        <div class="flex flex-col max-w-full p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                            <select name="status" style="width: 500px" class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" onchange="$(this).next('button.hidden').click()">
                                <option value="1" {{ App\Models\Views::ManagerStatus() == 1 ? 'selected' : '' }}>Ditampilkan</option>
                                <option value="0" {{ App\Models\Views::ManagerStatus() == 0 ? 'selected' : '' }}>Disembunyikan</option>
                            </select>
                
                            <button type="submit" class="hidden"></button>
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
                <h6 class="mb-1">Title</h6>
            </div>
            <div class="flex-auto p-4">
                <div class="flex justify-center">
                    <p class="text-center">Title lama : <span>{{ $managertitle }}</span></p>
                </div>
                <form method="POST" action="{{ route('views.manager.title') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center">
                        <input type="hidden" name="old_title" value="{{ $managertitle }}">
                        <div class="flex flex-col max-w-full p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                            <input class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="text" id="title" name="title" placeholder="Manager Title..." style="width: 500px">
                
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
                <h6 class="mb-1">Items</h6>
                <p class="leading-normal text-sm">Tambahkan atau hapus beberapa manager item</p>
            </div>
            <div class="flex-auto p-4">
                @if ($items->count())
                    <div class="flex flex-wrap -mx-3">
                    @foreach ($items as $item)   
                        <div class="max-w-full shadow-soft-2xl px-3 mb-6 md:w-3/12 md:flex-none xl:mb-0 xl:w-3/12">
                            <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                                <div class="relative">
                                    <a class="block shadow-xl rounded-2xl sizeofimg">
                                        <img src="{{ asset('assets') . '/' . $item->image }}" alt="img-blur-shadow" class="img-responsive shadow-soft-2xl rounded-2xl" />
                                    </a>
                                </div>
                                <div class="flex-auto px-1 pt-6 text-center">
                                    <h5>{{ $item->title }}</h5>
                                    <p class="mb-6 leading-normal text-sm">{{ $item->body }}</p>
                                    <div class="flex items-center justify-between">
                                        <form style="margin: auto" action="{{ route('views.manager.item.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="confirm('Anda berkenan menghapus ini?')" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">Hapus</button>
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
                    <div class="w-full max-w-full shadow-soft-2xl justify-center px-3 mb-6 md:w-12/12 md:flex-none xl:mb-0 xl:w-12/12">
                        <div class="relative justify-center flex flex-col h-full min-w-0 break-words bg-transparent border border-solid shadow-none rounded-2xl border-slate-100 bg-clip-border">
                            <form role="form" method="POST" action="{{ route('views.manager.item') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="flex-auto px-1 pt-6">
                                    <div class="mb-6">
                                        <input  type="text" placeholder="Nama ..." name="title" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                        @error('title')
                                            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                                <strong class="font-medium">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <input type="text" name="body" placeholder="Jabatan ..." class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                                        @error('body')
                                            <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                                <strong class="font-medium">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-6">
                                        <img src="" class="max-w-full shadow-soft-2xl rounded-2xl img-preview" />
                                        <input  type="file" placeholder="Gambar ..." id="image" name="image" onchange="previewImage()" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                                        <span>Gambar : 1000x1000/500x500/200x200/ pixel atau ukuran 3x4</span>
                                        @error('image')
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
    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        
        oFReader.onload = function(oFREvent)
        {
            imgPreview.src = oFREvent.target.result;
        }
        
    };
</script>
@endsection