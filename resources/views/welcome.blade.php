@extends('layouts.app')
@section('content')
<section>
    <div class="bg_section">
        <div class="container">
            <div class="row">
                <div class=" col-12 mt-5 logo">
                    <a href="">
                        <img src="{{asset('images/ACA-logo.png')}}"
                             class="menu_logo">
                    </a>
                </div>
                <div class="image_section_text">
                    <h1 class="section_title">مهرجان المدينة للثّقافة والفنون</h1>
                    <h3 class="section_subtitle">المدن الساحلية : حيفا يافا عكا</h3>
                    <p class="date_title">
                        <span class="pl-2">
                            <img src="{{asset('images/calendar.png')}}"
                            class="icon">
                        </span>
                        23-17 ديسمبر
                    </p>
                    <p class="place_title">
                        <span class="pl-2">
                            <img src="{{asset('images/place.png')}}"
                                 class="icon">
                        </span>
                        حيفا - شارع المخلّص 14 (يود لامد بيرتس)
                    </p>
                </div>
                <div class="gradient_div">
                </div>
            </div>
        </div>
    </div>
      @include('layouts.menu')
</section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <h4 class="timer_title">باقي على انطلاق المهرجان</h4>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                <div class="bg_div">
                    <p class="div_title">البرنامج </p>
                </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center">
                    <h4 class="head_title"> الفعاليات </h4>
                </div>
            </div>
            <div class="row mt-3">
                @component('common.eventBoxes')
                    @slot('image') music.png @endslot
                    @slot('text')  موسيقى @endslot
                    @slot('class_title') text_box @endslot

                @endcomponent

                    @component('common.eventBoxes')
                        @slot('image') stage.png @endslot
                        @slot('text')  مسرح @endslot
                            @slot('class_title') text_box_div @endslot

                    @endcomponent

                    @component('common.eventBoxes')
                        @slot('image') cinema.png @endslot
                        @slot('text')  سينما @endslot
                            @slot('class_title') text_box_div @endslot
                    @endcomponent

                    @component('common.eventBoxes')
                        @slot('image') show.png @endslot
                        @slot('text')  عروض @endslot
                            @slot('class_title') text_box_div @endslot
                    @endcomponent

                    @component('common.eventBoxes')
                        @slot('image') lecture.png @endslot
                        @slot('text')  محاضرات @endslot
                            @slot('class_title') text_box_lecture @endslot
                    @endcomponent

                    @component('common.eventBoxes')
                        @slot('image') workshop.png @endslot
                        @slot('text')  ورشات @endslot
                            @slot('class_title') text_box_work @endslot
                    @endcomponent


            </div>
            <div class="row mt-4">
                @component('common.eventBoxes')
                    @slot('image') music.png @endslot
                    @slot('text')  موسيقى @endslot
                    @slot('class_title') text_box @endslot

                @endcomponent

                @component('common.eventBoxes')
                    @slot('image') stage.png @endslot
                    @slot('text')  مسرح @endslot
                    @slot('class_title') text_box_div @endslot

                @endcomponent

                @component('common.eventBoxes')
                    @slot('image') cinema.png @endslot
                    @slot('text')  سينما @endslot
                    @slot('class_title') text_box_div @endslot
                @endcomponent

                @component('common.eventBoxes')
                    @slot('image') show.png @endslot
                    @slot('text')  عروض @endslot
                    @slot('class_title') text_box_div @endslot
                @endcomponent

                @component('common.eventBoxes')
                    @slot('image') lecture.png @endslot
                    @slot('text')  محاضرات @endslot
                    @slot('class_title') text_box_lecture @endslot
                @endcomponent

                @component('common.eventBoxes')
                    @slot('image') workshop.png @endslot
                    @slot('text')  ورشات @endslot
                    @slot('class_title') text_box_work @endslot
                @endcomponent


            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
        <div class="col-12 text-center">
            <div class="bg_div">
                <p class="div_title">الجدول الزمني </p>
            </div>
        </div>
            </div>
            <div class="row justify-content-center">
                <ul class="col-12 nav nav-pills">
                    <li class="active-fields col-md-1 text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu1">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الخميس</p>
                                    <p>17/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu2">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الجمعة</p>
                                    <p>18/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu3">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> السبت</p>
                                    <p>19/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class= target-tabs-cards"
                           href="#menu4">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الأحد</p>
                                    <p>20/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu5">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الاثنين</p>
                                    <p>21/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu6">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الثلاثاء</p>
                                    <p>22/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class=" col-md-1 text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu7">
                            <div class="card schedule_box">
                                <div class="card-title">
                                    <p class="m-0"> الأربعاء</p>
                                    <p>23/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="col-12">
                    <div class="tab-content">
                        <div id="menu1" class="tab-pane">
                            <div class="row mt-3">
                                <div class="col-12 text-md-right">
                                    <h5 class="timer_title">الخميس 17 ديسمبر 2020</h5>
                                </div>
                                <div class="col-12 text-md-right">
                                    <p>
                                        <img src="{{asset('images/Icon-clock.png')}}">
                                        <span>  9:30 - 9:00 صباحا</span>
                                        <span> ئؤسسشبسش</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane">

                        </div>
                        <div id="menu3" class="tab-pane">

                        </div>
                        <div id="menu4" class="tab-pane">

                        </div>
                        <div id="menu5" class="tab-pane">

                        </div>
                        <div id="menu6" class="tab-pane">

                        </div>
                        <div id="menu7" class="tab-pane">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
