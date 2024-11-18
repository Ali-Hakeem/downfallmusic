<div class="col-lg-4">
@auth<!-- Side widgets-->
    <!-- Side widget-->
    <div class="mt-4 text-uppercase fw-bold fst-italic text-white">Other Posts</div>
    <div class="card mb-4 rounded-0" style="border-color: #000;">
        <div class="card-body">
            @foreach ($other as $index => $item)
            <a class="text-decoration-none text-black" href="/article/{{$item->slug}}">
                <p>{{substr($item->title, 0, 52)}}..</p>
            </a><hr>
            @endforeach
        </div>
    </div>
@else

    <div class="mt-2">
        @foreach ($spotify as $index => $items)
        <iframe style="border-radius:12px" 
            src="https://open.spotify.com/embed/playlist/{{$items->embed}}"
            width="100%" height="360" frameBorder="0" allowfullscreen="" 
            allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
            loading="lazy">
        </iframe>
        @endforeach
    </div> 

    <!-- Side widget-->
    <div class="mt-4 text-uppercase fw-bold fst-italic text-white">Other Posts</div>
    <div class="card rounded-0" style="border-color: #000;">
        <div class="card-body">
            @foreach ($other as $index => $item)
            <a class="text-decoration-none text-black" href="/article/{{$item->slug}}">
                <p>{{substr($item->title, 0, 52)}}..</p>
            </a><hr>
            @endforeach
        </div>
    </div>
@endauth
</div>