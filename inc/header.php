<a href="#gnb" class="skip-nav-item sr-only sr-only-focusable">주메뉴로 건너뛰기</a>
<a href="#content" class="skip-nav-item sr-only sr-only-focusable">컨텐츠로 건너뛰기</a>
<header id="header">
    <nav class="top">
        <div class="container">
            <h1><a href="/"><img src="/images/logo.png" alt="사회복지법인 SRC 병원"></a></h1>
            <div class="branch">
                <p><img src="/images/main/ico_prize.png" alt=""></p>
                <ul>
                    <li class="active"><span class="btn">광주병원</span></li>
                    <li><a href="http://www.seoulsrc.com/" class="btn" target="_blank">서울부설의원</a></li>
                </ul>
            </div>
			<? if($is_member){ ?>
            <ul class="member">
                <li><a href="/board/module/incmember/logout.php">로그아웃</a></li>
                <li><a href="/member/edit_form.php">정보수정</a></li>
                <li><a href="#">사이트맵</a></li>
            </ul>
			<? } ?>
			<? if($is_guest){ ?>
            <ul class="member">
                <li><a href="/member/login.php">로그인</a></li>
                <li><a href="/member/join_terms.php">회원가입</a></li>
                <li><a href="/site_map.php">사이트맵</a></li>
            </ul>
			<? } ?>
			<!-- 
            <ul class="lang" style="display:none;">
                <li><a href="#"><img src="/images/ico_flag_us.png" alt="영문"></a></li>
                <li><a href="#"><img src="/images/ico_flag_cn.png" alt="중문"></a></li>
            </ul>
			-->
            <div class="family-sites dropdown">
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
    </nav>
    <nav id="gnb" tabindex="-1">
        <div>
            <ul>
                <li>
                    <a href="#">병원소개</a>
                    <ul>
                        <li><a href="/introduce/greetings.php">인사말</a></li>
                        <li><a href="/introduce/about.php">병원소개</a></li>
                        <li><a href="/introduce/history.php">연혁</a></li>
                        <li><a href="/introduce/look_round.php">병원 둘러보기</a></li>
                        <li><a href="/introduce/bus.php">오시는 길</a></li>
                        <li><a href="/introduce/partners.php">협력기관</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">의료서비스</a>
                    <ul>
						<li><a href="/introduce/medical_team.php">의료진 소개</a></li>
						<li><a href="/outpatient/information.php">진료안내</a></li>
						<li role="presentation"><span class="bar"></span></li>
						<li><a href="/inpatient/rehab_guide.php">재활병원 입원안내</a></li>
						<li><a href="/inpatient/rehabilitation.php">재활요양 입원안내</a></li>
						<li><a href="/inpatient/vip.php">특실입원안내</a></li>
						<li role="presentation"><span class="bar"></span></li>
						<li><a href="#">건강증진센터</a></li>                       
						<li><a href="/inpatient/carcinoma.php">암요양병원</a></li>                       
                    </ul>
                </li>
                <li>
                    <a href="#">진료과목</a>
                    <ul>
						<li class="bold-txt"><a href="/departments/rehabilitation.php">재활의학과</a></li>
						<li><a href="/outpatient/rehabilitation/spine.php">척추관절재활센터</a></li>
                        <li><a href="/inpatient/stroke.php">뇌신경 재활센터</a></li>
                        <li><a href="/inpatient/spine.php">척수손상재활센터</a></li>
                        <li><a href="/inpatient/breath.php">호흡 재활센터</a></li>
						<li><a href="/inpatient/young.php">소아 재활센터</a></li>
						<li><a href="/inpatient/cancer.php">암통증관리센터</a></li>
						<li><a href="/departments/treatment/adult_exercise.php">SRC치료법</a></li>
						<li role="presentation"><span class="bar"></span></li>
						<li class="bold-txt"><a href="/departments/internal.php">내과</a></li>
						<li role="presentation"><span class="bar"></span></li>
                        <li class="bold-txt"><a href="/departments/pediatric.php">가정의학과</a></li>
						<li role="presentation"><span class="bar"></span></li>
						<li class="bold-txt"><a href="/departments/oriental.php">한의과</a></li>                       
                    </ul>
                </li>
                <li>
                    <a href="#">고객서비스</a>
                    <ul>
                        <li><a href="/customer/faq.php">자주하는 질문</a></li>
                        <li><a href="/customer/certificate.php">제증명서 발급안내</a></li>
                        <li><a href="/customer/appoint_login.php">온라인 예약</a></li>
                        <li><a href="/customer/appoint_step2.php">예약확인</a></li>
                        <li><a href="/customer/contact.php">부서 전화번호</a></li>
						<li role="presentation"><span class="bar"></span></li>
						<li><a href="/inpatient/business_team.php">환자지원 프로그램</a></li>
						<li><a href="/inpatient/menu_guide.php">입원 식단 안내</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">커뮤니티</a>
                    <ul>
                        <li><a href="/community/news_list.php">병원소식</a></li>
                        <li><a href="/community/review_list.php">치료후기</a></li>
                        <li><a href="/community/photo_list.php">전·후 사진</a></li>
                        <li><a href="/community/health_list.php">건강정보</a></li>
                        <li><a href="/community/video.php">영상게시판</a></li>
                        <li><a href="/community/social_contribution.php">사회공헌 사업</a></li>
                        <li><a href="/community/recruit_list.php">채용정보</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="backface">
            <div></div>
        </div>
    </nav>
</header>
