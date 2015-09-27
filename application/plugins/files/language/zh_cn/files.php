<?php

  return array(

    // source: actions.php

    // Files
    'add file' => '添加文件',
    'edit file' => '编辑文件',
    'move file' => '移动文件',
    'delete file' => '删除文件',
    
    'add folder' => '添加目录',
    'edit folder' => '编辑目录',
    'delete folder' => '删除目录',
    
    'files add revision' => '添加版本',
    'files edit revision' => '编辑版本 %s',
    'delete file revision' => '删除版本 %s',
    
    'attach' => '附件',
    'attach file' => '添加附件',
    'attach files' => '添加附件',
    'attach more files' => '添加更多附件',
    'detach file' => '取消附件',
    'detach files' => '取消附件',

    // source: administration.php

    'config option name files_show_icons' => '显示文件图标',
    'config option name files_show_thumbnails' => '尽可能显示文件预览',

    // source: errors.php

    // Validate project folder
    'folder name required' => '目录名称必填',
    'folder name unique' => '目录名称需要在该项目中唯一',
    
    // Validate add / edit file form
    'folder id required' => '请选择目录',
    'filename required' => '文件名必填',
    
    // File revisions (internal)
    'file revision file_id required' => '版本需要关联到某个文件',
    'file revision filename required' => '文件名必填',
    'file revision type_string required' => '未知文件类型',

    // source: messages.php

    // Empty, dnx etc
    'no files on the page' => '该页面尚无文件',
    'folder dnx' => '您请求的目录不存在',
    'define project folders' => '该项目中尚无目录，请定义目录再继续',
    'file dnx' => '您请求的文件不存在',
    'file revision dnx' => '您请求的版本不存在',
    'no file revisions in file' => '无效文件 - 尚无任何相关联的版本',
    'cant delete only revision' => '你可以删除该版本。每个文件需要至少提交一个版本。',

    'no attached files' => '该对象无任何附加文件',
    'file not attached to object' => '所选文件尚未附加到指定对象上',
    'no files to attach' => '请选择需要附加的文件',

    // Success
    'success add folder' => '目录 \'%s\' 被添加',
    'success edit folder' => '目录 \'%s\' 被更新',
    'success delete folder' => '目录 \'%s\' 被删除',
    
    'success add file' => '文件 \'%s\' 被添加',
    'success edit file' => '文件 \'%s\' 被删除',
    'success move file' => '文件 \'%s\' 从项目 %s 移到项目 %s',
    'success delete file' => '文件 \'%s\' 被删除',
    
    'success add revision' => '版本 %s 被添加',
    'success edit file revision' => '版本被删除',
    'success delete file revision' => '文件版本被删除',
    
    'success attach files' => '%s 个文件被成功关联为附件',
    'success detach file' => '个文件被成功解除关联',

    // Failures
    'error upload file' => '文件上传失败',
    'error file download' => '下载指定文件失败',
    'error attach file' => '附加文件失败',

    'error delete folder' => '删除所选目录失败',
    'error move file' => '移动指定文件%s失败',
    'error delete file' => '删除指定文件失败',
    'error delete file revision' => '删除文件版本失败',
    'error attach file' => '添加关联附件失败',
    'error detach file' => '取消关联附件失败',
    'error attach files max controls' => '你不能再添加附件了，限制数为%s',

    // Confirmation
    'confirm delete folder' => '你确定要删除该目录?',
    'confirm delete file' => '你确定要删除该文件?',
    'confirm delete revision' => '你确定要删除该版本?',
    'confirm detach file' => '你确定要取消该附件关联?',

    // Log
    'log add projectfolders' => '\'%s\' 被添加',
    'log edit projectfolders' => '\'%s\' 被更新',
    'log delete projectfolders' => '\'%s\' 被删除',
    
    'log add projectfiles' => '\'%s\' 被上传',
    'log edit projectfiles' => '\'%s\' 被更新',
    'log delete projectfiles' => '\'%s\' 被删除',
    
    'log edit projectfilerevisions' => '%s 被更新',
    'log delete projectfilerevisions' => '%s 被删除',

    // source: objects.php

    'file' => '文件',
    'files' => '文件',
    'file revision' => '文件版本',
    'file revisions' => '文件版本',
    'revision' => '版本',
    'revisions' => '版本',
    'folder' => '目录',
    'folders' => '目录',
    'no folder' => '(无目录)',
    'attached file' => '附件',
    'attached files' => '附件',
    'important file'     => '重要文件',
    'important files'    => '重要文件',
    'private file' => '私有文件',
    'attachment' => '附件',
    'attachments' => '附件',
    'parent folder' => '父目录',

    // source: project_interface.php

    'attach existing file' => '从文件选择框附加一个现存文件',
    'upload and attach' => '上传新文件并作为该消息的附件',

    'new file' => '新文件',
    'existing file' => '现存文件',
    'replace file description' => '可以将现存文件替换一个指定的新文件。如果不想替换，这个字段留空就行。',
    'download history' => '下载历史',
    'download history for' => '<a href="%s">%s</a>的下载历史',
    'downloaded by' => '下载者',
    'downloaded on' => '下载于',

    'revisions on file' => '%s 个版本',
    'order by filename' => '按文件名 (a-z)',
    'order by posttime' => '日期时间',
    'order by folder' => '目录',
    'all files' => '所有文件',
    'upload file desc' => '你可以上传任意类型的文件。允许上传的文件最大尺寸为%s',
    'file revision info short' => '版本 #%s <span>(创建于 %s)</span>',
    'file revision info long' => '版本 #%s <span>(由 <a href="%s">%s</a> 创建于 %s)</span>',
    'file revision title short' => '<a href="%s">版本 #%s</a> <span>(创建于 %s)</span>',
    'file revision title long' => '<a href="%s">版本 #%s</a> <span>(由 <a href="%s">%s</a> 创建于 %s)</span>',
    'update file' => '更新文件',
    'version file change' => '记录此此变更，旧的文件将会被保存以便引用',
    'last revision' => '最新版本',
    'revision comment' => '版本评论',
    'initial versions' => '-- 初始版本 --',
    'file details' => '文件详情',
    'view file details' => '查看文件详情',
    
    'add attach file control' => '添加文件',
    'remove attach file control' => '删除',
    'attach files to object desc' => '用该表单将文件附加给 <strong><a href="%s">%s</a></strong>. 你可以附加一个或多个文件，通过在文件选择框中选择现有文件或直接上传新文件，文件选择框中也是可以上传新文件的。',
    'select file' => '选择文件',

    'important file desc' => '重要文件会在文件选择框侧边栏的“重要文件”区域列出来。',
    'private file desc' => '私有文件仅能被拥有者公司成员看到，客户公司成员无法查看。',
    
  ); // array

?>