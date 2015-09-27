<?php

  return array(
  
    // source: actions.php

    // Bug Trac
    'open tickets' => '开启的工单',  
    'closed tickets' => '关闭的工单',
    'add ticket' => '添加工单',  
    'edit ticket' => '编辑工单',  
    'view ticket' => '查看工单',  
    'open ticket' => '开启工单', 
    'close ticket' => '关闭工单',  
    'delete ticket' => '删除工单',  
    'add ticket category' => '添加分类',
    'add default ticket categories' => '添加默认分类',
    'edit ticket category' => '编辑分类',
    'ticket categories' => '工单分类',
    'update ticket options' => '更新选项',

    // source: administration.php

    'config category name tickets' => '工单',  
    'config category desc tickets' => '工单各种设置选项，当前还只有默认分类设置',
    'config option name tickets_types' => '允许的工单类型',
    'config option name tickets_default_categories' => '每个项目的默认工单分类',

    // source: emails.php

    'new ticket' => '新建工单',
    'new ticket posted' => '新工单 "%s" 已经被提交到项目 "%s" ',
    'ticket edited' => '工单 "%s" [所属项目："%s"] 已被编辑',
    'ticket closed' => '工单 "%s" [所属项目："%s"] 已被关闭',
    'ticket opened' => '工单 "%s" [所属项目："%s"] 已被开启',
    'attached files to ticket' => '一些文件被添加到工单 "%s" [所属项目："%s"]中',
    'detached files from ticket' => '工单 "%s" [所属项目："%s"] 中被删除了一些文件',
    'view new ticket' => '查看该工单',


    // source: errors.php

    // Add category
    'category name required' => '分类名必填',
    
    // Add ticket
    'ticket summary required' => '摘要必填',
    'ticket description required' => '描述必填',

    // source: messages.php
    // Empty, dnx etc
    'no ticket subscribers' => '该工单无人订阅',

    'ticket dnx' => '请求的工单不存在',
    'no tickets in project' => '该项目尚无工单',
    'no my tickets' => '尚未指派给你的工单',
    'no changes in ticket' => '该工单未变更过',
    'category dnx' => '请求的分类不存在',
    'no categories in project' => '该项目中未添加分类',

    // Success
    'success add ticket' => '工单 \'%s\' 添加成功',
    'success edit ticket' => '工单 \'%s\' 更新成功',
    'success deleted ticket' => '工单 \'%s\' 及其评论被成功删除',
    'success close ticket' => '所选工单已被关闭',
    'success open ticket' => '所选工单已被重新开启',
    'success add category' => '分类 \'%s\' 添加成功',
    'success edit category' => '分类 \'%s\' 更新成功',
    'success deleted category' => '分类 \'%s\' 及其评论被成功删除',
    
    'success subscribe to ticket' => '您成功订阅该工单',
    'success unsubscribe to ticket' => '您成功取消该工单订阅',

    // Failures
    'error update ticket options' => '更新工单选项失败',
    'error close ticket' => '关闭所选工单失败',
    'error open ticket' => '重新开启所选工单失败',
    'error subscribe to ticket' => '订阅所选工单失败',
    'error unsubscribe to ticket' => '取消所选工单订阅失败',
    'error delete ticket' => '所选工单删除失败',

    // Confirmation
    'confirm delete ticket' => '你确定要删除该工单?',
    'confirm unsubscribe' => '你却道要取消订阅啊?',
    'confirm subscribe ticket' => '你确定要订阅该工单吗？当有人（你自己除外）变更该工单或在工单下提交了评论时，你将会收到Email通知',

    // Log
    'log add projectcategories' => '\'%s\' 被添加',
    'log edit projectcategories' => '\'%s\' 被更新',
    'log delete projectcategories' => '\'%s\' 被删除',
    'log add projecttickets' => '\'%s\' 被添加',
    'log edit projecttickets' => '\'%s\' 被更新',
    'log delete projecttickets' => '\'%s\' 被删除',
    'log close projecttickets' => '\'%s\' 被关闭',
    'log open projecttickets' => '\'%s\' 被开启',
  
    // source: general.php


    // source: objects.php

    'ticket' => '工单',
    'tickets' => '工单',
    'private ticket' => '私有工单',

    // source: project_interface.php

    'email notification ticket desc' => '通过Email通知选择的人员关于该工单的情况',
    'subscribers ticket desc' => '当有人变更该工单或在工单下提交了评论时，订阅者（除本人）会接收到Email通知',
    
    // Tickets
    'summary' => '总览',
    'category' => '分类',
    'assigned to' => '指派给',
    'reported by' => '报告者',
    'closed' => '关闭的',
    'open' => '开启的',
    'critical' => '严重的',
    'major' => '重要的',
    'minor' => '次要的',
    'trivial' => '不重要的',
    'opened' => '新建的',
    'confirmed' => '已确认的',
    'not reproducable' => '无法重现的',
    'test and confirm' => '测试并确认',
    'fixed' => '已修复的',
    'defect' => '功能缺陷',
    'enhancement' => '功能改进',
    'feature request' => '新功能特性',
    'legend' => '图例说明',
    'ticket #' => '工单 #%s',
    'updated on by' => '%s | <a href="%s">%s</a> | %s',
    'history' => '变更历史',
    'field' => '字段',
    'old value' => '旧值',
    'new value' => '新值',
    'change date' => '变更日期',

    'private ticket desc' => '私有工单紧能被项目所有者公司成员可见。客户公司成员不能看到。',

    // source: site_interface.php
    
    // Tickets
    'my tickets' => '我的工单',

    'filters' => '过滤',  
    'new' => '新建',  
    'pending' => '待定的',  
    'updated on' => '更新于',  
    'most recent' => '最近',

  ); // array

?>