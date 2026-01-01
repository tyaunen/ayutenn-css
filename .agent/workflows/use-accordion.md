---
description: アコーディオン（折りたたみ）の実装方法
---

# ayutenn-css アコーディオンの使い方

## 特徴

ayutenn-cssのアコーディオンは柔軟性を重視しています：
- トリガーボタンとコンテンツを別々の場所に配置可能
- グループ化して排他制御可能

## 基本構造

```html
<!-- トリガーボタン -->
<button class="accordion-btn" data-accordion-target="#acc1">Toggle</button>

<!-- アコーディオンコンテンツ -->
<div id="acc1" class="accordion">
  <div class="accordion-content">コンテンツ</div>
</div>
```

## グループ化（排他制御）

同じグループ内で開いているアコーディオンを1つのみに保つ：

```html
<button class="accordion-btn" data-accordion-target="#g1">項目1</button>
<div id="g1" class="accordion" data-accordion-group="grp" data-accordion-id="1">
  <div class="accordion-content">項目1の内容</div>
</div>

<button class="accordion-btn" data-accordion-target="#g2">項目2</button>
<div id="g2" class="accordion" data-accordion-group="grp" data-accordion-id="2">
  <div class="accordion-content">項目2の内容</div>
</div>
```

## 必要なファイル

```html
<!-- CSS -->
<link rel="stylesheet" href="assets/css/ayutenn/ayutenn.css">

<!-- JavaScript -->
<script src="assets/js/ayutenn/accordion.js"></script>
```

## クラス

| クラス | 用途 |
|--------|------|
| `.accordion-btn` | アコーディオントリガーボタンのスタイル |
| `.accordion-btn-primary` | プライマリカラーのボタン（オプション） |
| `.accordion` | アコーディオンコンテナ |
| `.accordion-content` | アコーディオンの内容 |

## データ属性

| 属性 | 用途 |
|------|------|
| `data-accordion-target` | ボタンに設定。対象のアコーディオンセレクタ |
| `data-accordion-group` | グループ名（排他制御用） |
| `data-accordion-id` | グループ内での識別子 |

## サンプル参照

詳細なサンプルは `sample-accordion.php` を参照してください。
