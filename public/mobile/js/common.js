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

var ffType;

var v3=document.getElementById('v3');

function l2Swiper() {
    var swiper1 = new Swiper('.swiper-container1', {
        nextButton: '.btnRight1',
        prevButton: '.btnLeft1',
        spaceBetween: 1,
        loop: true,
        /*autoplay: 2500,
        autoplayDisableOnInteraction: true,*/
		onSlideChangeStart:function(e){
			v3.pause();
			$('.swiper-slide video').hide();
			$('.swiper-slide .vGif').hide();
			}
    });
	
	$('.sBlock1 a').click(function(){
		var vIndex = parseInt($(this).attr('vir'));
        v3.pause();
        $('.swiper-slide video').hide();
		$('.swiper-slide .vGif').hide();
		//alert(vIndex);
        switch (vIndex) {
            case 1:
				$('.vGif'+vIndex).show();
                break;
            case 2:
				$('.vGif'+vIndex).show();
                break;
            case 3:
                v3.play();
				$('#v' + vIndex).show();
                break;
            case 4:
				$('.vGif'+vIndex).show();
                break;
        	}
		});
}

function l3Swiper() {
    var swiper2 = new Swiper('.swiper-container2', {
        nextButton: '.btnRight2',
        prevButton: '.btnLeft2',
        spaceBetween: 1,
        loop: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });
}

//l4 投票
function pVote(e) {
    //var vn = parseInt($.trim($(e).find('span').text()));
    //$(e).find('span').text(++vn);
    $.ajax(e.attr('href'), {
        dataType: 'json',
        success: function(json) {
            if (json.ret == 0) {
                $(e).find('span').text(json.num);
            }
        }
    })
    return false;
}

var st1, st2, st3;
//表单申请提交
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
        //合成图片
        drawCanvasFn();
        $('.fLoading').show();
        st1 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-398px 0');
            st2 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-796px 0');
                st3 = setTimeout(function() {
                    $('.fLoadImg').css('background-position', '-1194px 0');
                }, 600);
            }, 500);
        }, 400);
        $('#file_type').val(0);
    } else if (ffType == 'video') {
        $('#file_type').val(1);
        $('#canvasData').val('');
        $('#form').ajaxSubmit({
            dataType: 'json',
            error: function(xhr) {
                alert('信息提交失败，请重试~');
            },
            success: function(data) {
                changeF4();
                $.getJSON('{{url("wx/share")}}', {url:location.href},function(data){
                        data.link = data.wxUrl;
                        wxShare(data);
                    }
                );
            }
        });
    }
    //表单提交

}

//合成完后提交（最终提交）！！！
function dedSubmit() {
    iT = $('.ft').index($('.fton')) + 1;

    //画保存的图片
    var onImg = new Image();
    onImg.onload = function() {
        ctx.drawImage(onImg, 0, 0, 398, 398);
        var edsvImgSrc = drawCanvas.toDataURL("image/png");
        document.getElementById("saveImg").src = edsvImgSrc;
    }
    onImg.src = 'png/' + iT + '1.png';

    $('#t').val(iT);
    $('#canvasData').val(document.getElementById("f3EndGif").src);
    //生成的图片id为：f3EndGif
    $('#form').ajaxSubmit({
        dataType: 'json',
        error: function(xhr) {
            alert('信息提交失败，请重试~');
        },
        success: function(data) {
            clearTimeout(st1);
            clearTimeout(st2);
            clearTimeout(st3);
            $('.fLoadImg').css('background-position', '-1592px 0');
            if (data.ret == 0) {
                changeF3();
                $.getJSON('{{url("wx/share")}}', {url:location.href},function(data){
                        data.link = data.wxUrl;
                        wxShare(data);
                    }
                );
            } else {
                alert(data.msg);
            }
        }
    });
}

function changeF3() {
    $('.f2').hide();
    $('.fTop').hide();
    $('.fLoading').hide();

    $('.f3').show();
}

function changeF4() {
    $('.f5').hide();
    $('.f4').show();
    $('.fTop').hide();
}

//视频上传
function uploadVideo() {
    $('.fUploadVideo').show();
    //上传中
    $('.fLoading').show();
    st1 = setTimeout(function() {
        $('.fLoadImg').css('background-position', '-398px 0');
        st2 = setTimeout(function() {
            $('.fLoadImg').css('background-position', '-796px 0');
            st3 = setTimeout(function() {
                $('.fLoadImg').css('background-position', '-1194px 0');
            }, 600);
        }, 500);
    }, 400);
}

function getYouku() {
    //上传成功
    clearTimeout(st1);
    clearTimeout(st2);
    clearTimeout(st3);
    $('.fLoadImg').css('background-position', '-1592px 0');
    setTimeout(function() {
        changeF5();
    }, 1000);
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

//照片转换
function resizeImg() {
    document.getElementById("uploadBtn").onchange = function(e) {
        var file = e.target.files[0];
        var orientation;
        //EXIF js 可以读取图片的元信息 https://github.com/exif-js/exif-js
        EXIF.getData(file, function() {
            orientation = EXIF.getTag(this, 'Orientation');
        });
        var reader = new FileReader();
        reader.onload = function(e) {
            getImgData(this.result, orientation, function(data) {
                //这里可以使用校正后的图片data了
                $('#preview').attr('src', data);
                $('#preview').show();

                isSelectedImg = true;
                $('.upLoadImg').css('webkitTransform', '');
                START_X = 0;
                START_Y = 0;
                endx = 0;
                endy = 0;
                posX = 0;
                posY = 0;
                ticking = false;
                iX = 0;
                iY = 0;
                iS = 1;
                iA = 0;

                ffType = 'img';

                goF2();

                return true;
            });
        }
        reader.readAsDataURL(file);
    }
}

function goF2() {
    $('.f1').hide();
    $('.f2').show();
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
        $('.onBg').removeClass('stMask1 stMask2 stMask3 stMask4');
        $('.onBg').addClass('stMask' + sIndex);
    });
    changeMc();
}

/*图片上传*/
//全局变量
var isSelectedImg = false; //是否选择图片
var originalImgWidth; //原图宽度
var originalImgHeight; //原图高度

var dataImg;

//移动
var reqAnimationFrame = (function() {
    return window[Hammer.prefixed(window, 'requestAnimationFrame')] || function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

var el;
var ei;

var START_X = 0; //Math.round((window.innerWidth - el.offsetWidth) / 2);
var START_Y = 0; //Math.round((window.innerHeight - el.offsetHeight) / 2);

var endx = 0;
var endy = 0;
var posX = 0;
var posY = 0;

var ticking = false;
var transform;
var timer;

var mc;

var iX = 0;
var iY = 0;
var iS = 1;
var iA = 0;
var iWidth;
var iHeight;
var iXie;

function changeMc() {
    el = document.querySelector("#mMask");
    ei = document.querySelector('#preview');
    mc = new Hammer.Manager(el);

    mc.add(new Hammer.Pan({
        threshold: 0,
        pointers: 0
    }));
    mc.add(new Hammer.Rotate({
        threshold: 0
    })).recognizeWith(mc.get('pan'));
    mc.add(new Hammer.Pinch({
        threshold: 0
    })).recognizeWith([mc.get('pan'), mc.get('rotate')]);
    mc.on("panstart panmove panend", onPan);
    mc.on("rotatestart rotatemove", onRotate);
    mc.on("pinchstart pinchmove", onPinch);

    //$('#modelMImg').css({'left':mData[parseInt(selM)-1].left,'top':mData[parseInt(selM)-1].top});

    resetElement();
}

function resetElement() {
    el.className = 'animate';
    transform = {
        translate: {
            x: START_X,
            y: START_Y
        },
        scale: 1,
        angle: 0,
        rx: 0,
        ry: 0,
        rz: 0
    };
    requestElementUpdate();
}

function updateElementTransform() {
    var value = [

        'translate3d(' + transform.translate.x + 'px, ' + transform.translate.y + 'px, 0)',

        'scale(' + transform.scale + ', ' + transform.scale + ')',

        'rotate3d(' + transform.rx + ',' + transform.ry + ',' + transform.rz + ',' + transform.angle + 'deg)'

    ];

    iX = transform.translate.x;
    iY = transform.translate.y;
    iS = transform.scale;
    iA = transform.angle;

    value = value.join(" ");
    ei.style.webkitTransform = value;
    ei.style.mozTransform = value;
    ei.style.transform = value;
    ticking = false;

    $('.fImg1').fadeOut(1000);
}



function requestElementUpdate() {
    if (!ticking) {
        reqAnimationFrame(updateElementTransform);
        ticking = true;
    }
}

function onPan(ev) {

    el.className = '';

    switch (ev.type) {
        case 'panmove':
            posX = ev.deltaX + endx;
            posY = ev.deltaY + endy;
            break;
        case 'panend':
            endx = posX;
            endy = posY;
            break;
    }

    transform.translate = {
        x: posX,
        y: posY
    };
    requestElementUpdate();
}

var initScale = 1;

function onPinch(ev) {
    if (ev.type == 'pinchstart') {
        initScale = transform.scale || 1;
    }

    el.className = '';
    transform.scale = initScale * ev.scale;

    requestElementUpdate();
}

var initAngle = 0;

function onRotate(ev) {
    if (ev.type == 'rotatestart') {
        initAngle = transform.angle || 0;
    }

    el.className = '';
    transform.rz = 1;
    transform.angle = initAngle + ev.rotation;
    requestElementUpdate();
}

// @param {string} img 图片的base64
// @param {int} dir exif获取的方向信息
// @param {function} next 回调方法，返回校正方向后的base64
function getImgData(img, dir, next) {
    var image = new Image();
    image.onload = function() {
        var degree = 0,
            drawWidth, drawHeight, width, height;
        drawWidth = this.naturalWidth;
        drawHeight = this.naturalHeight;
        //以下改变一下图片大小
        var maxSide = Math.max(drawWidth, drawHeight);
        if (maxSide > 1024) {
            var minSide = Math.min(drawWidth, drawHeight);
            minSide = minSide / maxSide * 1024;
            maxSide = 1024;
            if (drawWidth > drawHeight) {
                drawWidth = maxSide;
                drawHeight = minSide;
            } else {
                drawWidth = minSide;
                drawHeight = maxSide;
            }
        }
        var canvas = document.getElementById('guoduCanvas');
        canvas.width = width = drawWidth;
        canvas.height = height = drawHeight;
        var context = canvas.getContext('2d');
        //判断图片方向，重置canvas大小，确定旋转角度，iphone默认的是home键在右方的横屏拍摄方式
        switch (dir) {
            //iphone横屏拍摄，此时home键在左侧
            case 3:
                degree = 180;
                drawWidth = -width;
                drawHeight = -height;
                break;
                //iphone竖屏拍摄，此时home键在下方(正常拿手机的方向)
            case 6:
                canvas.width = height;
                canvas.height = width;
                degree = 90;
                drawWidth = width;
                drawHeight = -height;
                break;
                //iphone竖屏拍摄，此时home键在上方
            case 8:
                canvas.width = height;
                canvas.height = width;
                degree = 270;
                drawWidth = -width;
                drawHeight = height;
                break;
        }
        //使用canvas旋转校正
        context.rotate(degree * Math.PI / 180);
        context.drawImage(this, 0, 0, drawWidth, drawHeight);
        //返回校正图片
        next(canvas.toDataURL("image/png"));
    }
    image.src = img;
}
var iT;
var drawCanvas;
var ctx;
var tImg;
var iww, iwh, iWidth, iHeight;

function drawCanvasFn() {
    drawCanvas = document.getElementById('drawCanvas');
    ctx = drawCanvas.getContext('2d');
    ww = 398;
    wh = 398;
    $('#drawCanvas').attr('width', ww);
    $('#drawCanvas').attr('height', wh);
    ctx.fillStyle = "#FFF";
    ctx.fillRect(0, 0, ww, wh);
    //draw first start
    tImg = new Image();
    tImg.onload = function() {
        ctx.save();

        iww = tImg.width;
        iwh = tImg.height;

        iWidth = 398;
        iHeight = iwh * 398 / iww;

        ctx.translate(iX + iWidth / 2, iY + iHeight / 2);

        ctx.rotate(iA * Math.PI / 180);
        ctx.scale(iS, iS);
        ctx.drawImage(tImg, -iWidth / 2, -iHeight / 2, iWidth, iHeight);
        ctx.restore(); //draw first end
        //合成到图片
        var edImgSrc = drawCanvas.toDataURL("image/png");
        document.getElementById("f3EndGif").src = edImgSrc;
        dedSubmit();
    }
    tImg.src = $('#preview').attr('src');
}

function showShareWx() {
    $('.popBg').fadeIn(500);
    $('.shareNote').fadeIn(500);
}

function closeShareWx() {
    $('.popBg').fadeOut(500);
    $('.shareNote').fadeOut(500);
}



function initShare(url) {
    if (sType == 'img') {
        $('.shareGif').attr('src', url).show(); //绑定gif
    } else if (sType == 'video') {
        var vHtml = '<iframe height=400 width=530 src="'+url+'" frameborder=0 allowfullscreen></iframe>';
        $('.shareVideo').append(vHtml).show(); //把视屏绑定到底部弹框中
    }
}
