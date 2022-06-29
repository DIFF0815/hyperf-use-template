<?php
/**
 * Created by.
 * User: DIFF
 * DATE: 2022/6/27
 * TIME: 11:00
 */

namespace App\Controller\Test;

use App\Controller\AbstractController;
use App\Model\Test;
use Hyperf\HttpServer\Annotation\AutoController;
use App\Service\LogService;

/**
 * @AutoController()
 */
class TestLogController extends AbstractController
{
    public function test_log(){

        $data = [
            'code' => 1,
            'msg' => '记录成功',
        ];
        LogService::record('记录',$data);

        return $this->response->json($data);

    }

    public function test_mysql_log(){
        //
        $ret = Test::query()->select()->first();
        $data = [
            'code' => 1,
            'msg' => '记录成功',
            'ret' => $ret->toArray(),
        ];
        return $this->response->json($data);

    }
}