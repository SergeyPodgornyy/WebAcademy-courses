<?php

$name = 'MyName';

// HEREDOC example
echo <<<DOC
My name is "$name". I am printing some Foo.
This should print a capital 'A': \x41
DOC;

echo "<br><br>";

// NOWDOC example (since PHP 5.3.0)
echo <<<'EOT'
My name is "$name". I am printing some Foo.
This should not print a capital 'A': \x41
EOT;

