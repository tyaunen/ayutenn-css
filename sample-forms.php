<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Forms</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Forms</h1>
    <p class="subtitle">フォーム要素とボタン</p>

    <section>
        <h2>はじめに</h2>
        <p>
            ayutenn-cssは、フォームに対して最低限のスタイルを適用します。<br>
        </p>
    </section>
    <section>
        <h2>Input Elements</h2>
        <div class="demo-area">
            <label class="label">Text Input</label>
            <input type="text" placeholder="Enter text">

            <label class="label">Email</label>
            <input type="email" placeholder="example@mail.com">

            <label class="label">Password</label>
            <input type="password" placeholder="Enter password">

            <label class="label">Number</label>
            <input type="number" placeholder="0" min="0" max="100">

            <label class="label">Date</label>
            <input type="date">

            <label class="label">Search</label>
            <input type="search" placeholder="Search...">

            <label class="label">Select</label>
            <select>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>

            <label class="label">Textarea</label>
            <textarea placeholder="Enter text..."></textarea>

            <label class="label">Checkbox</label>
            <div class="checkbox-group">
                <label class="checkbox-label"><input type="checkbox"> Option A</label>
                <label class="checkbox-label"><input type="checkbox" checked> Option B</label>
                <label class="checkbox-label"><input type="checkbox"> Option C</label>
            </div>

            <label class="label">Radio</label>
            <div class="radio-group">
                <label class="radio-label"><input type="radio" name="radio-demo"> Choice 1</label>
                <label class="radio-label"><input type="radio" name="radio-demo" checked> Choice 2</label>
                <label class="radio-label"><input type="radio" name="radio-demo"> Choice 3</label>
            </div>

            <label class="label">Range</label>
            <input type="range" min="0" max="100">

            <label class="label">Color</label>
            <input type="color" value="#ab4c4c">

            <label class="label">File</label>
            <input type="file">
        </div>
<pre><code class="language-html">&lt;label class="label"&gt;Text Input&lt;/label&gt;
&lt;input type="text" placeholder="Enter text"&gt;

&lt;label class="label"&gt;Email&lt;/label&gt;
&lt;input type="email" placeholder="example@mail.com"&gt;

&lt;label class="label"&gt;Password&lt;/label&gt;
&lt;input type="password" placeholder="Enter password"&gt;

&lt;label class="label"&gt;Number&lt;/label&gt;
&lt;input type="number" placeholder="0" min="0" max="100"&gt;

&lt;label class="label"&gt;Date&lt;/label&gt;
&lt;input type="date"&gt;

&lt;label class="label"&gt;Select&lt;/label&gt;
&lt;select&gt;
    &lt;option&gt;Option 1&lt;/option&gt;
    &lt;option&gt;Option 2&lt;/option&gt;
&lt;/select&gt;

&lt;label class="label"&gt;Textarea&lt;/label&gt;
&lt;textarea placeholder="Enter text..."&gt;&lt;/textarea&gt;

&lt;label class="label"&gt;Checkbox&lt;/label&gt;
&lt;div class="checkbox-group"&gt;
    &lt;label class="checkbox-label"&gt;&lt;input type="checkbox"&gt; Option A&lt;/label&gt;
    &lt;label class="checkbox-label"&gt;&lt;input type="checkbox" checked&gt; Option B&lt;/label&gt;
&lt;/div&gt;

&lt;label class="label"&gt;Radio&lt;/label&gt;
&lt;div class="radio-group"&gt;
    &lt;label class="radio-label"&gt;&lt;input type="radio" name="demo"&gt; Choice 1&lt;/label&gt;
    &lt;label class="radio-label"&gt;&lt;input type="radio" name="demo" checked&gt; Choice 2&lt;/label&gt;
&lt;/div&gt;

&lt;label class="label"&gt;Range&lt;/label&gt;
&lt;input type="range" min="0" max="100"&gt;

&lt;label class="label"&gt;Color&lt;/label&gt;
&lt;input type="color" value="#ab4c4c"&gt;

&lt;label class="label"&gt;File&lt;/label&gt;
&lt;input type="file"&gt;</code></pre>
    </section>

    <section>
        <h2>Custom Select</h2>
        <p>
            選択肢内にHTMLを記述できる、カスタムセレクトボックスを作成できます。<br>
            option-detailは省略可能です。<br>
        </p>
        <p>
            input要素が標準で受けられるサポートを受けられない、スマートフォン対応が難しい、アクセシビリティ対応がされていないといった問題点が山積みなので、必要以上に使用しないようにしましょう。
        </p>
        <div class="demo-area">
            <div id="demo-select" class="custom-select">
                <input type="hidden" name="val">
                <div class="select-holder">
                    <div class="select-holder-content">選択してください</div>
                </div>
                <div class="select-options">
                    <div class="select-option" data-value="1">
                        <div class="option-header">🍎 りんご</div>
                        <div class="option-detail">赤くておいしい</div>
                    </div>
                    <div class="select-option" data-value="2">
                        <div class="option-header">🍊 オレンジ</div>
                        <div class="option-detail">黄色くて甘い</div>
                    </div>
                </div>
            </div>
        </div>
<pre><code class="language-html">&lt;div id="demo-select" class="custom-select"&gt;
    &lt;input type="hidden" name="val"&gt;
    &lt;div class="select-holder"&gt;
        &lt;div class="select-holder-content"&gt;選択してください&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="select-options"&gt;
        &lt;div class="select-option" data-value="1"&gt;
            &lt;div class="option-header"&gt;🍎 りんご&lt;/div&gt;
            &lt;div class="option-detail"&gt;赤くておいしい&lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="select-option" data-value="2"&gt;
            &lt;div class="option-header"&gt;🍊 オレンジ&lt;/div&gt;
            &lt;div class="option-detail"&gt;黄色くて甘い&lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <script src="assets/js/ayutenn/customSelect.js"></script>
</body>
</html>
