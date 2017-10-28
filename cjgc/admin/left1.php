
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <link href="css/admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=./img/menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(1) 
                                    href="javascript:void(0);">上传管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child1 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edwenjian.php" 
                                   target=rightight>文件管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edpic.php" 
                                   target=rightight>图片管理</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edtv.php" 
                                   target=rightight>视频管理</a></td></tr>
                        
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(2) 
                                    href="javascript:void(0);">新闻中心</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child2 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                           
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="addxinwen.php" 
                                   target=rightight>添加新闻</a></td></tr>    
                           
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edxinwen.php" 
                                   target=rightight>热点新闻</a></td></tr>
                       
                        <tr height=4>
                            <td colspan=2></td></tr></table>
               
                        
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                    
                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(3) 
                                    href="javascript:void(0);">工程中心</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child3 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="add2.php" 
                                   target=rightight>添加工程</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edtransport.php" 
                                   target=rightight>交通运输</a></td></tr>
                         <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edresource.php" 
                                   target=rightight>能源电力</a></td></tr>
                          <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="ededucation.php" 
                                   target=rightight>科研教育</a></td></tr>                   
                       <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edcxrebuilt.php" 
                                   target=rightight>城乡建设</a></td></tr>
                         <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edforeighgc.php" 
                                   target=rightight>海外工程</a></td></tr>
                           <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edstrategypl.php" 
                                   target=rightight>战略规划</a></td></tr> 
                           <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edindustry.php" 
                                   target=rightight>工业项目</a></td></tr>        
                                                    
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(4) 
                                    href="javascript:void(0);">数据管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child4 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="backup.php" 
                                   target=rightight>数据备份</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="restore.php" 
                                   target=rightight>数据还原</a></td></tr>
                        
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>
                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(5) 
                                    href="javascript:void(0);">用户管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child5 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="adduser.php" 
                                   target=rightight>添加用户</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="eduser.php" 
                                   target=rightight>用户管理</a></td></tr>
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(6) 
                                    href="javascript:void(0);">留言管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child6 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="addly1.php" 
                                   target=rightight>添加留言</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="edliuyan.php" 
                                   target=rightight>留言管理</a></td></tr>
                       
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                    <table cellspacing=0 cellpadding=0 width=150 border=0>

                        <tr height=22>
                            <td style="padding-left: 30px" background=./img/menu_bt.jpg><a 
                                    class=menuparent onclick=expand(7) 
                                    href="javascript:void(0);">管理员管理</a></td></tr>
                        <tr height=4>
                            <td></td></tr></table>
                    <table id=child7 style="display: none" cellspacing=0 cellpadding=0 
                           width=150 border=0>

                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="glylb.php" 
                                   target=rightight>管理员列表</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="addadmin.php" 
                                   target=rightight>添加管理员</a></td></tr>
                        <tr height=20>
                            <td align=middle width=30><img height=9 
                                                           src="./img/menu_icon.gif" width=9></td>
                            <td><a class=menuchild 
                                   href="zgl.php" 
                                   target=rightight>组管理</a></td></tr>
                        
                        <tr height=4>
                            <td colspan=2></td></tr></table>
                            
               </td>
                <td width=1 bgcolor=#d1e6f7></td>
            </tr>
        </table>
    </body>
</html>
