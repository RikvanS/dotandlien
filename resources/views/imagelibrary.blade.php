</div>
<div class="bullet-list">
        @foreach ($images as $image)
    
        <div class="item"><img src="{{ asset('gallery/' . $image->getFilename()) }}" /></div>
        @endforeach
</div>