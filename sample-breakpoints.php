<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Breakpoints</title>
    <style>
        .breakpoint-demo {
            padding: 1rem;
            background: var(--ay-bg-tertiary);
            border: 1px solid var(--ay-border-color);
            border-radius: 8px;
            text-align: center;
            margin-bottom: 1rem;
        }
        .current-breakpoint {
            font-size: 2rem;
            font-weight: bold;
            color: var(--ay-primary);
        }
        .breakpoint-indicator {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 1rem;
        }
        .bp-item {
            padding: 0.5rem 1rem;
            background: var(--ay-bg-secondary);
            border: 2px solid var(--ay-border-color);
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .bp-item.active {
            background: var(--ay-primary-bg);
            border-color: var(--ay-primary);
            color: var(--ay-primary-light);
        }
        .prefix-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1.5rem;
        }
        .prefix-table th,
        .prefix-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid var(--ay-border-color);
        }
        .prefix-table th {
            background: var(--ay-bg-tertiary);
        }
        .prefix-table tr:hover {
            background: var(--ay-bg-hover);
        }
        .supported-classes {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 1rem;
        }
        .class-badge {
            padding: 0.25rem 0.75rem;
            background: var(--ay-bg-secondary);
            border: 1px solid var(--ay-border-color);
            border-radius: 4px;
            font-family: monospace;
            font-size: 0.9rem;
        }
        .example-box {
            padding: 1rem;
            background: var(--ay-primary-bg);
            border-radius: 4px;
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>Breakpoints</h1>
    <p class="subtitle">レスポンシブデザインのためのブレイクポイントシステム</p>

    <section>
        <h2>ブレイクポイントとは</h2>
        <p>
            ブレイクポイントは、デバイスやビューポートのサイズを指定するための基準値です。<br>
            Bootstrapのものとほとんど同じですが、より大きなPCモニターに対応するために<code>xxxl</code>インフィクスを追加しています。
        </p>
        <p>
            グリッドシステムとスペーシング、ディスプレイがこのブレイクポイントに対応しています。<br>
            例えばグリッドシステムのクラスである<code>.col-12</code>はどのような画面幅でも有効で、<code>.col-md-12</code>は768px以上の画面幅でのみ適用されます。
        </p>
    </section>
    <section>
        <h2>現在のブレイクポイント</h2>
        <p>
            自分の画面表示がどのブレイクポイントに該当するかを表示してみます。<br>
            ウィンドウの幅を縮めたり大きくしたりすると、表示が変わるはずです。
        </p>
        <div class="breakpoint-demo">
            <div class="current-breakpoint" id="currentBp">xs</div>
            <p style="color: var(--ay-text-muted); margin: 0.5rem 0;">現在の画面幅: <span id="currentWidth">0</span>px</p>
            <div class="breakpoint-indicator">
                <div class="bp-item" data-bp="xs">xs<br><small>&lt;576</small></div>
                <div class="bp-item" data-bp="sm">sm<br><small>≥576</small></div>
                <div class="bp-item" data-bp="md">md<br><small>≥768</small></div>
                <div class="bp-item" data-bp="lg">lg<br><small>≥992</small></div>
                <div class="bp-item" data-bp="xl">xl<br><small>≥1200</small></div>
                <div class="bp-item" data-bp="xxl">xxl<br><small>≥1400</small></div>
                <div class="bp-item" data-bp="xxxl">xxxl<br><small>≥1680</small></div>
            </div>
        </div>
    </section>

    <section>
        <h2>ブレイクポイント一覧</h2>
        <p>各ブレイクポイントは<strong>最小幅</strong>で適用されます。</p>
        <p><code>.container</code>クラスは、ブレイクポイントを考慮して最大幅を制御します。</p>

        <table class="prefix-table">
            <tr>
                <th>プレフィックス</th>
                <th>適用条件</th>
                <th>想定デバイス</th>
                <th>コンテナ最大幅</th>
            </tr>
            <tr>
                <td><code>なし</code></td>
                <td>0px～</td>
                <td>全デバイス（デフォルト）</td>
                <td>100%</td>
            </tr>
            <tr>
                <td><code>sm</code></td>
                <td>576px～</td>
                <td>スマートフォン横</td>
                <td>540px</td>
            </tr>
            <tr>
                <td><code>md</code></td>
                <td>768px～</td>
                <td>タブレット</td>
                <td>720px</td>
            </tr>
            <tr>
                <td><code>lg</code></td>
                <td>992px～</td>
                <td>デスクトップ</td>
                <td>960px</td>
            </tr>
            <tr>
                <td><code>xl</code></td>
                <td>1200px～</td>
                <td>大型デスクトップ</td>
                <td>1140px</td>
            </tr>
            <tr>
                <td><code>xxl</code></td>
                <td>1400px～</td>
                <td>超大型モニタ</td>
                <td>1320px</td>
            </tr>
            <tr>
                <td><code>xxxl</code></td>
                <td>1680px～</td>
                <td>ワイドモニタ</td>
                <td>1600px</td>
            </tr>
        </table>
    </section>
    <script>
        function updateBreakpoint() {
            const width = window.innerWidth;
            document.getElementById('currentWidth').textContent = width;

            let bp = 'xs';
            if (width >= 1680) bp = 'xxxl';
            else if (width >= 1400) bp = 'xxl';
            else if (width >= 1200) bp = 'xl';
            else if (width >= 992) bp = 'lg';
            else if (width >= 768) bp = 'md';
            else if (width >= 576) bp = 'sm';

            document.getElementById('currentBp').textContent = bp;

            // Update indicators
            document.querySelectorAll('.bp-item').forEach(item => {
                item.classList.remove('active');
                if (item.dataset.bp === bp) {
                    item.classList.add('active');
                }
            });
        }

        window.addEventListener('resize', updateBreakpoint);
        updateBreakpoint();
    </script>
</body>
</html>
