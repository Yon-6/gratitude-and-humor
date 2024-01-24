@if(Request::is('/'))
    {{-- トップページの場合のヘッダー --}}
    <header class="top-page-header">
        <h1 class="top-page-header-title">感謝とユーモア</h1>
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
