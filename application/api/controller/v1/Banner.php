<?php


namespace app\api\controller\v1;

use app\api\validate\TestValidate;
use think\Validate;

class Banner
{
    /*
     * 获取指定id的banner信息
     * @url -->  /banner/:id
     * @http GET
     * @id -->  banner的id号
     */
    public function getBanner($id){
        $data = [
            'name' => '12asaaddsdsdada',
            'email' => 'weyqq.com'
        ];

//        $validate = new Validate([
//            'name' => 'require|max:10',
//            'email' => 'email'
//        ]);

        $validate = new TestValidate();

        $result = $validate->batch()->check($data);
        var_dump($validate->getError());
    }
}