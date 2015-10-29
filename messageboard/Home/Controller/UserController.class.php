<?php
namespace Home\Controller;

use Think\Controller;

class UserController extends Controller
{

    /**
     * 主页
     */
    public function index()
    {
        $this->display();
    }

    /**
     * 注册
     */
    public function add()
    {
        $username = I('username');
        $password = I('password');
        $user = M("User");
        $date['username'] = $username;
        $date['password'] = $password;
        $result = $user->add($date);
        if ($result) {
            $this->redirect('User/index');
        } else {
            $this->error("注册失败");
        }
    }

    /**
     * 登陆
     */
    public function login()
    {
        $username = I('username');
        $password = I('password');
        $user = M("User");
        $result = $user->where(array(
            "username" => $username,
            "password" => $password
        ))->select();
        if ($result) {
            $id = $user->where(array(
                "username" => $username,
                "password" => $password
            ))->getField("id");
            $this->success("登陆成功");
            session('username', $username);
            session('id', $id);
            $this->redirect('User/message');
        } else {
            $this->error("账号或密码错误，请重新登陆");
            $this->redirect('User/index');
        }
    }

    /**
     * 注销
     */
    public function logout()
    {
        $_SESSION["username"] = null;
        $_SESSION["id"] = null;
        $this->redirect("User/index");
    }

    /**
     * 留言板
     */
    public function message()
    {
        if (isset($_SESSION['username'])) {
            $message = M("Message");
            $list = $message->order('time DESC')
                ->page($_GET['p'], '5')
                ->select();
            $this->assign('list', $list);
            $count = $message->count();
            $Page = new \Think\Page($count, 5); // 实例化分页类 传入总记录数和每页显示的记录数
            $Page->setConfig('prev', "上一页");
            $Page->setConfig('next', "下一页");
            $show = $Page->show(); // 分页显示输出
            $this->assign('page', $show); // 赋值分页输出
            $this->display();
        } else {
            $this->error("非法访问，请先登陆", "index");
        }
    }
}