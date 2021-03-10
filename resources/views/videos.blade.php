<div class="container">
    <div class="mt-5 mb-5">
        <h4>登録済み動画</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($videos as $key => $video)
        @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
    </div>
    <div class="row text-center mt-3">
        @endif
        <div class="col-lg-4 mb-5">
            <div class="video text-left d-inline-block">
                <div>
                    @if($video)
                    <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0"></iframe>
                    @else
                    <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0"></iframe>
                    @endif
                </div>
                <p>
                    @if(isset($video->target_id))
                    {{ $video->target_id }}
                    @endif
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>

