@extends('layouts.app')
@section('content')
    <section>
        @component('common.titleBackground')
            @slot('title') مقالات @endslot
    @endcomponent
    </section>
    <section class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                        @slot('text') مقالة 1 @endslot
                @endcomponent

                    @component('common.articleBoxes')
                        @slot('image') article.png @endslot
                        @slot('text') مقالة 2 @endslot
                    @endcomponent

                    @component('common.articleBoxes')
                        @slot('image') article.png @endslot
                        @slot('text') مقالة 3 @endslot
                    @endcomponent
            </div>
            <div class="row mt-5">
                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 4 @endslot
                @endcomponent

                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 5 @endslot
                @endcomponent

                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 6 @endslot
                @endcomponent
            </div>
            <div class="row mt-5">
                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 7 @endslot
                @endcomponent

                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 8 @endslot
                @endcomponent

                @component('common.articleBoxes')
                    @slot('image') article.png @endslot
                    @slot('text') مقالة 9 @endslot
                @endcomponent
            </div>
        </div>
    </section>
@endsection
