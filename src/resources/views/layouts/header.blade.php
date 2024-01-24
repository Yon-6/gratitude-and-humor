@if(Request::is('/'))
    {{-- トップページの場合のヘッダー --}}
    <header class="top-page-header col-span-3">
        <div class="main-image">
            <img src="{{ asset('images/home.jpg') }}" alt="メイン画像">
            <h1 class="top-page-header-title">感謝とユーモア</h1>
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
