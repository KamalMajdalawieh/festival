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
                <ul class=" col-8 nav nav-pills">
                    <li class="active text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu1">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> الخميس</p>
                                    <p>17/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu2">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> الجمعة</p>
                                    <p>18/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu3">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> السبت</p>
                                    <p>19/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class= target-tabs-cards"
                           href="#menu4">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> الأحد</p>
                                    <p>20/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu5">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> الاثنين</p>
                                    <p>21/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class=" target-tabs-cards"
                           href="#menu6">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
                                    <p class="m-0"> الثلاثاء</p>
                                    <p>22/12</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="text-center">
                        <a data-toggle="pill"
                           class="target-tabs-cards"
                           href="#menu7">
                            <div class="card schedule_box">
                                <div class="card-title pt-3">
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
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الخميس 17 ديسمبر 2020</h4>
                                </div>
                            </div>
                                <div class="row text-md-right mt-3">
                                 @component('common.tabBoxes')
                                     @slot('text') 9:00 - 9:30 صباحا @endslot
                                    @endcomponent
                                </div>
                                <div class="row text-md-right mt-5">
                                    @component('common.tabBoxes')
                                        @slot('text') 9:30 - 10:00 صباحا @endslot
                                    @endcomponent
                                </div>
                                <div class="row text-md-right mt-5">
                                    @component('common.tabBoxes')
                                        @slot('text') 10:30 - 10:45 صباحا @endslot
                                    @endcomponent
                                    </div>
                                <div class="row text-md-right mt-5">
                                    @component('common.tabBoxes')
                                        @slot('text') 10:45 - 11:15 صباحا @endslot
                                    @endcomponent
                                </div>
                        </div>
                        <div id="menu2" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الجمعة 18 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        <div id="menu3" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">السبت 19 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        <div id="menu4" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الأحد 20 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        <div id="menu5" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الاثنين 21 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        <div id="menu6" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الثلاثاء 22 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        <div id="menu7" class="tab-pane">
                            <div class="row mt-5">
                                <div class="col-12 text-md-right">
                                    <h4 class="timer_title">الأربعاء 23 ديسمبر 2020</h4>
                                </div>
                            </div>
                            <div class="row text-md-right mt-3">
                                @component('common.tabBoxes')
                                    @slot('text') 9:00 - 9:30 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 9:30 - 10:00 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:30 - 10:45 صباحا @endslot
                                @endcomponent
                            </div>
                            <div class="row text-md-right mt-5">
                                @component('common.tabBoxes')
                                    @slot('text') 10:45 - 11:15 صباحا @endslot
                                @endcomponent
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bg_div">
                        <p class="div_title">المشاركون</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                @component('common.faceIcons')
                    @slot('image') person1.png @endslot
                    @slot('name') عمر أحمد @endslot
                @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person2.png @endslot
                        @slot('name') راما علي @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person3.png @endslot
                        @slot('name') عمر أحمد @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person4.png @endslot
                        @slot('name') عمر أحمد @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person5.png @endslot
                        @slot('name') عمر أحمد @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person6.png @endslot
                        @slot('name') راما علي  @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person7.png @endslot
                        @slot('name') راما علي @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person8.png @endslot
                        @slot('name') راما علي  @endslot
                    @endcomponent

                    @component('common.faceIcons')
                        @slot('image') person9.png @endslot
                        @slot('name') راما علي  @endslot
                    @endcomponent
            </div>
            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">طاقم المهرجان</h3>
            </div>
            <div class="row mt-3 justify-content-center">
                @component('common.faceIcons')
                    @slot('image') person10.png @endslot
                    @slot('name') دانيا وليد @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person11.png @endslot
                    @slot('name') ليث محمد  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person12.png @endslot
                    @slot('name') دانيا وليد @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person13.png @endslot
                    @slot('name') دانيا وليد @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person14.png @endslot
                    @slot('name') ليث محمد  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person15.png @endslot
                    @slot('name') ليث محمد  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person16.png @endslot
                    @slot('name') دانيا وليد @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person17.png @endslot
                    @slot('name') دانيا وليد  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person18.png @endslot
                    @slot('name') دانيا وليد  @endslot
                @endcomponent
            </div>

            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">اللجنة الاستشاريّة للمهرجان</h3>
            </div>
            <div class="row mt-3 justify-content-center">
                @component('common.faceIcons')
                    @slot('image') person19.png @endslot
                    @slot('name') د.أسيل عمر  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person20.png @endslot
                    @slot('name') د. أشرف سليم  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person21.png @endslot
                    @slot('name') د. أشرف سليم @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person22.png @endslot
                    @slot('name') د. أشرف سليم @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person23.png @endslot
                    @slot('name') د. أشرف سليم  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person24.png @endslot
                    @slot('name') د. أشرف سليم  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person25.png @endslot
                    @slot('name') د. أشرف سليم @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person26.png @endslot
                    @slot('name') د.أسيل عمر  @endslot
                @endcomponent

                @component('common.faceIcons')
                    @slot('image') person27.png @endslot
                    @slot('name') د.أسيل عمر  @endslot
                @endcomponent
            </div>
        </div>
    </section>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="bg_div">
                        <p class="div_title">الشركاء  </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة المتحدة @endslot
                @endcomponent

                    @component('common.companyIcons')
                        @slot('image') R.png @endslot
                        @slot('name') شركة العربية @endslot
                    @endcomponent

                    @component('common.companyIcons')
                        @slot('image') R.png @endslot
                        @slot('name') شركة الأطلس @endslot
                    @endcomponent

                    @component('common.companyIcons')
                        @slot('image') R.png @endslot
                        @slot('name') شركة تكنولوجيا @endslot
                    @endcomponent

                    @component('common.companyIcons')
                        @slot('image') R.png @endslot
                        @slot('name') شركة ناد سوفت @endslot
                    @endcomponent

                    @component('common.companyIcons')
                        @slot('image') R.png @endslot
                        @slot('name') شركة ديزاين @endslot
                    @endcomponent
            </div>
            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">تعاون في ملف الساحل الفلسطيني</h3>
            </div>
            <div class="row mt-4 justify-content-center">
                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة المتحدة @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة العربية @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة الأطلس @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة تكنولوجيا @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ناد سوفت @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ديزاين @endslot
                @endcomponent
            </div>
            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">الحركات الشبابيّة المشاركة</h3>
            </div>
            <div class="row mt-4 justify-content-center">
                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة المتحدة @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة العربية @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة الأطلس @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة تكنولوجيا @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ناد سوفت @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ديزاين @endslot
                @endcomponent
            </div>
            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">رعاية وتعاون إعلامي</h3>
            </div>
            <div class="row mt-4 justify-content-center">
                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة المتحدة @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة العربية @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة الأطلس @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة تكنولوجيا @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ناد سوفت @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ديزاين @endslot
                @endcomponent
            </div>
            <div class="row mt-5 justify-content-center">
                <h3 class="festival_title">الممولون</h3>
            </div>
            <div class="row mt-4 justify-content-center">
                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة المتحدة @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة العربية @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة الأطلس @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة تكنولوجيا @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ناد سوفت @endslot
                @endcomponent

                @component('common.companyIcons')
                    @slot('image') R.png @endslot
                    @slot('name') شركة ديزاين @endslot
                @endcomponent
            </div>
        </div>
    </section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="bg_div">
                    <p class="div_title">حول المهرجان  </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-md-right">
                <p class="festival_text">
                    اختارت الجمعيّة ثيمة السّاحل الفلسطيني كثيمة مركزيّة للمهرجان الّذي سيستمرّ لسبعة أيّام ممثّلةً بثلاث مدنٍ من مدن السّاحل الفلسطينيّ، هي عكّا، وحيفا، ويافا؛ إذ تواجه هذه المدن، منذ النكبة، مخطّطاتٍ مُمَنهجةً تهدِفُ إلى طمس معالمها الفلسطينيّة وتزوير هويتها وتاريخها وثقافتها وتستهدف سُكّانها الفلسطينيّين الأصلانيّين، إلى جانب سياسات التهويد والإفقار التي يعاني منها سكان الأحياء الفلسطينيّة المهمّشة مثل حي وادي النسناس في حيفا، حي العجمي في يافا، والسوق الشعبي في عكّا، الّتي تُظهر الاستغلال والتّسفيه الواضح للموروثِ والمخزونِ الثّقافيِّ الفلسطينيّ؛ بتحويل هذه الأحياء إلى حيّز سياحيٍّ منزوعِ السّياقِ السّياسيِّ والتّاريخيِّ والتّرويجِ المًكثّفِ للأسرَلةِ والتطبيع مع تجاهل تامٍّ لتاريخ المدن وتُراثها
                </p>
                <p class="festival_text mt-5">
                    من هذا المنطلق، ترى جمعيّة الثّقافة العربيّة أنّ الحفاظَ على النّسيج الاجتماعي والموروث الثّقافيِّ جزءٌ لا يتجزّأ من النّضال والصّمود الفلسطينيّ في مدن السّاحل؛ إذ يهدِفُ مهرجان المدينة للثّقافة والفنونِ إلى تحدّي القبضةِ القمعيّة الإسرائيليّة على الثّقافة الفلسطينيّة وربط قضايا الناس بنشاطات ثقافيّة، ويشكّل احتفالًا وإحياءً للثقافة والفنّ الفلسطينيّين
                </p>
            </div>
        </div>
    </div>
</section>

    <section class="mt-5">
        @include('layouts.footer')
    </section>
@endsection
