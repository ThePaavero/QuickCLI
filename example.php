<?php

require 'cli.php';

$cli = new QuickCLI\CLI('Example CLI Script');

$cli->line('Simple line');
$cli->line('Simple line with two EOLs', 2);
$cli->line('Simple line with one EOL and colored red!', 1, 'red');

$user_name = $cli->prompt('Enter your name', true);

$cli->line('Hey, ' . $user_name . '!', 2, 'green');