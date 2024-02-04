@if(Request::is('/'))
    {{-- トップページの場合のヘッダー --}}
    <header class="top-page-header">
        <div class="header-navi">
            <h1 class="top-page-header-title"><a href="/">感謝とユーモア</a></h1>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/#self-introduction">Self Introduction</a></li>
                    <li><a href="/#programming-skill">Programming Skill</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-main-image">
            <img src="{{ asset('images/header.jpg') }}" alt="メイン画像">
        </div>
    </header>
@else
    {{-- それ以外のページのヘッダー --}}
    <header>
        <div>
            <nav>
                <ul>
                    <li>TOP</li>
                    <li>Programming Skills</li>
                    <li>contact</li>
                </ul>
            </nav>
        </div>
    </header>
@endif
