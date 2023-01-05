  <div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 flex-0">
        <!-- Navbar -->
        <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 mx-6 my-4 shadow-soft-2xl rounded-blur bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
          <div class="flex items-center justify-between w-full p-0 pl-6 mx-auto flex-wrap-inherit">
            <a class="py-2.375 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0" href="{{ route('home') }}">
              <img src="{{ asset('assets') . '/' . App\Models\Views::Logo() }}" class=" h-12 object-contain" alt="Ranteindo">
            </a>
          </div>
        </nav>
      </div>
    </div>
  </div>