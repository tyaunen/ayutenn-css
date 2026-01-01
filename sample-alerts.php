<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'component/head.php'; ?>
    <title>Ayutenn - Alerts & Toast</title>
</head>
<body>
    <?php include 'component/nav.php'; ?>

    <div id="toast-container"></div>

    <h1>Alerts & Toast</h1>
    <p class="subtitle">通知メッセージ</p>

    <section>
        <h2>Alerts</h2>
        <div class="demo-area">
            <div class="alert alert-info mb-2">ℹ️ Info Alert</div>
            <div class="alert alert-success mb-2">✅ Success Alert</div>
            <div class="alert alert-warning mb-2">⚠️ Warning Alert</div>
            <div class="alert alert-error">❌ Error Alert</div>
        </div>
<pre><code class="language-html">&lt;div class="alert alert-info"&gt;Info&lt;/div&gt;
&lt;div class="alert alert-success"&gt;Success&lt;/div&gt;
&lt;div class="alert alert-warning"&gt;Warning&lt;/div&gt;
&lt;div class="alert alert-error"&gt;Error&lt;/div&gt;</code></pre>
    </section>

    <section>
        <h2>Toast</h2>
        <div class="demo-area">
            <div class="flex-row g-2">
                <button onclick="ayutenn.toast.showToast('Info', 'info')">Info</button>
                <button onclick="ayutenn.toast.showToast('Success', 'success')">Success</button>
                <button onclick="ayutenn.toast.showToast('Warning', 'warning')">Warning</button>
                <button onclick="ayutenn.toast.showToast('Error', 'error')">Error</button>
            </div>
        </div>
<pre><code class="language-javascript">ayutenn.toast.showToast('Message', 'info');
// types: 'info', 'success', 'warning', 'error'</code></pre>
    </section>

    <script src="assets/js/ayutenn/toast.js"></script>
</body>
</html>
