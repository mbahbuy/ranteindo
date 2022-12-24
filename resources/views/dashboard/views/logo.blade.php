@extends('dashboard.layout.main')

@section('dashboard')

<section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Logo</h2>
    <form method="POST" action="{{ route('views.logo.update') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex item-center w-full max-w-full px-3 mb-6 md:h-16 xl:h-16">
            <img src="{{ asset('assets/' . $logo) }}" class="item-center object-cover object-center max-w-full max-h-32 img-preview shadow-soft-2xl rounded-xl">
        </div>
        <div class="flex justify-center">
            <input type="hidden" name="oldImage" value="{{ $logo }}">
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
        <div class="flex justify-center"><span>Min: 220x60 pixel</span></div>
    </form>
</section>

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