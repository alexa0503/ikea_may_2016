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
    l3Swiper();
    videoInit();
});

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

var v1, v2, v3, v4;

function videoInit() {
    v3 = document.getElementById('v3');
    $('.vInit').hover(function() {
        var vIndex = $('.vInit').index($(this)) + 1;
        v3.pause();
        $('.vInit video').hide();
		$('.vInit .vGif').hide();
        switch (vIndex) {
            case 1:
				$('.vInit').eq(0).find('.vGif').show();
                break;
            case 2:
				$('.vInit').eq(1).find('.vGif').show();
                break;
            case 3:
                v3.play();
				$('#v' + vIndex).show();
                break;
            case 4:
				$('.vInit').eq(3).find('.vGif').show();
                break;
        }
       
    }, function() {
        v3.pause();
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
    return true;
}

var io = parseInt(279);

var mnGifInterval;

function mnGIf(){
	$('.fLoadImg').css('background-position', '0 0');
	setTimeout(function() {
		$('.stMask').css('background-position', '-279px 0');
		setTimeout(function() {
			$('.stMask').css('background-position', '-558px 0');
			setTimeout(function() {
				$('.stMask').css('background-position', '-837px 0');
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
            'left': -(changeWidth - 279) / 2 + 'px'
        });
    } else {
        var changeHeight = originalImgHeight * io / originalImgWidth;
        $('.upLoadImg').css({
            'width': io + 'px',
            'height': 'auto',
            'top': -(changeHeight - 279) / 2 + 'px',
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
        $('.stMask').removeClass('stMask1 stMask2 stMask3 stMask4');
        $('.stMask').addClass('stMask' + sIndex);
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
    if (fTel == '') {
        $('.fTxt2').addClass('fRed');
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

        $('input[name="x"]').val(iX);
        $('input[name="y"]').val(iY);
        $('input[name="t"]').val(iT);
        //提交图片

        $('.fLoading').show();
		clearInterval(mnGifInterval);
        st1 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-279px 0');
            st2 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-558px 0');
                st3 = setTimeout(function() {
                    $('.fLoadImg').css('background-position', '-837px 0');
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

    //youkuUploadInit(youkuParam);
}

function getYouku() {
    $('.fLoading').show();

    /*st1 = setTimeout(function() {
        $('.fLoadImg').css('background-position', '-279px 0');
        st2 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-558px 0');
            st3 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-837px 0');
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

function showQc() {
    $('.qcImg').attr('src', 'pc/images/testQc.png'); //当前内容的二维码图片绑定进页面
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
    if (cType == 'img') {
        $('.bottomGif').attr('src', url); //把图片绑定到底部弹框中
        $('.imgBlock').show();
    } else if (cType == 'video') {
        var vHtml = '<iframe height=400 width=530 src="'+url+'" frameborder=0 allowfullscreen></iframe>';
        $('.videoBlock').append(vHtml).show(); //把视屏绑定到底部弹框中
    }
    $('.bottomQc').attr('src', 'pc/images/testQc.png'); //当前内容的二维码图片绑定进页面
    $('.bottomBg').show();
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
