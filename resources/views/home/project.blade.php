@extends('home.layout.main')

@section('container')

@switch($switch)
    @case('post')
          <!-- container -->
          <div class="container" style="padding-top: 150px">

            <img class="img-fluid mb-4" src="{{ asset('assets') . '/' . $post->image }}">


            <!-- row -->
            <div class="row row-column">

              <div class="col-md-6 mb-4">
                <h3>{{ $post->title }}</h3>
              </div>
              <!-- main blog -->
              <div class="col-md-12 mb-4">
                {!! $post->body !!}
              </div>
              <!-- /main blog -->

              @if ($post->href != null || $post->href != '')                  
                <div class="col-md-12 mb-4">
                  <iframe width="900" height="600" src="https://www.youtube.com/embed/{{ $post->href }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div><br>
              @endif

              <div class="col-md-3">
                <button type="button" class="btn btn-outline-info" onclick="history.back()">Kembali</button>
                @if ($post->files != null || $post->files != '')              
                  <a href="{{ route('download', $post->slug) }}" class="btn btn-outline-danger"> Download file </a>
                @endif
              </div>

            </div>
            <!-- row -->

          </div>
          <!-- container -->
        @break
    @case('contoh')
          <!-- container -->
          <div class="container" style="padding-top: 150px">

            <img class="img-fluid mb-4" src="{{ asset('assets') }}/img/contoh.jpg">


            <!-- row -->
            <div class="row row-column">

              <div class="col-md-6 mb-4">
                <h3>Akslkdnaslndie</h3>
              </div>
              <!-- main blog -->
              <div class="col-md-12 mb-4">
              

                <p>An aeterno percipit per. His minim maiestatis consetetur et, brute tantas iracundia id sea. Vim tota nostrum reformidans te. Nam ad appareat mediocritatem, mediocrem similique usu ex, scaevola invidunt eu sed.</p>
                <p>Reque admodum praesent ei nec. Ad eius phaedrum conclusionemque cum, pri cu suas essent saperet. No vero ludus habemus qui. Per ex errem torquatos, eam in tale sumo mentitum. Cum nulla viderer no. Pri id antiopam volutpat evertitur, in vidit interpretaris nec.</p>
                <p>Te option apeirian corrumpit nec, has et tollit minimum molestie. Nam et justo everti, tale repudiandae cu nec. Aliquip legendos evertitur ne sit, mazim sadipscing sea ei. Sea no facete probatus vulputate, ex pri reque tempor. Odio adolescens ius te, docendi suscipit indoctum at qui.</p>
                <blockquote>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                </blockquote>
                <p>An aeterno percipit per. His minim maiestatis consetetur et, brute tantas iracundia id sea. Vim tota nostrum reformidans te. Nam ad appareat mediocritatem, mediocrem similique usu ex, scaevola invidunt eu sed.</p>
                <p>Reque admodum praesent ei nec. Ad eius phaedrum conclusionemque cum, pri cu suas essent saperet. No vero ludus habemus qui. Per ex errem torquatos, eam in tale sumo mentitum. Cum nulla viderer no. Pri id antiopam volutpat evertitur, in vidit interpretaris nec.</p>
                <p>Te option apeirian corrumpit nec, has et tollit minimum molestie. Nam et justo everti, tale repudiandae cu nec. Aliquip legendos evertitur ne sit, mazim sadipscing sea ei. Sea no facete probatus vulputate, ex pri reque tempor. Odio adolescens ius te, docendi suscipit indoctum at qui.</p>

              </div>
              <!-- /main blog -->

              <div class="col-md-12 mb-4">
                <iframe width="900" height="600" src="https://www.youtube.com/embed/EZUPEoj3Qjs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div><br>

              <div class="col-md-3">
                <button type="button" class="btn btn-outline-info" onclick="history.back()">Kembali</button>
              </div>

            </div>
            <!-- row -->

          </div>
          <!-- container -->
        @break
    @default    
      <main class="container" style="padding-top: 150px">
        <div class="row mb-4">
            <div class="col-md-12 ">
              @if ($project->count())
                <div class="post">
                  <img src="{{ asset('assets') . '/' . $project[0]->image }}" class="img-fluid">
                  <div class="overlay-post">
                      <h5 class="text-white">{{ $project[0]->title }}</h5>
                      <p class="text-white">{{ $project[0]->excerpt }}</p>
                      <p class="text-white"><a href="{{ route('project.show',$project[0]->slug) }}">read more...</a></p>
                  </div>
                </div>
              @else                  
                <div class="post">
                    <img src="{{ asset('assets') }}/img/contoh.jpg" class="img-fluid" alt="...">
                    <div class="overlay-post">
                        <h5 class="text-white">Card title</h5>
                        <p class="text-white">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="text-white"><small>Last updated 3 mins ago</small></p>
                    </div>
                </div>
              @endif
            </div>
        </div>
      
        <div class="row g-5">
          <div class="col-md-12">
            <div class="row">
              @if ($project->count())
                  @foreach ($project->skip(1) as $item)
                    <div class="col-md-4 mb-4">
                      <div class="card" style="width: 18rem;">
                          <img src="{{ asset('assets') . '/' . $item->image }}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->excerpt }}</p>
                            <a href="{{ route('project.show',$item->slug) }}">read more...</a>
                          </div>
                      </div>
                    </div>
                  @endforeach
              @else                  
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img') }}/contoh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                      </div>
                </div>
              @endif
            </div>
          </div>
        </div>
      
      </main>
@endswitch

<div class="footer-dec">
    <img src="{{ asset('assets') }}/img/footer-dec.png" class="h-100 w-100 object-cover">
</div>

@endsection