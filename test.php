<!-- # CIで実行する自動テスト -->
<?php
require_once __DIR__ . '/index.php';

// 1 + 2 が 4 になるかを検証
if (sum(1, 2) === 4) {
    echo "\n✅ Test Passed!\n";
    exit(0); // 成功（終了コード 0）
} else {
    echo "\n❌ Test Failed!\n";
    exit(1); // 失敗（終了コード 1）
}