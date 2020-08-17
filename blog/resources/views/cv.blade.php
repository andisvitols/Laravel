@extends('layouts/blog/cv')

@section('title', 'Andis - Curriculum Vitae')

@section('header')
    <header class="w3-container w3-center w3-padding-32">
    <h1><b>{{$initial['user_name']}} - Curriculum Vitae</b></h1>
    <p>Welcome to the CV of <span class="w3-tag">{{$initial['user_name']}}</span></p>
@endsection

@section('nav')
    <a class="w3-btn" href="/blog">My blog</a>
    <a class="w3-btn" href="/tm">Timer</a>
    <a class="w3-btn" href="/cv">My CV</a>
    <a class="w3-btn" href="/posts">Posts</a>
    <a class="w3-btn" href="/newpostform">Add an artwork</a>
@endsection

@section('contact')
    <div class="w3-container w3-padding">
        <img src="/assets/img/profilepic.jpg" class="w3-left" style="width:170px">
        <ul class="w3-ul w3-hoverable w3-white">
            <li style="font-weight:bold; font-size:30">Andis Vītols</li>
            <li>Senior Associate</li>
            <li><img src="/assets/img/email.webp" style="width:24px"> : <a href="mailto:vitols.andis@gmail.com" target="_blank">vitols.andis@gmail.com</a></li>
            <li><img src="/assets/img/website.png" style="width:24px"> : <a href="http://localhost/blog">http://localhost/blog</a></li>
            <li><img src="/assets/img/phone.png" style="width:24px"> : 29361659</li>
        </ul>
    </div>
@endsection


@section('profile')

    @foreach($initial['personal_profile'] as $field)
        <div class="w3-topbar">
            <div class="w3-padding w3-left" style="width: 25%;">
                <h2 class="w3-left">Personal Profile</h2>
            </div>

            <div class="w3-right" style="width: 72.5%;">
                <p class="w3-justify">{{$field->description}}</p>
            </div>
        </div>
    @endforeach

@endsection

@section('experience')

        <div class="w3-topbar">
            <div class="w3-padding w3-left" style="width: 25%;">
                <h2 class="w3-left">Work Experience</h2>
            </div>

    @foreach($initial['work_experience'] as $field)
            <div class="w3-right" style="width: 72.5%;">
                <h3>{{$field->job_title}} at {{$field->company}}</h3>
                <p>{{$field->period}}</p>
                <p class="w3-justify" style="border-bottom: 1px dotted gray">{{$field->description}}</p>
            </div>
    @endforeach
        </div>
@endsection


@section('skills')
    <div class="w3-topbar">
        <div class="w3-padding w3-left" style="width:25%;">
            <h1 class="w3-left">Key Skills</h1>
        </div>

        <div class="w3-right" style="width: 72.5%;">
            <ul class="w3-ul" style="column-count:4;">

                @foreach($initial['key_skills'] as $field)
                    <li>{{$field->skills}}</li>
                @endforeach
            
            </ul>
        </div>
    </div>

@endsection

@section('education')
    <div class="w3-topbar"></div>
        <div class="w3-padding w3-left" style="width:25%;">
            <h1 class="w3-left">Education</h1>
        </div>

    @foreach($initial['education'] as $field)
        <div class="w3-right" style="width: 72.5%;">
            <h2>{{$field->college}}</h2>
            <p class="subDetails">{{$field->qualification}}</p>
            <p class="w3-justify" style="border-bottom: 1px dotted gray">{{$field->description}}</p>
        </div>
    @endforeach

@endsection

<script type="text/javascript"></script>

@section('footer')
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" onclick="goBack()">Previous &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/blog">My blog &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/tm">Timer &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/cv" target="blank">My cv &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/posts" target="blank">Posts &raquo;</></a>
    <a class="w3-button w3-black w3-padding-large w3-margin-bottom" href="/newpostform" target="blank">Add an artwork &raquo;</></a>
    <p>Powered by <a href="#" target="_blank">{{$initial['user_name']}}</a></p>
@endsection