@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- 投稿一覧 --}}
            @if (count($favorites) > 0)
                @include('microposts.microposts', ['microposts' => $favorites])
            @endif
        </div>
    </div>
@endsection