@extends('home.layout.main')

@section('container')

<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                @if ($home->count())
                    @foreach ($home as $item)
                      <div class="item header-text">
                        <h2>{{ $item->title }}</h2>
                        <p>{{ $item->body }}</p>
                        <div class="down-buttons">
                          <div class="main-blue-button-hover">
                            <a href="#{{ $item->href }}">Tunjukan {{ $item->href }}</a>
                          </div>
                        </div>
                      </div>
                    @endforeach
                @else                
                  <div class="item header-text">
                    <h6>Welcome to Onix Digital</h6>
                    <h2>Build <em>your website</em> the best in <span>SEO</span>?</h2>
                    <p>This is a professional looking HTML Bootstrap 5 website template brought to you by TemplateMo website.</p>
                    <div class="down-buttons">
                      <div class="main-blue-button-hover">
                        <a href="#contact">Message Us Now</a>
                      </div>
                      <div class="call-button">
                        <a href="#"><i class="fa fa-phone"></i> 010-020-0340</a>
                      </div>
                    </div>
                  </div>
                  <div class="item header-text">
                    <h6>Online Marketing</h6>
                    <h2>Get the <em>best ideas</em> for <span>your website</span></h2>
                    <p>You are NOT allowed to redistribute this template ZIP file on any Free CSS collection websites. Contact us for more info. Thank you.</p>
                    <div class="down-buttons">
                      <div class="main-blue-button-hover">
                        <a href="#services">Our Services</a>
                      </div>
                      <div class="call-button">
                        <a href="#"><i class="fa fa-phone"></i> 090-080-0760</a>
                      </div>
                    </div>
                  </div>
                  <div class="item header-text">
                    <h6>Video Tutorials</h6>
                    <h2>Watch <em>our videos</em> for your <span>projects</span></h2>
                    <p>Please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little via PayPal if this digital marketing HTML template is useful for you. Thank you.</p>
                    <div class="down-buttons">
                      <div class="main-blue-button-hover">
                        <a href="#video">Watch Videos</a>
                      </div>
                      <div class="call-button">
                        <a href="#"><i class="fa fa-phone"></i> 050-040-0320</a>
                      </div>
                    </div>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="{{ asset('assets') }}/img/services-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="{{ asset('assets') }}/img/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>{{ App\Models\Views::ServicesTitle() }}</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            @if ($services->count())
                @foreach ($services as $item)
                <div class="item">
                  <h4>{{ $item->title }}</h4>
                  <div class="icon"><img src="{{ asset('assets') . '/' . $item->image }}" alt=""></div>
                  <p>{{ $item->body }}</p>
                </div>
                @endforeach
            @else               
              <div class="item">
                <h4>Learn More about our Guidelines</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-01.png" alt=""></div>
                <p>Feel free to use this template for your business</p>
              </div>
              <div class="item">
                <h4>Develop The Best Strategy for Business</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-02.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>UI / UX Design and Development</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-03.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>Discover &amp; Explore our SEO Tips</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-04.png" alt=""></div>
                <p>Feel free to use this template for your business</p>
              </div>
              <div class="item">
                <h4>Optimizing your websites for Speed</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-01.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>See The Strategy In The Market</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-02.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>Best Content Ideas for your pages</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-03.png" alt=""></div>
                <p>Feel free to use this template for your business</p>
              </div>
              <div class="item">
                <h4>Optimizing Speed for your web pages</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-04.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>Accessibility for mobile viewing</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-01.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>Content Ideas for your next project</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-02.png" alt=""></div>
                <p>Feel free to use this template for your business</p>
              </div>
              <div class="item">
                <h4>UI &amp; UX Design &amp; Development</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-03.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
              <div class="item">
                <h4>Discover the digital marketing trend</h4>
                <div class="icon"><img src="{{ asset('assets') }}/img/service-icon-04.png" alt=""></div>
                <p>Get to know more about the topic in details</p>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
</div>

<div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-image">
            <img src="{{ asset('assets/img/about-bg.png') }}" class="img-fluid about-image-left">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>{{ App\Models\Views::AboutTitle() }}</h2>
            <p>{{ App\Models\Views::AboutBody() }}</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('assets') }}/img/service-icon-01.png" alt="">
                    </div>
                    <div class="count-digit text-center">{{ $aboutprojectvalue }}</div>
                    <div class="count-title text-center">Projek Selesai</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('assets') }}/img/service-icon-02.png" alt="">
                    </div>
                    <div class="count-digit text-center">{{ $aboutclientvalue }}</div>
                    <div class="count-title text-center">Industrial Client</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="fact-item">
                  <div class="count-area-content">
                    <div class="icon">
                      <img src="{{ asset('assets') }}/img/service-icon-03.png" alt="">
                    </div>
                    <div class="count-digit text-center">{{ $aboutprojectberjalanvalue }}</div>
                    <div class="count-title text-center">Project Berjalan</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<div id="portfolio" class="our-portfolio section">
    <div class="portfolio-left-dec">
      <img src="{{ asset('assets') }}/img/portfolio-left-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>{{ App\Models\Views::PortfolioTitle() }}</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-portfolio">
            @if ($portfolio->count())
                @foreach ($portfolio->take(6) as $item)
                  <div class="item">
                    <div class="thumb">
                      <div class="same-img-size">
                        <img class="foto-responsive" src="{{ asset('assets') . '/' . $item->image }}" alt="">
                      </div>
                      <div class="hover-effect">
                        <div class="inner-content">
                          <h4>{{ $item->title }}</h4>
                          <span>{{ $item->excerpt }}</span>
                          <a href="{{ route('portfolio.show', $item->slug) }}">Read more...</a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            @else                
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-01.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>First Project</h4>
                      <span>Plot Listing</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-02.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>Project Two</h4>
                      <span>SEO &amp; Marketing</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-03.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>Third Project</h4>
                      <span>Space Dynamic SEO</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-04.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>Project Four</h4>
                      <span>Website Marketing</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-01.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>Fifth Project</h4>
                      <span>Digital Assets</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-02.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>Sixth Project</h4>
                      <span>SEO &amp; Marketing</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="{{ asset('assets') }}/img/portfolio-03.jpg" alt="">
                  <div class="hover-effect">
                    <div class="inner-content">
                      <h4>7th Project</h4>
                      <span>SEO &amp; Marketing</span>
                      <a href="{{ route('portfolio.contoh') }}">Read more...</a>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  <div class="d-flex justify-content-center">
    <div class="justify-center">
      @if ($portfolio->count() > 6)
      <a class="btn btn-outline-info" href="{{ route('portfolio') }}">More Portfolio...</a>
      @endif
    </div>
  </div>
</div>

<div id="produk" class="pricing-tables">
  <div class="tables-left-dec">
    <img src="{{ asset('assets/img') }}/tables-left-dec.png" alt="">
  </div>
  <div class="tables-right-dec">
    <img src="{{ asset('assets/img') }}/tables-right-dec.png" alt="">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h2>{{ App\Models\Views::ProjectTitle() }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel owl-project">
          @if ($project->count())
              @foreach ($project as $item)
              <div class="card">
                <div class="card-img-top same-img-size">
                  <img src="{{ asset('assets') . '/' . $item->image }}" class="foto-responsive rounded" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ $item->title }}</h5>
                  <div class="main-blue-button-hover">
                    <a href="{{ route('project.show', $item->slug) }}">Read more...</a>
                  </div>
                </div>
              </div>
              @endforeach
          @else              
            <div class="card">
              <img src="{{ asset('assets') }}/img/contoh.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="main-blue-button-hover">
                  <a href="{{ route('project.contoh') }}">Read more...</a>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset('assets') }}/img/contoh.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="main-blue-button-hover">
                  <a href="{{ route('project.contoh') }}">Read more...</a>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset('assets') }}/img/contoh.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="main-blue-button-hover">
                  <a href="{{ route('project.contoh') }}">Read more...</a>
                </div>
              </div>
            </div>
            <div class="card">
              <img src="{{ asset('assets') }}/img/contoh.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="main-blue-button-hover">
                  <a href="{{ route('project.contoh') }}">Read more...</a>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center">
    <div class="justify-center">
      @if ($project->count() > 6)
      <a class="btn btn-outline-info" href="{{ route('project') }}">More Project...</a>
      @endif
    </div>
  </div>
</div>

<div id="video" class="our-videos section">
    <div class="videos-left-dec">
      <img src="{{ asset('assets') }}/img/videos-left-dec.png" alt="">
    </div>
    <div class="videos-right-dec">
      <img src="{{ asset('assets') }}/img/videos-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-8">
                  @if ($videos->count())
                    <ul class="nacc">
                      <li class="active">
                        <div>
                          <div class="thumb">
                            <iframe width="100%" height="auto" src="https://www.youtube.com/embed/{{ $videos[0]->href }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="overlay-effect">
                              <h4>{{ $videos[0]->title }}</h4>
                            </div>
                          </div>
                        </div>
                      </li>
                      @if ($videos->skip(1)->count())                          
                        @foreach ($videos->skip(1)->take(3) as $item)
                          <li>
                            <div>
                              <div class="thumb">
                                <iframe width="100%" height="auto" src="https://www.youtube.com/embed/{{ $item->href }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="overlay-effect">
                                  <h4>{{ $item->title }}</h4>
                                </div>
                              </div>
                            </div>
                          </li>
                        @endforeach
                      @endif
                    </ul>
                    @else                      
                      <ul class="nacc">
                        <li class="active">
                          <div>
                            <div class="thumb">
                              <iframe width="100%" height="auto" src="https://www.youtube.com/embed/JynGuQx4a1Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="overlay-effect">
                                <a href="#"><h4>Project One</h4></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div>
                            <div class="thumb">
                              <iframe width="100%" height="auto" src="https://www.youtube.com/embed/RdJBSFpcO4M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="overlay-effect">
                                <a href="#"><h4>Second Project</h4></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div>
                            <div class="thumb">
                              <iframe width="100%" height="auto" src="https://www.youtube.com/embed/ZlfAjbQiL78" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="overlay-effect">
                                <a href="#"><h4>Project Three</h4></a>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div>
                            <div class="thumb">
                              <iframe width="100%" height="auto" src="https://www.youtube.com/embed/mx1WseE7-0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              <div class="overlay-effect">
                                <a href="#"><h4>Fourth Project</h4></a>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    @endif
                  </div>
                  <div class="col-lg-4">
                    @if ($videos->count())
                      <div class="menu">
                        <div class="active">
                          <div class="thumb">
                            <img src="http://img.youtube.com/vi/{{ $videos[0]->href }}/0.jpg" class="img-fluid">
                            <div class="inner-content">
                              <h4>{{ $videos[0]->title }}</h4>
                            </div>
                          </div>
                        </div>
                        @if ($videos->skip(1))                          
                          @foreach ($videos->skip(1)->take(3) as $item)
                            <div>
                              <div class="thumb">
                                <img src="http://img.youtube.com/vi/{{ $item->href }}/0.jpg" class="img-fluid">
                                <div class="inner-content">
                                  <h4>{{ $item->title }}</h4>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        @endif
                      </div>
                    @else                      
                      <div class="menu">
                        <div class="active">
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-01.png" alt="">
                            <div class="inner-content">
                              <h4>Project One</h4>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-02.png" alt="">
                            <div class="inner-content">
                              <h4>Second Project</h4>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-03.png" alt="Marketing">
                            <div class="inner-content">
                              <h4>Project Three</h4>
                            </div>
                          </div>
                        </div>
                        <div>
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-04.png" alt="SEO Work">
                            <div class="inner-content">
                              <h4>Fourth Project</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endif
                  </div>             
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="justify-center">
        @if ($videos->count() > 4)
        <a class="btn btn-outline-info" href="{{ route('videos') }}">More Videos...</a>
        @endif
      </div>
    </div>
</div>

<div id="contact">
  @if (  App\Models\Views::ManagerStatus()  == 1)      
    <div class="pricing-tables">
      <div class="tables-left-dec">
        <img src="{{ asset('assets/img') }}/tables-left-dec.png" alt="">
      </div>
      <div class="tables-right-dec">
        <img src="{{ asset('assets/img') }}/tables-right-dec.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="section-heading">
              <h2>{{ App\Models\Views::ManagerTitle() }}</h2>
            </div>
          </div>
        </div>
        <div class="row">
          @if ($manager->count())
            @foreach ($manager as $item)                
              <div class="col-lg-4">
                <div class="item">
                  <div class="size-image">
                    <img class="img-thumbnail foto-responsive" src="{{ asset('assets') . '/' . $item->image }}" alt="foto manager">
                  </div>
                  <h4>{{ $item->title }}</h4>
                  <p class="fw-lighter fst-italic">{{ $item->body }}</p>
                </div>
              </div>
            @endforeach
          @else   
            <div class="col-lg-4">
              <div class="item">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/200x200.jpg') }}" alt="foto manager">
                <h4>Nama Manager</h4>
                <p class="fw-lighter fst-italic">Jabatan Manager</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="item">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/200x200.jpg') }}" alt="foto manager">
                <h4>Nama Manager</h4>
                <p class="fw-lighter fst-italic">Jabatan Manager</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="item">
                <img class="img-fluid img-thumbnail" src="{{ asset('assets/img/200x200.jpg') }}" alt="foto manager">
                <h4>Nama Manager</h4>
                <p class="fw-lighter fst-italic">Jabatan Manager</p>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  @endif
  <div class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <h2>{{ App\Models\Views::ContactTitle() }}</h2>
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.8217151342856!2d112.62542451408942!3d-7.146603772089249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd801e4b548a67f%3A0xc1a8862f347526b6!2sPT.%20RANTEINDO%20TEKNIK%20MANDIRI!5e0!3m2!1sid!2sid!4v1671472452415!5m2!1sid!2sid" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
              <span>
                <i class="fa fa-phone"></i>
                @if ($contacttlp->count())
                  <div class="d-flex flex-column">
                    @foreach ($contacttlp as $item)
                      <a href="#">{{ $item->body }}</a>
                    @endforeach
                  </div>
                @else
                  <a href="#">010-020-0340<br>090-080-0760</a>
                @endif
              </span>
              <span>
                <i class="fa fa-envelope"></i>
                @if ($contactemail->count())
                  <div class="d-flex flex-column">
                    @foreach ($contactemail as $item)
                      <a href="mailto:{{ $item->body }}" target="_blank" rel="noopener noreferrer">{{ $item->body }}</a>
                    @endforeach
                  </div>
                @else
                  <a href="#">info@company.com<br>mail@company.com</a>
                @endif
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <form id="contact" action="{{ route('contact.us') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Nama Anda" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email Anda" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="subject" id="subject" placeholder="subject" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="message" id="message"placeholder="Pesan/kritikan Anda"  required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Kirim pesan</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      <img src="{{ asset('assets') }}/img/contact-dec.png" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="{{ asset('assets') }}/img/contact-left-dec.png" alt="">
    </div>
  </div>
</div>

<div class="footer-dec">
  <img src="{{ asset('assets') }}/img/footer-dec.png" class="h-100 w-100 object-cover">
</div>

@endsection