@extends('layouts.app')
@section('content')
    <section>
    @component('common.titleBackground')
        @slot('title') محاضرات @endslot
    @endcomponent
    </section>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            @component('common.lectureBoxes')
                @slot('image') lecture1.png @endslot
                @slot('text')  محاضرة 1 @endslot
            @endcomponent

                @component('common.lectureBoxes')
                    @slot('image') lecture2.png @endslot
                    @slot('text')  محاضرة 2 @endslot
                @endcomponent

                @component('common.lectureBoxes')
                    @slot('image') lecture3.png @endslot
                    @slot('text')  محاضرة 3 @endslot
                @endcomponent

    </div>
        <div class="row mt-5">
            @component('common.lectureBoxes')
                @slot('image') lecture1.png @endslot
                @slot('text')  محاضرة 4 @endslot
            @endcomponent

            @component('common.lectureBoxes')
                @slot('image') lecture2.png @endslot
                @slot('text')  محاضرة 5 @endslot
            @endcomponent

            @component('common.lectureBoxes')
                @slot('image') lecture3.png @endslot
                @slot('text')  محاضرة 6 @endslot
            @endcomponent

        </div>
        <div class="row mt-5">
            @component('common.lectureBoxes')
                @slot('image') lecture1.png @endslot
                @slot('text')  محاضرة 7 @endslot
            @endcomponent

            @component('common.lectureBoxes')
                @slot('image') lecture2.png @endslot
                @slot('text')  محاضرة 8 @endslot
            @endcomponent

            @component('common.lectureBoxes')
                @slot('image') lecture3.png @endslot
                @slot('text')  محاضرة 9 @endslot
            @endcomponent

        </div>
    </div>
</section>
@endsection

