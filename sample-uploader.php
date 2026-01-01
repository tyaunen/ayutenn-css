<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - File Uploader</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <h1>File Uploader</h1>
    <p class="subtitle">ドラッグ&ドロップ対応ファイルアップローダー</p>

    <section>
        <h2>基本的な使い方</h2>
        <p>
            <code>ayutenn.FileUploader</code>を使って、特定の要素をファイルアップローダーにします。<br>
            ファイルアップローダーをクリックするか、ドラッグ&ドロップすることでファイルをアップロードできます。
        </p>
        <div class="demo-area">
            <div id="demo-uploader" class="file-uploader">
                <div class="icon">📁</div>
                <div class="file-uploader-text">ファイルをドラッグ&ドロップ</div>
                <div class="file-uploader-hint">またはクリックして選択</div>
            </div>
        </div>
<pre><code class="language-html">&lt;div id="uploader" class="file-uploader"&gt;
  &lt;div class="icon"&gt;📁&lt;/div&gt;
  &lt;div class="file-uploader-text"&gt;ドラッグ&ドロップ&lt;/div&gt;
  &lt;div class="file-uploader-hint"&gt;またはクリック&lt;/div&gt;
&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>JavaScript初期化</h2>
<pre><code class="language-javascript">new ayutenn.FileUploader({
  containerId: 'uploader',
  maxFileSize: 5 * 1024 * 1024,  // 5MB
  acceptedTypes: 'image/*',      // 画像のみ
  onUploadComplete: (file, response) => {
    console.log('Uploaded:', file.name);
  },
  onError: (message) => {
    console.error(message);
  }
});</code></pre>
    </section>

    <section>
        <h2>オプション一覧</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="border-bottom: 1px solid var(--ay-border-color); background: var(--ay-bg-tertiary);">
                <th style="text-align: left; padding: 0.5rem;">オプション</th>
                <th style="text-align: left; padding: 0.5rem;">型</th>
                <th style="text-align: left; padding: 0.5rem;">デフォルト</th>
                <th style="text-align: left; padding: 0.5rem;">説明</th>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>containerId</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">コンテナ要素のID（必須）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>endpoint</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>'/oreore/upload_icon'</code></td>
                <td style="padding: 0.5rem;">アップロード先のエンドポイントURL</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>maxFileSize</code></td>
                <td style="padding: 0.5rem;"><code>number</code></td>
                <td style="padding: 0.5rem;"><code>5 * 1024 * 1024</code></td>
                <td style="padding: 0.5rem;">最大ファイルサイズ（バイト単位、デフォルト5MB）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>acceptedTypes</code></td>
                <td style="padding: 0.5rem;"><code>string</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">許可するMIMEタイプ（例: <code>'image/*'</code>、<code>'image/png,image/jpeg'</code>）</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>multiple</code></td>
                <td style="padding: 0.5rem;"><code>boolean</code></td>
                <td style="padding: 0.5rem;"><code>true</code></td>
                <td style="padding: 0.5rem;">複数ファイルの選択を許可するか</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--ay-border-color);">
                <td style="padding: 0.5rem;"><code>onUploadComplete</code></td>
                <td style="padding: 0.5rem;"><code>function</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">アップロード完了時のコールバック <code>(file, response) => {}</code></td>
            </tr>
            <tr>
                <td style="padding: 0.5rem;"><code>onError</code></td>
                <td style="padding: 0.5rem;"><code>function</code></td>
                <td style="padding: 0.5rem;"><code>null</code></td>
                <td style="padding: 0.5rem;">エラー発生時のコールバック <code>(message) => {}</code></td>
            </tr>
        </table>
    </section>

    <script src="assets/js/ayutenn/FileUploader.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (typeof ayutenn.FileUploader !== 'undefined') {
                new ayutenn.FileUploader({
                    containerId: 'demo-uploader',
                    maxFileSize: 2 * 1024 * 1024,
                    acceptedTypes: 'image/*'
                });
            }
        });
    </script>
</body>
</html>
