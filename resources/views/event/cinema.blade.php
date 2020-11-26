@extends('layouts.app')
@section('content')
    <section>
        @component('common.titleBackground')
            @slot('title') سينما @endslot
        @endcomponent
    </section>
    <section class="mt-5">
        <div class="container">
            <div class="row">
                @component('common.cinemaBoxes')
                    @slot('image') lecture1.png @endslot
                        @slot('play_image') video-play.png @endslot
                        @slot('text') فيديو 1 @endslot
                @endcomponent

                    @component('common.cinemaBoxes')
                        @slot('image') lecture2.png @endslot
                        @slot('play_image') video-play.png @endslot
                        @slot('text') فيديو 2 @endslot
                    @endcomponent

                    @component('common.cinemaBoxes')
                        @slot('image') lecture3.png @endslot
                        @slot('play_image') video-play.png @endslot
                        @slot('text') فيديو 3 @endslot
                    @endcomponent
            </div>
            <div class="row mt-5">
                @component('common.cinemaBoxes')
                    @slot('image') lecture1.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 4 @endslot
                @endcomponent

                @component('common.cinemaBoxes')
                    @slot('image') lecture2.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 5 @endslot
                @endcomponent

                @component('common.cinemaBoxes')
                    @slot('image') lecture3.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 6 @endslot
                @endcomponent
            </div>
            <div class="row mt-5">
                @component('common.cinemaBoxes')
                    @slot('image') lecture1.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 7 @endslot
                @endcomponent

                @component('common.cinemaBoxes')
                    @slot('image') lecture2.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 8 @endslot
                @endcomponent

                @component('common.cinemaBoxes')
                    @slot('image') lecture3.png @endslot
                    @slot('play_image') video-play.png @endslot
                    @slot('text') فيديو 9 @endslot
                @endcomponent
            </div>
        </div>
    </section>
@endsection
