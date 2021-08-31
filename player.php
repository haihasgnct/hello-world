<!--<!doctype html>-->
<html lang="vi" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
<title>Demo JWPlayer Skin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="referrer" content="no-referrer">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/playhq_net_jwplayer@1.0.2/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/playhq_net_jwplayer@1.0.2/jwplayer/8.20.1/jwplayer.js"
        type="text/javascript"></script>
    <script type="text/javascript">jwplayer.key = 'ITWMv7t88JGzI0xPwW8I0+LveiXX9SWbfdmt0ArUSyc=';</script>
    <script language="JavaScript">
      
       window.onload = function () {
           document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               //document.onkeydown = function(e) {
               // "I" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }
       }
//edit: removed ";" from last "}" because of javascript error
</script>
<style>
html, body{
	/*background-color:#000;*/
	background-repeat: no-repeat;
	background-position: center;
	margin:0;
	padding:0;
	height:100%;
	width:100%;
	overflow:hidden;
}
*
{
	outline:0;
	border:0;
}
</style>
</head>
<body>

<center><div id="jwplayer"></div></center>
<script type="text/javascript">
		jwplayer("jwplayer").setup({
			sources: [{"file":"https://archive.org/download/ph_20201223/ph.mp4","type":"mp4","label":"360p"}],
			autostart: "false",
			width: "100%",
			height: "100%",
			//aspectratio: "16:9",
			"playbackRateControls": true,
			"mute": false,
			"preload": "none",
			"volume": 100,
			skin: {
                url: "skin.css",
            },
			});
		</script>
<style>
.jwplayer .jw-rightclick {
	display:none !important;
}
.jw-state-paused .jw-display {
	display: table !important;
}
.jw-slider-time .jw-buffer, .jw-horizontal-volume-container .jw-buffer {
	background-color: rgba(255,255,255,0.4);
}
.jw-controlbar .jw-icon.jw-button-color:hover {
	color: rgb(255, 0, 70);
}
:not(.jw-flag-touch) .jw-button-color:not(.jw-logo-button):focus, :not(.jw-flag-touch) .jw-button-color:not(.jw-logo-button):hover {
	color: rgb(255, 0, 70);
}
.jw-icon jw-icon-display jw-button-color jw-reset:hover {
	color: rgb(255, 0, 70);
}
.jwplayer.jw-state-buffering .jw-display-icon-display .jw-icon .jw-svg-icon-buffer {
	animation: jw-spin 0.3s linear infinite;
}
.jw-breakpoint-7 .jw-controlbar .jw-button-container .jw-icon-inline:not(.jw-text-live) .jw-svg-icon, .jw-breakpoint-7 .jw-controlbar .jw-button-container .jw-icon-volume .jw-svg-icon	{
	height: 24px;
	width: 24px;
}
.jw-breakpoint-7 .jw-controlbar .jw-slider-time .jw-slider-container {
	height: 5px;
}
.jw-breakpoint-7 .jw-controlbar .jw-button-container {
	padding: 0 12px;
}
.jw-breakpoint-7 .jw-controlbar .jw-slider-time {
	padding: 0 12px;
	height: 17px;
}
.jw-breakpoint-7 .jw-controlbar .jw-button-container .jw-icon-inline:not(.jw-text-live), .jw-breakpoint-7 .jw-controlbar .jw-button-container .jw-icon-volume {
	height: 44px;
	width: 55px;
}
.jw-breakpoint-7 .jw-settings-menu {
	bottom: 57px;
	right: 12px;
	width: 20%;
}
</style>		
</body>

</html>

