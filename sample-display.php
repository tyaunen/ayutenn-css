<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Display</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Display Utilities</h1>
    <p class="subtitle">表示・非表示のユーティリティクラス</p>

    <section>
        <h2>基本クラス</h2>
        <p>要素の表示形式を制御するためのユーティリティクラスです。</p>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <th style="text-align: left; padding: 0.5rem;">クラス</th>
                <th style="text-align: left; padding: 0.5rem;">説明</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-none</code></td>
                <td style="padding: 0.5rem;">要素を非表示にする</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-block</code></td>
                <td style="padding: 0.5rem;">ブロック要素として表示</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-inline</code></td>
                <td style="padding: 0.5rem;">インラインブロック要素として表示</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-flex</code></td>
                <td style="padding: 0.5rem;">フレックスボックスとして表示</td>
            </tr>
        </table>
        <div class="demo-area mt-3">
            <div class="demo-box demo-box-primary d-block mb-2">d-block</div>
            <div class="demo-box demo-box-secondary d-inline me-2">d-inline</div>
            <div class="demo-box demo-box-accent mt-2 d-flex">d-flex</div>
        </div>
<pre><code class="language-html">&lt;div class="d-none"&gt;非表示&lt;/div&gt;
&lt;div class="d-block"&gt;ブロック&lt;/div&gt;
&lt;div class="d-inline"&gt;インライン&lt;/div&gt;
&lt;div class="d-flex"&gt;フレックス&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>レスポンシブクラス</h2>
        <p>ブレークポイントに応じて表示形式を変更できます。</p>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <th style="text-align: left; padding: 0.5rem;">接頭辞</th>
                <th style="text-align: left; padding: 0.5rem;">ブレークポイント</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-sm-*</code></td>
                <td style="padding: 0.5rem;">576px 以上</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-md-*</code></td>
                <td style="padding: 0.5rem;">768px 以上</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-lg-*</code></td>
                <td style="padding: 0.5rem;">992px 以上</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-xl-*</code></td>
                <td style="padding: 0.5rem;">1200px 以上</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-xxl-*</code></td>
                <td style="padding: 0.5rem;">1400px 以上</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.d-xxxl-*</code></td>
                <td style="padding: 0.5rem;">1680px 以上</td>
            </tr>
        </table>
        <div class="demo-area mt-3">
            <p class="mb-2">ウィンドウサイズを変更して確認してください：</p>
            <div class="demo-box demo-box-primary d-none d-md-block mb-2">768px 以上で表示 (d-none d-md-block)</div>
            <div class="demo-box demo-box-secondary d-block d-lg-none mb-2">992px 未満で表示 (d-block d-lg-none)</div>
            <div class="demo-box demo-box-accent d-none d-sm-block d-md-none">576px～768px で表示 (d-none d-sm-block d-md-none)</div>
        </div>
<pre><code class="language-html">&lt;!-- 768px 以上で表示 --&gt;
&lt;div class="d-none d-md-block"&gt;...&lt;/div&gt;

&lt;!-- 992px 未満で表示 --&gt;
&lt;div class="d-block d-lg-none"&gt;...&lt;/div&gt;

&lt;!-- 576px～768px で表示 --&gt;
&lt;div class="d-none d-sm-block d-md-none"&gt;...&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>Flexbox ラップ</h2>
        <p><code>.d-flex</code> の子要素に <code>.wrap</code> を適用すると、折り返しが有効になります。</p>
        <div class="demo-area">
            <div class="d-flex wrap" style="gap: 0.5rem;">
                <div class="demo-box demo-box-primary">Item 1</div>
                <div class="demo-box demo-box-secondary">Item 2</div>
                <div class="demo-box demo-box-accent">Item 3</div>
                <div class="demo-box demo-box-light">Item 4</div>
                <div class="demo-box demo-box-primary">Item 5</div>
            </div>
        </div>
<pre><code class="language-html">&lt;div class="d-flex wrap"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
    ...
&lt;/div&gt;</code></pre>
    </section>

</body>
</html>
