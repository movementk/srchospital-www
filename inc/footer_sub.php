<footer id="footer">
    <?//php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/find_treatments.php'); ?>
    <div class="full-contact">
        <div class="container">
            <div class="row">
                <section class="col-xs-4">
                    <h4 style="margin-bottom:5px;">경기광주 : <i>1577-3622</i></h4>
                    <h4 style="font-size:13px;">경기도 광주시 초월읍 경수길 25 (지월리 729-6)</h4>	
                    <h5>진료시간</h5>
                    <dl>
                        <dt>월~금요일</dt>
                        <dd>09:00 ~ 17:00</dd>
                        <dt>토요일</dt>
                        <dd>09:00 ~ 13:00</dd>
                        <dt>평일점심시간</dt>
                        <dd>12:00 ~ 오후 13:00</dd>
                        <dt>일/공휴일</dt>
                        <dd>휴진</dd>
                    </dl>
                </section>
                <section class="col-xs-4">
                    <h4 style="margin-bottom:5px;">서울 : <i>02-871-3636</i></h4>
                    <h4 style="font-size:13px;">서울 관악구 보라매로 44(봉천동722-19) SRC서울센터 1F/2F</h4>
                    <h5>진료시간</h5>
                    <dl>
                        <dt>월~금요일</dt>
                        <dd>09:00 ~ 18:00</dd>
                        <dt>점심시간</dt>
                        <dd>12:00 ~ 13:00</dd>
                        <dt>토/일/공휴일</dt>
                        <dd>휴진</dd>
                    </dl>
                </section>
                <div class="col-xs-4">
                    <ul class="branch">
                        <li><a href="http://www.srcdreamlife.com" target="_blank">사회복지법인 SRC 요양병원 사이트 바로가기</a></li>
                        <li><a href="http://health.srchospital.com" target="_blank">사회복지법인 SRC 건강증진센터 사이트 바로가기</a></li>
                        <li><a href="http://speech.srchospital.com" target="_blank">사회복지법인 SRC 언어,심리상담센터 사이트 바로가기</a></li>
                        <li><a href="http://givedreams.or.kr/" target="_blank">사회복지법인 기브드림스 사이트 바로가기</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="partners"> 
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <h5>협력기관 및 병원</h5>
                    <p class="controls">
                        <a class="prev" href="#"><span class="glyphicon glyphicon-menu-left"></span></a>
                        <a class="next" href="#"><span class="glyphicon glyphicon-menu-right"></span></a>
                    </p>
                </div>
                <div class="col-xs-10">
                    <ul class="slider">
						<?
						$fAr = get_banner("M2");
						for($i=0;$i<sizeof($fAr);$i++){
						?>
						<li><? if($fAr[$i]["blink"]){ ?><a href="<?=$fAr[$i]["blink"]?>"><? } ?><img src="<?=$fAr[$i]["files"][0]["path"]?>/<?=$fAr[$i]["files"][0]["file_source"]?>" alt=""></a></li>
						<?
						}
						?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="information">
        <div class="container">
            <div class="row">
                <div class="col-xs-10">
                    <ul class="policy">
                        <li><a href="/policy/privacy_statsment.php">개인정보보호정책</a></li>
                        <li><a href="/policy/service_terms.php">이용약관</a></li>
                        <li><a href="#">이메일무단수집거부</a></li>
                        <li><a href="#">찾아오시는 길</a></li>
                    </ul>
                    <ul class="company">
                        <li>
                            <address>경기도 광주시 초월읍 경수길 25 (지월리 729-6)</address>
                        </li>
                        <li>
                            <dl>
                                <dt>대표명</dt>
                                <dd>민오식</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>사업자등록번호</dt>
                                <dd>233-82-00339</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>대표번호</dt>
                                <dd>1577-3622</dd>
                            </dl>
                        </li>
                        <li>
                            <dl>
                                <dt>팩스</dt>
                                <dd>031-799-3720</dd>
                            </dl>
                        </li>
                    </ul>
                    <p class="copyright">COPYRIGHT (C) 2016 SRC재활병원.  ALL RIGHT RESERVED. SITE BY <a href="#" target="_blank">MOVEMENT K GROUP</a>.</p>
                </div>
                <div class="col-xs-2">
                    <div class="family-sites dropup">
                        <button class="btn btn-block dropdown-toggle" type="button" id="family-sites" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Family Site
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="family-sites">
                            <li><a href="http://www.ilovesamyook.org/" target="_blank">SRC보듬터</a></li>
							<li><a href="http://samyook.or.kr/" target="_blank">SRC재활학교</a></li>
							<li><a href="http://www.srcsportscenter.com/" target="_blank">SRC재활체육관</a></li>
							<li><a href="http://www.worksamyook.or.kr/" target="_blank">SRC재활작업소</a></li>
							<li><a href="http://www.seoul36.co.kr/" target="_blank">SRC서울센터</a></li>
							<li><a href="http://ilovenambu.or.kr/" target="_blank">서울시남부장애인종합복지관</a></li>
							<li><a href="http://www.benelife.org/" target="_blank">베네라이프요양원</a></li>
							<li><a href="http://bene-life.org//" target="_blank">베네라이프요병양원</a></li>
							<li><a href="http://www.givedreams.or.kr/" target="_blank">기브드림스</a></li>
							<li><a href="http://www.mw.go.kr/" target="_blank">보건복지가족부</a></li>
							<li><a href="http://www.freeget.net/" target="_blank">한국장애인재활협회</a></li>
							<li><a href="http://www.kawid.or.kr/" target="_blank">한국장애인복지시설협회</a></li>
							<li><a href="http://www.kavrd.or.kr/" target="_blank">한국장애인직업재활시설협회</a></li>
							<li><a href="http://www.haelim.or.kr/" target="_blank">부천혜림원</a></li>
							<li><a href="http://www.jbhl.or.kr/" target="_blank">장봉혜림재활원</a></li>
							<li><a href="http://www.kyonam.org/" target="_blank">교남소망의집</a></li>
							<li><a href="http://www.dong-chun.org/" target="_blank">동천의집</a></li>
							<li><a href="http://www.hamgge.or.kr/" target="_blank">하늘꿈터</a></li>
							<li><a href="http://www.yilter.or.kr/" target="_blank">열림일터</a></li>
							<li><a href="http://www.flowerbed.or.kr/" target="_blank">천안시장애인보호작업장</a></li>
							<li><a href="http://www.ansanrehab.or.kr/" target="_blank">안산시장애인종합복지관</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="quick collapsed">
        <ul>
            <li><a href="/customer/appoint_step1.php">온라인 예약<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="/outpatient/information.php">진료시간<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="/introduce/car.php">오시는 길<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="/customer/certificate.php">증명서 발급<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="/introduce/look_round.php">병원둘러보기<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="/introduce/bus.php">셔틀버스<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="https://www.youtube.com/channel/UCNj73RbM-is0pqoqvHc-ysA" target="_blank">유투브<span class="glyphicon glyphicon-menu-right"></span></a></li>
            <li><a href="http://blog.naver.com/srcdream" target="_blank">블로그<span class="glyphicon glyphicon-menu-right"></span></a></li>
        </ul>
        <button type="button" class="btn">퀵메뉴 <span>닫기</span><span class="glyphicon glyphicon-remove"></span></button>
    </nav>
</footer>
<!--[if lt IE 9]>
<div class="lt-ie9-not-supported-modal">
    <div class="lt-ie9-not-supported-bg"></div>
    <div class="lt-ie9-not-supported-content">
        <h1><small>인터넷익스플로러</small><br>업그레이드 안내</h1>
        <p class="notice">인터넷 익스플로러 8 이하버전에서는<br> 사이트 이용이 원활하지 않을 수 있으니 반드시<br> <strong>최신버전으로 업그레이드 후 이용</strong>하시기 바랍니다.</p>
        <p class="icon"><img src="/images/ico_ie_pc.jpg" alt=""></p>
        <a href="http://windows.microsoft.com/ko-kr/internet-explorer/download-ie" target="_blank">지금 업그레이드하기</a>
    </div>
</div>
<![endif]-->