<?php require_once('Connections/dbconnect.php'); ?>
<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>後台管理 | 影音編輯</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />
<link type="text/css" href="js/wysiwyg/jquery.wysiwyg.css" rel="stylesheet" />
    <script type="text/javascript" src="../../ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/wysiwyg/jquery.wysiwyg.js"></script>
    
    	<script type="text/javascript" src="js/jquery.ui.mouse.js"></script>
	<script type="text/javascript" src="js/ajaxfileupload.js"></script> 
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" /> 
  
    <script type="text/javascript">
	$(document).ready(function() {
		$('#wysiwyg').wysiwyg();
	});
    </script>    
    <script type="text/javascript" src="js/blend/jquery.blend.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.sortable.js"></script>    
    <script type="text/javascript" src="js/ui.dialog.js"></script>
    <script type="text/javascript" src="js/effects.js"></script>
    <!--[if IE6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
    <![endif]-->
    <!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="css/iefix.css" />
	<script src="js/pngfix.js"></script>
    <script>
        DD_belatedPNG.fix('#menu ul li a span span');
    </script>    
    <![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
 <script> 
        $(document).ready(function() { 
			$('#UploadForm').on('submit', function(e) {
				e.preventDefault();
				$('#SubmitButton').attr('disabled', ''); // disable upload button
				//show uploading message
				$("#output").html('<div style="padding:10px"><img src="images/ajax-loader.gif" alt="Please Wait"/> <span>Uploading...</span></div>');
				$(this).ajaxSubmit({
					target: '#output',
					success:  afterSuccess //call function after success
				});
			});
        }); 

		function afterSuccess()  { 
			$('#UploadForm').resetForm();  // reset form
			$('#SubmitButton').removeAttr('disabled'); //enable submit button

		} 
    </script> 

 <link href="style/style.css" rel="stylesheet" type="text/css" />
    </head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->
      
    <!--LOGO-->
	<div class="grid_8" id="logo"><img src="images/logo-1.png" width="80" height="75" alt="TafalongLogo" longdesc="dashboard.php" /></a><a href="dashboard.php"><img src="images/TafaLOGO.png" width="293" height="79" alt="TAFALONG" longdesc="dashboard.php" /></div>
    <div class="grid_8">
<!-- USER TOOLS START -->      
      <div id="user_tools"><span><a href="#" class="mail">(1)</a> 歡迎來到後台管理 <a href="#">Admin Username</a>  |  <a class="dropdown" href="#">Change Theme</a>  |  <a href="">登出</a></span></div>
    </div>
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="dashboard.php" class="main"><span class="outer"><span class="inner dashboard">首頁</span></span></a></li>
				<li class="item middle" id="seven"><a href="news.php" class="main"><span class="outer"><span class="inner newsletter">最新消息</span></span></a></li> 
        <li class="item middle" id="two"><a href="article_area.php" class="main"><span class="outer"><span class="inner content">文案編輯</span></span></a></li>
				<li class="item middle" id="six"><a href="picture.php" class="main current"><span class="outer"><span class="inner event_manager">照片編輯</span></span></a></li> 
		<li class="item middle" id="five"><a href="video.php" class="main"><span class="outer"><span class="inner media_library">影片編輯</span></span></a></li>  
              <li class="item middle" id="three"><a href="advertising.php" class="main"><span class="outer"><span class="inner reports"></span>企業廣告</span></a></li>
        <li class="item middle" id="four"><a href="users.php" class="main"><span class="outer"><span class="inner users">網站管理員</span></span></a></li>
  		<li class="item last" id="eight"><a href="shop.php" class="main"><span class="outer"><span class="inner settings">購物管理</span></span></a></li>   
		    </ul>
</div>
<!-- MENU END -->
</div>
<div class="grid_16">
<!-- TABS START -->
    <div id="tabs">
         <div class="container">
            <ul>
                      <li><a href="picture.php" class="current"><span>編輯照片分享</span></a></li>
                      <li><a href="video.php"><span>編輯影片分享</span></a></li>


          
           </ul>
        </div>
    </div>
<!-- TABS END -->    
</div>
<!-- HIDDEN SUBMENU START -->

<!-- HIDDEN SUBMENU END -->  

<!-- CONTENT START -->
    <div class="grid_16" id="content">
   <!-- CONTENT TITLE -->
    <div class="grid_9">
    <h1 class="content_edit">新增

	</h1>

    <p> 文章標題限制三十個中文字元。文章內容不限字元。請確認您的文章無誤再上傳。建議先在別的地方打好文章再貼到這邊上傳。有任何問題請聯絡系統管理員。 </p>

    </div>
    <!-- CONTENT TITLE RIGHT BOX -->
    <div class="grid_6" id="eventbox"><a href="#" class="inline_tip">此頁面只提供新增文章資料</a></div>
    <div class="clear">
    </div>
	<div class="hidden">
        <p class="info" id="success"><span class="info_inner">修改成功！</span></p>
        <p class="info" id="error"><span class="info_inner">系統錯誤，無法修改！請聯絡管理員</span></p>
        <p class="info" id="warning"><span class="info_inner">網路錯誤無法上傳！</span></p>
      </div> 
<!--    TEXT CONTENT OR ANY OTHER CONTENT START     -->
    <div class="grid_15" id="textcontent">
      <div id="Wrapper">

<div align="center">
<form name="UploadForm" action="processupload.php" method="POST" enctype="multipart/form-data" id="UploadForm">

<table width="500" border="3" cellspacing="2">
  <tr>
    <th width="63" scope="row">類別</th>
    <td width="417"><select type="text" name="type">
      <option value="life">太巴塱社區生活圖片</option>
      <option value="event">活動類圖片</option>
      <option value="festival">節慶類圖片</option>
    </select></td>
  </tr>
  <tr>
    <th scope="row">標題 :</th>
    <td><input type="text" name="title" id="title" value="" size="50" /></td>
  </tr>
  <tr>
    <th scope="row">簡介 :</th>
    <td><input type="text" name="intro" id="intro" value="" size="50" /></td>
  </tr>
</table>


<input name="ImageFile" type="file" />

<input type="submit"  id="SubmitButton" value="上傳圖片" />
<input type="hidden" name="MM_insert" value="UploadForm" />

</form>
<div id="output"></div>




   
    </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

		<!-- This contains the hidden content for inline calls -->

        <!--Second hidden element called from the tip message right of the title-->

</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
	Website Administration by <a href="../index.htm">WebGurus
</a></div>
<!-- FOOTER END -->
</body>
</html>

