<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Grid & Flexbox</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Grid & Flexbox</h1>
    <p class="subtitle">12カラムレスポンシブグリッドシステム</p>
    <section>
        <h2>はじめに</h2>
        ayutenn-cssは、12カラムシステムをサポートします。<br>
        プレフィクスなどはbootstrapに揃えていますが、超々大モニターに対応した<code>xxxl</code>プレフィクスを追加しています。
    </section>
    <section>
        <h2>12カラムグリッド</h2>
        <p class="section-desc">グリッドは12カラムに分割されます。<code>.col-1</code>～<code>.col-12</code>でカラム幅を指定します。</p>
        <div class="demo-area">
            <div class="grid-row g-2">
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
                <div class="col-1"><div class="demo-box demo-box-primary">1</div></div>
            </div>
            <div class="grid-row g-2 mt-2">
                <div class="col-4"><div class="demo-box demo-box-secondary">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-secondary">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-secondary">col-4</div></div>
            </div>
            <div class="grid-row g-2 mt-2">
                <div class="col-6"><div class="demo-box demo-box-accent">col-6</div></div>
                <div class="col-6"><div class="demo-box demo-box-accent">col-6</div></div>
            </div>
        </div>
<pre><code class="language-html">&lt;div class="grid-row"&gt;
  &lt;div class="col-4"&gt;...&lt;/div&gt;
  &lt;div class="col-4"&gt;...&lt;/div&gt;
  &lt;div class="col-4"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>ガター (Gutter)</h2>
        <p class="section-desc"><code>.g-1</code>～<code>.g-10</code>でカラム間のスペースを設定します。数値が大きいほど広くなります。</p>
        <div class="demo-area">
            <p style="color: var(--ay-text-muted); margin-bottom: 0.5rem;">g-1 (1px)</p>
            <div class="grid-row g-1 mb-3">
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
            </div>
            <p style="color: var(--ay-text-muted); margin-bottom: 0.5rem;">g-5 (5px)</p>
            <div class="grid-row g-5 mb-3">
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
            </div>
            <p style="color: var(--ay-text-muted); margin-bottom: 0.5rem;">g-10 (10px)</p>
            <div class="grid-row g-10">
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
                <div class="col-4"><div class="demo-box demo-box-light">col-4</div></div>
            </div>
        </div>
<pre><code class="language-html">&lt;div class="grid-row g-5"&gt;
  &lt;div class="col-4"&gt;...&lt;/div&gt;
  ...
&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>ブレークポイント</h2>
        <p class="section-desc">画面幅に応じてレイアウトを変更できます。モバイルファーストで設計されています。</p>

        <table style="width: 100%; border-collapse: collapse; margin-bottom: 1.5rem;">
            <tr style="border-bottom: 1px solid var(--ay-border-color); background: var(--ay-bg-tertiary);">
                <th style="text-align: left; padding: 0.75rem;">サイズ</th>
                <th style="text-align: left; padding: 0.75rem;">クラス</th>
                <th style="text-align: left; padding: 0.75rem;">幅</th>
                <th style="text-align: left; padding: 0.75rem;">用途</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.75rem;">なし</td>
                <td style="padding: 0.75rem;"><code>.col-*</code></td>
                <td style="padding: 0.75rem;">0px～</td>
                <td style="padding: 0.75rem;">全サイズ（デフォルト）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.75rem;">sm</td>
                <td style="padding: 0.75rem;"><code>.col-sm-*</code></td>
                <td style="padding: 0.75rem;">≥576px</td>
                <td style="padding: 0.75rem;">スマートフォン横</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.75rem;">md</td>
                <td style="padding: 0.75rem;"><code>.col-md-*</code></td>
                <td style="padding: 0.75rem;">≥768px</td>
                <td style="padding: 0.75rem;">タブレット</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.75rem;">lg</td>
                <td style="padding: 0.75rem;"><code>.col-lg-*</code></td>
                <td style="padding: 0.75rem;">≥992px</td>
                <td style="padding: 0.75rem;">デスクトップ</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.75rem;">xl</td>
                <td style="padding: 0.75rem;"><code>.col-xl-*</code></td>
                <td style="padding: 0.75rem;">≥1200px</td>
                <td style="padding: 0.75rem;">大型デスクトップ</td>
            </tr>
            <tr>
                <td style="padding: 0.75rem;">xxl</td>
                <td style="padding: 0.75rem;"><code>.col-xxl-*</code></td>
                <td style="padding: 0.75rem;">≥1400px</td>
                <td style="padding: 0.75rem;">超大型モニタ</td>
            </tr>
        </table>

        <h3 style="color: var(--ay-primary); margin-bottom: 1rem;">レスポンシブデモ</h3>
        <p class="section-desc">ブラウザ幅を変えると、カラム数が変化します。</p>
        <div class="demo-area">
            <div class="grid-row g-2">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"><div class="demo-box demo-box-primary">12→6→4→3→2</div></div>
            </div>
        </div>
<pre><code class="language-html">&lt;!-- モバイル: 1列、sm: 2列、md: 3列、lg: 4列、xl: 6列 --&gt;
&lt;div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2"&gt;
  ...
&lt;/div&gt;</code></pre>

        <h3 style="color: var(--ay-success); margin-top: 1.5rem; margin-bottom: 1rem;">コンテナ幅</h3>
        <p class="section-desc"><code>.container</code>クラスで最大幅を自動で調整します。</p>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><strong>sm (≥576px)</strong></td>
                <td style="padding: 0.5rem;">max-width: 540px</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><strong>md (≥768px)</strong></td>
                <td style="padding: 0.5rem;">max-width: 720px</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><strong>lg (≥992px)</strong></td>
                <td style="padding: 0.5rem;">max-width: 960px</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><strong>xl (≥1200px)</strong></td>
                <td style="padding: 0.5rem;">max-width: 1140px</td>
            </tr>
            <tr>
                <td style="padding: 0.5rem;"><strong>xxxl (≥1680px)</strong></td>
                <td style="padding: 0.5rem;">max-width: 1600px</td>
            </tr>
        </table>
    </section>


    <section>
        <h2>Flexbox</h2>
        <p class="section-desc"><code>.flex-row</code>でFlexboxレイアウトを使用できます。</p>
        <div class="demo-area">
            <div class="flex-row g-2">
                <div class="demo-box demo-box-light">Flex 1</div>
                <div class="demo-box demo-box-light">Flex 2</div>
                <div class="demo-box demo-box-light">Flex 3</div>
            </div>
        </div>
<pre><code class="language-html">&lt;div class="flex-row g-2"&gt;
  &lt;div&gt;Item 1&lt;/div&gt;
  &lt;div&gt;Item 2&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>
</body>
</html>
