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
                <h6 class="mb-1">About Image</h6>
            </div>
            <div class="flex-auto p-4">
                <form method="POST" action="{{ route('views.about.img') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex item-center w-full max-w-full px-3 mb-6 md:h-16 xl:h-16">
                        <img src="{{ asset('assets/' . $aboutimg) }}" class="item-center object-cover object-center max-w-full max-h-48 img-preview shadow-soft-2xl rounded-xl">
                    </div>
                    <div class="flex justify-center">
                        <input type="hidden" name="oldImage" value="{{ $aboutimg }}">
                        <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                            <input class="px-6 py-2 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent" type="file" id="image" name="image" onchange="previewImage()">
                
                            <button type="submit" class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-300 transform bg-gray-700 rounded-md font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85 ">Rubah</button>
                        </div>
                    </div>
                    @error('image')
                    <div class="flex justify-center">
                        <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                            <strong class="font-medium">{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                    <div class="flex justify-center"><span>Min: 1600x900 pixel</span></div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">About Text</h6>
            </div>
            <div class="flex-auto p-4">
                <form method="POST" action="{{ route('views.about.text') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex-auto px-1 pt-6">
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="title" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Title lama : {{ $abouttitle }}</label>
                                <input  type="text" placeholder="Title ..." id="title" name="title" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                            </div>
                            @error('title')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="body" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Body lama : {{ $aboutbody }}</label>
                                <textarea id="body" name="body" rows="5" placeholder="Body ..." class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></textarea>
                            </div>
                            @error('body')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Rubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">About Relationship Icon</h6>
            </div>
            <div class="flex-auto p-4">
                <form method="POST" action="{{ route('views.about.relationship.icon') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex-auto px-1 pt-6">
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="project" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Icon Projek Selesai : </label>
                                <select class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" id="project" name="title"></select>
                            </div>
                            @error('title')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="client" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Icon Industrial Client :</label>
                                <select class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" id="client" name="body"></select>
                            </div>
                            @error('body')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="pendiri" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Icon Pendiri :</label>
                                <select class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" id="pendiri" name="image"></select>
                            </div>
                            @error('image')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Rubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex-none w-full max-w-full px-3 mt-6">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="p-4 pb-0 mb-0 bg-white rounded-t-2xl">
                <h6 class="mb-1">About Relationship Value</h6>
            </div>
            <div class="flex-auto p-4">
                <form method="POST" action="{{ route('views.about.relationship') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="flex-auto px-1 pt-6">
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="projectvalue" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Jumlah Projek Selesai :</label>
                                <input  type="number" id="projectvalue" name="title" value="{{ $aboutvalue['title'] }}" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                            </div>
                            @error('title')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="clientvalue" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Jumlah Industrial Client :</label>
                                <input  type="number" id="clientvalue" name="body" value="{{ $aboutvalue['body'] }}" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                            </div>
                            @error('body')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex flex-col p-1.5 overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row dark:focus-within:border-blue-300 focus-within:ring focus-within:ring-opacity-40 focus-within:border-blue-400 focus-within:ring-blue-300">
                                <label for="pendirivalue" class="px-4 py-3 w-full font-medium tracking-wider rounded-md font-bold uppercase align-middle transition-all bg-transparent border-0 rounded-lg">Jumlah Pendiri :</label>
                                <input  type="number" id="pendirivalue" name="image" value="{{ $aboutvalue['image'] }}" class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:outline-none focus:transition-shadow">
                            </div>
                            @error('image')
                                <span class="mt-2 text-sm text-red-600 dark:text-red-500" role="alert">
                                    <strong class="font-medium">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-0 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer shadow-soft-md bg-x-25 bg-150 leading-pro text-xs ease-soft-in tracking-tight-soft bg-gradient-to-tl from-blue-600 to-cyan-400 hover:scale-102 hover:shadow-soft-xs active:opacity-85">Rubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js') }}/ddSlick.js"></script>
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

    // project icon
    const projecticon = {!! $projecticon !!};
    $('select#project').ddslick({
        data: projecticon,
        imagePosition:"right",
        width: "100%"
    });

    // client icon
    const clienticon = {!! $clienticon !!};
    $('select#client').ddslick({
        data: clienticon,
        imagePosition:"right",
        width: "100%"
    });

    // pendiri icon
    const pendiriicon = {!! $pendiriicon !!};
    $('select#pendiri').ddslick({
        data: pendiriicon,
        imagePosition:"right",
        width: "100%"
    });
</script>
@endsection