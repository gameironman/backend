

@extends('layouts/nav-footer')
@section('css')
    <link rel="stylesheet" href="./css/news_info.css">
@endsection



@section('back')

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">台灣秘境</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./index.html">首頁</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/news.html">最新消息</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact_us.html">來信推薦</a>
            </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
    </div>
</nav>

<main role="main">

    <section class="news_info">
        <div class="container">
            <h2 class="info_title">中台灣推薦秘境景點</h2>
            <div class="row">


                    <div class="col-md-4">
                        <div class="news_list">
                            <h3>{{$news_info->title}}</h3>
                            <h4>{{$news_info->sub_title}}</h4>
                            <img width="100%" src="{{$news_info->img_url}}" alt="圖片建議尺寸: 1000 x 567">
                            <p class="news_content">{{$news_info->contact}}</p>
                           
                        </div>
                    </div>


            </div>
        </div>
    </section>


@endsection


@section('lightbox')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

@endsection

