<div class="container">
    <div class="mt-5 mb-5">
        <h4>登録済み動画</h4>
    </div>
    <div class="video row mt-5 text-center">
        @foreach ($videos as $key => $user)
        @php
            $video=$user;
        @endphp
            {{-- 動画を横に3つずつ表示させる --}}
            @if($loop->iteration % 3 == 1 && $loop->iteration != 1)
                </div>
                <div class="row text-center mt-3">
            @endif
                <div class="col-lg-4 mb-5">
                    <div class="video text-left d-inline-block">
                        {{-- ニックネーム表示 --}}
                        ＠{{ $video->user->nickname }}
                        <div>
                            {{-- 動画を表示 --}}
                            @if($video)
                                <iframe width="290" height="163.125" src="{{ 'https://www.youtube.com/embed/'.$video->url }}?controls=1&loop=1&playlist={{ $video->url }}" frameborder="0" allowfullscreen></iframe>
                            @else
                                <iframe width="290" height="163.125" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
                            @endif
                        </div>
                        <p>
                            {{-- 対象学年表示 --}}
                            おすすめ：{{ $video->target['target_grade'] }}
                        </p>

                        {{-- 登録動画/削除ボタン --}}
                        @if(Auth::id() == $video->user_id)
                            {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'delete']) !!}
                            {!! Form::submit('削除', ['class' => 'button btn btn-pink']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
        @endforeach
    </div>
</div>
