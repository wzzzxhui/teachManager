<?php


return[

    'session_fix' => 'teachManager_',
    'menu' => [
        '用户中心' => [
//            '用户信息','用户审核'
            ['title'=>'用户管理','href' => 'getUsers'],
            ['title'=>'用户审核','href' => 'getUsers'],
            ['title'=>'test','href' => 'testjkjk'],
        ],
        '学校中心' => [
//            '用户信息','用户审核'
            ['title'=>'学校管理','href' => 'getUsers'],
            ['title'=>'新增学校','href' => 'getUsers']
        ],
        '班级中心' => [
//            '用户信息','用户审核'
            ['title'=>'班级管理','href' => 'getUsers'],
            ['title'=>'新增班级','href' => 'getUsers']
        ],
        '作业中心' => [
            ['title'=>'作业管理','href' => 'tasks'],
            ['title'=>'布置作业','href' => 'detail','params'=>'/page'],
        ],
        '校园中心' => [
            ['title'=>'奖罚情况','href' => 'getUsers'],
            ['title'=>'考试情况','href' => 'getUsers'],
            ['title'=>'班级日志','href' => 'getUsers'],
            ['title'=>'班级相册','href' => 'getUsers'],
        ],
        '学分中心'=> [
            ['title'=>'学分查看','href' => 'getUsers'],
            ['title'=>'奖品兑换','href' => 'getUsers'],
        ],
        '商城中心'=> [
            ['title'=>'商品上架','href' => 'getUsers'],
            ['title'=>'商品编辑','href' => 'getUsers'],
        ],
        '娱乐中心'=> [
            ['title'=>'音乐推介','href' => 'getUsers'],
            ['title'=>'学生作品','href' => 'getUsers'],
        ],
        '体育中心'=> [
            ['title'=>'音乐推介','href' => 'getUsers'],
            ['title'=>'学生作品','href' => 'getUsers'],
        ],
        '公告中心'=> [
            ['title'=>'校园公告','href' => 'getUsers'],
            ['title'=>'班级公告','href' => 'getUsers'],
        ],
        '反馈中心'=> [
            ['title'=>'留言箱','href' => 'getUsers'],
        ]
    ],

    'role' => [
        '0' => '超级管理员',
        '1' => '教师',
        '2' => '学生'
    ],

    'callback_info' => [
         ['status'=>0,'info'=>'error,please try again!'],
         ['status'=>1,'info'=>'success!'],
    ],

    'types' => [
        '0' => '其他',
        '1' => '日志',
        '2' => '朗诵'
    ],

    'status' => [
        'del' => 0,
        'nor' => 1,
        'fin' => 2
    ],
];