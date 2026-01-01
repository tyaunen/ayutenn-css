<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Utilities</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Utilities</h1>
    <p class="subtitle">util.jsユーティリティ関数</p>

    <section>
        <h2>escapeHtml()</h2>
        <p>HTMLエスケープ処理を行います。XSS対策に使用できます。</p>
        <div class="demo-area">
            <input type="text" id="escapeInput" placeholder="HTMLを入力 例: <script>alert('XSS')</script>" style="width: 100%;">
            <button onclick="escapeDemo()" class="mt-2">エスケープ</button>
            <div id="escapeResult" class="demo-box demo-box-light mt-2" style="text-align: left; word-break: break-all;"></div>
        </div>
<pre><code class="language-javascript">const escaped = ayutenn.util.escapeHtml('&lt;script&gt;alert("XSS")&lt;/script&gt;');
// 結果: &amp;lt;script&amp;gt;alert(&amp;quot;XSS&amp;quot;)&amp;lt;/script&amp;gt;</code></pre>
    </section>

    <section>
        <h2>switchView()</h2>
        <p>同じグループ内の要素の表示を切り替えます。表示モードの切り替えなどに使用できます。</p>
        <div class="demo-area">
            <div class="flex-row g-2 mb-3">
                <button onclick="ayutenn.util.switchView('demo-group', 'view1')">View 1</button>
                <button onclick="ayutenn.util.switchView('demo-group', 'view2')">View 2</button>
                <button onclick="ayutenn.util.switchView('demo-group', 'view3')">View 3</button>
            </div>
            <div data-display-group="demo-group" data-display-key="view1" class="demo-box demo-box-primary">
                View 1 のコンテンツ
            </div>
            <div data-display-group="demo-group" data-display-key="view2" class="demo-box demo-box-secondary d-none">
                View 2 のコンテンツ
            </div>
            <div data-display-group="demo-group" data-display-key="view3" class="demo-box demo-box-accent d-none">
                View 3 のコンテンツ
            </div>
        </div>
<pre><code class="language-html">&lt;!-- HTML構造 --&gt;
&lt;div data-display-group="grp" data-display-key="a"&gt;A&lt;/div&gt;
&lt;div data-display-group="grp" data-display-key="b" class="d-none"&gt;B&lt;/div&gt;</code></pre>
<pre><code class="language-javascript">// 表示切り替え
ayutenn.util.switchView('grp', 'b'); // Bを表示、Aを非表示</code></pre>
    </section>

    <section>
        <h2>Spacing Utilities</h2>
        <p>マージンとパディングのユーティリティクラスです。</p>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <th style="text-align: left; padding: 0.5rem;">クラス</th>
                <th style="text-align: left; padding: 0.5rem;">説明</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.m-{0-10}</code></td>
                <td style="padding: 0.5rem;">margin 全方向</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.mt-*, .mb-*, .ms-*, .me-*</code></td>
                <td style="padding: 0.5rem;">margin top/bottom/start/end</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.p-{0-10}</code></td>
                <td style="padding: 0.5rem;">padding 全方向</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>.pt-*, .pb-*, .ps-*, .pe-*</code></td>
                <td style="padding: 0.5rem;">padding top/bottom/start/end</td>
            </tr>
        </table>
        <div class="demo-area mt-3">
            <div class="demo-no-padding-box-light p-1 mb-3">p-1 (5px padding)</div>
            <div class="demo-no-padding-box-light p-3 mb-3">p-3 (15px padding)</div>
            <div class="demo-no-padding-box-light p-5 mb-3">p-5 (25px padding)</div>
            <div class="demo-box demo-box-primary">標準</div>
        </div>
    </section>

    <script src="assets/js/ayutenn/util.js"></script>
    <script>
        function escapeDemo() {
            const input = document.getElementById('escapeInput').value;
            const escaped = ayutenn.util.escapeHtml(input);
            document.getElementById('escapeResult').textContent = escaped;
        }
    </script>
</body>
</html>
