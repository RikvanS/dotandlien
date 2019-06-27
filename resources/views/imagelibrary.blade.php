@extends('layouts.scripts')

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