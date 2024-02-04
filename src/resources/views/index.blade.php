@extends('layouts.default')

@section('sub_title', '感謝とユーモア')

@section('content')
    @yield('header')
    <div class="content-wrap">
        <div class="section-wrap">
            <div id="self-introduction-wrap">
                <h2 class="section-title">Self Introduction</h2>
                <div class="self-introduction-inner-wrap">
                    <div class="self-introduction-inner">
                        <div class="self-introduction-imag-wrap">
                            <img src="{{ asset('images/photo.jpg') }}" alt="自己紹介画像">
                            <p>Yon</p>
                        </div>
                        <p>
                            　高校を卒業してから約15年間接客業に携わり、2021年に未経験からWeb制作会社に転職。<br>
                            PHPをメイン言語に、Web制作を中心にアプリ開発をしています。現在IT業界4年目です。
                        </p>
                    </div>
                </div>
            </div>
            <div id="programming-skill-wrap">
                <h2 class="section-title">Programming Skill</h2>
                <div class="programming-skill-detail">
                    <h3 class="programming-skill-title">Programming Language</h3>
                    <table>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/html.png') }}" alt=""></td>
                            <td class="text-wrap"><span>HTML</span></td>
                            <td class="skill-wrap"><span class="skill-bar html">60%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/css.png') }}" alt=""></td>
                            <td class="text-wrap"><span>CSS</span></td>
                            <td class="skill-wrap"><span class="skill-bar css">50%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/javascript.png') }}" alt=""></td>
                            <td class="text-wrap"><span>JavaScript</span></td>
                            <td class="skill-wrap"><span class="skill-bar javascript">50%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/php.png') }}" alt=""></td>
                            <td class="text-wrap"><span>PHP</span></td>
                            <td class="skill-wrap"><span class="skill-bar php">80%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/liquid.png') }}" alt=""></td>
                            <td class="text-wrap"><span>Liquid</span></td>
                            <td class="skill-wrap"><span class="skill-bar liquid">40%</span></td>
                        </tr>
                    </table>
                </div>
                <div class="programming-skill-detail">
                    <h3 class="programming-skill-title">Framework</h3>
                    <table>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/laravel.png') }}" alt=""></td>
                            <td class="text-wrap"><span>Laravel</span></td>
                            <td class="skill-wrap"><span class="skill-bar laravel">70%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/laravel-shopify.png') }}" alt=""></td>
                            <td class="text-wrap"><span>Laravel-Shopify</span></td>
                            <td class="skill-wrap"><span class="skill-bar laravel-shopify">65%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/symfony.png') }}" alt=""></td>
                            <td class="text-wrap"><span>Symfony</span></td>
                            <td class="skill-wrap"><span class="skill-bar symfony">60%</span></td>
                        </tr>
                    </table>
                </div>
                <div class="programming-skill-detail">
                    <h3 class="programming-skill-title">Database</h3>
                    <table>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/mysql.png') }}" alt=""></td>
                            <td class="text-wrap"><span>MySQL</span></td>
                            <td class="skill-wrap"><span class="skill-bar mysql">70%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/postgresql.png') }}" alt=""></td>
                            <td class="text-wrap"><span>PostgreSQL</span></td>
                            <td class="skill-wrap"><span class="skill-bar postgresql">75%</span></td>
                        </tr>
                    </table>
                </div>
                <div class="programming-skill-detail">
                    <h3 class="programming-skill-title">CMS</h3>
                    <table>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/eccube.png') }}" alt=""></td>
                            <td class="text-wrap"><span>EC-CUBE</span></td>
                            <td class="skill-wrap"><span class="skill-bar ec-cube">75%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/Shopify.png') }}" alt=""></td>
                            <td class="text-wrap"><span>Shopify</span></td>
                            <td class="skill-wrap"><span class="skill-bar shopify">70%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/wordpress.png') }}" alt=""></td>
                            <td class="text-wrap"><span>WordPress</span></td>
                            <td class="skill-wrap"><span class="skill-bar wordpress">65%</span></td>
                        </tr>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/movabletype.png') }}" alt=""></td>
                            <td class="text-wrap"><span>MovableType</span></td>
                            <td class="skill-wrap"><span class="skill-bar movable-type">60%</span></td>
                        </tr>
                    </table>
                </div>
                <div class="programming-skill-detail">
                    <h3 class="programming-skill-title">Git</h3>
                    <table>
                        <tr>
                            <td class="icon-wrap"><img src="{{ asset('images/icon/github.png') }}" alt=""></td>
                            <td class="text-wrap"><span>GitHub</span></td>
                            <td class="skill-wrap"><span class="skill-bar git">80%</span></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @yield('footer')
@endsection
