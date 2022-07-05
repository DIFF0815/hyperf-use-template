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
 * docker环境可参考[dnmp](https://github.com/DIFF0815/dnmp),进入根目录 docker-compose up

## 热更
* 开发时就不用频繁开关服务了，会热更自动重启（了解更多看[hyperf文档](https://hyperf.wiki/2.2/#/zh-cn/watcher?id=%e7%83%ad%e6%9b%b4%e6%96%b0-watcher) ）
   ```shell
       #安装扩展
       composer require hyperf/watcher --dev
       #发布配置
       php bin/hyperf.php vendor:publish hyperf/watcher
       #启动（代替 php bin/hyperf.php start）
       php bin/hyperf.php server:watch
    
   ```

## 日志
   配置目录：/config/autoload/logger.php
### 分类
   * 标准输出（控制台输出的日志：） 
   * 异常抛出的日志
   * sql执行的日志
   * 正常记录的日志
### 示例
   ```shell
   # 
   域名/test/test_log/test_log
   # 
   域名/test/test_log/test_mysql_log
   # 
   域名/test/test_log/test_exception_log
   
   ```

## 国际化
### 国际化和枚举结合
  * [国际化文档](https://hyperf.wiki/2.2/#/zh-cn/translation)
  * [枚举](https://hyperf.wiki/2.2/#/zh-cn/constants)
### 示例
   ```shell
   #测试国际化翻译
   域名/test/test_trans/test_trans
   
   #测试国际化翻译和枚举错误结合
   域名/test/test_trans/test_tran2

   ```

## redis
   * [缓存](https://hyperf.wiki/2.2/#/zh-cn/cache)
   * [redis](https://hyperf.wiki/2.2/#/zh-cn/redis)
   * 配置目录：/config/redis.php
### 分类
   * 默认缓存用
     缓存的cache.php需要配置为redis驱动,还可以缓存mysql表的数据
   * 做持久化数据库redis
   * 做session存储
### 示例
   ```shell
   # 做普通缓存缓存
   域名/test/test_redis/test_redis_cache
   
   # 测试普通缓存-缓存mysql table数据
   域名/test/test_redis/test_redis_cache_mysqlTable
   
   #测试redis做持久化数据库
   域名/test/test_redis/test_redis_persist
   
   #测试session
   域名/test/test_redis/test_redis_session

   ```

## mq
  * [amqp](https://hyperf.wiki/2.2/#/zh-cn/amqp)
  * 生产和消费消息可以在不同系统内完成，完全可以独立
  * 配置文件：/config/amqp.php
  * 注意：必须先第一次启动消费者后才能启动生产者，不然可能会没有对应的队列和通道导致数据丢失

### 生产者
### 消费者
  * @Consumer 注解对应的字段来替换对应的 exchange、routingKey 和 queue。 

### 示例
  ```shell
  #测试发生mq数据
  域名/test/test_mq/test_mq_send_data
  
  ```

## 数据库

