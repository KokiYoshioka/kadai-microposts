<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    /**
     * ユーザをお気に入りにするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function store($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入りにする
        \Auth::user()->favorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをお気に入り解除するアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($micropostId)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをお気に入り解除する
        \Auth::user()->unfavorite($micropostId);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
