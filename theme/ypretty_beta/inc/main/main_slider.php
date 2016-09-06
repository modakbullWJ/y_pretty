<div id="main_slide">

						<div class="area">
							<div class="screen">
								<ul class="imgs">
									<li><img src="<?php echo G5_THEME_URL ?>/img/main/slide.jpg" alt="" /></li>
									<li><img src="<?php echo G5_THEME_URL ?>/img/main/slide2.jpg" alt="" /></li>
									<li><img src="<?php echo G5_THEME_URL ?>/img/main/slide3.jpg" alt="" /></li>
								</ul>
							</div>
							<div class="btns">
								<a class="btn_prev" href="#self"><img src="<?php echo G5_THEME_URL ?>/img/main/prev.png" alt="" /></a>
								<a class="btn_next" href="#self"><img src="<?php echo G5_THEME_URL ?>/img/main/next.png" alt="" /></a>
							</div>
							<div class="navi"></div>
						</div>

					<script type="text/javascript">
					$(document).ready(function(){
						//아래 옵션들을 설정하지 않을 시 기본값으로 적용이 됩니다.
						$('.area').bannerSlider({
							imgs	: $('.area .imgs'),
							prev	: $('.area .btn_prev'),
							next	: $('.area .btn_next'),
							navi	: $('.area .navi'),
							type	: 'fade',	//이미지가 넘어가는 효과를 결정해줍니다. // slide, fade
							auto	: true,	//이미지를 자동으로 넘길지 결정해줍니다. // false, true
							delay	: 3000,		//이미지를 자동으로 넘길 시 넘어가는 시간을 정해줍니다. // 1000 = 1초
							speed	: 500		//이미지가 넘어가는 시간입니다. // 1000 = 1초
						});
					});
					</script>

				</div>
