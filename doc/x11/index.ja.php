<?

$title = "Running X11";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2004/02/28 17:21:14';
$metatags = "<link rel=\"contents\" href=\"index.php?phpLang=ja\" title=\"Running X11 Contents\" /><link rel=\"next\" href=\"intro.php?phpLang=ja\" title=\"イントロダクション\" />";

include_once "header.ja.inc"; 
?><h1>Running X11 on Darwin and Mac OS X</h1>
<p>
このドキュメントは、 Apple の Mac OS X および Darwin システム上で X11 / XFree86 / Xtools を使用するためのものです。
紹介と開発の歴史から始まり、 現状と X11 を使う上での様々なオプションについて書かれています。
これは Fink を使うか使わないかには直接の関係はありません。
</p>
<h2>Contents</h2><ul>
<li><a href="intro.php?phpLang=ja"><b>1 イントロダクション</b></a></li>
<ul>
<li><a href="intro.php?phpLang=ja#def-x11">1.1 What is X11?</a></li>
<li><a href="intro.php?phpLang=ja#def-macosx">1.2 Mac OS X とは何ですか?</a></li>
<li><a href="intro.php?phpLang=ja#def-darwin">1.3 Darwin とは何ですか?</a></li>
<li><a href="intro.php?phpLang=ja#def-xfree86">1.4 What is XFree86?</a></li>
<li><a href="intro.php?phpLang=ja#def-xtools">1.5 Xtools とは何ですか?</a></li>
<li><a href="intro.php?phpLang=ja#client-server">1.6 クライアントとサーバー</a></li>
<li><a href="intro.php?phpLang=ja#rootless">1.7 rootless とはどういう意味ですか?</a></li>
<li><a href="intro.php?phpLang=ja#wm">1.8 ウィンドウマネージャとは何ですか?</a></li>
<li><a href="intro.php?phpLang=ja#desktop">1.9 Quartz/Aqua や Gnome, KDE とは何ですか?</a></li>
</ul>
<li><a href="history.php?phpLang=ja"><b>2 歴史</b></a></li>
<ul>
<li><a href="history.php?phpLang=ja#early">2.1 古代</a></li>
<li><a href="history.php?phpLang=ja#xonx-forms">2.2 XonX forms</a></li>
<li><a href="history.php?phpLang=ja#root-or-not">2.3 root か root にあらざるか</a></li>
</ul>
<li><a href="inst-xfree86.php?phpLang=ja"><b>3 XFree86 の入手とインストール</b></a></li>
<ul>
<li><a href="inst-xfree86.php?phpLang=ja#fink">3.1 Fink を使ったインストール</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#apple-binary">3.2 Apple のバイナリ</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#official-binary">3.3 公式バイナリ</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#official-source">3.4 公式ソース</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#latest-cvs">3.5 最新の開発用ソース</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#xonx-bin">3.6 XonX バイナリテストリリース (XAqua, XDarwin)</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#macgimp">3.7 MacGimp</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#rootless">3.8 ネット上のルートレスサーバ</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#switching-x11">3.9 X11 の削除</a></li>
<li><a href="inst-xfree86.php?phpLang=ja#fink-summary">3.10 Fink パッケージの要点</a></li>
</ul>
<li><a href="run-xfree86.php?phpLang=ja"><b>4 XFree86 の起動</b></a></li>
<ul>
<li><a href="run-xfree86.php?phpLang=ja#darwin">4.1 Darwin</a></li>
<li><a href="run-xfree86.php?phpLang=ja#macosx-41">4.2 Mac OS X + XFree86 4.x.y</a></li>
<li><a href="run-xfree86.php?phpLang=ja#xinitrc">4.3 .xinitrc ファイル</a></li>
</ul>
<li><a href="xtools.php?phpLang=ja"><b>5 Xtools</b></a></li>
<ul>
<li><a href="xtools.php?phpLang=ja#install">5.1 Xtools のインストール</a></li>
<li><a href="xtools.php?phpLang=ja#run">5.2 Xtools の起動</a></li>
<li><a href="xtools.php?phpLang=ja#opengl">5.3 OpenGL に関する注記</a></li>
</ul>
<li><a href="other.php?phpLang=ja"><b>6 その他の X11</b></a></li>
<ul>
<li><a href="other.php?phpLang=ja#vnc">6.1 VNC</a></li>
<li><a href="other.php?phpLang=ja#wiredx">6.2 WiredX</a></li>
<li><a href="other.php?phpLang=ja#exodus">6.3 eXodus</a></li>
</ul>
<li><a href="trouble.php?phpLang=ja"><b>7 XFree86 トラブルシューティング</b></a></li>
<ul>
<li><a href="trouble.php?phpLang=ja#immedate-quit">7.1 XDarwin を起動した直後に終了かクラッシュします</a></li>
<li><a href="trouble.php?phpLang=ja#black">7.2 GNOME パネルや GNOME アプリケーションメニュのアイコンが黒い</a></li>
<li><a href="trouble.php?phpLang=ja#keyboard">7.3 キーボードが XFree86 で反応しない</a></li>
<li><a href="trouble.php?phpLang=ja#delete-key">7.4 Back Space キーが動かない</a></li>
<li><a href="trouble.php?phpLang=ja#locale">7.5 "Warning: locale not supported by C library"</a></li>
</ul>
<li><a href="tips.php?phpLang=ja"><b>8 使用上の Tips</b></a></li>
<ul>
<li><a href="tips.php?phpLang=ja#terminal-app">8.1 
ターミナル.app からの X11 アプリの起動
</a></li>
<li><a href="tips.php?phpLang=ja#open">8.2 xterm からの Aqua アプリケーションの起動</a></li>
<li><a href="tips.php?phpLang=ja#copy-n-paste">8.3 コピーとペースト</a></li>
</ul>
</ul><p>Generated from <i>$Id: index.ja.php,v 1.2 2004/02/28 20:47:23 fingolfin Exp $</i></p><? include_once "../../footer.inc"; ?>
