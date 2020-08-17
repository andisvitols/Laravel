@extends('layouts/blog/blog')

@section('title', 'Timer page')

@section('head')
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link rel="stylesheet" href="/assets/css/tm.css">
@endsection

@section('header')
  <header class="w3-container w3-center w3-padding-32">
  <h1><b>Timer</b></h1>
  <p>This is timer that sounds at defined time, created by <span class="w3-tag">{{$initial['user_name']}}</span></p>
@endsection

@section('nav')
  <a class="w3-btn" href="/blog">My blog</a>
  <a class="w3-btn" href="/tm">Timer</a>
  <a class="w3-btn" href="/cv">My CV</a>
  <a class="w3-btn" href="/posts">Posts</a>
  <a class="w3-btn" href="/newpostform">Add an artwork</a>
@endsection

@section('entries')
  <div id="app"></div>
  <script src="/assets/js/tmcomponents.js"></script>
  <script src="/assets/js/tmvue.js"></script>
@endsection

@section('aboutCard')
    <img src="/assets/img/michelangelo.jpg" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>Michelangelo</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
@endsection

@section('popPosts')

@endsection

@section('labelsTags')
  <div class="w3-container w3-padding">
        <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
        </p>
    </div>
@endsection

@section('footer')
  <a class="w3-button w3-black w3-padding-large w3-margin-bottom" onclick="goBack()">Previous &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/blog">My blog &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/tm">Timer &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/cv" target="blank">My cv &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/posts" target="blank">Posts &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/newpostform" target="blank">Add an artwork &raquo;</></a>
    <p>Powered by <a href="#" target="_blank">{{$initial['user_name']}}</a></p>
@endsection
