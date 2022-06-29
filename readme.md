# 文档说明

## 热更
开发时就不用频繁开关服务了，会热更自动重启（了解更多看文档https://hyperf.wiki/2.2/#/zh-cn/watcher?id=%e7%83%ad%e6%9b%b4%e6%96%b0-watcher）
```shell
    #安装扩展
    composer require hyperf/watcher --dev
    #发布配置
    php bin/hyperf.php vendor:publish hyperf/watcher
    #启动（代替 php bin/hyperf.php start）
    php bin/hyperf.php server:watch
    
```