# 文档说明

## 开始
 * 需要一定的[swoole](https://wiki.swoole.com/#/) 基础,
 * [hyperf](https://hyperf.wiki/2.2/#/) 一个swoole框架，从[hyperf-skeleton](https://github.com/hyperf/hyperf-skeleton) 骨架修改
 
## 环境
 * php74,除了开启基本的扩展外，还需要安装swoole,msgpack,amqp,pcntl,redis,sockets
   ```shell
   #swoole >=4.5，开启openssl,编译的时候添加参数 "--enable-openssl"
   
   #msgpack >=2.1.2
   
   #redis >=4.0， 开启序列化，"--enable-redis-msgpack"
   ```
 * mysql5.7
 * nginx
 * docker环境可参考[dnmp](https://github.com/DIFF0815/dnmp)



## 热更
开发时就不用频繁开关服务了，会热更自动重启（了解更多看[hyperf文档](https://hyperf.wiki/2.2/#/zh-cn/watcher?id=%e7%83%ad%e6%9b%b4%e6%96%b0-watcher) ）
```shell
    #安装扩展
    composer require hyperf/watcher --dev
    #发布配置
    php bin/hyperf.php vendor:publish hyperf/watcher
    #启动（代替 php bin/hyperf.php start）
    php bin/hyperf.php server:watch
    
```