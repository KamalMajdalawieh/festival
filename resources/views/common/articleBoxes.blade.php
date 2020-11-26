<div class="col-md-4">
        <div class="article_image pr-4 pl-4">
            <img src="{{asset('images/'.$image)}}"
                 class="w-100">
            <div class="gradient_article_image">
            </div>
            <div class="article_text">
                <p class="paragraph_article">{{$text}}</p>
            </div>
            <div class="button_article">
            <a href="{{route('event.articleSection')}}" class="btn read_button">
                اقرأ
            </a>
            </div>
        </div>
</div>

