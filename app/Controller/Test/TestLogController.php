<?php
/**
 * Created by.
 * User: DIFF
 * DATE: 2022/6/27
 * TIME: 11:00
 */

namespace App\Controller\Test;

use App\Controller\AbstractController;
use App\Exception\BusinessException;
use App\Model\Test;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Service\LogService;

/**
 * @AutoController()
 */
class TestLogController extends AbstractController
{
    //记录正常日志
    public function test_log(){

        $data = [
            'code' => 1,
            'msg' => '记录成功',
        ];
        LogService::info('记录',$data);

        return $this->response->json($data);

    }

    //记录mysql日志
    public function test_mysql_log(){
        //
        $ret = Test::query()->select()->first();
        $data = [
            'code' => 1,
            'msg' => 'test_mysql_log记录成功',
            'ret' => $ret->toArray(),
        ];
        return $this->response->json($data);

    }

    //记录异常日志
    public function test_exception_log(){
        $data = [
            'code' => 1,
            'msg' => 'test_exception_log记录成功',
        ];

        //手动记录
        LogService::exception('test_exception_log',$data);

        //抛出异常会再记录
        throw new BusinessException('test exceptions',400);
        //return $this->response->json($data);


    }
}