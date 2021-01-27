<!-- 
$a=file_get_contents('https://www.onliner.by');

echo strip_tags($a, ['p', 'a','br']); -->
<?php
$html = <<<'TEXT'
<p><b>Это жирный текст</b></p>
<p><strong>Это strong-текст</strong></p>
<p><big>Это большой текст</big></p>
<p><em>Это акцентированный текст</em></p>
<p><i>Это курсив</i></p>
<p><small>Это маленький текст</small></p>
<p>Это<sub> подстрочный</sub> и <sup>надстрочный</sup>текст</p>
TEXT;

echo strip_tags($html);