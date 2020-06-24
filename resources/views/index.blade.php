@extends('layouts.app')

@section('content')
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide full-bg" style="background:url({{asset('img/header1.jpg')}})">Slide 1</div>
            <div class="swiper-slide full-bg" style="background:url({{asset('img/header2.jpg')}})">Slide 2</div>
            <div class="swiper-slide full-bg" style="background:url({{asset('img/header3.jpg')}})">Slide 3</div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
    <div class="container">
        <div class="sections">
            <div class="title">Naše usluge</div>
            <div class="articles">
                <div class="article">
                    <div class="article-title">
                        Title 1
                    </div>
                    <div class="article-image" style="background:url({{asset('img/no-drugs.png')}})"></div>
                    <div class="article-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et pharetra neque. Pellentesque accumsan ante eu diam ullamcorper,
                        ac venenatis lacus dignissim. Maecenas non quam dapibus, semper massa ut, aliquam lorem. Maecenas tristique lacus nec imperdiet
                        blandit. Mauris suscipit est vel lectus bibendum, at mollis velit lacinia. Pellentesque sit amet.
                    </div>
                </div>
                <div class="article">
                    <div class="article-title">
                        Title 2
                    </div>
                    <div class="article-image" style="background:url({{asset('img/no-drugs.png')}})"></div>
                    <div class="article-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et pharetra neque. Pellentesque accumsan ante eu diam ullamcorper,
                        ac venenatis lacus dignissim. Maecenas non quam dapibus, semper massa ut, aliquam lorem. Maecenas tristique lacus nec imperdiet
                        blandit. Mauris suscipit est vel lectus bibendum, at mollis velit lacinia. Pellentesque sit amet.
                    </div>
                </div>
                <div class="article">
                    <div class="article-title">
                        Title 3
                    </div>
                    <div class="article-image" style="background:url({{asset('img/no-drugs.png')}})"></div>
                    <div class="article-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et pharetra neque. Pellentesque accumsan ante eu diam ullamcorper,
                        ac venenatis lacus dignissim. Maecenas non quam dapibus, semper massa ut, aliquam lorem. Maecenas tristique lacus nec imperdiet
                        blandit. Mauris suscipit est vel lectus bibendum, at mollis velit lacinia. Pellentesque sit amet.
                    </div>
                </div>
            </div>
        </div>

        <div class="sections">
            <div class="title">Istaknuti proizvodi</div>
        </div>
    </div>
@endsection