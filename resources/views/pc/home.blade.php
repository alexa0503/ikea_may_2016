@extends('layouts.pc')
@section('content')
	<div class="innerDiv">
    	<div class="line1">
    	<div class="innerDiv">
        	<div class="kvBlock">
            	<div class="innerDiv">
                	<img src="{{asset('pc/images/fo1.png')}}" class="abs fo1">
                    <img src="{{asset('pc/images/fo2.png')}}" class="abs fo2">
                    <img src="{{asset('pc/images/fo3.png')}}" class="abs fo3">
                    <img src="{{asset('pc/images/fo4.png')}}" class="abs fo4">
                    <img src="{{asset('pc/images/fo5.png')}}" class="abs fo5">
                    <img src="{{asset('pc/images/fo6.png')}}" class="abs fo6">
                    <img src="{{asset('pc/images/fo7.png')}}" class="abs fo7">
                    <img src="{{asset('pc/images/fo8.png')}}" class="abs fo8">
                </div>
            </div>
        	<a href="javascript:void(0);" class="abs btn1" onClick="ga('send','event','UGC Recruitment','Click','Top_Banner_CTA_inner');topGoPage3();"><img src="{{asset('pc/images/btn1.png')}}"></a>
            <div class="abs vBlock">
            	<div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn1.jpg')}}" class="moImg"></a>
                        <div class="vGif" style="display:none;"><img src="{{asset('pc/images/v1.gif')}}" /></div>
                    </div>
                </div>
                <div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn2.jpg')}}" class="moImg"></a>
                        <video id="v2" src="{{asset('pc/images/v2.mp4?v=1')}}" preload="auto" style="display:none;"></video>
                    </div>
                </div>
                <div class="vInit">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn3.jpg')}}" class="moImg"></a>
                        <div class="vGif" style="display:none;"><img src="{{asset('pc/images/v3.jpg')}}" /></div>
                    </div>
                </div>
                <div class="vInit nomr">
                	<div class="innerDiv">
                    	<a href="javascript:void(0);"><img src="{{asset('pc/images/vBtn4.jpg')}}" class="moImg"></a>
                        <video id="v4" src="{{asset('pc/images/v4.mp4?v=1')}}" preload="auto" style="display:none;"></video>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--line1 end-->

        <div class="line2">
            <div class="innerDiv">
                <div class="abs fBlock">
                    <div class="innerDiv">
                        <div class="f1"></div>
                        <div class="f2" style="display:none;"></div>
                        <div class="f5" style="display:none;"></div>
                        <div class="f3" style="display:none;">
                            <div class="innerDiv">
                                <img src="" class="abs f3EndGif">
                                <div class="shareBtns">
                                    <a href="javascript:void(0);" class="abs sb1" data-qr="" onClick="ga('send','event','UGC Recruitment','Share','Share_WeChat');showQc(this);"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Weibo');" class="abs sb2 sinaShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Douban');" class="abs sb3 douban"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_QZone');" class="abs sb4 qzoneShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                </div>
                                <a href="javascript:void(0);" class="abs paBtn" onClick="ga('send','event','UGC Recruitment','Click','UGC_Replay');playAgain();">
                                    <img src="{{asset('pc/images/space.gif')}}" width="164" height="56"></a>
                                <a href="http://www.ikea.com/cn/zh/campaigns/2016_awgc/index.html" onClick="ga('send','event','UGC Recruitment','Click','Go_Cooking_With_Children');" target="_top" class="abs moreLink"><img src="{{asset('pc/images/space.gif')}}" width="80" height="18"></a>
                            </div>
                        </div>
                        <div class="f4" style="display:none;">
                        	<div class="innerDiv">
                                <img src="" class="abs f3EndGif">
                                <div class="shareBtns">
                                    <a href="javascript:void(0);" class="abs sb1" data-qr='' onClick="ga('send','event','UGC Recruitment','Share','Share_WeChat');showQc(this);"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Weibo');" class="abs sb2 sinaShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Douban');" class="abs sb3 douban"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_QZone');" class="abs sb4 qzoneShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                                </div>
                                <a href="javascript:void(0);" class="abs paBtn" onClick="ga('send','event','UGC Recruitment','Click','UGC_Replay');playAgain();">
                                    <img src="{{asset('pc/images/space.gif')}}" width="164" height="56"></a>
                                <a href="http://www.ikea.com/cn/zh/campaigns/2016_awgc/index.html" target="_top" class="abs moreLink"><img src="{{asset('pc/images/space.gif')}}" width="80" height="18"></a>
                            </div>
                        </div>
                        <div class="fTop">
                            <form action="{{url('post')}}" method="post" enctype="multipart/form-data" id="form">
                            <div class="innerDiv">
                                <div class="uploadImgBlock">
                                    <div class="innerDiv">
                                        <img src="" class="abs upBtnImg upLoadImg" id="upBtnImg">
                                        <img src="" class="abs upLoadImg" id="preview" />
                                        <img src="" class="abs upLoadImg" id="localImag" />
                                    </div>
                                </div>
                                <div class="stMask stMask6" style="display:none;"></div>
                                <img src="{{asset('pc/images/fImg1.png')}}" class="abs fImg1" style="display:none;">
                                <div class="mMask" id="mMask"></div>

                                <div class="fTxt1">*宝&nbsp;贝&nbsp;的&nbsp;姓&nbsp;名</div>
                                <div class="fTxt2">*您的联系电话</div>
                                <div class="fTxt3">*您的联系地址</div>

                                <div class="abs fNote">温馨提示：请务必填写真实信息，以免错失大奖！</div>
                                <div class="abs fLice"><label onClick="ga('send','event','UGC Recruitment','Click','T&C_Agreement');"><input type="checkbox" name="fLice" checked> 我已阅读并同意本次<a href="javascript:void(0);" onClick="showRule();">条件与条款</a></label></div>

                                <div class="fTemplete" style="display:none;">
                                    <a href="javascript:void(0);" class="abs ft ft1 fton"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft2"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft3"><img src="{{asset('pc/images/space.gif')}}"></a>
                                    <a href="javascript:void(0);" class="abs ft ft4"><img src="{{asset('pc/images/space.gif')}}"></a>
                                </div>

                                <input type="file" class="abs uploadBtn" name="photo" id="uploadBtn" onChange="setImagePreview();">
                                <a href="javascript:void(0);" class="abs youkuBtn" onClick="uploadVideo();"><img src="{{asset('pc/images/space.gif')}}" width="174" height="62"></a>

                                <input type="text" name="name" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Name');" class="fInput fInput1" maxlength="20">
                                <input type="text" name="mobile" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Tel');" class="fInput fInput2" maxlength="11">
                                <input type="text" name="province" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Province');" class="fInput fInput3" maxlength="10" placeholder="省">
                                <input type="text" name="city" onClick="ga('send','event','UGC Recruitment','Comment','Contact_City');" class="fInput fInput4" maxlength="10" placeholder="市">
                                <input type="text" name="address" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Address');" class="fInput fInput5" maxlength="40" placeholder="详细地址">
                                <input type="hidden" name="x" />
                                <input type="hidden" name="y" />
                                <input type="hidden" name="t" />
                                <input type="hidden" id="vid" name="vid" />
                                <input type="hidden" id="vt" name="vt" />
                                <input type="hidden" id="file_type" name="file_type" value="0" />
                                {!! csrf_field() !!}
                                <a href="javascript:void(0);" class="abs vPlayAgain" onClick="playAgain();" style="display:none;"><img src="{{asset('pc/images/space.gif')}}" width="164" height="64"></a>
                                <a href="javascript:void(0);" class="abs submitBtn" onClick="ga('send','event','UGC Recruitment','Click','UGC_Submission');submitL2();"><img src="{{asset('pc/images/space.gif')}}" width="164" height="64"></a>
                            </div>
                            </form>
                        </div>
                        <div class="fLoading" style="display:none;">
                            <div class="innerDiv">
                                <div class="fLoadImg"></div>
                            </div>
                        </div>
                        <div class="fUploadVideo" id="fUploadVideo" style="display:none;">
                            <div class="innerDiv">
                            	<iframe id="201661youku" src="http://community.ikea.cn/family/2016activity_awgc/public/youku" style="width:940px; height:470px; border:0; overflow: hidden; position:absolute; left:50%; top:50%; margin:-165px 0 0 -470px; background:#FFF;" name="201661youku" width="740" height="470px" scrolling="no" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qcBlock">
                    <div class="innerDiv">
                        <img src="{{asset('pc/images/testQc.png')}}" class="abs qcImg">
                        <div class="abs openQc" style="width:0;">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" class="abs qcCloseBtn" onClick="closeQc();"><img src="{{asset('pc/images/space.gif')}}" width="32" height="28"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--line2 end-->

        <div class="line3">
            <div class="innerDiv">
            	<div class="cs1">
                	<div class="innerDiv">
                    	<div class="abs seledTime">起床2分钟</div>
                        <a href="javascript:void(0);" class="abs csSelBtn" onClick="showSelTime();"><img src="{{asset('pc/images/space.gif')}}" width="214" height="54"></a>
                        <a href="javascript:void(0);" class="abs csBtn1" onClick="goCs2();"><img src="{{asset('pc/images/csBtn1.png')}}"></a>

                        <div class="selTimeBlock" style="display:none;">
                        	<ul>
                            	<li>
                                	<a href="javascript:void(0);" cst='1' onClick="selTime(this);">起床2分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='2' onClick="selTime(this);">早晨5分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='3' onClick="selTime(this);">早餐6分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='4' onClick="selTime(this);">餐前3分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='5' onClick="selTime(this);">午后9分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='6' onClick="selTime(this);">午后8分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='7' onClick="selTime(this);">晚上10分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='8' onClick="selTime(this);">餐后3分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='9' onClick="selTime(this);">晚上6分钟</a>
                                </li>
                                <li>
                                	<a href="javascript:void(0);" cst='10' onClick="selTime(this);">洗澡8分钟</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="cs2" style="display:none;">
                	<div class="innerDiv">
                    	<div class="csBlock1">
                        	<div class="swiper-container2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/00302267/" target="_top"><img src="{{asset('pc/images/csB1.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(1);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/40289952/" target="_top"><img src="{{asset('pc/images/csB2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(2);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/70158191/" target="_top"><img src="{{asset('pc/images/csB3.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(3);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/60286405/?query=SM%C3%85BIT+%E6%96%AF%E8%8E%AB%E6%AF%94+%E5%88%80%E5%92%8C%E5%88%A8%E5%88%80" target="_top"><img src="{{asset('pc/images/csB4.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(4);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/90206884/?query=%E5%8B%92%E5%85%8B%E6%96%AF%E5%A1%94" target="_top"><img src="{{asset('pc/images/csB5.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(5);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/60208479/" target="_top"><img src="{{asset('pc/images/csB6.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(6);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/20256617/" target="_top"><img src="{{asset('pc/images/csB7.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(7);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/00233962/?query=%E5%AE%89%E8%BE%BE%E6%A0%B9" target="_top"><img src="{{asset('pc/images/csB8.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(8);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/50285454/#/30167852" target="_top"><img src="{{asset('pc/images/csB9.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(9);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="innerDiv">
                                            <a href="http://www.ikea.com/cn/zh/catalog/products/00264393/" target="_top"><img src="{{asset('pc/images/csB10.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="backCs1();" class="abs csBtn2"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                                            <a href="javascript:void(0);" onClick="viewCs3(10);" class="abs csBtn3"><img src="{{asset('pc/images/csBtn3.png')}}"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<a href="javascript:void(0);" class="abs btnLeft2"><img src="{{asset('pc/images/btnLeft.png')}}"></a>
						<a href="javascript:void(0);" class="abs btnRight2"><img src="{{asset('pc/images/btnRight.png')}}"></a>
                    </div>
                </div>

                <div class="cs3" style="display:none;">
                	<div class="innerDiv">
                    	<div class="csBlock2">
                        	<div class="csScroll2">
                            	<a href="javascript:void(0);" onClick="backOnlyCs2(1);"><img src="{{asset('pc/images/csS1.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(2);"><img src="{{asset('pc/images/csS2.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(3);"><img src="{{asset('pc/images/csS3.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(4);"><img src="{{asset('pc/images/csS4.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(5);"><img src="{{asset('pc/images/csS5.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(6);"><img src="{{asset('pc/images/csS6.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(7);"><img src="{{asset('pc/images/csS7.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(8);"><img src="{{asset('pc/images/csS8.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(9);"><img src="{{asset('pc/images/csS9.png')}}"></a>
                                <a href="javascript:void(0);" onClick="backOnlyCs2(10);"><img src="{{asset('pc/images/csS10.png')}}"></a>
                                <a><img src="{{asset('pc/images/csS11.png')}}"></a>
							</div>
                        </div>
						<a href="javascript:void(0);" class="abs btnLeft3"><img src="{{asset('pc/images/btnLeft.png')}}"></a>
						<a href="javascript:void(0);" class="abs btnRight3"><img src="{{asset('pc/images/btnRight.png')}}"></a>
                        <a href="javascript:void(0);" class="abs csBtn2b" onClick="backCs3();"><img src="{{asset('pc/images/csBtn2.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <!--line3 end-->

        <div class="line4">
            <div class="innerDiv">
                <a href="javascript:void(0);" class="abs btn2" onClick="ga('send','event','UGC Gallery','Click','Filter_Latest');"><img src="{{asset('pc/images/btn2.png')}}"></a>
                <a href="javascript:void(0);" class="abs btn3" onClick="ga('send','event','UGC Gallery','Click','Filter_Filter_Liked');"><img src="{{asset('pc/images/btn3.png')}}"></a>
                <input type="text" class="searchTxt" onClick="ga('send','event','UGC Gallery','Click','UGC_Search_Input');" placeholder="输入你家宝贝名字／电话搜索">
                <a href="javascript:void(0);" class="abs searchBtn" onClick="ga('send','event','UGC Gallery','Click','UGC_Search_Btn');"><img src="{{asset('pc/images/icon3.png')}}"></a>

                <div class="abs pBlock" id="infos"></div>
            </div>
        </div>
        <!--line4 end-->

        <div class="abs bottomBg" style="display:none;">
        	<div class="innerDiv">
            	<div class="abs videoBlock" style="display:none;"></div>
                <div class="abs imgBlock" style="display:none;">
                	<img src="" class="bottomGif">
                </div>
                <img src="" class="abs bottomQc" onClick="closeQcBottom();" style="display:none;">
                <div class="shareBtns">
                    <a href="javascript:void(0);" class="abs sbb1" onClick="showQcBottom();ga('send','event','UGC Gallery','Share','Share_UGC_WeChat');"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Gallery','Share','Share_UGC_Weibo');" class="abs sbb2 sinaShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Gallery','Share','Share_UGC_Douban');" class="abs sbb3 douban"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                    <a href="javascript:void(0);" onClick="ga('send','event','UGC Gallery','Share','Share_UGC_Qzone');" class="abs sbb4 qzoneShare"><img src="{{asset('pc/images/space.gif')}}" width="50" height="50"></a>
                </div>
                <a href="javascript:void(0);" class="abs bottmCloseBtn" onClick="closeBottom();"><img src="{{asset('pc/images/space.gif')}}" width="66" height="57"></a>
            </div>
        </div>
    </div>

<div class="ruleBg" style="display:none;"></div>
<div class="ruleBlock" style="display:none;">
    <div class="innerDiv">
        <h1>2016年宜家中国 “多陪伴一小时”</h1>
        <h2>条款与条件</h2>
        <div class="main">
        	<div id="scrollbar2">
                <div class="scrollbar">
                    <div class="track">
                        <div class="thumb">
                            <div class="end"></div>
                        </div>
                    </div>
                </div>
                <div class="viewport">
                    <div class="overview">
                        <div class="rule">
                            <div class="innerDiv">
                                <p><strong>活动规则：</strong><br>
                                即日起至2016年8月13日，登录活动网站，上传您孩子捣蛋瞬间或是你和孩子的亲密瞬间，既有机会赢得宜家为您和您的孩子准备的精美礼品。 <br><br>
                                •	活动对象：凡是家有0-18周岁儿童的父母或监护人<br>
                                •	活动时间：2016年6月1日 至 2016年8月13日<br>
                                •	活动范围：中国大陆地区（港、澳、台地区除外）<br>
                                •	征集主题：捣蛋瞬间、亲子瞬间</p>

                                <p><strong>活动参与方式及流程：</strong><br>
                                第一步：访问活动网站，上传您孩子或者您与孩子的动图（仅限5M以内Gif格式的文件）、照片（仅限5M以内JPEG／GIF／PNG格式文件）或者视频（仅限 .avi | .dat | .mpg | .mpeg | .vob | .mkv | .mov | .wmv | .asf | .rm | .rmvb | .ram | .flv | .mp4 | .3gp | .dv | .qt | .divx | .cpk | .fli | .flc | .m4v 格式的文件。）<br>
                                第二步：填写您或您孩子的名字或昵称、正确的联系电话及地址信息<br>
                                第三步：完成提交，并等待后台审核（审核所需时间不超过提交后的24小时）<br>
                                第四步：您可以分享活动，并邀请好友一起参与活动，也可为您与您孩子的瞬间点赞</p>

                                <p><strong>上传作品规则：</strong><br>
                                1.	每位参与者需确保拥有上传内容的肖像权、版权和所有权<br>
                                2.	同一IP地址每天只能在活动网站点赞10次<br>
                                3.	宜家有权自行删除与本次活动无关、违反法律法规或侵犯第三方权益的动图、照片或者视频</p>

                                <p><strong>奖品设置：</strong><br>
                                1.	参与奖：MÅLA莫拉多色毡头笔，数量有限，送完为止。<br>
                                2.	一起娱乐奖：INBJUDANDE 英丹徳围裙（成人＋儿童）套装，共计40套。<br>
                                3.	边玩边学奖：LATTJO拉特奥拼图，共计24份。<br>
                                4.	陪伴记录奖：单个WONDERMOOI系列限量版单色3D玩偶（玩偶角色随机），共8个。<br>
                                5.	创意陪伴奖：全套WONDERMOOI系列限量版单色3D玩偶及拍立得相机，共1套。</p>

                                <p><strong>抽奖时间：</strong><br>
                                •	2016年6月1日00:00 至 2016年6月23日24:00，及<br>
                                •	2016年7月12日00:00至2016年8月13日24:00</p>

                                <p><strong>抽奖规则：</strong><br>
                                •	参与奖：活动期间，每位成功上传动图、照片或视频的参与者，都将有机会获得参与奖1份<br>
                                •	一起娱乐奖：活动期间，将从所有成功上传动图、照片或视频的参与者中，每周随机抽选5名<br>
                                •	边玩边学奖：活动期间，将从所有成功上传动图、照片或视频的参与者中，每周随机抽选3名<br>
                                •	陪伴成长奖：活动期间，将从所有成功上传动图、照片或视频的参与者中，每周随机抽选1名<br>
                                •	创意陪伴奖：活动结束后，将从所有成功上传动图、照片或视频的参与者中，随机抽选1名</p>

                                <p><strong>中奖通知</strong><br>
                                •	参与奖：将随机抽取一定数量的用户，以邮寄的方式直接将奖品寄给中奖用户。<br>
                                •	周奖中奖者：每周将通过宜家官方微信及微博公布中奖名单。抽奖后2周内，宜家将通过电话联系中奖者，进行兑奖确认。<br>
                                •	活动结束后，将通过宜家官方微信及微博公布所有中奖者名单。完整中奖名单，将在活动结束后，公布于活动网站。活动结束后，宜家将通过电话联系剩余中奖者，进行兑奖确认。<br>
                                •	如因参与者上传的联系电话不正确、或者参与者更改联系电话，而无法联系到获奖者，则视为获奖者自动弃奖。<br>
                                •	同一收货地址，同一手机号仅有一次中奖机会，若重复中奖，只发放一个奖项。<br>
                                •	所有奖品，将在活动结束后，由宜家统一寄出。获奖用户一经确认奖品，不得自行撤销，更改或者转让。</p>

                                <p><strong>注意事项：</strong><br>
                                1.	参与用户不得上传涉及淫秽色情、暴力、侮辱他人等妨碍社会治安、违 法国家法律或有损社会道德风气，以及与本次活动无关的文字、照片或视频。一旦发现上述行为，主办方有权在不通知参与用户的前提下予以删除。<br>
                                2.	参与用户的合法言论、图片及视频一经在本此活动中发表，则该作品的版权，除署名权、修改权、保护作品完整权归原作者享有外，其他权益无偿转归本站独占所有。“其他权益”包括但不限于：通过复制、发行、信息网络传播、改编、翻译、汇编及应由版权人享有的其他方式使用上述作品的权利。<br>
                                3.	活动期间，活动周奖获得者将通过宜家中国官方微信及微博进行公布。活动结束后，主办方将通过活动网站公布完整中奖名单。<br>
                                4.	参与活动的用户请详细填写个人信息。如因个人信息不完整或不准确而造成主办方在获奖名单公布后30天内无法联系到中奖者，将视为中奖者自行放弃中奖，主办方将不作任何形式的赔偿。<br>
                                5.	所有奖品，将在活动结束后，由主办方统一寄出。主办方将承担奖品快递费用，但若快递途中奖品有任何损坏，主办方不负任何责任。<br>
                                6.	获奖用户一经确认奖品，不得自行撤销，更改或转让。如因不可抗力因素导致活动主办方无法提供指定奖品，活动主办方可以以等值或价值更高的奖品替代。所有奖品不得兑换现金或作价销售。<br>
                                7.	如果发现有参加活动的用户在活动中使用任何不正当的手段参加活动，活动主办方有权在不事先通知的前提下，取消该用户参加活动的资格。<br>
                                8.	宜家保留在法律允许范围内对本次活动的最终解释权。</p>

                                <p><strong>责任和许可</strong><br>
                                1.	此次活动主办方为宜家中国，注册地址位于上海市。<br>
                                2.	对于可能限制、延迟您内容上传或下载的任何类型的非宜家过错导致的网络故障、电脑故障或软件故障，宜家不承担任何责任。 <br>
                                3.	任何因不可抗力原因导致的延期、取消、延迟或奖品变更或任何第三方的侵权行为所产生的损失，宜家不承担任何责任。</p>

                                <p><strong>个人信息和知识产权</strong><br>
                                1.	宜家和任何宜家特许经营公司出于宣传目的希望通过网站及其他媒体渠道公布所有参与者的上传内容，参与者上传内容至活动网站即表明参与者同意按前述方式使用此类信息，无须征得进一步的同意、通知或补偿。<br>
                                2.	向参与者收集的信息将只会在其成为获奖者后披露给第三方，此类披露方仅限于因向您发放奖品需要知悉此类信息的第三方。参加此次活动并上传内容即表明，您同意我们将您的个人信息按前述方式进行披露 。宜家还会与宜家集团的其他公司以及其他宜家公司共享此类信息。<br>
                                3.	参与用户的合法言论、图片及视频一经在本此活动中发表，则该作品的版权，除署名权、修改权、保护作品完整权归原作者享有外，其他权益无偿转归本站独占所有。“其他权益”包括但不限于：通过复制、发行、信息网络传播、改编、翻译、汇编及应由版权人享有的其他方式使用上述作品的权利。<br>
                                4.	参选即表明所有参与者均已同意并接受本条款和条件的约束。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="javascript:void(0);" onClick="closeRule();" style="position:absolute; top:0px; right:0px;"><img src="{{asset('pc/images/space.gif')}}" width="66" height="57"></a>
    </div>
</div>

@endsection
@section('scripts')
<script>
var noWechatShareTitle='多陪伴1小时';
var noWechatShareTxt='#多陪伴1小时#快来为我和宝贝的捣蛋瞬间点赞吧！宜家丰富奖品等你来拿！';
var noWechatShareImg='';
var noWechatSharlUrl='{{url("/web")}}';
var youku_client_id='{{env("YOUKU_CLIENT_ID")}}';
</script>
<script src="{{asset('pc/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('pc/js/swiper.min.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('pc/js/jquery.tinyscrollbar.min.js')}}"></script>
<script type="text/javascript" src="http://player.youku.com/jsapi"></script>
<script src="{{asset('pc/js/common.js')}}"></script>
<script>
function getInfos(url,params){
    $.ajax(url,{
        data: params,
        dataType: 'json',
        beforeSend: function(){
            $('#infos').html('<div style="text-align:center">loading...</div>');
        },
        success: function(json){
            var html = '';
            for (var i = 0; i < json.data.length; i++) {
                html += '<div class="pInit">';
                html += '<div class="innerDiv">';
                html += '<div class="pTopImg"><img src="'+json.data[i].thumb+'"><a href="javascript:void(0);" data-qr="{{asset("qrcodes/")}}/'+json.data[i].id+'.png" onClick="showBottom(this);ga(\'send\',\'event\',\'UGC Gallery\',\'Click\',\'View_UGC_'+json.data[i].id+'\');"';
    		if(json.data[i].file_type == 0 ){
                    html += ' cType="img" data-url="'+json.data[i].animation+'"';
                    html += ' data-shareImg="'+json.data[i].animation+'"';
                }
                else{
                    html += ' cType="video" data-url="http://player.youku.com/embed/'+json.data[i].file+'" data-vid="'+json.data[i].file+'"';
                    html += ' data-shareImg="'+json.data[i].animation+'"';
                }
                html += ' data-shareUrl="'+noWechatSharlUrl+'?id='+json.data[i].id+'">';
				if(json.data[i].file_type == 0 ){
					html += '<img src="{{asset("pc/images/space.gif")}}"></a></div>';
					}
					else{
						html += '<img src="{{asset("pc/images/vTopImg.png")}}"></a></div>';
						}
                html += '<div class="pBottomTxt">';
                html += '<div class="pBottomTxtName">'+json.data[i].name+'</div>';
                html += '<div class="pBottomTXtBtn1"><a href="javascript:void(0);" onClick="showBottom(this);ga(\'send\',\'event\',\'UGC Gallery\',\'Click\',\'View_UGC_'+json.data[i].id+'\');"';
                if(json.data[i].file_type == 0 ){
                    html += ' cType="img" data-url="'+json.data[i].animation+'"';
                }
                else{
                    html += ' cType="video" data-url="http://player.youku.com/embed/'+json.data[i].file+'" data-vid="'+json.data[i].file+'"';
                }
                html += '><img src="{{asset("pc/images/icon2.png")}}"></a></div>';
                html += '<div class="pBottomTXtBtn2"><a href="'+'{{url("like")}}/'+json.data[i].id+'" onClick="ga(\'send\',\'event\',\'UGC Gallery\',\'Like\',\'View_UGC_'+json.data[i].id+'\');return pVote($(this));"><img src="{{asset("pc/images/icon1.png")}}"> <span>'+json.data[i].like_num+'</span></a></div></div></div></div>';
            }
            if( json.data.length == 0 ){
                html = '<div style="text-align:center"><h3>抱歉，没有您需要的信息~</h3></div>';
            }
            else{
                if( typeof(params['keywords']) == 'undefined'){
                    params['keywords'] = '';
                }
                if( typeof(params['order']) == 'undefined'){
                    params['order'] = '';
                }

                var params_string = '{order:\''+params['order']+'\', keywords:\''+params['keywords']+'\'}';
                html += '<div class="clear"></div><div style="text-align:center" class="page">';
                var n = json.current_page - 5 < 0 ? 1 : json.current_page - 4;
                var m = json.current_page + 5 < json.last_page ? json.current_page + 4 : json.last_page;
                if( json.current_page > 1)
                    html += '<a href="javascript:;" onclick="javascript:return getInfos(\''+json.prev_page_url+'\','+params_string+');" class="prev">&lt;</a>'
                if( json.current_page > 5)
                    html += '<a href="javascript:;" onclick="javascript:return getInfos(\''+'{{url("infos")}}\','+params_string+');">1</a><span>...</span>'
                for (var i = n; i <= m; i++) {
                    if( i == json.current_page ){
                        html += '<span class="current">'+i+'</span>';
                    }
                    else{
                        html += '<a href="javascript:;" onclick="javascript:return getInfos(\''+'{{url("infos")}}?page='+i+'\','+params_string+');">'+i+'</a>';
                    }
                }
                if( json.last_page - json.current_page > 5)
                    html += '<span>...</span><a href="javascript:;" onclick="javascript:return getInfos(\''+'{{url("infos")}}?page='+json.last_page+'\','+params_string+');">'+json.last_page+'</a>'
                if( json.current_page < json.last_page)
                    html += '<a href="javascript:;" onclick="javascript:return getInfos(\''+json.next_page_url+'\','+params_string+');" class="next">&gt;</a>'
                html += '</div>';
            }
            //html += '<div class="clear"></div><div class="l4BtnLine"><a href="javascript:void(0);" onclick="ga(\'send\',\'event\',\'UGC Gallery\',\'Click\',\'View_More_UGC\');return getInfos(\''+json.next_page_url+'\', {order:\''+params['order']+'\'});"><img src="{{asset("pc/images/btn4.png")}}"></a></div></div>';
            $('#infos').html(html);
        }
    })
    //$.getJSON(url,params,function(json))
}
$().ready(function(){
    var url = '{{url("infos")}}';
    getInfos(url,{order:'time'});
    $('.btn2').click(function(){
        getInfos(url,{order:'time'});
    });
    $('.btn3').click(function(){
        getInfos(url,{order:'like'});
    });
    $('.searchBtn').click(function(){
        var keywords = $('.searchTxt').val();
        getInfos(url,{keywords:keywords});
    });
})
</script>
@endsection
