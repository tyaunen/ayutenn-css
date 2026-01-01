# ayutenn-css

ayutennフレームワークのためのCSS・JSライブラリです。

> **⚠️ 重要な注意事項**
> このライブラリは[@tyau_nen_](https://twitter.com/tyau_nen_)の個人利用のためにのみ作られています。
> 何でも公開するのが好きだから公開されているし、ライセンスとしてはCC0ですが、作者以外が使用することはまったく推奨しません。
> **ノーメンテナンス。ノーレスポンシビリティ。ノークオリティ。**

---

## 概要

ayutenn-cssは、一般的なCSSライブラリとヘッドレスCSSの中間に位置します。
グリッドやモーダルなど「よくあるコンポーネント」を、上書きしやすい形の最低限のスタイルと一緒に提供します。

---

## インストール

### ayutenn-skeletonを使用する場合（推奨）

ayutennを使用した開発は通常、[ayutenn-skeleton](https://github.com/tyaunen/ayutenn-skeleton)をcloneして始めます。

```bash
git clone https://github.com/tyaunen/ayutenn-skeleton.git your-project-name
cd your-project-name
composer install
```

`composer install`を実行すると、自動的に以下のディレクトリにファイルがコピーされます：
- `/app/js/@lib/ayutenn`
- `/app/css/@lib/ayutenn`

### ayutenn-css単体で使用する場合

[ayutenn-css](https://github.com/tyaunen/ayutenn-css)をクローンし、`ayutenn.css`と必要なJSファイルをインポートしてください。

```html
<!-- CSS -->
<link rel="stylesheet" href="path/to/ayutenn.css">

<!-- JS（必要なコンポーネントのみ） -->
<script src="path/to/modal.js"></script>
<script src="path/to/accordion.js"></script>
<!-- ... -->
```

---

## コンポーネント

### CSS

| ファイル | 説明 |
|---------|------|
| `ayutenn.css` | メインエントリーポイント（全CSSをインポート） |
| `_variables.css` | CSS変数（カラー、サイズなど） |
| `_base.css` | ベーススタイル |
| `_grid.css` | グリッドレイアウト |
| `_flexbox.css` | Flexboxユーティリティ |
| `_spacing.css` | マージン・パディングユーティリティ |
| `_display.css` | 表示ユーティリティ |
| `_forms.css` | フォームスタイル |
| `_modal.css` | モーダルダイアログ |
| `_tab.css` | タブ |
| `_accordion.css` | アコーディオン |
| `_alert.css` | アラート |
| `_toast.css` | トースト通知 |
| `_tooltip.css` | ツールチップ |
| `_popover.css` | ポップオーバー |
| `_file_uploader.css` | ファイルアップローダー |
| `_custom_select.css` | カスタムセレクト |
| `_util.css` | その他ユーティリティ |

### JavaScript

| ファイル | 説明 |
|---------|------|
| `modal.js` | モーダルダイアログの制御 |
| `tab.js` | タブの切り替え |
| `accordion.js` | アコーディオンの開閉 |
| `toast.js` | トースト通知の表示 |
| `popover.js` | ポップオーバーの制御 |
| `customSelect.js` | カスタムセレクトボックス |
| `FileUploader.js` | ファイルアップロード機能 |
| `util.js` | ユーティリティ関数 |

---

## サンプル

このリポジトリには各コンポーネントのサンプルページが含まれています：

- `sample.php` - 概要
- `sample-grid.php` - グリッドレイアウト
- `sample-breakpoints.php` - ブレイクポイント
- `sample-forms.php` - フォーム
- `sample-tabs.php` - タブ
- `sample-accordion.php` - アコーディオン
- `sample-alerts.php` - アラート
- `sample-uploader.php` - ファイルアップローダー
- `sample-utils.php` - ユーティリティ

---

## ディレクトリ構成

```
ayutenn_css/
├── assets/
│   ├── css/
│   │   └── ayutenn/        # CSSライブラリ本体
│   │       ├── ayutenn.css # エントリーポイント
│   │       ├── _*.css      # 各コンポーネント
│   │       └── ...
│   └── js/
│       └── ayutenn/        # JSライブラリ本体
│           ├── modal.js
│           ├── accordion.js
│           └── ...
├── component/              # サンプルページ用共通コンポーネント
├── sample-*.php            # サンプルページ
└── README.md
```

---

## ライセンス

CC0（パブリックドメイン）

ただし、上記の注意事項を再度ご確認ください。
