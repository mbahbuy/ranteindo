  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="{{ asset('assets') . '/' . App\Models\Views::Logo() }}" alt="Ranteindo"></a>
            </div>
            @if ($footer->count())
                <ul>
                  @foreach ($footer as $item)
                    <li><a href="{{ $item->href }}" target="_blank"><i class="fa {{ $item->image }}"></i></a></li>
                  @endforeach
                </ul>
            @else                
              <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            @endif
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Services</h4>
            @if ($services->count())
              <ul>
                @foreach ($services->take(4) as $item)
                  <li><a href="#">{{ $item->title }}</a></li>
                @endforeach 
              </ul>
            @else                
              <ul>
                <li><a href="#">SEO Development</a></li>
                <li><a href="#">Business Growth</a></li>
                <li><a href="#">Social Media Managment</a></li>
                <li><a href="#">Website Optimization</a></li>
              </ul>
            @endif
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Portfolio</h4>
            @if ($portfolio->count())
                <ul>
                  @foreach ($portfolio->take(4) as $item)
                    <li><a href="#">{{ $item->title }}</a></li>
                  @endforeach
                </ul>
            @else                
              <ul>
                <li><a href="#">Digital Marketing</a></li>
                <li><a href="#">Business Ideas</a></li>
                <li><a href="#">Website Checkup</a></li>
                <li><a href="#">Page Speed Test</a></li>
              </ul>
            @endif
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Subscribe Newsletters</h4>
            <p>Dapatkan info terbaru kami pada inbox emailmu</p>
            <form action="{{ route('subscribe') }}" method="post">
              @csrf
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              <button type="submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © 2022 PT. Ranteindo Teknik Mandiri</p>
          </div>
        </div>
      </div>
    </div>
  </footer>