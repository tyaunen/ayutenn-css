---
description: ポップオーバーとツールチップの実装方法
---

# ayutenn-css ポップオーバー・ツールチップの使い方

## ポップオーバー

クリックで表示されるコンテンツ：

```html
<div class="popover">
  <button class="link">Toggle Popover</button>
  <div class="content">Popover content here</div>
</div>
```

### 必要なJS

```html
<script src="assets/js/ayutenn/popover.js"></script>
```

## ツールチップ

ホバーで表示されるテキスト（JSは不要）：

```html
<div class="tooltip-container">
  <button>Hover me</button>
  <div class="tooltip">Tooltip text!</div>
</div>
```

## クラス一覧

### ポップオーバー

| クラス | 用途 |
|--------|------|
| `.popover` | ポップオーバーコンテナ |
| `.link` | トリガー要素 |
| `.content` | ポップオーバーコンテンツ |

### ツールチップ

| クラス | 用途 |
|--------|------|
| `.tooltip-container` | ツールチップコンテナ |
| `.tooltip` | ツールチップテキスト |

## サンプル参照

詳細なサンプルは `sample-tabs.php` を参照してください。
