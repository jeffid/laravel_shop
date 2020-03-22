<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://github.com/jeffid/laravel-shop.git');

// [Optional] Allocate tty for git clone. Default value is false.
//set('git_tty', true);

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
//add('writable_dirs', []);
set('writable_dirs', []);


// Hosts
//host('project.com')
//    ->set('deploy_path', '~/{{application}}');
host('192.168.10.28')
    ->user('root') // 使用 root 账号登录
    ->identityFile('~/id_rsa.pem') // 指定登录密钥文件路径
    ->become('jeffio') // 以  身份执行命令
    ->set('deploy_path', '/www/wwwroot/laravel_shop'); // 指定部署目录

// 定义一个上传 .env 文件的任务
desc('Upload .env file');
task('env:upload', function() {
    // 将本地的 .env 文件上传到代码目录的 .env
    upload('../.env', '{{release_path}}/.env');
});

// 定义一个后置钩子，在 deploy:shared 之后执行 env:upload 任务
after('deploy:shared', 'env:upload');
    
// Tasks
task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

