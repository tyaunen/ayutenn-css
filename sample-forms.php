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
            選択した値は、<code>.custom-select</code>直下に含まれるinput要素のvalue属性に格納されます。<br>
            option-detailは省略可能です。<br>
        </p>
        <p>
            input要素が標準で受けられるサポートを受けられない、スマートフォン対応が難しい、アクセシビリティ対応がされていないといった問題点が山積みなので、必要以上に使用しないようにしましょう。
        </p>
        <p>
            <strong>また、ユーザーの入力データから選択肢を作成するような使い方では、必ずXSS対策を行ってください。</strong><br>
            多分ここで忘れるのありがちだと思う。
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

    <section>
        <h2>JavaScript API</h2>
        <p>JavaScript から値をセットするには <code>ayutenn.customSelect.setValue()</code> を使用します。</p>
        <div class="demo-area">
            <div class="flex-row g-2 mb-3">
                <button onclick="ayutenn.customSelect.setValue('js-api-select', '1')">🍇 ぶどうを選択</button>
                <button onclick="ayutenn.customSelect.setValue('js-api-select', '2')">🍌 バナナを選択</button>
            </div>
<pre><code class="language-javascript">// setValue(selectId, value)
// selectId: custom-selectのdiv要素のID
// value: 選択するオプションのdata-value値
ayutenn.customSelect.setValue('js-api-select', '1');</code></pre>
            <div id="js-api-select" class="custom-select mt-3">
                <input type="hidden" name="js-api-val">
                <div class="select-holder">
                    <div class="select-holder-content">選択してください</div>
                </div>
                <div class="select-options">
                    <div class="select-option" data-value="1">
                        <div class="option-header">🍇 ぶどう</div>
                        <div class="option-detail">紫色でジューシー</div>
                    </div>
                    <div class="select-option" data-value="2">
                        <div class="option-header">🍌 バナナ</div>
                        <div class="option-detail">黄色くて栄養満点</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>Text Counter</h2>
        <p>
            textarea や input に入力された文字数・行数をリアルタイムでカウント表示するコンポーネントです。<br>
            文字数のみ、行数のみ、または両方の表示が可能で、最大値を設定して超過時に色を変えることもできます。
        </p>

        <h3>基本的な使い方（文字数＋行数）</h3>
        <div class="demo-area">
            <div class="text-counter-wrapper">
                <textarea id="counter-demo-1" placeholder="ここに入力してください..."></textarea>
                <div id="counter-display-1" class="text-counter"></div>
            </div>
        </div>
<pre><code class="language-html">&lt;div class="text-counter-wrapper"&gt;
    &lt;textarea id="counter-demo-1"&gt;&lt;/textarea&gt;
    &lt;div id="counter-display-1" class="text-counter"&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;script&gt;
new ayutenn.TextCounter({
    targetId: 'counter-demo-1',
    counterId: 'counter-display-1'
});
&lt;/script&gt;</code></pre>
        <hr>
        <h3>文字数のみ表示</h3>
        <div class="demo-area">
            <div class="text-counter-wrapper">
                <textarea id="counter-demo-2" placeholder="文字数だけカウントします..."></textarea>
                <div id="counter-display-2" class="text-counter"></div>
            </div>
        </div>
<pre><code class="language-javascript">new ayutenn.TextCounter({
    targetId: 'counter-demo-2',
    counterId: 'counter-display-2',
    showLineCount: false,
    format: '{chars}文字'
});</code></pre>

        <hr>
        <h3>行数のみ表示</h3>
        <div class="demo-area">
            <div class="text-counter-wrapper">
                <textarea id="counter-demo-3" placeholder="行数だけカウントします...&#10;改行してみてください"></textarea>
                <div id="counter-display-3" class="text-counter"></div>
            </div>
        </div>
<pre><code class="language-javascript">new ayutenn.TextCounter({
    targetId: 'counter-demo-3',
    counterId: 'counter-display-3',
    showCharCount: false,
    format: '{lines}行'
});</code></pre>

        <hr>
        <h3>最大値制限付き（個別色変更）</h3>
        <p>
            文字数・行数それぞれに最大値を設定すると、超過した項目だけ色が変わります。<br>
            下の例では、50文字・5行を超えると該当部分が赤く表示されます。
        </p>
        <div class="demo-area">
            <div class="text-counter-wrapper">
                <textarea id="counter-demo-4" placeholder="50文字・5行を超えると警告..."></textarea>
                <div id="counter-display-4" class="text-counter"></div>
            </div>
        </div>
<pre><code class="language-javascript">new ayutenn.TextCounter({
    targetId: 'counter-demo-4',
    counterId: 'counter-display-4',
    maxChars: 50,
    maxLines: 5
});</code></pre>

        <hr>
        <h3>カスタムフォーマット</h3>
        <div class="demo-area">
            <div class="text-counter-wrapper">
                <textarea id="counter-demo-5" placeholder="カスタムフォーマットの例..."></textarea>
                <div id="counter-display-5" class="text-counter"></div>
            </div>
        </div>
<pre><code class="language-javascript">new ayutenn.TextCounter({
    targetId: 'counter-demo-5',
    counterId: 'counter-display-5',
    maxChars: 100,
    format: '文字: {chars} | 行: {lines}'
});</code></pre>

        <hr>
        <h3>JavaScript API</h3>
        <p>インスタンスから現在の値を取得できます。</p>
<pre><code class="language-javascript">const counter = new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter'
});

// 現在の文字数を取得
counter.getCharCount();

// 現在の行数を取得
counter.getLineCount();</code></pre>

        <hr>
        <h3>オプション一覧</h3>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color); background: var(--ay-bg-tertiary);">
                <th style="text-align: left; padding: 0.5rem;">オプション</th>
                <th style="text-align: left; padding: 0.5rem;">型</th>
                <th style="text-align: left; padding: 0.5rem;">デフォルト</th>
                <th style="text-align: left; padding: 0.5rem;">説明</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>targetId</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">対象textarea/inputのID（必須）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>counterId</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">カウンター表示要素のID（必須）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>showCharCount</code></td>
                <td style="padding: 0.5rem;"><code>boolean</code></td>
                <td style="padding: 0.5rem;"><code>true</code></td>
                <td style="padding: 0.5rem;">文字数を表示するか</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>showLineCount</code></td>
                <td style="padding: 0.5rem;"><code>boolean</code></td>
                <td style="padding: 0.5rem;"><code>true</code></td>
                <td style="padding: 0.5rem;">行数を表示するか（inputの場合は自動でfalse）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>maxChars</code></td>
                <td style="padding: 0.5rem;"><code>number/string</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">最大文字数。<code>'auto'</code>でmaxlength属性から取得</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>maxLines</code></td>
                <td style="padding: 0.5rem;"><code>number</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">最大行数（超過時に色変更）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>format</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>'{chars}文字 / {lines}行'</code></td>
                <td style="padding: 0.5rem;">表示フォーマット</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>onUpdate</code></td>
                <td style="padding: 0.5rem;"><code>function</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">更新時コールバック</td>
            </tr>
            <tr>
                <td style="padding: 0.5rem;"><code>onExceed</code></td>
                <td style="padding: 0.5rem;"><code>function</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">制限超過時コールバック</td>
            </tr>
        </table>
    </section>

    <script src="assets/js/ayutenn/customSelect.js"></script>
    <script src="assets/js/ayutenn/textCounter.js"></script>
    <script>
        // Text Counter デモ初期化
        new ayutenn.TextCounter({
            targetId: 'counter-demo-1',
            counterId: 'counter-display-1'
        });

        new ayutenn.TextCounter({
            targetId: 'counter-demo-2',
            counterId: 'counter-display-2',
            showLineCount: false,
            format: '{chars}文字'
        });

        new ayutenn.TextCounter({
            targetId: 'counter-demo-3',
            counterId: 'counter-display-3',
            showCharCount: false,
            format: '{lines}行'
        });

        new ayutenn.TextCounter({
            targetId: 'counter-demo-4',
            counterId: 'counter-display-4',
            maxChars: 50,
            maxLines: 5
        });

        new ayutenn.TextCounter({
            targetId: 'counter-demo-5',
            counterId: 'counter-display-5',
            maxChars: 100,
            format: '文字: {chars} | 行: {lines}'
        });
    </script>
</body>
</html>
