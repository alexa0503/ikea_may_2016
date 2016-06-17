//找到url中匹配的字符串
function findInUrl(str) {
    url = location.href;
    return url.indexOf(str) == -1 ? false : true;
}
//获取url参数
function queryString(key) {
    return (document.location.search.match(new RegExp("(?:^\\?|&)" + key + "=(.*?)(?=&|$)")) || ['', null])[1];
}

//产生指定范围的随机数
function randomNumb(minNumb, maxNumb) {
    var rn = Math.round(Math.random() * (maxNumb - minNumb) + minNumb);
    return rn;
}

$(document).ready(function() {
    //l3Swiper();
    videoInit();
	shareNoWeichat();
	cs3ScrollNew();
});

var cs3Interval;
var cs3Step=0;
var cs3Width=292;
function cs3ScrollNew(){
	$('.btnRight3').hover(function(){
		csGoLeft();
		cs3Interval = setInterval(function(){csGoLeft();},2000);
		},function(){
			clearInterval(cs3Interval);
			});
	$('.btnLeft3').hover(function(){
		csGoRight();
		cs3Interval = setInterval(function(){csGoRight();},2000);
		},function(){
			clearInterval(cs3Interval);
			});
	}
	
function csGoLeft(){
	if(cs3Step<8){
		cs3Step++;
		if(cs3Step==8){
			$('.csScroll2').stop().animate({marginLeft:-9*cs3Width},1000,'swing');
			}
			else{
				$('.csScroll2').stop().animate({marginLeft:-cs3Step*cs3Width},1000,'swing');
				}
		}
	}
function csGoRight(){
	if(cs3Step>0){
		cs3Step=cs3Step-1;
		$('.csScroll2').stop().animate({marginLeft:-cs3Step*cs3Width},1000,'swing');
		}
	}

function l3Swiper() {
    var swiper = new Swiper('.swiper-container', {
        nextButton: '.btnRight',
        prevButton: '.btnLeft',
        spaceBetween: 1,
        loop: true,
        autoplay: 3500,
        autoplayDisableOnInteraction: false
    });
}

var csTime=1;
function selTime(e){
	csTime=parseInt($(e).attr('cst'));
	var ctHtml=$(e).html();
	$('.seledTime').html(ctHtml);
	$('.selTimeBlock').hide();
	}

function showSelTime(){
	$('.selTimeBlock').show();
	}

function goCs2(){
	$('.cs1').hide();
	$('.cs2').show();
	var c2got=csTime-1;
	cs2Scroll(c2got);
	//swiper2.slideTo(csTime, 1000, '');
	}

function backCs1(){
	$('.cs2').hide();
	$('.cs1').show();
	}

function viewCs3(e){
	$('.cs2').hide();
	$('.cs3').show();
	//cs3Scroll();
	}

var swiper2
function cs2Scroll(e){
	swiper2 = new Swiper('.swiper-container2', {
        nextButton: '.btnRight2',
        prevButton: '.btnLeft2',
        spaceBetween: 1,
        loop: true,
		initialSlide:e
    });
	}

var swiper3
function cs3Scroll(){
	swiper3 = new Swiper('.swiper-container3', {
        nextButton: '.btnRight3',
        prevButton: '.btnLeft3',
        spaceBetween: 1,
        loop: true,
		autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
	}

function backCs3(){
	$('.cs2').hide();
	$('.cs3').hide();
	$('.cs1').show();
	}

function backOnlyCs2(e){
	var ct=parseInt(e)-1;
	$('.cs3').hide();
	$('.cs2').show();
	cs2Scroll(ct);
	//swiper2.slideTo(ct, 1000, '');
	}

var v1, v2, v3, v4;

function videoInit() {
    v2 = document.getElementById('v2');
	v4 = document.getElementById('v4');
    $('.vInit').hover(function() {
        var vIndex = $('.vInit').index($(this)) + 1;
        v2.pause();
		v4.pause();
        $('.vInit video').hide();
		$('.vInit .vGif').hide();
        switch (vIndex) {
            case 1:
				$('.vInit').eq(0).find('.vGif').show();
				ga('send','event','UGC Gallery','Click','Featured_UGC_1');
                break;
            case 2:
				v2.play();
				$('#v' + vIndex).show();
				ga('send','event','UGC Gallery','Click','Featured_UGC_2');
                break;
            case 3:
                $('.vInit').eq(2).find('.vGif').show();
				ga('send','event','UGC Gallery','Play','Featured_UGC_3');
                break;
            case 4:
				v4.play();
				$('#v' + vIndex).show();
				ga('send','event','UGC Gallery','Click','Featured_UGC_4');
                break;
        }

    }, function() {
        v2.pause();
		v4.pause();
        $('.vInit video').hide();
		$('.vInit .vGif').hide();
    });
}

//l4 投票
function pVote(e) {
    //var vn = parseInt($.trim($(e).find('span').text()));
    //$(e).find('span').text(++vn);
    $.ajax(e.attr('href'), {
        dataType: 'json',
        success: function(json){
            if( json.ret == 0){
                $(e).find('span').text(json.num);
            }
        }
    })
    return false;
}

//全局变量
var isSelectedImg = false; //是否选择图片
var originalImgWidth; //原图宽度
var originalImgHeight; //原图高度
var oimg; //new image

//图片预览
function setImagePreview() {
    var docObj = document.getElementById("uploadBtn");
    var fileName = docObj.value;
    if (!fileName.match(/.jpg|.png/i)) {
        alert('您上传的图片格式不正确，请重新选择！');
        //isSelectedImg=false;
        return false;
    }

    var imgObjPreview = document.getElementById("preview");
    var upBtnImg = document.getElementById("upBtnImg");
    if (docObj.files && docObj.files[0]) {
        var localImagId = document.getElementById("localImag");
        localImagId.style.display = 'none';
        upBtnImg.style.display = 'none';
        //火狐下，直接设img属性
        imgObjPreview.style.display = 'block';
        imgObjPreview.style.width = '100%';
        //imgObjPreview.src = docObj.files[0].getAsDataURL();
        if (window.navigator.userAgent.indexOf("Chrome") >= 1 || window.navigator.userAgent.indexOf("Safari") >= 1) {
            imgObjPreview.src = window.webkitURL.createObjectURL(docObj.files[0]);
            oimg = new Image();
            oimg.onload = function() {
                originalImgWidth = oimg.width;
                originalImgHeight = oimg.height;
                isSelectedImg = true;
                move_picture();
            }
            oimg.src = imgObjPreview.src;
        } else {
            imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
            oimg = new Image();
            oimg.onload = function() {
                originalImgWidth = oimg.width;
                originalImgHeight = oimg.height;
                isSelectedImg = true;
                move_picture();
            }
            oimg.src = imgObjPreview.src;
        }
    } else {
        //IE下，使用滤镜
        docObj.select();
        docObj.blur();
        var imgSrc = document.selection.createRange().text;
        var localImagId = document.getElementById("localImag");
        imgObjPreview.style.display = 'none';
        upBtnImg.style.display = 'none';
        //必须设置初始大小
        localImagId.style.width = "100%";
        //localImagId.style.height = "60px";
        //图片异常的捕捉，防止用户修改后缀来伪造图片
        try {
            localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
            localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
            oimg = new Image();
            oimg.onload = function() {
                originalImgWidth = oimg.width;
                originalImgHeight = oimg.height;
                isSelectedImg = true;
                move_picture();
            }
            oimg.src = imgSrc;
        } catch (e) {
            alert("您上传的图片格式不正确，请重新选择！");
            //isSelectedImg=false;
            return false;
        }
        imgObjPreview.style.display = 'none';
        document.selection.empty();
    }
	ga('send','event','UGC Recruitment','Upload','Image_Upload_PC');
    return true;
}

var io = parseInt(339);

var mnGifInterval;

function mnGIf(){
	$('.fLoadImg').css('background-position', '0 0');
	setTimeout(function() {
		$('.stMask').css('background-position', '-339px 0');
		setTimeout(function() {
			$('.stMask').css('background-position', '-678px 0');
			setTimeout(function() {
				$('.stMask').css('background-position', '-1017px 0');
			}, 250);
		}, 250);
	}, 250);
	}

function move_picture(e) {
    var bili = originalImgWidth / originalImgHeight;
    if (bili >= 1) {
        var changeWidth = originalImgWidth * io / originalImgHeight;
        $('.upLoadImg').css({
            'width': 'auto',
            'height': io + 'px',
            'top': '0px',
            'left': -(changeWidth - 339) / 2 + 'px'
        });
    } else {
        var changeHeight = originalImgHeight * io / originalImgWidth;
        $('.upLoadImg').css({
            'width': io + 'px',
            'height': 'auto',
            'top': -(changeHeight - 339) / 2 + 'px',
            'left': '0px'
        });
    }
	mnGifInterval=setInterval(function(){
		mnGIf();
		},1000);
    $('.f1').hide();
    $('.f2').show();
    ffType = 'img';
    $('.fTemplete').show();
    $('.youkuBtn').hide();
    $('.uploadBtn').addClass('uploadedBtn');
    $('.fImg1').show();
    $('.stMask').show();
    $('.fTemplete a').click(function() {
        $('.ft').removeClass('fton');
        $(this).addClass('fton');
        var sIndex = $('.fTemplete a').index($(this)) + 1;
		if(sIndex==1){
			sIndex=6;
			}
		else if(sIndex==2){
			sIndex=5;
			}
		else if(sIndex==3){
			sIndex=1;
			}
		else if(sIndex==4){
			sIndex=4;
			}
        $('.stMask').removeClass('stMask1 stMask2 stMask3 stMask4 stMask5 stMask6');
        $('.stMask').addClass('stMask' + sIndex);
		ga('send','event','UGC Recruitment','Click','Sticker_'+sIndex);
    });

    mouseMove();
}

//按下标记
var onoff = false;
var oldx = 0;
var oldy = 0;
var isFirst = 0; //初次点击

var outDiv = document.getElementById('mMask');
var x = 0; //画布X位置
var y = 0; //画布Y位置
var tempX = 0; //画布临时位置
var tempY = 0; //画布临时位置

function mouseMove() {
    //添加手指移动事件
    outDiv.addEventListener("mousemove", draw, false);
    //添加手指按下事件
    outDiv.addEventListener("mousedown", down, false);
    //添加手指弹起事件
    outDiv.addEventListener("mouseup", up, false);
}

function down(event) {
    onoff = true;
    //tempX=parseInt($('.upLoadImg').eq(1).css('left'));
    //tempY=parseInt($('.upLoadImg').eq(2).css('top'));
    if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
        oldx = event.targetTouches[0].pageX;
        oldy = event.targetTouches[0].pageY;
    } else if (/(Android)/i.test(navigator.userAgent)) {
        var touch = event.touches[0];
        oldx = touch.pageX;
        oldy = touch.pageY;
    } else {
        oldx = event.pageX;
        oldy = event.pageY;
    }
    $('.fImg1').fadeOut(1000);
}

function up() {
    onoff = false;
}

function draw(event) {
    if (onoff == true) {
        event.stopPropagation(); //禁止手势缩放
        event.preventDefault(); //在页面滑动时禁止事件

        tempX = parseInt($('.upLoadImg').eq(1).css('left'));
        tempY = parseInt($('.upLoadImg').eq(2).css('top'));

        var newx;
        var newy;
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
            newx = event.targetTouches[0].pageX;
            newy = event.targetTouches[0].pageY;
        } else if (/(Android)/i.test(navigator.userAgent)) {
            var touch = event.touches[0];
            newx = touch.pageX;
            newy = touch.pageY;
        } else {
            newx = event.pageX;
            newy = event.pageY;
        }
        var diffx = newx - oldx;
        var diffy = newy - oldy;
        $('.upLoadImg').css({
            'left': tempX + diffx + 'px',
            'top': tempY + diffy + 'px'
        })

        oldx = newx;
        oldy = newy;
    };
};

var st1, st2, st3;
var ffType; //img or video

//表单提交

function submitL2() {
    var fName = $.trim($('.fInput1').val());
    var fTel = $.trim($('.fInput2').val());
    var fProvince = $.trim($('.fInput3').val());
    var fCity = $.trim($('.fInput4').val());
    var fAddress = $.trim($('.fInput5').val());
	var pattern = /^1[3456789]\d{9}$/;
    $('.fTxt1,.fTxt2,.fTxt3').removeClass('fRed');

    var isChecked = $('.fLice input').prop('checked');
    if (!isChecked) {
        alert('请阅读并同意本次条件与条款');
        return false;
    }

    if (fName == '') {
        $('.fTxt1').addClass('fRed');
        return false;
    }
    if (fTel == ''||!pattern.test(fTel)) {
        $('.fTxt2').addClass('fRed');
		alert('请输入正确的手机号');
        return false;
    }
    if (fProvince == '' || fCity == '' || fAddress == '') {
        $('.fTxt3').addClass('fRed');
        return false;
    } else if (!isSelectedImg) {
        alert('请上传照片或视频');
        return false;
    }

    if (ffType == 'img') {
        $('#file_type').val(0);
        var iX = parseInt($('.upLoadImg').eq(2).css('left'));
        var iY = parseInt($('.upLoadImg').eq(2).css('top'));
        var iT = $('.ft').index($('.fton')) + 1;

		if(iT==1){
			iT=6;
			}
		else if(iT==2){
			iT=5;
			}
		else if(iT==3){
			iT=1;
			}
		else if(iT==4){
			iT=4;
			}

        $('input[name="x"]').val(iX);
        $('input[name="y"]').val(iY);
        $('input[name="t"]').val(iT);
        //提交图片

        $('.fLoading').show();
		clearInterval(mnGifInterval);
        st1 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-339px 0');
            st2 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-678px 0');
                st3 = setTimeout(function() {
                    $('.fLoadImg').css('background-position', '-1017px 0');
                }, 600);
            }, 500);
        }, 400);

    } else if (ffType == 'video') {
        $('#file_type').val(1);
        $('#uploadBtn').remove();
    }
    //表单提交
    $('#form').ajaxSubmit({
        dataType: 'json',
        error: function(xhr) {
            alert('信息提交失败，请重试~');
        },
        success: function(data) {
            if(ffType == 'img'){
                clearTimeout(st1);
                clearTimeout(st2);
                clearTimeout(st3);
                $('.fLoadImg').css('background-position', '-1116px 0');
                if (data.ret == 0) {
                    changeF3(data.url);
                } else {
                    alert(data.msg);
                }
            }
            else{
                changeF4();
            }
            $('.sb1').attr('data-qr', data.qrUrl);
            noWechatShareImg=data.shareImg;
            noWechatSharlUrl=data.shareUrl;
            noWechatShareTxt='#多陪伴1小时#父亲节就要来咯，快上传爸爸和宝贝一起捣蛋的美好瞬间，宜家丰富奖品等你来拿！';
        },
        complete: function(xhr) {
            //alert(xhr.responseText);
            //console.log(xhr);
        }
    });
}

function changeF4() {
    $('.f5').hide();
    $('.f4').show();
    $('.fTop').hide();
}

function changeF3(url) {
    $('.f2').hide();
    $('.fTop').hide();
    $('.fLoading').hide();
    $('.f3EndGif').attr('src', url); //生成的gif绑定进页面

    $('.f3').show();
}

//视频上传
function uploadVideo() {
    //上传中
    $('.fUploadVideo').show();
	ga('send','event','UGC Recruitment','Upload','Video_Upload_PC');
    //youkuUploadInit(youkuParam);
}

function getYouku() {
    $('.fLoading').show();

    /*st1 = setTimeout(function() {
        $('.fLoadImg').css('background-position', '-279px 0');
        st2 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-678px 0');
            st3 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-1017px 0');
            }, 600);
        }, 500);
    }, 400);

    //上传成功
    clearTimeout(st1);
    clearTimeout(st2);
    clearTimeout(st3);*/
    $('.fLoadImg').css('background-position', '-1116px 0');
    //$('#file_type').val(1);
    changeF5();
    /*
    setTimeout(function() {
        changeF5();
    }, 1000);
    */
}

function changeF5() {
    isSelectedImg = true;
    ffType = 'video';
    $('.fLoading').hide();
    $('#uploadBtn').hide();
    $('.youkuBtn').hide()
    $('.vPlayAgain').show();
    $('.f1').hide();
    $('.f5').show();
}

function playAgain() {
    window.location.reload();
}

function showQc(e) {
    var qr = $(e).attr('data-qr');
    $('.qcImg').attr('src', qr); //当前内容的二维码图片绑定进页面
    $('.qcBlock').stop().animate({
        right: 300,
        top: 85
    }, 1000, 'swing', function() {
        openQc();
    });
}

function openQc() {
    $('.openQc').stop().animate({
        width: 157
    }, 500, 'swing');
}

function closeQc() {
    $('.qcImg').attr('src', 'pc/images/testQc.png'); //恢复wap首页的二维码图片绑定进页面
    $('.openQc').stop().animate({
        width: 0
    }, 500, 'swing');
    $('.qcBlock').stop().animate({
        right: 0,
        top: 0
    }, 1000, 'swing');
}

function showBottom(e) {
    var cType = $(e).attr('cType');
    var url = $(e).attr('data-url');
    var qr = $(e).attr('data-qr');
    var vid = $(e).attr('data-vid');
    if (cType == 'img') {
        $('.bottomGif').attr('src', url); //把图片绑定到底部弹框中
        $('.imgBlock').show();
    } else if (cType == 'video') {
        var div_id = 'youkuplayer_' + vid;
        var vHtml = '<div id="'+div_id+'" style="width:530px;height:400px"></div>';
        //var vHtml = '<iframe height=400 width=530 src="'+url+'" frameborder=0 allowfullscreen></iframe>';
        $('.videoBlock').append(vHtml).show(); //把视屏绑定到底部弹框中

        player = new YKU.Player(div_id,{
            styleid: '0',
            client_id: youku_client_id,
            vid: vid,
            newPlayer: true
        });
    }
    $('.bottomQc').attr('src', qr); //当前内容的二维码图片绑定进页面
    $('.bottomBg').show();
    noWechatShareImg = $(e).attr('data-shareImg');
    noWechatShareUrl = $(e).attr('data-shareUrl');
}

function showQcBottom() {
    $('.bottomQc').show();
}

function closeQcBottom() {
    $('.bottomQc').hide();
}

function closeBottom() {
    $('.videoBlock').html('').hide();
    $('.imgBlock').hide();
    $('.bottomQc').attr('src', '').hide();
    $('.bottomBg').hide();
}

function topGoPage3(){
	window.top.window.scrollTo(0,770)
	}

var target_str='_blank';
//打开窗口的大小
var window_size="scrollbars=no,width=600,height=450,"+"left=75,top=20,status=no,resizable=yes";

//分享到新浪网
function shareToSina(sharetext, pageurl, picUrl) {
		window.open("http://service.weibo.com/share/share.php?title=" + encodeURIComponent(sharetext) + "&url=" + encodeURIComponent(pageurl)+"&pic="+encodeURIComponent(picUrl)+'&searchPic=false', target_str,window_size)}


//分享到腾讯微博
function shareToTencent(title, pageurl, sharetext) {
		window.open('http://share.v.t.qq.com/index.php?c=share&a=index&title='+encodeURIComponent(sharetext)+'&url='+encodeURIComponent(pageurl), target_str,window_size)}

//分享到豆瓣网
function shareToDouban(title, pageurl, sharetext,picurl) {
		window.open('http://www.douban.com/recommend/?url=' + encodeURIComponent(pageurl) +"&image="+encodeURIComponent(picurl)+'&title=' + encodeURIComponent(title)+'&text='+encodeURIComponent(sharetext) , target_str,window_size);}

//分享到QQ空间
function shareToQzone(title, pageurl, sharetext,picurl) {
		window.open("http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url="+encodeURIComponent(pageurl)+"&title="+encodeURIComponent(title)+"&pics="+encodeURIComponent(picurl)+"&summary="+encodeURIComponent(sharetext), target_str,window_size);
	}


//share to renren
function shareToRenRen(title, pageurl,sharetext,picurl){

	window.open("http://widget.renren.com/dialog/share?url="+encodeURIComponent(pageurl)+"&title="+encodeURIComponent(title)+"&content="+encodeURIComponent(sharetext)+"&pic="+encodeURIComponent(picurl)+"&message="+encodeURIComponent(sharetext), target_str,window_size);
	}

function shareNoWeichat(){

	var _title=noWechatShareTitle;
	var _pageurl=noWechatSharlUrl;
	var _picurl=noWechatShareImg;
	var _sharetext=noWechatShareTxt;

		$(".douban").click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToDouban(_title,_pageurl,_sharetext,_picurl);
			// ga('send', 'event', 'Social', 'share','douban')
		});
		$(".renren").click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToRenRen(_title,_pageurl,_sharetext,_picurl);
			// ga('send', 'event', 'Social', 'share','Renren')
		});
		$(".weibo").click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToSina(_sharetext,_pageurl,_picurl);
			// ga('send', 'event', 'Social', 'share','Sina')
		});
		$(".tengxun").click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToTencent(_title,_pageurl,_sharetext);
			// ga('send', 'event', 'Social', 'share','Tencent')
		});

		$('.sinaShare').click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToSina(_sharetext,_pageurl,_picurl);
			});

		$('.qqShare').click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToTencent(_title,_pageurl,_sharetext);
			});

		$('.qzoneShare').click(function(){
			var _title=noWechatShareTitle;
			var _pageurl=noWechatSharlUrl;
			var _picurl=noWechatShareImg;
			var _sharetext=noWechatShareTxt;
			shareToQzone(_title,_pageurl,_sharetext,_picurl);
			});
	}

function closeRule(){
	$('.ruleBg').hide();
	$('.ruleBlock').hide();
	}

var isScrollChanged=false;

function showRule(){
	$('.ruleBg').show();
	$('.ruleBlock').show();
	if(!isScrollChanged){
		isScrollChanged=true;
		$('#scrollbar2').tinyscrollbar();
		$('.thumb').height(parseInt($('.thumb').height())-10);
		}
	}
