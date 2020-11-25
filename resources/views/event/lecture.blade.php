@component('common.titleBackground')
    @slot('title') محاضرات @endslot
@endcomponent
<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="">
                    <div class="square_image">
                        <img src="{{asset('images/lecture1.png')}}"
                             class="w-100">
                        <div class="gradient_square_image">
                        </div>
                        <div class="">
                            <p class="paragraph_square">محاضرة 1 </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="">
                    <div class="square_image">
                        <img src="{{asset('images/lecture2.png')}}"
                             class="w-100">
                        <div class="gradient_square_image">
                        </div>
                        <div class="">
                            <p class="paragraph_square">محاضرة 2 </p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="">
                    <div class="square_image">
                        <img src="{{asset('images/lecture3.png')}}"
                             class="w-100">
                        <div class="gradient_square_image">
                        </div>
                        <div class="">
                            <p class="paragraph_square">محاضرة 3 </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
