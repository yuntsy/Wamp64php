
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������ƽ̨����̨����</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   document.all.d1.src="images/point3.gif";
	 }
	 else{
	  document.all.spgl.style.display="none";
	  document.all.d1.src="images/point1.gif";
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   document.all.d2.src="images/point3.gif";
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  document.all.d2.src="images/point1.gif";
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   document.all.d3.src="images/point3.gif";
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  document.all.d3.src="images/point1.gif";
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   document.all.d4.src="images/point3.gif";
	 }
	 else{
	  document.all.gggl.style.display="none";
	  document.all.d4.src="images/point1.gif";
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">

<?php
header ( "Content-type: text/html; charset=gb2312" ); //�����ļ������ʽ
session_start();
?>

<table width="212" border="0" cellpadding="0" cellspacing="0" background="left_bg.gif">
  <tr>
    <td height="425" valign="top" background="images/left_bg.gif"><div align="center">
      <table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="212" height="32" background="images/default_09.gif" onClick="javascript:openspgl()"><div align="center"><a href="#"><img id="d1" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp;��Ʒ����</a></div></td>
            </tr>
          </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="spgl" style="display:">
              <tr>
                <td height="20" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="addgoods.php" target="main">������Ʒ</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="editgoods.php" target="main">�޸���Ʒ</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="showleibie.php" target="main">��Ʒ������</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_12.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="addleibie.php" target="main">������Ʒ���</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" background="images/default_09.gif" onClick="javascript:openyhgl()"><div align="center"><a href="#"><img id="d2" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp;�û�����</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="yhgl" style="display:">
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edituser.php" target="main">�û���Ϣ����</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="lookleaveword.php"  target="main">�û����Թ���</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_12.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="changeadmin.php"  target="main">���Ĺ���Ա��Ϣ</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" align="center" background="images/default_09.gif" onClick="javascript:openddgl()"><a href="#"><img id="d3" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp;��������</a></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="ddgl" style="display:">
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lookdd.php" target="main">�༭����</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_12.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="finddd.php" target="main">��ѯ����</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" background="images/default_09.gif" onClick="javascript:opengggl()"><div align="center"><a href="#"><img id="d4" border="0"src="images/point1.gif" width="10" height="10">&nbsp;&nbsp;��Ϣ����</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="gggl" style="display:">
              <tr>
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admingonggao.php " target="main">�������</a></td>
              </tr>
              <tr background="images/default_10.gif">
                <td height="22" background="images/default_10.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
                  <a href="addgonggao.php " target="main">���ӹ���</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_12.gif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editpinglun.php " target="main">���۹���</a></td>
              </tr>
			<tr><td height="100" background="images/left_bottom.gif">&nbsp;</td>
			</tr>
			<tr><td height="3" background="images/left_stop.gif"></td>
			<tr><td height="100">&nbsp;</td>
			</tr>
            </table>
			</td>
        </tr>
      </table>
      </div></td>
  </tr>
</table>
</body>
</html>