@extends('layouts.default')

@section('sub_title', '感謝とユーモア')

@section('content')
    @yield('header')
    <div class="content-wrap col-span-3">
        <div class="section-wrap grid grid-cols-2">
            <div class="self-introduction-wrap col-span-2 grid grid-cols-2">
                <div class="self-introduction-imag-wrap col-span-1">
                    <img src="{{ asset('images/photo.jpg') }}" alt="自己紹介画像">
                </div>
                <p class="col-span-1">Tomonori Yoshimura</p>
            </div>
            <div class="left col-span-2">
                <h2 class="section-title">Programming Skill</h2>
                <div class="programming-skill-wrap">
                    <h3 class="programming-skill-title">Programming Language</h3>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/html.png') }}" alt=""><span>HTML</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/css.png') }}" alt=""><span>CSS</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/javascript.png') }}" alt=""><span>JavaScript</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/php.png') }}" alt=""><span>PHP</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/liquid.png') }}" alt=""><span>Liquid</span></div>
                </div>
                <div class="programming-skill-wrap">
                    <h3 class="programming-skill-title">Framework</h3>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/laravel.png') }}" alt=""><span>Laravel</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/laravel-shopify.png') }}" alt=""><span>Laravel-Shopify</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/symfony.png') }}" alt=""><span>Symfony</span></div>
                </div>
                <div class="programming-skill-wrap">
                    <h3 class="programming-skill-title">Database</h3>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/mysql.png') }}" alt=""><span>MySQL</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/postgresql.png') }}" alt=""><span>PostgreSQL</span></div>
                </div>
                <div class="programming-skill-wrap">
                    <h3 class="programming-skill-title">CMS</h3>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/.png') }}" alt=""><span>EC-CUBE</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/Shopify.png') }}" alt=""><span>Shopify</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/wordpress.png') }}" alt=""><span>WordPress</span></div>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/.png') }}" alt=""><span>MovableType</span></div>
                </div>
                <div class="programming-skill-wrap">
                    <h3 class="programming-skill-title">Git</h3>
                    <div class="icon-wrap"><img src="{{ asset('images/icon/github.png') }}" alt=""><span>GitHub</span></div>
                </div>
            </div>
        </div>
    </div>
    @yield('footer')
@endsection
