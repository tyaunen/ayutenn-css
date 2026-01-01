window.ayutenn = window.ayutenn || {};

/**
 * TextCounter
 * Textarea または Input の文字数・行数をリアルタイムでカウント表示するコンポーネント
 */
ayutenn.TextCounter = class TextCounter {
    constructor(options) {
        // デフォルト設定とマージ
        this.options = Object.assign({
            targetId: null,            // 対象textarea/inputのID（必須）
            counterId: null,           // カウンター表示要素のID（必須）
            showCharCount: true,       // 文字数を表示するか
            showLineCount: true,       // 行数を表示するか（inputの場合は自動でfalse）
            maxChars: null,            // 最大文字数（null=制限なし、'auto'=maxlength属性から取得）
            maxLines: null,            // 最大行数（null=制限なし）
            format: '{chars}文字 / {lines}行',  // 表示フォーマット
            onUpdate: null,            // 更新時コールバック
            onExceed: null             // 制限超過時コールバック
        }, options);

        // 必須パラメータの検証
        if (!this.options.targetId) {
            console.error('TextCounter: targetIdが指定されていません');
            return;
        }
        if (!this.options.counterId) {
            console.error('TextCounter: counterIdが指定されていません');
            return;
        }

        this.target = document.getElementById(this.options.targetId);
        this.counter = document.getElementById(this.options.counterId);

        if (!this.target) {
            console.error(`TextCounter: ID "${this.options.targetId}" の要素が見つかりません`);
            return;
        }
        if (!this.counter) {
            console.error(`TextCounter: ID "${this.options.counterId}" のカウンター要素が見つかりません`);
            return;
        }

        // 要素タイプを検出（textarea or input）
        this.isTextarea = this.target.tagName.toLowerCase() === 'textarea';
        this.isInput = this.target.tagName.toLowerCase() === 'input';

        // inputの場合は行数カウントを無効化
        if (this.isInput) {
            this.options.showLineCount = false;
            // デフォルトフォーマットを文字数のみに変更
            if (this.options.format === '{chars}文字 / {lines}行') {
                this.options.format = '{chars}文字';
            }
        }

        // maxChars が 'auto' の場合、maxlength属性から取得
        if (this.options.maxChars === 'auto') {
            const maxlength = this.target.getAttribute('maxlength');
            this.options.maxChars = maxlength ? parseInt(maxlength, 10) : null;
        }

        this.initialize();
    }

    /**
     * コンポーネント初期化
     */
    initialize() {
        // イベントリスナーの設定
        this.target.addEventListener('input', () => this.updateCount());
        this.target.addEventListener('change', () => this.updateCount());

        // 初回カウント更新
        this.updateCount();
    }

    /**
     * 文字数を取得
     */
    getCharCount() {
        return this.target.value.length;
    }

    /**
     * 行数を取得（空行も含む）
     */
    getLineCount() {
        const value = this.target.value;
        if (value === '') {
            return 0;
        }
        return value.split('\n').length;
    }

    /**
     * カウント表示を更新
     */
    updateCount() {
        const charCount = this.getCharCount();
        const lineCount = this.getLineCount();

        // 超過チェック
        const charExceeded = this.options.maxChars !== null && charCount > this.options.maxChars;
        const lineExceeded = this.options.maxLines !== null && lineCount > this.options.maxLines;
        const anyExceeded = charExceeded || lineExceeded;

        // フォーマットを生成
        let output = this.options.format;

        // {chars} の置換
        if (this.options.showCharCount) {
            const charDisplay = this.options.maxChars !== null
                ? `${charCount}/${this.options.maxChars}`
                : `${charCount}`;
            const charClass = charExceeded ? 'char-count exceeded' : 'char-count';
            output = output.replace('{chars}', `<span class="${charClass}">${charDisplay}</span>`);
        } else {
            // 文字数を表示しない場合、{chars}関連の部分を削除
            output = output.replace(/\{chars\}[^{]*/g, '');
        }

        // {lines} の置換
        if (this.options.showLineCount) {
            const lineDisplay = this.options.maxLines !== null
                ? `${lineCount}/${this.options.maxLines}`
                : `${lineCount}`;
            const lineClass = lineExceeded ? 'line-count exceeded' : 'line-count';
            output = output.replace('{lines}', `<span class="${lineClass}">${lineDisplay}</span>`);
        } else {
            // 行数を表示しない場合、{lines}関連の部分を削除
            output = output.replace(/[^}]*\{lines\}/g, '');
        }

        // カウンター要素に出力
        this.counter.innerHTML = output;

        // 全体の超過クラスを設定
        if (anyExceeded) {
            this.counter.classList.add('exceeded');
        } else {
            this.counter.classList.remove('exceeded');
        }

        // コールバックの呼び出し
        if (typeof this.options.onUpdate === 'function') {
            this.options.onUpdate({
                charCount,
                lineCount,
                charExceeded,
                lineExceeded
            });
        }

        if (anyExceeded && typeof this.options.onExceed === 'function') {
            this.options.onExceed({
                charCount,
                lineCount,
                charExceeded,
                lineExceeded
            });
        }
    }
}
