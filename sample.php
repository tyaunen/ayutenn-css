<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn CSS Framework Demo</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>ayutenn-css</h1>
    <p class="subtitle">What is ayutenn-css</p>
    <section>
        <h2>what is ayutenn-css</h2>
        <p>
            ayutenn-cssはayutennフレームワークのためのCSS・JSライブラリです。<br>
        </p>
        <p>
            <span style="color: #eb8d00;">重要な事として、このライブラリは@tyau_nen_の個人利用のためにのみ作られています。</span><br>
            何でも公開するのが好きだから公開されているし、ライセンスとしてはCC0ですが、俺以外が使用することはまったく推奨しません。<br>
            ノーメンテナンス。ノーレスポンシビリティ。ノークオリティ。オーケイ？
        </p>
        <hr>
        <h2>機能</h2>
        <p>
            ayutenn-cssは、一般的なCSSライブラリとヘッドレスCSSの中間にあります。<br>
            グリッドやモーダルなど「よくあるコンポーネント」を、上書きしやすい形の最低限のスタイルと一緒に提供します。
        </p>
        <hr>
        <h2>つかいかた</h2>
        <p>
            ayutennを使用した開発は通常、<a href="https://github.com/tyaunen/ayutenn-skeleton">ayutenn-skeleton</a>をcloneして始めます。
        </p>
        <p>
            その場合は単にcomposer installを実行するだけで<code>/app/js/@lib/ayutenn</code>と<code>/app/css/@lib/ayutenn</code>にファイルがコピーされます。
        </p>
        <p>
            他のayutennの機能を使用せずayutenn-cssのみを使用する場合は、
            単に<a href="https://github.com/tyaunen/ayutenn-css">ayutenn-css</a>をクローンして、<code>ayutenn.css</code>と全てのjsファイルをインポートすれば動きます。
        </p>
    </section>
</body>
</html>
