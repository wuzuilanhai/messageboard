<?php
namespace Home\Controller;

use Think\Controller;

class MessageController extends Controller
{

    /**
     * 添加留言
     */
    public function add()
    {
        $date['content'] = I('content');
        $date['uid'] = I('id');
        $date['uname'] = $_SESSION['username'];
        $message = M("Message");
        $result = $message->add($date);
        if ($result) {
            $this->redirect('User/message');
        } else {
            $this->error("留言失败，请重试", "User/message");
        }
    }
}