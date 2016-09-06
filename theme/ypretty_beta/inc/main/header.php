<!-- 메인메뉴 -->
 <script type="text/javascript">
 //GNB
	$(document).ready(function() {
		 $(".subnav_hover").css({display: "none"});
	var useragent = navigator.userAgent;
	 // IE7이 아니고 IE6일때는
	 if ((useragent.indexOf('MSIE 6')>0) && (useragent.indexOf('MSIE 7')==-1))
	 {
		 $("#mainnav li").hover(function() {
			 $(".subnav_hover").slideDown('normal').show();
		 });
		 $("#mainnav").hover(function() {
			 $(this).show();
		 },function(){
			 $(this).hide();
			 $("header").mouseleave(function() {
			 });
		 })
	 } else {
		 $("#mainnav li").hover(function() {
			 $(".subnav_hover").show();
		 });
		 $(".subnav_hover").hover(function() {
			 $(this).show();
		 },function(){
			 $(this).slideUp(300);
			 $("header").mouseleave(function() {
				 setTimeout("jQuery('.subnav_hover').slideUp(140;)",250)
				 $(".subnav_hover").fadeOut();
			 });
		 })
	 }
	});
 </script>
 <!-- /메인메뉴 -->

 <div id="main_wrap">

		 <div id="header">
				 <div class="top">
						 <ul class="sns_icon">
								 <li class=""><a href="#"><img src="<?php echo G5_THEME_URL ?>/img/main/sns_facebook.png" alt="페이스북" /></a></li>
								 <li class=""><a href="#"><img src="<?php echo G5_THEME_URL ?>/img/main/sns_kakao.png" alt="카카오톡" /></a></li>
								 <li class=""><a href="#"><img src="<?php echo G5_THEME_URL ?>/img/main/sns_naver.png" alt="네이버카페" /></a></li>
								 <li class=""><a href="#"><img src="<?php echo G5_THEME_URL ?>/img/main/sns_wechat.png" alt="위챗" /></a></li>
						 </ul>
						 <ul class="gnb">
               <?php  if ($is_member) { ?>
               <?php if ($is_admin) {  ?>
               <li><a href="<?php echo G5_ADMIN_URL; ?>/shop_admin/"><b>관리자</b></a></li>
               <?php }  ?>
               <!-- <li><a href="<?php //echo G5_BBS_URL; ?>/member_confirm.php?url=register_form.php">정보수정</a></li> -->
               <li><a href="<?php echo G5_BBS_URL; ?>/logout.php?url=shop">로그아웃</a></li>
               <?php } else { ?>
               <li><a href="<?php echo G5_BBS_URL; ?>/register.php">회원가입</a></li>
               <li><a href="<?php echo G5_BBS_URL; ?>/login.php?url=<?php echo $urlencode; ?>"><b>로그인</b></a></li>
               <?php } ?>
								 <li class=""><a href="#">마이페이지</a></li>
								 <li class=""><a href="#">장바구니</a></li>
								 <li class=""><a href="#">고객센터</a></li>
						 </ul>
						 <h1 class="logo"><a href="/"><img src="<?php echo G5_THEME_URL ?>/img/main/logo.png" alt="로고" /></a></h1>
						 <div class="search">
								 <input type="text" id="search_bar" class="search_bar"><button id="search_btn" class="search_btn"></button>
						 </div>
				 </div>
				 <div class="lnb">

						 <ul id="mainnav">
								 <li class=""><a href="<?php echo G5_SHOP_URL?>/list.php?ca_id=10">화장품</a></li>
								 <li class=""><a href="#">반영구머신</a></li>
								 <li class=""><a href="#">반영구니들</a></li>
								 <li class=""><a href="#">반영구부자재</a></li>
								 <li class=""><a href="#">속눈썹</a></li>
								 <li class=""><a href="#">속눈썹부자재</a></li>
								 <li class=""><a href="#">배럴왁싱</a></li>
								 <li class=""><a href="#">배럴왁싱</a></li>
						 </ul>

						 <!--서브메뉴-->
						 <div class="subnav_hover">
								<div class="subnav_wrap">
										<ul class="subnav_list submenu1">
											 <li><a href="#">MTS 앰플</a></li>
											 <li><a href="#">기능성세럼</a></li>
											 <li><a href="#">재생크림</a></li>
										</ul>
										<ul class="subnav_list submenu2">
											 <li><a href="#">디지털</a></li>
											 <li><a href="#">아날로그</a></li>
											 <li><a href="#">레이저</a></li>
											 <li><a href="#">MTS</a></li>
											 <li><a href="#">머신부품</a></li>
										</ul>
										<ul class="subnav_list submenu3">
											 <li><a href="#">디지털</a></li>
											 <li><a href="#">아날로그</a></li>
											 <li><a href="#">엠보</a></li>
											 <li><a href="#">수지</a></li>
											 <li><a href="#">캡</a></li>
										</ul>
										<ul class="subnav_list submenu4">
											 <li><a href="#">클렌징</a></li>
											 <li><a href="#">모이스처라이징</a></li>
											 <li><a href="#">스페셜케어</a></li>
											 <li><a href="#">썬케어</a></li>
											 <li><a href="#">세트</a></li>
											 <li><a href="#">스페셜케어</a></li>
										</ul>
										<ul class="subnav_list submenu5">
											 <li><a href="#">클렌징</a></li>
											 <li><a href="#">모이스처라이징</a></li>
											 <li><a href="#">스페셜케어</a></li>
											 <li><a href="#">썬케어</a></li>
											 <li><a href="#">세트</a></li>
											 <li><a href="#">스페셜케어</a></li>
										</ul>
										<ul class="subnav_list submenu6">
											 <li><a href="#">클렌징</a></li>
											 <li><a href="#">모이스처라이징</a></li>
											 <li><a href="#">스페셜케어</a></li>
											 <li><a href="#">썬케어</a></li>
											 <li><a href="#">세트</a></li>
											 <li><a href="#">스페셜케어</a></li>
										</ul>
										<ul class="subnav_list submenu7">
											 <li><a href="#">클렌징</a></li>
											 <li><a href="#">모이스처라이징</a></li>
											 <li><a href="#">스페셜케어</a></li>
											 <li><a href="#">썬케어</a></li>
											 <li><a href="#">세트</a></li>
											 <li><a href="#">스페셜케어</a></li>
										</ul>
										<ul class="subnav_list submenu8">
											 <li><a href="#">클렌징</a></li>
											 <li><a href="#">모이스처라이징</a></li>
											 <li><a href="#">스페셜케어</a></li>
											 <li><a href="#">썬케어</a></li>
											 <li><a href="#">세트</a></li>
											 <li><a href="#">스페셜케어</a></li>
										</ul>
								 </div>
						 </div>
						 <!--서브메뉴끝-->

				 </div>
		 </div>
