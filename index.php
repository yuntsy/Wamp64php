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

<body   style="background-image:url(images/yuzhou2.jpg)";>

<div class="star"></div>
      <div class="star pink"></div>
      <div class="star blue"></div>

<?php
header ( "Content-type: text/html; charset=gb2312" ); //设置文件编码格式
session_start();
?>

<link href="css/font.css" rel="stylesheet">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php
 include("top.php");
?></td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="209" valign="top" bgcolor="#F5F5F5"><?php include("left.php");?></td>
        <td width="557" height="438" align="center" valign="top" bgcolor="#F5F5F5"><table width="557"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="553" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="557"  height="50"><img src="images/tuijian.gif" width="557" height="50" border="0" usemap="#Map2"></td>
                </tr>
              </table>
                <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="555" height="110"><table width="530" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
               <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin where tuijian=1 order by addtime desc limit 0,1");
			  $info=mysqli_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐商品!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
</font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a>                                 </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin where tuijian=1 order by addtime desc limit 1,1");
			  $info=mysqli_fetch_array($sql);
			  if($info==true)
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			    }
			   ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/line1.gif"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46"><img src="images/new.gif" width="557" height="46" border="0" usemap="#Map3"> </td>
                  </tr>
                </table>
                <table width="543" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="543" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
                            <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin order by addtime desc limit 0,1");
			  $info=mysqli_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐产品!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
						   }
						  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin order by addtime desc limit 1,1");
			  $info=mysqli_fetch_array($sql);
			  if($info==true)
		
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/line1.gif"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46"><img src="images/hot.gif" width="557" height="46" border="0" usemap="#Map4"> </td>
                  </tr>
                </table>
                <table width="553" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="553" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="275">
                            <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin order by cishu desc limit 0,1");
			  $info=mysqli_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐产品!";
			  }
			  else {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="255">
                            <?php
			  $sql=mysqli_query($conn,"select * from tb_shangpin order by cishu desc limit 1,1 ");
			  $info=mysqli_fetch_array($sql);
			  if($info==true){
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info['tupian']=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info['tupian'];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images/circle.gif" width="10" height="10">&nbsp;<?php echo $info['mingcheng'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info['shichangjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info['huiyuanjia'];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info['shuliang']>0)
				  {
				     echo $info['shuliang'];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info['id'];?>"><img src="images/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info['id'];?>"><img src="images/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
<td>
<?php
 include("bottom.php");
?></td>
  </tr>
</table>


<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<map name="Map2">
  <area shape="rect" coords="504,27,543,43" href="showtuijian.php">
</map>
<map name="Map3">
  <area shape="rect" coords="503,24,545,42" href="shownew.php">
</map>
<map name="Map4">
  <area shape="rect" coords="506,24,543,39" href="showhot.php">
</map>



</body>
</html>
