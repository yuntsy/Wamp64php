<?php
   //session_start();
   include("conn/conn.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>天文书店</title>
<link rel="stylesheet" type="text/css" href="css/font.css">

 <style>
     * {
margin-top:0;
            padding: 0;
        }
   
        .box {
            width: 520px;
            height:250px;
         
        border: 1px solid #ccc;
       margin-top:0;
       padding: 0;
 
        }
        .inner{
            width: 765px;
            height: 250px;
            position: relative;
            overflow: hidden;
        }
        .inner img{
            width: 765px;
            height: 250px;
            vertical-align: top;
        }
        ul {
            width: 1000%;
            position: absolute;
            list-style: none;
            left:0;
            top: 0;
        }
        .inner li{
            float: left;
        }
 
        ol {
            position: absolute;
            height: 20px;
            right: 20px;
            bottom: 20px;
            text-align: center;
            padding: 5px;
        }
        ol li{
            display: inline-block;
            width: 20px;
            height: 20px;
            line-height: 20px;
            background-color: #fff;
            margin: 5px;
            cursor: pointer;
 
        }
        ol .current{
            background-color: red;
        }
        #arr{
            display: none;
        }
        #arr span{
            width: 40px;
            height: 40px;
            position: absolute;
            left: 5px;
            top: 50%;
            margin-top: -20px;
            background: #fff;
            cursor: pointer;
            line-height: 40px;
            text-align: center;
            font-weight: bold;
            font-family: '黑体';
            font-size: 30px;
            color: #000;
            opacity: 0.5;
            border: 1px solid #fff;
        }
        #arr #right {
            right: 5px;
            left: auto;
        }
    </style>

</head>
<body>
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#F1B000">
    <td colspan="3" valign="bottom"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="224" height="83" background="images/beijingone.png">&nbsp;</td>
        <td align="right"  background="images/beijingtwo.png"><table border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="12" align="right">&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td><a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mrbccd.com');">设为首页</a> | <a href="javascript:window.external.addFavorite('http://www.mrbccd.com/','荣欣电子商城');">加入收藏 </a><a href="mailto:mrbccd**@mrbccd**.com">| 联系站长</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
<table height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form" method="post" action="findsp.php">
                <tr>
                  <td width="81" height="30" align="right">&nbsp;</td>
                  <td width="500" height="30" valign="middle"><div align="left">&nbsp;<span class="style4"><img src="images/33.png" width="20" height="12">&nbsp;请输入产品名称：</span>
                          <input type="text" name="name" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="立即查找">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highfind.php';" value="高级查找">
</div></td>
                </tr>
              </form>
</table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="568" height="32" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">本站首页</a>&nbsp;| <a href="shownew.php">最新商品</a> | <a href="showtuijian.php">推荐商品</a> | <a href="showhot.php">热门商品</a>&nbsp;|&nbsp;<a href="showfenlei.php">商品分类</a>&nbsp;|&nbsp;<a href="usercenter.php">用户中心</a>&nbsp;|&nbsp;<a href="finddd.php">订单查询</a>&nbsp;|&nbsp;<a href="gouwu1.php">我的购物车</a></td>
    <td width="121" align="center" bgcolor="#FFFFFF">
      <?php
	  if(isset($_SESSION['username']) && $_SESSION['username']!=""){
	    echo "当前用户:$_SESSION[username]";
	  }
	?>
    </td>
    <td width="77" bgcolor="#FFFFFF"> 
	<?php
	if(isset($_SESSION['username']) && $_SESSION['username']!=""){
	    echo "<a href='logout.php'>注销离开</a>";
	  }
	?>
    </td>
  </tr>
  <tr>

    <td >


<div class="box" id="box">
    <div class="inner">
        <!--轮播图-->
        <ul>
            <li><a href="#"><img src="images3/1.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/2.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/3.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/4.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/5.jpg" alt=""></a></li>
 
        </ul>
 
        <ol class="bar">
 
        </ol>
        <!--左右焦点-->
        <div id="arr">
                    <span id="left">
                        <
                    </span>
            <span id="right">
                        >
                    </span>
        </div>
 
    </div>
</div>
<script>
    /**
     *
     * @param id  传入元素的id
     * @returns {HTMLElement | null}  返回标签对象，方便获取元素
     */
    function my$(id) {
        return document.getElementById(id);
    }
 
    //获取各元素，方便操作
    var box=my$("box");
    var inner=box.children[0];
    var ulObj=inner.children[0];
    var list=ulObj.children;
    var olObj=inner.children[1];
    var arr=my$("arr");
    var imgWidth=inner.offsetWidth;
    var right=my$("right");
    var pic=0;
    //根据li个数，创建小按钮
    for(var i=0;i<list.length;i++){
        var liObj=document.createElement("li");
 
        olObj.appendChild(liObj);
        liObj.innerText=(i+1);
        liObj.setAttribute("index",i);
 
        //为按钮注册mouseover事件
        liObj.onmouseover=function () {
            //先清除所有按钮的样式
 
            for (var j=0;j<olObj.children.length;j++){
                olObj.children[j].removeAttribute("class");
            }
            this.className="current";
            pic=this.getAttribute("index");
            animate(ulObj,-pic*imgWidth);
        }
 
    }
 
 
    //设置ol中第一个li有背景颜色
    olObj.children[0].className = "current";
    //克隆一个ul中第一个li,加入到ul中的最后=====克隆
    ulObj.appendChild(ulObj.children[0].cloneNode(true));
 
    var timeId=setInterval(onmouseclickHandle,1000);
    //左右焦点实现点击切换图片功能
    box.onmouseover=function () {
        arr.style.display="block";
        clearInterval(timeId);
    };
    box.onmouseout=function () {
        arr.style.display="none";
        timeId=setInterval(onmouseclickHandle,1000);
    };
 
    right.onclick=onmouseclickHandle;
    function onmouseclickHandle() {
        //如果pic的值是5,恰巧是ul中li的个数-1的值,此时页面显示第六个图片,而用户会认为这是第一个图,
        //所以,如果用户再次点击按钮,用户应该看到第二个图片
        if (pic == list.length - 1) {
            //如何从第6个图,跳转到第一个图
            pic = 0;//先设置pic=0
            ulObj.style.left = 0 + "px";//把ul的位置还原成开始的默认位置
        }
        pic++;//立刻设置pic加1,那么此时用户就会看到第二个图片了
        animate(ulObj, -pic * imgWidth);//pic从0的值加1之后,pic的值是1,然后ul移动出去一个图片
        //如果pic==5说明,此时显示第6个图(内容是第一张图片),第一个小按钮有颜色,
        if (pic == list.length - 1) {
            //第五个按钮颜色干掉
            olObj.children[olObj.children.length - 1].className = "";
            //第一个按钮颜色设置上
            olObj.children[0].className = "current";
        } else {
            //干掉所有的小按钮的背景颜色
            for (var i = 0; i < olObj.children.length; i++) {
                olObj.children[i].removeAttribute("class");
            }
            olObj.children[pic].className = "current";
        }
    }
    left.onclick=function () {
        if (pic==0){
            pic=list.length-1;
            ulObj.style.left=-pic*imgWidth+"px";
        }
        pic--;
        animate(ulObj,-pic*imgWidth);
        for (var i = 0; i < olObj.children.length; i++) {
            olObj.children[i].removeAttribute("class");
        }
        //当前的pic索引对应的按钮设置颜色
        olObj.children[pic].className = "current";
    };
 
    //设置任意的一个元素,移动到指定的目标位置
    function animate(element, target) {
        clearInterval(element.timeId);
        //定时器的id值存储到对象的一个属性中
        element.timeId = setInterval(function () {
            //获取元素的当前的位置,数字类型
            var current = element.offsetLeft;
            //每次移动的距离
            var step = 10;
            step = current < target ? step : -step;
            //当前移动到位置
            current += step;
            if (Math.abs(current - target) > Math.abs(step)) {
                element.style.left = current + "px";
            } else {
                //清理定时器
                clearInterval(element.timeId);
                //直接到达目标
                element.style.left = target + "px";
            }
        }, 10);
    }
</script>

</td> 

</tr>
</table>	
</body>
</html>