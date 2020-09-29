

@extends('layouts/nav-footer')
@section('css')
    <link rel="stylesheet" href="./css/news.css">
@endsection



@section('back')



        <section class="news">
            <div class="container">
                <h2 class="news_title">最新消息</h2>
                <div class="row news_lists">
                    @foreach ($news as $newsv2)


                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>{{$newsv2->title}}</h3>
                            <h4>{{$newsv2->sub_title}}</h4>
                            <img width="100%" src="{{$newsv2->img_url}}" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">{{$newsv2->contact}}</p>
                            <a class="btn btn-success" href="/news_info/{{$newsv2->id}}" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    @endforeach

                    {{ $news->links() }}

                    {{-- <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>中台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>東台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字...</p>
                            <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>南台灣推薦秘境景點</h3>
                            <h4>景點名稱</h4>
                            <img width="100%" src="./images/index/news/news_example.JPG" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字一串文字</p>
                           <a class="btn btn-success" href="/news_info" role="button">點擊查看更多 &raquo;</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </section>

@endsection
