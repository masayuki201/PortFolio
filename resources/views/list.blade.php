@extends('layout.app')

@section('title','ちるび/みんなの動画')

@section('content')
<div class="container">
    <div class="mt-5 mb-5">
        <h4>みんなの動画</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($users as $key => $user)
            @php
                $video=$user->videos->last();
            @endphp
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
                </div>
                <div class="row text-center mt-3">
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="movie text-left d-inline-block">
                        ＠{{ $user->name }}
                        <div>
                            @if($video)
                                <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$movie->url }}?controls=1&loop=1&playlist={{ $movie->url }}" frameborder="0"></iframe>
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

@endsection
