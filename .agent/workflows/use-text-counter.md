---
description: Text Counter（文字数・行数カウント）の実装方法
---

# Text Counter の使い方

textarea または input[type="text"] に入力された文字数・行数をリアルタイムでカウント表示するコンポーネントです。

## 基本的な使い方

### 1. HTML構造を作成

```html
<div class="text-counter-wrapper">
    <textarea id="my-textarea"></textarea>
    <div id="my-counter" class="text-counter"></div>
</div>
```

### 2. JavaScriptを読み込み、初期化

```html
<script src="assets/js/ayutenn/textCounter.js"></script>
<script>
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter'
});
</script>
```

## オプション

| オプション | 型 | デフォルト | 説明 |
|-----------|-----|----------|------|
| `targetId` | string | `null` | 対象textarea/inputのID（必須） |
| `counterId` | string | `null` | カウンター表示要素のID（必須） |
| `showCharCount` | boolean | `true` | 文字数を表示するか |
| `showLineCount` | boolean | `true` | 行数を表示するか（inputの場合は自動でfalse） |
| `maxChars` | number/string | `null` | 最大文字数。`'auto'`で要素のmaxlength属性から取得 |
| `maxLines` | number | `null` | 最大行数（超過時に色変更） |
| `format` | string | `'{chars}文字 / {lines}行'` | 表示フォーマット |
| `onUpdate` | function | `null` | 更新時コールバック |
| `onExceed` | function | `null` | 制限超過時コールバック |

## 使用例

### 文字数のみ表示

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    showLineCount: false,
    format: '{chars}文字'
});
```

### 最大値制限付き（超過時に色変更）

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    maxChars: 100,
    maxLines: 10
});
```

### カスタムフォーマット

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    format: 'Characters: {chars} | Lines: {lines}'
});
```

### Input要素での使用（maxlength自動取得）

```html
<input type="text" id="my-input" maxlength="100">
<div id="my-input-counter" class="text-counter"></div>

<script>
new ayutenn.TextCounter({
    targetId: 'my-input',
    counterId: 'my-input-counter',
    maxChars: 'auto'  // maxlength属性から自動取得
});
</script>
```

### コールバック使用例

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    maxChars: 100,
    onUpdate: function(data) {
        console.log('文字数:', data.charCount, '行数:', data.lineCount);
    },
    onExceed: function(data) {
        alert('制限を超過しました！');
    }
});
```

## JavaScript API

```javascript
const counter = new ayutenn.TextCounter({...});

// 現在の文字数を取得
counter.getCharCount();

// 現在の行数を取得
counter.getLineCount();
```

## CSSカスタマイズ

超過時のスタイルはCSSでカスタマイズ可能：

```css
/* 文字数超過時 */
.text-counter .char-count.exceeded {
    color: red;
    font-weight: bold;
}

/* 行数超過時 */
.text-counter .line-count.exceeded {
    color: orange;
}
```
