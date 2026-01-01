---
description: Text Counter・域枚蟄玲焚繝ｻ陦梧焚繧ｫ繧ｦ繝ｳ繝茨ｼ峨・螳溯｣・婿豕・
---

# Text Counter 縺ｮ菴ｿ縺・婿

textarea 縺ｾ縺溘・ input[type="text"] 縺ｫ蜈･蜉帙＆繧後◆譁・ｭ玲焚繝ｻ陦梧焚繧偵Μ繧｢繝ｫ繧ｿ繧､繝縺ｧ繧ｫ繧ｦ繝ｳ繝郁｡ｨ遉ｺ縺吶ｋ繧ｳ繝ｳ繝昴・繝阪Φ繝医〒縺吶・

## 蝓ｺ譛ｬ逧・↑菴ｿ縺・婿

### 1. HTML讒矩繧剃ｽ懈・

```html
<div class="text-counter-wrapper">
    <textarea id="my-textarea"></textarea>
    <div id="my-counter" class="text-counter"></div>
</div>
```

### 2. JavaScript繧定ｪｭ縺ｿ霎ｼ縺ｿ縲∝・譛溷喧

```html
<script src="assets/js/ayutenn/TextCounter.js"></script>
<script>
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter'
});
</script>
```

## 繧ｪ繝励す繝ｧ繝ｳ

| 繧ｪ繝励す繝ｧ繝ｳ | 蝙・| 繝・ヵ繧ｩ繝ｫ繝・| 隱ｬ譏・|
|-----------|-----|----------|------|
| `targetId` | string | `null` | 蟇ｾ雎｡textarea/input縺ｮID・亥ｿ・茨ｼ・|
| `counterId` | string | `null` | 繧ｫ繧ｦ繝ｳ繧ｿ繝ｼ陦ｨ遉ｺ隕∫ｴ縺ｮID・亥ｿ・茨ｼ・|
| `showCharCount` | boolean | `true` | 譁・ｭ玲焚繧定｡ｨ遉ｺ縺吶ｋ縺・|
| `showLineCount` | boolean | `true` | 陦梧焚繧定｡ｨ遉ｺ縺吶ｋ縺具ｼ・nput縺ｮ蝣ｴ蜷医・閾ｪ蜍輔〒false・・|
| `maxChars` | number/string | `null` | 譛螟ｧ譁・ｭ玲焚縲Ａ'auto'`縺ｧ隕∫ｴ縺ｮmaxlength螻樊ｧ縺九ｉ蜿門ｾ・|
| `maxLines` | number | `null` | 譛螟ｧ陦梧焚・郁ｶ・℃譎ゅ↓濶ｲ螟画峩・・|
| `format` | string | `'{chars}譁・ｭ・/ {lines}陦・` | 陦ｨ遉ｺ繝輔か繝ｼ繝槭ャ繝・|
| `onUpdate` | function | `null` | 譖ｴ譁ｰ譎ゅさ繝ｼ繝ｫ繝舌ャ繧ｯ |
| `onExceed` | function | `null` | 蛻ｶ髯占ｶ・℃譎ゅさ繝ｼ繝ｫ繝舌ャ繧ｯ |

## 菴ｿ逕ｨ萓・

### 譁・ｭ玲焚縺ｮ縺ｿ陦ｨ遉ｺ

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    showLineCount: false,
    format: '{chars}譁・ｭ・
});
```

### 譛螟ｧ蛟､蛻ｶ髯蝉ｻ倥″・郁ｶ・℃譎ゅ↓濶ｲ螟画峩・・

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    maxChars: 100,
    maxLines: 10
});
```

### 繧ｫ繧ｹ繧ｿ繝繝輔か繝ｼ繝槭ャ繝・

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    format: 'Characters: {chars} | Lines: {lines}'
});
```

### Input隕∫ｴ縺ｧ縺ｮ菴ｿ逕ｨ・・axlength閾ｪ蜍募叙蠕暦ｼ・

```html
<input type="text" id="my-input" maxlength="100">
<div id="my-input-counter" class="text-counter"></div>

<script>
new ayutenn.TextCounter({
    targetId: 'my-input',
    counterId: 'my-input-counter',
    maxChars: 'auto'  // maxlength螻樊ｧ縺九ｉ閾ｪ蜍募叙蠕・
});
</script>
```

### 繧ｳ繝ｼ繝ｫ繝舌ャ繧ｯ菴ｿ逕ｨ萓・

```javascript
new ayutenn.TextCounter({
    targetId: 'my-textarea',
    counterId: 'my-counter',
    maxChars: 100,
    onUpdate: function(data) {
        console.log('譁・ｭ玲焚:', data.charCount, '陦梧焚:', data.lineCount);
    },
    onExceed: function(data) {
        alert('蛻ｶ髯舌ｒ雜・℃縺励∪縺励◆・・);
    }
});
```

## JavaScript API

```javascript
const counter = new ayutenn.TextCounter({...});

// 迴ｾ蝨ｨ縺ｮ譁・ｭ玲焚繧貞叙蠕・
counter.getCharCount();

// 迴ｾ蝨ｨ縺ｮ陦梧焚繧貞叙蠕・
counter.getLineCount();
```

## CSS繧ｫ繧ｹ繧ｿ繝槭う繧ｺ

雜・℃譎ゅ・繧ｹ繧ｿ繧､繝ｫ縺ｯCSS縺ｧ繧ｫ繧ｹ繧ｿ繝槭う繧ｺ蜿ｯ閭ｽ・・

```css
/* 譁・ｭ玲焚雜・℃譎・*/
.text-counter .char-count.exceeded {
    color: red;
    font-weight: bold;
}

/* 陦梧焚雜・℃譎・*/
.text-counter .line-count.exceeded {
    color: orange;
}
```
