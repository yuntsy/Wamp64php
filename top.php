<?php
   //session_start();
   include("conn/conn.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�������</title>
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
            font-family: '����';
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
              <td><a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mrbccd.com');">��Ϊ��ҳ</a> | <a href="javascript:window.external.addFavorite('http://www.mrbccd.com/','���������̳�');">�����ղ� </a><a href="mailto:mrbccd**@mrbccd**.com">| ��ϵվ��</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
            </tr>
          </table>
<table height="20" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form" method="post" action="findsp.php">
                <tr>
                  <td width="81" height="30" align="right">&nbsp;</td>
                  <td width="500" height="30" valign="middle"><div align="left">&nbsp;<span class="style4"><img src="images/33.png" width="20" height="12">&nbsp;�������Ʒ���ƣ�</span>
                          <input type="text" name="name" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="��������">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highfind.php';" value="�߼�����">
</div></td>
                </tr>
              </form>
</table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="568" height="32" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">��վ��ҳ</a>&nbsp;| <a href="shownew.php">������Ʒ</a> | <a href="showtuijian.php">�Ƽ���Ʒ</a> | <a href="showhot.php">������Ʒ</a>&nbsp;|&nbsp;<a href="showfenlei.php">��Ʒ����</a>&nbsp;|&nbsp;<a href="usercenter.php">�û�����</a>&nbsp;|&nbsp;<a href="finddd.php">������ѯ</a>&nbsp;|&nbsp;<a href="gouwu1.php">�ҵĹ��ﳵ</a></td>
    <td width="121" align="center" bgcolor="#FFFFFF">
      <?php
	  if(isset($_SESSION['username']) && $_SESSION['username']!=""){
	    echo "��ǰ�û�:$_SESSION[username]";
	  }
	?>
    </td>
    <td width="77" bgcolor="#FFFFFF"> 
	<?php
	if(isset($_SESSION['username']) && $_SESSION['username']!=""){
	    echo "<a href='logout.php'>ע���뿪</a>";
	  }
	?>
    </td>
  </tr>
  <tr>

    <td >


<div class="box" id="box">
    <div class="inner">
        <!--�ֲ�ͼ-->
        <ul>
            <li><a href="#"><img src="images3/1.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/2.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/3.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/4.jpg" alt=""></a></li>
            <li><a href="#"><img src="images3/5.jpg" alt=""></a></li>
 
        </ul>
 
        <ol class="bar">
 
        </ol>
        <!--���ҽ���-->
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
     * @param id  ����Ԫ�ص�id
     * @returns {HTMLElement | null}  ���ر�ǩ���󣬷����ȡԪ��
     */
    function my$(id) {
        return document.getElementById(id);
    }
 
    //��ȡ��Ԫ�أ��������
    var box=my$("box");
    var inner=box.children[0];
    var ulObj=inner.children[0];
    var list=ulObj.children;
    var olObj=inner.children[1];
    var arr=my$("arr");
    var imgWidth=inner.offsetWidth;
    var right=my$("right");
    var pic=0;
    //����li����������С��ť
    for(var i=0;i<list.length;i++){
        var liObj=document.createElement("li");
 
        olObj.appendChild(liObj);
        liObj.innerText=(i+1);
        liObj.setAttribute("index",i);
 
        //Ϊ��ťע��mouseover�¼�
        liObj.onmouseover=function () {
            //��������а�ť����ʽ
 
            for (var j=0;j<olObj.children.length;j++){
                olObj.children[j].removeAttribute("class");
            }
            this.className="current";
            pic=this.getAttribute("index");
            animate(ulObj,-pic*imgWidth);
        }
 
    }
 
 
    //����ol�е�һ��li�б�����ɫ
    olObj.children[0].className = "current";
    //��¡һ��ul�е�һ��li,���뵽ul�е����=====��¡
    ulObj.appendChild(ulObj.children[0].cloneNode(true));
 
    var timeId=setInterval(onmouseclickHandle,1000);
    //���ҽ���ʵ�ֵ���л�ͼƬ����
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
        //���pic��ֵ��5,ǡ����ul��li�ĸ���-1��ֵ,��ʱҳ����ʾ������ͼƬ,���û�����Ϊ���ǵ�һ��ͼ,
        //����,����û��ٴε����ť,�û�Ӧ�ÿ����ڶ���ͼƬ
        if (pic == list.length - 1) {
            //��δӵ�6��ͼ,��ת����һ��ͼ
            pic = 0;//������pic=0
            ulObj.style.left = 0 + "px";//��ul��λ�û�ԭ�ɿ�ʼ��Ĭ��λ��
        }
        pic++;//��������pic��1,��ô��ʱ�û��ͻῴ���ڶ���ͼƬ��
        animate(ulObj, -pic * imgWidth);//pic��0��ֵ��1֮��,pic��ֵ��1,Ȼ��ul�ƶ���ȥһ��ͼƬ
        //���pic==5˵��,��ʱ��ʾ��6��ͼ(�����ǵ�һ��ͼƬ),��һ��С��ť����ɫ,
        if (pic == list.length - 1) {
            //�������ť��ɫ�ɵ�
            olObj.children[olObj.children.length - 1].className = "";
            //��һ����ť��ɫ������
            olObj.children[0].className = "current";
        } else {
            //�ɵ����е�С��ť�ı�����ɫ
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
        //��ǰ��pic������Ӧ�İ�ť������ɫ
        olObj.children[pic].className = "current";
    };
 
    //���������һ��Ԫ��,�ƶ���ָ����Ŀ��λ��
    function animate(element, target) {
        clearInterval(element.timeId);
        //��ʱ����idֵ�洢�������һ��������
        element.timeId = setInterval(function () {
            //��ȡԪ�صĵ�ǰ��λ��,��������
            var current = element.offsetLeft;
            //ÿ���ƶ��ľ���
            var step = 10;
            step = current < target ? step : -step;
            //��ǰ�ƶ���λ��
            current += step;
            if (Math.abs(current - target) > Math.abs(step)) {
                element.style.left = current + "px";
            } else {
                //����ʱ��
                clearInterval(element.timeId);
                //ֱ�ӵ���Ŀ��
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