<?php
/*
	小垃圾必应未来会日图 API 精简版(LLBDFPA) Future Version,get tomorrow picture 此版本的功能是在中国时间下午 16 时 时，抢先获取明日图片。
  !!!(明天的图片会在格林尼治 时间8时推送 GMT+0 picture is available on 8:00)!!!
  版本 1.3 (第三方) Version: 1.3 (Third Party)
	源码 Little_Qiu,感谢 GPlane,精简 Flyfish.
*/
function b() {
    $data = json_decode(file_get_contents('https://bing.com/HPImageArchive.aspx?format=js&idx=-1&n=1'), true); // 从 Bing 获取日图 JSON
    return "https://bing.com".$data['images'][0]['url']; // 返回 URL
};
$url = b(); 
header("Location:$url"); // 302 跳转
?>
