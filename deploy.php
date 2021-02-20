<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'batoilogic');

// Project repository
set('repository', 'git@github.com:TheRafikiLOL/batoilogic.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

host('3.82.175.74')
    ->user('deploy-backoffice')
    ->identityFile('~/.ssh/id_rsa.pub')
    ->port(443)
    ->set('deploy_path','/var/www/html/001-backoffice');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});
task('artisan:migrate', function () {});
task('artisan:optimize', function () {});
// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

