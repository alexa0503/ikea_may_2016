<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>{{env('PAGE_TITLE')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://cloud.youku.com/assets/lib/bootstrap2.1.0/css/bootstrap.css" rel="stylesheet">
    <link href="http://cloud.youku.com/assets/lib/bootstrap2.1.0/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
        .uploadfile {
            width: 150px;
            height: 14px;
            vertical-align: top;
        }
    </style>
    <script src="http://cloud.youku.com/assets/lib/jquery-1.8.1.min.js"></script>
    <script src="{{asset('pc/js/youku.js')}}"></script>
    <script>
	function closeVideo(){
		window.parent.document.getElementById('fUploadVideo').style.display='none';
		}
	
        //document.domain = "youku.com";
        var USE_STREAM_UPLOAD = true;
        jQuery(document).ready(function() {
            var param = {
                client_id: "{{env('YOUKU_CLIENT_ID')}}",
                access_token: "",
                oauth_opentype: "currentWindow",
                oauth_redirect_uri: "{{env('YOUKU_REDIRECT_URI')}}",
                oauth_state: "",
                completeCallback: "uploadComplete"
            };
            var reg = new RegExp("(^|\\#|&)access_token=([^&]*)(\\s|&|$)", "i");
            if (reg.test(location.href)) {
                var access_token = unescape(RegExp.$2.replace(/\+/g, " "));
                param.access_token = access_token;
            }
            youkuUploadInit(param);
        });

        function uploadComplete(data) {
            //location.href="";
		window.parent.document.getElementById('vid').value=data.videoid;
		window.parent.document.getElementById('vt').value=data.title;
		window.parent.document.getElementById('fUploadVideo').style.display='none';
		window.parent.getYouku();
            //alert("videoid=" + data.videoid + ";title=" + data.title);
            //uploadagain();
        }

        function categoryLoaded(data) {
            if (data.categories) {
                var tpl = '';
                for (var i = 0; i < data.categories.length; i++) {
                    if (data.categories[i].term == 'Autos') {
                        tpl += '<option value="' + data.categories[i].term + '" selected>' + data.categories[i].label + '</option>';
                    } else {
                        tpl += '<option value="' + data.categories[i].term + '" >' + data.categories[i].label + '</option>';
                    }
                }
                //$("#category-node").html(tpl);
            }
        }
    </script>
</head>

<body>
    <div id="youku-upload">
        <div class="container">
            <form class="well form-horizontal" name="video-upload">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="spanSWFUploadButton">选择文件：</label>
                        <div id="uploadControl" class="controls">

                        </div>
                    </div>
                    <input name="title" value="ikea成长陪伴" type="hidden" />
                    <input name="description" value="ikea成长陪伴" type="hidden" />
                    <input name="tags" value="ikea成长陪伴" type="hidden" />
                    <input name="category" value="Entertainment" type="hidden" />
                    <input name="copyright_type" value="original" type="hidden" />
                    <input name="public_type" value="all" type="hidden" />
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary start" id="btn-upload-start">
                            <i class="icon-upload icon-white"></i>
                            <span>开始上传</span>
                        </button><br><br>
                        <button type="button" class="btn btn-primary" onClick="closeVideo();">
                            <i class="icon-upload icon-white"></i>
                            <span>取消上传</span>
                        </button>
                    </div>
                </fieldset>
            </form>
            <div class="row">
                <div class="span5" id="upload-status-wraper"></div>
            </div>
            <br>
            <div class="well">
                <h3>说明</h3>
                <ul>
                    <li>最大支持上传<strong>1 GB</strong> 视频文件</li>
                    <li>允许上传的视频格式为：wmv,avi,dat,asf,rm,rmvb,ram,mpg,mpeg,3gp,mov,mp4,m4v,dvix,dv,dat,</br>mkv,flv,vob,ram,qt,divx,cpk,fli,flc,mod。不符合格式的视频将会被丢弃，请确保视频格式的正确性，避免上传失败</li>
                </ul>
            </div>
        </div>
        <div id="complete"></div>
        <div id="login" style="width:100%;height:100%;position:fixed;z-index:999;left:0px;top:0px;overflow:hidden;display:none;">
        </div>
</body>

</html>
