<?php

return array(

    'does_not_exist' => '类别不存在',
    'assoc_models'	 => '此类别下至少还有一个相关资产型号，目前不能被删除，请您确定您的所有资产型号均不在此分类下，然后重试。',
    'assoc_items'	 => '此类别下至少还有一个 :asset_type ，目前不能被删除，请确定您的 :asset_type 不在此分类下，然后重试。',

    'create' => array(
        'error'   => '类别创建失败，请重试。',
        'success' => '类别创建成功'
    ),

    'update' => array(
        'error'   => '类别更新失败，请重试',
        'success' => '类别更新成功'
    ),

    'delete' => array(
        'confirm'   => '你确定要删除这个类别吗？',
        'error'   => '删除类别出现异常，请重试。',
        'success' => '类别删除成功。'
    )

);
