<?php

namespace app\ctrl;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class indexCtrl extends \core\gaophp
{
    public function index() {
//        pr('It is index.');
//        $model = new \core\lib\model();
//        $sql = 'select * from test_tab';
//        $ret = $model->query($sql);
//        pr($ret->fetchAll());
        
        $data = 'Hello World';
        $title = 'This is a view';
        $this->assign('title', $title);
        $this->assign('data', $data);
        $this->display('index.html');
    }
}

