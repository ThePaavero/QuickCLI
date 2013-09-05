QuickCLI
========

Super simple toolset for quick PHP CLI scripts

-----------

### Example Script

    <?php

    require 'quickcli.php';

    $cli = new QuickCLI\QuickCLI('Demo script');

    $cli->line('Welcome to ' . $cli->getAppName(), 2, 'light_cyan');
    $cli->line('Simple line');
    $cli->line('Simple line with two EOLs', 2);
    $cli->line('Simple line with one EOL and colored red!', 1, 'red');

    $user_name = $cli->prompt('Enter your name', true);

    $cli->line('Hey, ' . $user_name . '!', 2, 'green');

_...produces..._

![Screenshot](http://i.imgur.com/Ke7S3Lm.png)