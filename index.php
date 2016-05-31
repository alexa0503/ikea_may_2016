<?php
if(isset($_GET)){
    header('Location:public/?'.http_build_query($_GET));
}
