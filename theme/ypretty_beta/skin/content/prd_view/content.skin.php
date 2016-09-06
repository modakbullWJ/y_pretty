<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

				<div id="sub_layout">


						<div class="sub_top_bg"></div>
						<div class="sub_contents_wrap">

								<div class="side_nav">
										<h2 class="subpg_title">화장품 <span>Ι cosmetic</span></h2>
										<ul>
												<li><a href="#">MTS앰플</a></li>
												<li><a href="#">기능성 세럼</a></li>
												<li><a href="#">재생크림</a></li>
										</ul>
								</div>
								<div class="sub_contnens">
										<p class="page_nav">HOME &gt; 화장품 &gt; <strong>MTS앰플</strong></p>

										<div class="prd_view">

												<div class="prd_detail">
														<div class="prd_img">
																<img src="<?php echo G5_THEME_URL ?>/img/main/thum_01.png" alt="상품사진"/>
																<ul>
																		<li><img src="<?php echo G5_THEME_URL ?>/img/main/thum_01.png" alt=""/></li>
																		<li><img src="<?php echo G5_THEME_URL ?>/img/main/thum_01.png" alt=""/></li>
																		<li><img src="<?php echo G5_THEME_URL ?>/img/main/thum_01.png" alt=""/></li>
																		<li><img src="<?php echo G5_THEME_URL ?>/img/main/thum_01.png" alt=""/></li>
																</ul>
														</div>
														<div class="prd_info">
																<h4>아미아디지털머신세트</h4>
																<div class="info_default">
																		<dl>
																				<dt>이쁘리띠 가격</dt>
																				<dd><strong>4,500,000</strong> 원</dd>
																				<dt>국내·해외 배송</dt>
																				<dd>국내배송</dd>
																				<dt>배송비</dt>
																				<dd>선결제(50,00원 이상 무료배송)</dd>
																				<dt>제품종류</dt>
																				<dd>
																					<select>
																						<option>선택하세요.</option>
																						<option>1. A타입 / 굵은컬 / L (+100,000)</option>
																						<option>2. A타입 / 굵은컬 / M (+50,000)</option>
																						<option>3. A타입 / 굵은컬 / S</option>
																						<option>4. A타입 / 얇은컬 / L (+100,000)</option>
																						<option>5. A타입 / 얇은컬 / M (+50,000)</option>
																						<option>6. A타입 / 얇은컬 / S</option>
																						<option>7. B타입 / 굵은컬 / L (+100,000)</option>
																						<option>8. B타입 / 굵은컬 / M (+50,000)</option>
																						<option>9. B타입 / 굵은컬 / S</option>
																						<option>10. B타입 / 얇은컬 / L (+100,000)</option>
																						<option>11. B타입 / 얇은컬 / M (+50,000)</option>
																						<option>12. B타입 / 얇은컬 / S</option>
																					</select>
																				</dd>
																		</dl>

																		<dl class="count"><!--상품선택시 나타나는-->
																				<dt class="select_prd">1. A타입 / 굵은컬 / L (+100,000)</dt>
																				<dd class="count_btn">
																					<button>-</button><input type="text" value="1"><button>+</button>
																				</dd>
																				<dd class="price">
																					<strong>4,600,000</strong> 원
																				</dd>
																				<dt class="select_prd">8. B타입 / 굵은컬 / M (+50,000)</dt>
																				<dd class="count_btn">
																					<button>-</button><input type="text" value="1"><button>+</button>
																				</dd>
																				<dd class="price">
																					<strong>4,550,000</strong> 원
																				</dd>
																		</dl>
																		<dl class="sum">
																				<dt>총 합계금액</dt>
																				<dd><strong>9,150,000</strong> 원</dd>
																		</dl>

																</div><!--/info_default-->
																<div class="btnbox">
																		<input type="button" value="바로 구매하기" class="buy">
																		<input type="button" value="장바구니" class="cart">
																		<input type="button" value="찜하기" class="like">
																</div>


														</div>
												</div><!--/prd_detail-->
										</div><!--/prd_view-->
										<div class="deal_tab">
												<ul>
														<li><a href="#" class="selected">상품정보</a></li>
														<li><a href="#">사용후기</a></li>
														<li><a href="#">상품문의</a></li>
														<li><a href="#">배송정보</a></li>
														<li><a href="#">교환정보</a></li>
														<li><a href="#">관련상품</a></li>
												</ul>
										</div>
										<div class="deal_introduce"><!--상세페이지시작-->
												<img src="<?php echo G5_THEME_URL ?>/img/main/deal_prd1.png" alt="제품상세페이지"/>
										</div>
								</div><!--/sub_contnens-->


						</div><!--/sub_contents_wrap-->


				</div>
