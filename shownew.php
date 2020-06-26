<html>
<head>
<style>
.star {
    display: block;
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #FFF;
    top: 100px;
    left: 500px;
    position: relative;
    transform-origin: 100% 0;
    animation: star-ani 4s linear infinite;
    -webkit-animation:star-ani 5s linear infinite;
    box-shadow: 0 0 5px 5px rgba(255, 255, 255, .3);
    opacity: 0;
    z-index: 2;
}
.star:after {
    content: '';
    display: block;
    top: 0px;
    left: 4px;
    border: 0px solid #fff;
    border-width: 0px 90px 2px 90px;
    border-color: transparent transparent transparent rgba(255, 255, 255, .3);
    transform: rotate(-45deg) translate3d(1px, 3px, 0);
    box-shadow: 0 0 1px 0 rgba(255, 255, 255, .1);
    transform-origin: 0% 100%;
}
.pink {
    top: 100px;
    left: 800px;
    background: #fff;
    animation-delay: 3s;
    -webkit-animation-delay: 3s;
    -moz-animation-delay: 3s;
}
.pink:after {
    border-color: transparent transparent transparent #fff;
    animation-delay: 3s;
    -webkit-animation-delay: 3s;
    -moz-animation-delay: 3s;
}
.blue {
    top: 120px;
    left: 1200px;
    background: fff;
    animation-delay: 7s;
    -webkit-animation-delay: 7s;
    -moz-animation-delay: 7s;
}
.blue:after {
     border-color: transparent transparent transparent fff;
    -webkit-animation-delay: 7s;
    -moz-animation-delay: 7s;
    animation-delay: 7s;
}
  @keyframes star-ani {
    0% {
        opacity: 0;
        transform: scale(0) translate3d(0, 0, 0);
    }
    20%{
        opacity: 0.8;
        transform: scale(0.2) translate3d(-100px, 100px, 0);
    }
    40% {
        opacity: 0.8;
        transform: scale(0.4) translate3d(-200px, 200px, 0);
    }
    60% {
        opacity: 0.8;
        transform: scale(0.6) translate3d(-300px, 300px, 0);
    }
    80% {
        opacity: 1;
        transform: scale(1) translate3d(-350px, 350px, 0);
    }
    100% {
        opacity: 1;
        transform: scale(1.2) translate3d(-400px, 380px, 0);
    }


</style>
</head>

<body   style="background-image:url(images/yuzhou3.jpg)";>


<div class="star"></div>
      <div class="star pink"></div>
      <div class="star blue"></div>

<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
 include("top.php");
?>
<table width="766" height="438" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="209" height="438" valign="top" bgcolor="#F0F0F0"><?php include("left.php");?></td>
    <td width="557" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="50" background="images/new1.gif">&nbsp;</td>
      </tr>
    </table>
      <table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td background="images/line1.gif"></td>
        </tr>
      </table>
      <table width="550" height="70" border="0" align="center" cellpadding="0" cellspacing="0">
        <?php
	     $sql=mysqli_query($conn,"select * from tb_shangpin order by addtime desc limit 0,4"); 
		 $info=mysqli_fetch_array($sql);
		 if($info==false){
		   echo "本站暂无最新产品!";
		  } 
		 else{ 
		    do{ 
	   ?>
        <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info['tupian']==""){
			   echo "暂无图片!";
			 }
			 else{
			?>
              <a href="lookinfo.php?id=<?php echo $info['id'];?>"><img border="0" src="<?php echo $info['tupian'];?>" width="80" height="80"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="93" height="20"><div align="center" style="color: #000000">商品名称：</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><?php echo $info['mingcheng'];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品品牌：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info['pinpai'];?></div></td>
          <td width="62"><div align="center" style="color: #000000">商品型号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info['xinghao'];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info['jianjie'];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info['addtime'];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info['shuliang'];?></div></td>
          <td width="63"><div align="center" style="color: #000000">商品等级：</div></td>
          <td width="73"><div align="left"><?php echo $info['dengji'];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info['shichangjia'];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info['huiyuanjia'];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (@ceil(($info['huiyuanjia']/$info['shichangjia'])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images/line1.gif"></td>
        </tr>
        <?php
	    	}while($info=mysqli_fetch_array($sql));
		 }
		?>
      </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
?>


</body>
</html>

