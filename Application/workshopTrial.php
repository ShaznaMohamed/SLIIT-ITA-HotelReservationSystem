<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Workshop Hall</title>
<script language="JavaScript">
<!--
function FP_swapImg() {//v1.0
 var doc=document,args=arguments,elm,n; doc.$imgSwaps=new Array(); for(n=2; n<args.length;
 n+=2) { elm=FP_getObjectByID(args[n]); if(elm) { doc.$imgSwaps[doc.$imgSwaps.length]=elm;
 elm.$src=elm.src; elm.src=args[n+1]; } }
}

function FP_preloadImgs() {//v1.0
 var d=document,a=arguments; if(!d.FP_imgs) d.FP_imgs=new Array();
 for(var i=0; i<a.length; i++) { d.FP_imgs[i]=new Image; d.FP_imgs[i].src=a[i]; }
}

function FP_getObjectByID(id,o) {//v1.0
 var c,el,els,f,m,n; if(!o)o=document; if(o.getElementById) el=o.getElementById(id);
 else if(o.layers) c=o.layers; else if(o.all) el=o.all[id]; if(el) return el;
 if(o.id==id || o.name==id) return o; if(o.childNodes) c=o.childNodes; if(c)
 for(n=0; n<c.length; n++) { el=FP_getObjectByID(id,c[n]); if(el) return el; }
 f=o.forms; if(f) for(n=0; n<f.length; n++) { els=f[n].elements;
 for(m=0; m<els.length; m++){ el=FP_getObjectByID(id,els[n]); if(el) return el; } }
 return null;
}
// -->
</script>
</head>

<body bgcolor="#E4DCBB" onload="FP_preloadImgs(/*url*/'Images/Buttons/button44.gif', /*url*/'Images/Buttons/button45.gif', /*url*/'Images/Buttons/button4A.gif', /*url*/'Images/Buttons/button4B.gif', /*url*/'Images/Buttons/button4D.gif', /*url*/'Images/Buttons/button4E.gif')">

<p><font face="Calibri" size="5" color="#800000">Workshop Hall</font></p>
<p><a href="Rider.php">
<img border="0" id="img1" src="Images/Buttons/button43.gif" height="20" width="100" alt="Rider" fp-style="fp-btn: Jewel 4; fp-transparent: 1" fp-title="Rider" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'Images/Buttons/button44.gif')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'Images/Buttons/button43.gif')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'Images/Buttons/button45.gif')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'Images/Buttons/button44.gif')"></a></p>
<p><a href="Escort.php">
<img border="0" id="img2" src="Images/Buttons/button49.gif" height="20" width="100" alt="Escort" fp-style="fp-btn: Jewel 4; fp-transparent: 1" fp-title="Escort" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'Images/Buttons/button4A.gif')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'Images/Buttons/button49.gif')" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'Images/Buttons/button4B.gif')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'Images/Buttons/button4A.gif')"></a></p>
<p><a href="Zephyr.php">
<img border="0" id="img3" src="Images/Buttons/button4C.gif" height="20" width="100" alt="Zephyr" fp-style="fp-btn: Jewel 4; fp-transparent: 1" fp-title="Zephyr" onmouseover="FP_swapImg(1,0,/*id*/'img3',/*url*/'Images/Buttons/button4D.gif')" onmouseout="FP_swapImg(0,0,/*id*/'img3',/*url*/'Images/Buttons/button4C.gif')" onmousedown="FP_swapImg(1,0,/*id*/'img3',/*url*/'Images/Buttons/button4E.gif')" onmouseup="FP_swapImg(0,0,/*id*/'img3',/*url*/'Images/Buttons/button4D.gif')"></a></p>

</body>

</html>
