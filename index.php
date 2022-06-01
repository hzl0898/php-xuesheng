<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>学生信息管理系统</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="waper">
  <div class="main1">
  
  
  <form id="form1" name="form1" method="post" action="adminlogin2.php?action=login">
    <table width="230" border="0" id="biao">

      <tr>
        <td height="24" align="center">用户名</td>
        <td><input name="uname" type="text" /></td>
      </tr>

      <tr>
        <td height="24" align="center">密&nbsp;码</td>
        <td><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td height="24" align="center">身份</td>
        <td>
        <select name="role">
         <option value="学生">学生</option>  
         <option value="管理">管理</option> 
        
        
        </select>
          </td>
   
      </tr>
       
      <tr>
        <td height="24">&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="登录"/> &nbsp;&nbsp;<a href="reg.php"><input name="注册" type="button" value="注册" /></a>

      </tr>
    </table>
    </form>
  
  
  </div>
  
  </div>