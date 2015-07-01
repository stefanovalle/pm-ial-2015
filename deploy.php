<?php
require 'recipe/common.php';

localServer('my_dev_machine')
    ->stage('local')
    ->env('deploy_path', '/srv/deploy');

set('repository', 'https://github.com/stefanovalle/pm-ial-2015.git');

task('deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:symlink',
    'cleanup',
])->desc('Deploy your project');
