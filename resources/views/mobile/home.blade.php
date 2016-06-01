@extends('layouts.mobile')
@section('content')

<div class="wrapper">
	<div class="line1">
    	<div class="innerDiv">
        	<img src="{{asset('mobile/images/logo.png')}}" class="abs logo">
            <a href="javascript:void(0);" onclick="ga('send','event','UGC Recruitment','Click','Top_Banner_CTA');window.scrollTo(0,1040);" class="abs btn1"><img src="{{asset('mobile/images/btn1.png')}}"></a>
        </div>
    </div>
    <!--line1 end-->

    <div class="line2">
    	<div class="innerDiv">
        	<div class="sBlock1">
            	<div class="swiper-container1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" vir='1'><img src="{{asset('mobile/images/l11.png')}}"></a>
                                <div class="vGif vGif1" style="display:none;">
                                	<img src="{{asset('mobile/images/v1.gif')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" vir='2'><img src="{{asset('mobile/images/l12.png')}}"></a>
                                <div class="vGif vGif2" style="display:none;">
                                	<img src="{{asset('mobile/images/v2.gif')}}" />
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" vir='3'><img src="{{asset('mobile/images/l13.png')}}"></a>
                                <video id="v3" src="{{asset('pc/images/v3.mp4?v=1')}}" preload="auto" style="display:none;"></video>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="javascript:void(0);" vir='4'><img src="{{asset('mobile/images/l14.png')}}"></a>
                                <div class="vGif vGif4" style="display:none;">
                                	<img src="{{asset('mobile/images/v4.gif')}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="abs btnLeft1"><img src="{{asset('mobile/images/btnLeft.png')}}"></a>
            <a href="javascript:void(0);" class="abs btnRight1"><img src="{{asset('mobile/images/btnRight.png')}}"></a>
        </div>
    </div>
    <!--line2 end-->

    <div class="line3" id="uploadBlock">
    	<div class="innerDiv">
        	<div class="abs fBlock">
                    <div class="innerDiv">
                    <div class="f1"></div>
                    <div class="f2" style="display:none;"></div>
                    <div class="f5" style="display:none;"></div>
                    <div class="f3" style="display:none;">
                        <div class="innerDiv">
                            <img src="" class="abs f3EndGif" id="f3EndGif">
                            <div class="abs onBg stMask1"></div>
                            <img src="" class="abs saveImg" id="saveImg">
                            <div class="shareBtns">
                                <a href="javascript:void(0);" class="abs sb1" onClick="ga('send','event','UGC Recruitment','Share','Share_WeChat');showShareWx();"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Weibo');" class="abs sb2 sinaShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Douban');" class="abs sb3 douban"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Qzone');" class="abs sb4 qzoneShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                            </div>
                            <a href="http://community.ikea.cn/family/2016activity_awgc/public/#uploadBlock" onClick="ga('send','event','UGC Recruitment','Click','UGC_Replay');" class="abs paBtn"><img src="{{asset('mobile/images/space.gif')}}" width="238" height="76"></a>
                            <a href="http://www.ikea.com/cn/zh/campaigns/2016_awgc/index.html" onClick="ga('send','event','UGC Recruitment','Click','Go_Cooking_With_Children');" target="_top" class="abs moreLink"><img src="{{asset('mobile/images/space.gif')}}" width="120" height="28"></a>
                        </div>
                    </div>
                    <div class="f4" style="display:none;">
                    	<div class="innerDiv">
                        	<div class="shareBtns">
                                <a href="javascript:void(0);" class="abs sb1" onClick="ga('send','event','UGC Recruitment','Share','Share_WeChat');showShareWx();"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Weibo');" class="abs sb2 sinaShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Douban');" class="abs sb3 douban"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                                <a href="javascript:void(0);" onClick="ga('send','event','UGC Recruitment','Share','Share_Qzone');" class="abs sb4 qzoneShare"><img src="{{asset('mobile/images/space.gif')}}" width="85" height="85"></a>
                            </div>
                            <a href="#galleryBlock" style="position:absolute; left:175px; top:275px;"><img src="{{asset('mobile/images/space.gif')}}" width="294" height="116"></a>
                            <a href="http://community.ikea.cn/family/2016activity_awgc/public/#uploadBlock" onClick="ga('send','event','UGC Recruitment','Click','UGC_Replay');" class="abs paBtn"><img src="{{asset('mobile/images/space.gif')}}" width="238" height="76"></a>
                            <a href="http://www.ikea.com/cn/zh/campaigns/2016_awgc/index.html" onClick="ga('send','event','UGC Recruitment','Click','Go_Cooking_With_Children');" target="_top" class="abs moreLink"><img src="{{asset('mobile/images/space.gif')}}" width="120" height="28"></a>
                        </div>
                    </div>
                    <div class="fTop">
                        <form action="{{url('post')}}" method="post" enctype="multipart/form-data" id="form">
                        <div class="innerDiv">
                        	<canvas id="guoduCanvas" style="display:none;"></canvas>
                            <canvas id="drawCanvas" width="398" height="398" style="display:none;"></canvas>
                            <div class="uploadImgBlock">
                                <div class="innerDiv">
                                    <img src="" class="abs upBtnImg upLoadImg" id="upBtnImg">
                                    <img src="" class="abs upLoadImg" id="preview" />
                                    <img src="" class="abs upLoadImg" id="localImag" />
                                </div>
                            </div>
                            <div class="stMask stMask1" style="display:none;"></div>
                            <img src="{{asset('mobile/images/fImg1.png')}}" class="abs fImg1" style="display:none;">
                            <div class="mMask" id="mMask"></div>

                            <div class="fTxt1">*宝&nbsp;贝&nbsp;的&nbsp;姓&nbsp;名</div>
                            <div class="fTxt2">*您的联系电话</div>
                            <div class="fTxt3">*您的联系地址</div>

                            <div class="abs fNote">温馨提示：请务必填写真实信息，以免错失大奖！</div>
                            <div class="abs fLice"><label onClick="ga('send','event','UGC Recruitment','Click','T&C_Agreement');"><input type="checkbox" name="fLice" checked> 我已阅读并同意本次<a href="javascript:void(0);" onClick="showRule();">条件与条款</a></label></div>

                            <div class="fTemplete" style="display:none;">
                                <a href="javascript:void(0);" class="abs ft ft1 fton"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft2"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft3"><img src="{{asset('mobile/images/space.gif')}}"></a>
                                <a href="javascript:void(0);" class="abs ft ft4"><img src="{{asset('mobile/images/space.gif')}}"></a>
                            </div>

                            <input type="file" class="abs uploadBtn" id="uploadBtn">
                            <a href="javascript:void(0);" class="abs youkuBtn" onClick="uploadVideo();"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>

                            <input type="text" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Name');" name="name" class="fInput fInput1" maxlength="20">
                            <input type="tel" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Tel');" name="mobile" class="fInput fInput2" maxlength="11">
                            <input type="text" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Province');" name="province" class="fInput fInput3" maxlength="10" placeholder="省">
                            <input type="text" onClick="ga('send','event','UGC Recruitment','Comment','Contact_City');" name="city" class="fInput fInput4" maxlength="10" placeholder="市">
                            <input type="text" onClick="ga('send','event','UGC Recruitment','Comment','Contact_Address');" name="address" class="fInput fInput5" maxlength="40" placeholder="详细地址">

                            {!! csrf_field() !!}
                            <input type="hidden" name="t" id="t" />
                            <input type="hidden" id="vid" name="vid" />
                            <input type="hidden" id="vt" name="vt" />
                            <input type="hidden" id="file_type" name="file_type" value="0" />
                            <input type="hidden" name="from" value="mobile" />
                            <input type="hidden" name="canvasData" id="canvasData" value="" />
                            <a href="javascript:void(0);" class="abs vPlayAgain" onClick="playAgain();" style="display:none;"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>

                            <a href="javascript:void(0);" class="abs submitBtn" onClick="ga('send','event','UGC Recruitment','Click','UGC_Submission');submitL2();"><img src="{{asset('mobile/images/space.gif')}}" width="220" height="76"></a>
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
                            <iframe id="201661youku" src="http://community.ikea.cn/family/2016activity_awgc/public/youku" style="width:640px; height:845px; border:0; overflow: hidden; position:absolute; left:0; top:242px; background:#FFF;" name="201661youku" width="640" height="440" scrolling="no" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--line3 end-->

    <div class="line4">
    	<div class="innerDiv">
        	<div class="abs sBlock2">
                <div class="swiper-container2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="http://www.ikea.com/cn/zh/catalog/products/80163408/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_1');" target="_blank"><img src="{{asset('mobile/images/s1.gif')}}"></a>
                                <a href="http://www.ikea.com/cn/zh/catalog/products/80163408/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_1');" target="_blank" class="sLink sLink1">
                                    <span class="sName">IKEA 365 瓦福<br>肉凿，黑色</span><br>
                                    <span class="sPrice">¥&nbsp;49.00</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="http://www.ikea.com/cn/zh/catalog/products/10216537/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_2');" target="_blank"><img src="{{asset('mobile/images/s2.gif')}}"></a>
                                <a href="http://www.ikea.com/cn/zh/catalog/products/10216537/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_2');" target="_blank" class="sLink sLink2">
                                    <span class="sName">RÅSKOG 拉斯克<br>手推车, 天蓝色</span><br>
                                    <span class="sPrice">¥&nbsp;299.00</span>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="innerDiv">
                                <a href="http://www.ikea.com/cn/zh/catalog/products/40308267/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_3');" target="_blank"><img src="{{asset('mobile/images/s3.gif')}}"></a>
                                <a href="http://www.ikea.com/cn/zh/catalog/products/40308267/" onClick="ga('send','event','Manual & Tips','Click','Manual_Product_3');" target="_blank" class="sLink sLink3">
                                    <span class="sName">IKEA PS 2002<br>洒水壶, 灰色</span><br>
                                    <span class="sPrice">¥&nbsp;9.90</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript:void(0);" class="abs btnLeft2"><img src="{{asset('mobile/images/btnLeft.png')}}"></a>
            <a href="javascript:void(0);" class="abs btnRight2"><img src="{{asset('mobile/images/btnRight.png')}}"></a>
        </div>
    </div>
    <!--line4 end-->

    <div class="line5" id="galleryBlock">
    	<div class="innerDiv">
        	<a href="javascript:void(0);" class="abs btn2" onClick="ga('send','event','UGC Gallery','Click','Filter_Latest');"><img src="{{asset('mobile/images/btn2.png')}}"></a>
            <a href="javascript:void(0);" class="abs btn3" onClick="ga('send','event','UGC Gallery','Click','Filter_Filter_Liked');"><img src="{{asset('mobile/images/btn3.png')}}"></a>
            <input type="text" class="searchTxt" onClick="ga('send','event','UGC Gallery','Click','UGC_Search_Input');" placeholder="输入你家宝贝名字／电话搜索">
            <a href="javascript:void(0);" class="abs searchBtn" onClick="ga('send','event','UGC Gallery','Click','UGC_Search_Btn');"><img src="{{asset('mobile/images/icon1.png')}}"></a>

            <div class="abs pBlock">
            	<div class="pInitOuter" id="infos">
                </div>

                <div class="clear"></div>
                <div class="l4BtnLine">
                	<a href="javascript:void(0);" class="btn5"><img src="{{asset('mobile/images/btn5.png')}}"></a>
                	<!--<br><br>
                    <a href="javascript:void(0);" onClick="playAgain();"><img src="{{asset('mobile/images/btn4.png')}}"></a>-->
                </div>
            </div>
        </div>
    </div>
    <!--line5 end-->
</div>

<div class="popBg" style="display:none;" onClick="closeShareWx();"></div>
<img src="{{asset('mobile/images/shareNote.png')}}" style="display:none;" class="shareNote" onClick="closeShareWx();">

<div class="ruleBg" style="display:none;"></div>
<div class="ruleBlock" style="display:none;">
    <div class="innerDiv">
        <h1>2016年宜家中国 “多陪伴一小时”<br>条款与条件</h1>
        <div class="main">
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
        <a href="javascript:void(0);" onClick="closeRule();" style="position:absolute; top:10px; right:10px; font-size:20px; color:#FFF;">关闭/Close</a>
    </div>
</div>
@endsection
@section('scripts')
<script>
wxData = {};
var noWechatShareTitle='多陪伴1小时';
var noWechatShareTxt='#多陪伴1小时# 宝贝在捣蛋，上传你家宝贝捣蛋瞬间，宜家丰富奖品等你来拿！';
var noWechatShareImg='http://community.ikea.cn/family/2016activity_awgc/public/pc/images/pcShare.png';
var noWechatSharlUrl='{{url("/")}}';
</script>
<script src="{{asset('mobile/js/swiper.min.js')}}"></script>
<script src="{{asset('mobile/js/exif.js')}}"></script>
<script src="{{asset('mobile/js/hammer.js')}}"></script>
<script src="{{asset('pc/js/jquery.form.js')}}"></script>
<script src="{{asset('mobile/js/common.js')}}"></script>
<script>
$(document).ready(function() {
    $.getJSON('{{url("wx/share")}}', {url:location.href},function(data){
        wxData = data;
        wxShare(wxData);
    })
});
</script>
<script>
var isLock = false;
var current_page = 1;
var next_page_url = "{{url('infos',['page'=>2])}}";
var params = {};
function getInfos(url,params, refresh){
    if (isLock) {
        return;
    }
    isLock = true;
    $.getJSON(url,params,function(json){
        if( true == refresh){
            var html = '';
        }
        else{
            var html = $('#infos').html();
        }

        for (var i = 0; i < json.data.length; i++) {
            html += '<div class="pInit"><div class="innerDiv"><div class="pTopImg"><a href="{{url("share")}}/'+json.data[i].id+'" onClick="ga(\'send\',\'event\',\'UGC Gallery\',\'Click\',\'View_UGC_'+json.data[i].id+'\');" cType="img"><img src="'+json.data[i].thumb+'"></a></div><div class="pBottomTxt"><a href="'+'{{url("like")}}/'+json.data[i].id+'" class="pBottomTXtBtn2" onClick="ga(\'send\',\'event\',\'UGC Gallery\',\'Like\',\'View_UGC_'+json.data[i].id+'\');return pVote($(this));"><img src="{{asset("mobile/images/icon2.png")}}"> <span>'+json.data[i].like_num+'</span></a><a href="{{url("share")}}/'+json.data[i].id+'" class="pBottomTXtBtn1" onClick="ga(\'send\',\'event\',\'UGC Gallery\',\'Click\',\'View_UGC_'+json.data[i].id+'\');" cType="img"><img src="mobile/images/icon3.png"></a></div><div class="pBottomTxtName">'+json.data[i].name+'</div></div></div>';
        }
        if( json.data.length == 0 ){
            html += '<div style="text-align:center"><h3>抱歉，没有您更多的信息~</h3></div>';
        }
        current_page = json.current_page;
        next_page_url = json.next_page_url;
        $('#infos').html(html);
        isLock = false;
    })
}
$(document).ready(function(){
    l2Swiper();
    l3Swiper();
    resizeImg();

	$('#mMask').on('touchmove', function (e) {
        e.preventDefault();
    });

    var url = '{{url("infos")}}';
    getInfos(url,{});
    $('.btn5').click(function(){
        //alert(next_page_url);
        getInfos(next_page_url, params,true);
    })
    $('.btn3').click(function(){
        params = {order:'time'};
        getInfos(url, params,true);
    });
    $('.btn2').click(function(){
        params = {order:'like'};
        getInfos(url, params,true);
    });
    $('.searchBtn').click(function(){
        var keywords = $('.searchTxt').val();
        params = {keywords:keywords};
        getInfos(url, params,true);
    });

	try{
    if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
	//移动端
		$(window).scroll(function() {
			//alert($(window).scrollTop()+' - '+$(document).height()+' - '+$(window).height());
			if (null != next_page_url && $(window).scrollTop() <= (parseInt($(document).height()) - parseInt($(window).height())+50)) {
				getInfos(next_page_url,params);
			}
		});
	}else{
	//pc端
		$(window).scroll(function() {
			//alert($(window).scrollTop()+' - '+$(document).height()+' - '+$(window).height());
			if (null != next_page_url && $(window).scrollTop() == (parseInt($(document).height()) - parseInt($(window).height()))) {
				getInfos(next_page_url,params);
				}
			});
		}
	}catch(e){}
})
</script>
@endsection
