<?php
if(isset($_POST['text'])) {
    $text = $_POST['text'];
    $filename = 'text.txt';
    $data = "\n\n" . $text;
    if(file_put_contents($filename, $data, FILE_APPEND)) {
        echo "内容已保存，感谢您对科米社区发展做出的贡献！";
    } else {
        echo "内容保存失败，所请求的引擎不存在了。";
    }
} else {
    echo "您并没有输入任何内容。";
}
?>