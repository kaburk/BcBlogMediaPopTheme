<?php
/**
 * BcBlogMediaPopTheme : baserCMS5 オウンドメディアのテーマ（ポップ）
 *
 * スタイルの設定（scripts/new-blog-theme.sh が variants/pop から書き出す）
 */
return [
    'BlogTheme' => [
        // スタイル名（<html data-variant>）
        'variant' => 'pop',
        // Google Fonts（layout で読み込む）
        'fonts' => 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700;800&family=Noto+Sans+JP:wght@400;500;700;800&display=swap',
        // 配色モードの初期値（auto = OS の設定に合わせる／light = ライト／dark = ダーク）
        // 管理画面の「テーマ設定」で変えられる（テーマ設定の値が優先）
        'colorScheme' => 'auto',
        // ヘッダーにライト／ダークの切り替えボタンを出す（テーマ設定で変えられる）
        'schemeToggle' => true,
        // ヘッダー・フッターのナビの作り方（テーマ設定で変えられる）
        //   contents = コンテンツ管理のルート直下（ブログ・固定ページ・リンク・メールフォームなど）
        //   categories = 最初のブログのカテゴリ（第1階層）＋ルート直下の固定ページ・メールフォーム・リンク
        'navSource' => 'categories',
        // ヘッダーの目立つボタン（テーマ設定の「ヘッダーのボタン」で変えられる）。メールフォームに ?項目名=値 を付けると、その値を選んだ状態で開く
        'headerCta' => ['label' => '資料請求', 'url' => '/contact/?purpose=資料請求'],
        // トップの構成：list = 新着の一覧／sections = ピックアップ3件＋カテゴリごとの新着4件（2つ目のまとまりのあとに、ウィジェットエリア「トップ：CTA」）
        'topLayout' => 'sections',
        // トップページでサイドバーを出す
        'homeSidebar' => false,
        // 一覧の何件目のあとに、ウィジェットエリア「広告：一覧の途中」を出すか（資料請求の帯などにも使える）
        'listAdAfter' => 6,
        // トップの一覧の上に「タグから探す」を出す（topLayout が list のとき）
        'tagStrip' => false,
        // 記事の目次（本文の h2・h3 から作る）。このスタイルでは、PC でも本文の上に開閉できる形で出す
        'toc' => true,
        // 本文の上の目次を、開いた状態で出す
        'tocOpen' => true,
        // 記事の上のシェア（下のシェアは常に出す）
        'shareTop' => false,
        // アイキャッチも本文の画像もない記事のカード：frame = 色の枠＋カテゴリ名／none = 画像の場所を出さない（文字だけ）
        'thumbFallback' => 'frame',
        // カード・記事の日付の書式（PHP の date の書式）
        'dateFormat' => 'Y.m.d',
        // サイドバーの「最近の投稿」に小さなサムネイルを付ける
        'recentThumb' => true,
        // テーマ設定の4色の初期値（css の代わりの値にも使う）
        'colors' => ['main' => '#f97316', 'sub' => '#1e293b', 'link' => '#c2410c', 'hover' => '#9a3412'],
    ],
];
