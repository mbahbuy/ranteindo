@extends('home.layout.main')

@section('container')

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
                <div class="col-lg-12">
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
                      @if ($videos->skip(1))                          
                        @foreach ($videos->skip(1) as $item)
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
                  <div class="col-lg-12">
                    @if ($videos->count())
                      <div class="row menu">
                        <div class="col-md-4 active">
                          <div class="thumb">
                            <img src="http://img.youtube.com/vi/{{ $videos[0]->href }}/0.jpg" class="img-fluid">
                            <div class="inner-content">
                              <h4>{{ $videos[0]->title }}</h4>
                            </div>
                          </div>
                        </div>
                        @if ($videos->skip(1)->count())                          
                          @foreach ($videos->skip(1) as $item)
                            <div class="col-md-4">
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
                      <div class="row menu">
                        <div class="col-md-4 active">
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-01.png" alt="">
                            <div class="inner-content">
                              <h4>Project One</h4>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-02.png" alt="">
                            <div class="inner-content">
                              <h4>Second Project</h4>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="thumb">
                            <img class="img-fluid" src="{{ asset('assets') }}/img/video-thumb-03.png" alt="Marketing">
                            <div class="inner-content">
                              <h4>Project Three</h4>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
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
</div>

<div class="footer-dec">
    <img src="{{ asset('assets') }}/img/footer-dec.png" class="h-100 w-100 object-cover">
</div>

@endsection