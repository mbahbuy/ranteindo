  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ route('home') }}" class="logo">
              <img src="{{ asset('assets') . '/' . App\Models\Views::Logo() }}">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              @switch($title)
                  @case('Portfolio')
                      <li class="scroll-to-section"><a href="{{ route('home') }}#top">Home</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#services">Services</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#about">About</a></li>
                      <li class="scroll-to-section"><a href="#portfolio" class="active">Portfolio</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#project">Project</a></li>
                      <li class="scroll-to-section"><a href="#video">Videos</a></li> 
                      <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ route('home') }}#contact">Contact Us Now</a></div></li>                       
                      @break
                  @case('Project')
                      <li class="scroll-to-section"><a href="{{ route('home') }}#top">Home</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#services">Services</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#about">About</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
                      <li class="scroll-to-section"><a href="#project" class="active">Project</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#video">Videos</a></li>
                      <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ route('home') }}#contact">Contact Us Now</a></div></li>                     
                      @break
                  @case('Videos')
                      <li class="scroll-to-section"><a href="{{ route('home') }}#top">Home</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#services">Services</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#about">About</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#portfolio">Portfolio</a></li>
                      <li class="scroll-to-section"><a href="{{ route('home') }}#project">Project</a></li>
                      <li class="scroll-to-section"><a href="#video" class="active">Videos</a></li>
                      <li class="scroll-to-section"><div class="main-red-button-hover"><a href="{{ route('home') }}#contact">Contact Us Now</a></div></li>                     
                      @break
                  @default                      
                    <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                    <li class="scroll-to-section"><a href="#services">Services</a></li>
                    <li class="scroll-to-section"><a href="#about">About</a></li>
                    <li class="scroll-to-section"><a href="#portfolio">Portfolio</a></li>
                    <li class="scroll-to-section"><a href="#project">Project</a></li>
                    <li class="scroll-to-section"><a href="#video">Videos</a></li>
                    <li class="scroll-to-section"><div class="main-red-button-hover"><a href="#contact">Contact Us Now</a></div></li> 
              @endswitch
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->