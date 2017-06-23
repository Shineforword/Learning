<?php 

/*服务器端包含(ssl)用于创建可载多个页面重复使用的函数 页眉 页脚并复制到include语句中,包含文件很重要,
  如果您需要在网站的多张页面上引用相同的PHP HTML 或者文本的话

  通过include 和 require 语句, 可以将php文件的内容插入另一个PHP文件中(在服务器执行他之前),
  
  include  和 require 语句是相同的 ,除了错误处理方面:
  .require 会生成致命错误 (E_COMPILE_ERROR)并停止脚本
  .include 只会生成警告 (E_WARNING ) 并且脚本会续执行


  包含文件省去了大量的工作 ,这意味着您可为所有页面创建标准的页头 页脚 或者菜单文件 然后在页头需要更新时您只需要跟新一个文件
  即可

  语法 : include 'fileName'
         require 'fileName'
*/
 ?>