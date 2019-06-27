<link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('/css/heroheader.css') }}" />
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Barlow&display=swap" rel="stylesheet">

<title>{{config('app.name')}}</title>

<section class="hero">
    <div class="hero-inner">
    <h1 class="violet">Dot & Lien</h1>
    <h2 class="violet">Dotwork Illustrations</h2>
    <a href="#social-footer" class="button violet">Contact me!</a>
    </div>
    </section>
    <h1 class="titleheader">Dot&Lien</h1>
    <section class="main-content">
<p>I also have an Etsy store where you can buy my prints! Feel free to have a look at <a class="shoplink" target="_blank" rel="noopener noreferrer" href="https://www.etsy.com">my shop here</a></p>
        {{-- <button class= "gallery-link" href="/imagelibrary">Gallery</button> --}}

        
<div class="bullet-list">
        @foreach ($images as $image)
    
        <div class="gallery-item">
                <div class="gallery-title"> 
                {{-- {{ $title}}  --}} Titel komt hier
                </div>
                <div class="gallery-description"> omschrijving veld </div>
                <div class="gallery-image">
                <img src="{{ asset('gallery/' . $image->getFilename()) }}" />
                </div>
        
        </div>
        @endforeach
</div>
    </section>

<footer id="social-footer">
    <h3>Find me on:</h3>
    <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/dot.and.lien/"><img src="../images/instagram.png" alt="Instagram" class="footer-link"></a>
    <a target="_blank" rel="noopener noreferrer" href="https://nl.pinterest.com/dotandlien/my-work-+-illustrations/"><img src="../images/pinterest.png" alt="Pinterest" class="footer-link"></a>
</footer>