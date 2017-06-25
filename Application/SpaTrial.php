<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Spa</title>
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

<body bgcolor="#E4DCBB" onload="FP_preloadImgs(/*url*/'Images/Buttons/button63.gif', /*url*/'Images/Buttons/button64.gif', /*url*/'Images/Buttons/button66.gif', /*url*/'Images/Buttons/button67.gif')">

<p><font face="Calibri" size="5" color="#800000">Spa</font></p>
<p><a href="Ayurvedic.php">
<img border="0" id="img1" src="Images/Buttons/button62.gif" height="22" width="110" alt="Ayurvedic Spa" fp-style="fp-btn: Jewel 4; fp-transparent: 1" fp-title="Ayurvedic Spa" onmouseover="FP_swapImg(1,0,/*id*/'img1',/*url*/'Images/Buttons/button63.gif')" onmouseout="FP_swapImg(0,0,/*id*/'img1',/*url*/'Images/Buttons/button62.gif')" onmousedown="FP_swapImg(1,0,/*id*/'img1',/*url*/'Images/Buttons/button64.gif')" onmouseup="FP_swapImg(0,0,/*id*/'img1',/*url*/'Images/Buttons/button63.gif')"></a></p>
<p><a href="DaySpa.php">
<img border="0" id="img2" src="Images/Buttons/button65.gif" height="22" width="110" alt="Day Spa" fp-style="fp-btn: Jewel 4; fp-transparent: 1" fp-title="Day Spa" onmouseover="FP_swapImg(1,0,/*id*/'img2',/*url*/'Images/Buttons/button66.gif')" onmouseout="FP_swapImg(0,0,/*id*/'img2',/*url*/'Images/Buttons/button65.gif')" onmousedown="FP_swapImg(1,0,/*id*/'img2',/*url*/'Images/Buttons/button67.gif')" onmouseup="FP_swapImg(0,0,/*id*/'img2',/*url*/'Images/Buttons/button66.gif')"></a></p>

</body>

</html>
