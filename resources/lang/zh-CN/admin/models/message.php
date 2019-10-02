<?php

return array(

    'does_not_exist' => '资产型号不存在',
    'assoc_users'	 => '该资产型号下目前还存在相关的资产，不能被删除，请删除资产以后，再重试。',


    'create' => array(
        'error'   => '资产型号没有被创建，请重试。',
        'success' => '资产型号创建成功。',
        'duplicate_set' => '名称、制造商和编号都相同的其它资产型号已存在。',
    ),

    'update' => array(
        'error'   => '资产型号没有被更新，请重试。',
        'success' => '资产型号更新成功。'
    ),

    'delete' => array(
        'confirm'   => '你确定删除这个资产型号吗？',
        'error'   => '删除资产型号的过程中出现了一点儿问题，请重试。',
        'success' => '资产型号删除成功'
    ),

    'restore' => array(
        'error'   		=> '资产型号恢复失败，请重试。',
        'success' 		=> '资产型号恢复成功。'
    ),

    'bulkedit' => array(
        'error'   		=> '没有字段被更改，因此没有更新任何内容。',
        'success' 		=> '资产型号已更新。'
    ),

    'bulkdelete' => array(
        'error'   		    => '没有型号被选中，所以没有删除任何东西。',
        'success' 		    => ':success_count 个已删除！',
        'success_partial' 	=> ':success_count 个已删除, 但是 :fail_count 个因为还有关联资产所以没办法删除。'
    ),

);
