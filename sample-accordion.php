<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Accordion & Modal</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Accordion & Modal</h1>
    <p class="subtitle">折りたたみとダイアログ</p>

    <section>
        <h2>Accordion</h2>
        <p>
            ayutenn-cssのアコーディオンは<strong>本物のアコーディオンではありません。</strong><br>
            本来アコーディオンは同じ要素の中でヘッダーのみを表示し、クリックするとコンテンツを表示するものです。<br>
            しかし、ayutenn-cssのアコーディオンは、ボタンとコンテンツを全く別のものとして定義できます。
        </p>
        <p>
            この"食い違い"は、より柔軟にページを表現するための意図的なものです。<br>
            詳しい人にバレないようにしましょう。たぶん怒られるから。
        </p>
        <div class="demo-area">
            <button class="accordion-btn accordion-btn-primary mb-2" data-accordion-target="#acc1">📁 アコーディオン1</button>
            <div id="acc1" class="accordion mb-3">
                <div class="accordion-content">コンテンツ1</div>
            </div>
            <button class="accordion-btn mb-2" data-accordion-target="#acc2">📂 アコーディオン2</button>
            <div id="acc2" class="accordion">
                <div class="accordion-content">コンテンツ2</div>
            </div>
        </div>
<pre><code class="language-html">&lt;button data-accordion-target="#acc1"&gt;Toggle&lt;/button&gt;
&lt;div id="acc1" class="accordion"&gt;
  &lt;div class="accordion-content"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>Grouped Accordion</h2>
        <p><code>data-accordion-group</code>を設定することで、グループ内で開いているアコーディオンを1つのみに保つことができます。</p>
        <div class="demo-area">
            <button class="accordion-btn mb-2" data-accordion-target="#g1">▶ 項目1</button>
            <div id="g1" class="accordion mb-2" data-accordion-group="grp" data-accordion-id="1">
                <div class="accordion-content">項目1の内容</div>
            </div>
            <button class="accordion-btn mb-2" data-accordion-target="#g2">▶ 項目2</button>
            <div id="g2" class="accordion" data-accordion-group="grp" data-accordion-id="2">
                <div class="accordion-content">項目2の内容</div>
            </div>
        </div>
<pre><code class="language-html">&lt;button class="accordion-btn mb-2" data-accordion-target="#g1"&gt;▶ 項目1&lt;/button&gt;
&lt;div id="g1" class="accordion mb-2" data-accordion-group="grp" data-accordion-id="1"&gt;
    &lt;div class="accordion-content"&gt;項目1の内容&lt;/div&gt;
&lt;/div&gt;
&lt;button class="accordion-btn mb-2" data-accordion-target="#g2"&gt;▶ 項目2&lt;/button&gt;
&lt;div id="g2" class="accordion" data-accordion-group="grp" data-accordion-id="2"&gt;
    &lt;div class="accordion-content"&gt;項目2の内容&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>Modal</h2>
        <div class="demo-area">
            <button data-modal-target="#modal1">🔲 Open Modal</button>
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h3>Modal Title</h3>
                    <p>This is modal content.</p>
                    <button data-close-button>Close</button>
                </div>
            </div>
        </div>
<pre><code class="language-html">&lt;button data-modal-target="#modal1"&gt;🔲 Open Modal&lt;/button&gt;
&lt;div id="modal1" class="modal"&gt;
    &lt;div class="modal-content"&gt;
        &lt;h3&gt;Modal Title&lt;/h3&gt;
        &lt;p&gt;This is modal content.&lt;/p&gt;
        &lt;button data-close-button&gt;Close&lt;/button&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <script src="assets/js/ayutenn/accordion.js"></script>
    <script src="assets/js/ayutenn/modal.js"></script>
</body>
</html>
