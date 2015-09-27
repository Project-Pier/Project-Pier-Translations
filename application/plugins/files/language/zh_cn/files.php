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
    'no files on the page' => 'There are no files on this page',
    'folder dnx' => 'The folder you have requested does not exist in database',
    'define project folders' => 'There are no folders in this project. Please define folders in order to continue',
    'file dnx' => 'Requested file does not exists in the database',
    'file revision dnx' => 'Requested revision does not exists in the database',
    'no file revisions in file' => 'Invalid file - there are no revisions associated with this file',
    'cant delete only revision' => 'You can\'t delete this revision. Every file need to have at least one revision posted',

    'no attached files' => 'There are no files attached to this object',
    'file not attached to object' => 'Selected file is not attached to selected object',
    'no files to attach' => 'Please select files that need to be attached',

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
    
    'success attach files' => '%s file(s) has been successfully attached',
    'success detach file' => 'File(s) has been successfully detached',

    // Failures
    'error upload file' => 'Failed to upload file',
    'error file download' => 'Failed to download specified file',
    'error attach file' => 'Failed to attach file',

    'error delete folder' => 'Failed to delete selected folder',
    'error move file' => 'Failed to move selected file %s',
    'error delete file' => 'Failed to delete selected file',
    'error delete file revision' => 'Failed to delete file revision',
    'error attach file' => 'Failed to attach file(s)',
    'error detach file' => 'Failed to detach file(s)',
    'error attach files max controls' => 'You can not add more file attachments. The limit is %s',

    // Confirmation
    'confirm delete folder' => 'Are you sure that you want to delete this folder?',
    'confirm delete file' => 'Are you sure that you want to delete this file?',
    'confirm delete revision' => 'Are you sure that you want to delete this revision?',
    'confirm detach file' => 'Are you sure that you want to detach this file?',

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

    'attach existing file' => 'Attach an existing file (from the Files section)',
    'upload and attach' => 'Upload a new file and attach it to the message',

    'new file' => 'New file',
    'existing file' => 'Existing file',
    'replace file description' => 'You can replace an existing file by specifying a new one. If you don\'t want to replace it simply leave this field blank.',
    'download history' => 'Download history',
    'download history for' => 'Download history for <a href="%s">%s</a>',
    'downloaded by' => 'Downloaded by',
    'downloaded on' => 'Downloaded on',

    'revisions on file' => '%s revision(s)',
    'order by filename' => 'filename (a-z)',
    'order by posttime' => 'date and time',
    'order by folder' => 'folder',
    'all files' => 'All files',
    'upload file desc' => 'You can upload files of any type. The max file size you are allowed to upload is %s',
    'file revision info short' => 'Revision #%s <span>(created on %s)</span>',
    'file revision info long' => 'Revision #%s <span>(by <a href="%s">%s</a> on %s)</span>',
    'file revision title short' => '<a href="%s">Revision #%s</a> <span>(created on %s)</span>',
    'file revision title long' => '<a href="%s">Revision #%s</a> <span>(by <a href="%s">%s</a> on %s)</span>',
    'update file' => 'Update file',
    'version file change' => 'Remember this change (the old file will be saved for reference)',
    'last revision' => 'Last revision',
    'revision comment' => 'Revision comment',
    'initial versions' => '-- Initial version --',
    'file details' => 'File details',
    'view file details' => 'View file details',
    
    'add attach file control' => 'Add file',
    'remove attach file control' => 'Remove',
    'attach files to object desc' => 'Use this form to attach files to <strong><a href="%s">%s</a></strong>. You can attach one or many files. You can select any existing files from files section or upload new ones. <strong>New files will also be available through files section when you upload them</strong>.',
    'select file' => 'Select a file',

    'important file desc' => 'Important files are listed in the sidebar of files section in the "Important files" block',
    'private file desc' => 'Private files are visible only to the members of the owner company. Members of client companies will not be able to see them',
    
  ); // array

?>