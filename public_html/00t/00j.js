/*wwwroot = "/Macintosh%20HD/Desktop%20Folder/2003/";*/
wwwroot = "/";

function getDate()
 {
 
    var date          = new Date();
    var month = getMonth(date.getMonth());
    var day           = date.getDate();
    var year          = date.getYear();
    if (year < 1900)
        year += 1900;
    var rValue       = " <font face='Verdana' size='1'>" + month + " " +day  + ", " + year + "</font>";
    return rValue;
 }

function getMonth(month)
{
	var rValue = "";
	if (month >0)
	{
		var months = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		rValue     = months[month];
	}
	return rValue;
}

function getTime()
{
   var date     = new Date();                           
   var hours    = date.getHours();
   var minutes  = date.getMinutes();
   var seconds  = date.getSeconds();
   var rValue   = complete(hours) + ":" + complete(minutes) + ":" + complete(seconds);
   return rValue;
}
 
function complete(number)
{
     var rValue; 
     if (number < 10 )
          rValue = "0" + number;
     else
          rValue = number;
     return rValue;
   
}












function openEdi() {
        window.name="home_fadu";
        {
        window.open('/institucional/edificio/index.html','ubicacion','scrollbars=no,status=no,width=762,height=552,screenX=0,screenY=0');
        }
}












function openNota(urlNota) {      
 var w=window.open(urlNota,'home_fadu');
w.focus(); 
 top.close();
}


function openFin(urlFin) {      
 var w=window.open(urlFin,'home_fadu');
w.focus(); 
 top.close();
}



function openNotablank(urlNotablank) {      
 var w=window.open(urlNotablank,'nueva_fadu');
w.focus(); 
 top.close();
}





/*dejar esta funci—n para los swf*/
function openTot2(nombre,w,h,url,scroll,x,y) {
        window.name="home_fadu";
var w=window.open(url,nombre,'scrollbars='+scroll+',status=no,width='+w+',height='+h+',screenX='+x+',screenY='+y);
w.focus ();
}





function openMapa() {
        window.name="home_fadu";
        {
        window.open('http://www.fadu.uba.ar/mapa/index.html','mapa','scrollbars=no,status=no,width=762,height=552,screenX=0,screenY=0');
        }
}





function buscar(num) { 
		if (num==1) { document.buscador1.submit(); } else { document.buscador2.submit(); }
}












function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}



function MM_findObj(n, d) { //v3.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
}



function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}







function go() {
  var i=0,a=goBack.arguments; 
    if (a.length==0) {
								parent.frames['arriba'].history.go(-1);
        parent.frames['centro'].history.go(-1);
    } else {
				    for(i=0;i<(a.length-1);i++) { eval("parent."+a[i]+".history.go(-1)"); }
    }
}






function loadFrames() {
  var i=0,a=loadFrames.arguments; 
  for(i=0;i<(a.length-1);i+=2) { eval("parent."+a[i]+".location='"+a[i+1]+"'"); }
}







 function goToTop(){
	parent.centro.location.href = parent.centro.location.pathname + '#';
  }








function MM_openPop2fra570Window(winName,features,theURL){ window.name="home_fadu";
  var w = window.open("", winName, features);
  doc = w.document;

  doc.open();
  doc.writeln("<frameset rows=\"126,1*\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln(" <frame name=\"arriba\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/aa.html\">");
  doc.writeln("  <frameset rows=\"1*,66\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln("   <frame name=\"centro\" src=\""+theURL+"\">");
  doc.writeln("   <frame name=\"abajo\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/oo.html\">");
  doc.writeln("  </frameset>");
  doc.writeln("</frameset>");

  doc.close();

  w.focus();
}




function MM_openPop2fra651Window(winName,features,theURL){ window.name="home_fadu";
  var w = window.open("", winName, features);
  doc = w.document;

  doc.open();
  doc.writeln("<frameset rows=\"126,1*\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln(" <frame name=\"arriba\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/aa651.html\">");
  doc.writeln("  <frameset rows=\"1*,66\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln("   <frame name=\"centro\" src=\""+theURL+"\">");
  doc.writeln("   <frame name=\"abajo\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/oo651.html\">");
  doc.writeln("  </frameset>");
  doc.writeln("</frameset>");

  doc.close();

  w.focus();
}





function MM_openPop2fra762Window(winName,features,theURL){ window.name="home_fadu";
  var w = window.open("", winName, features);
  doc = w.document;

  doc.open();
  doc.writeln("<frameset rows=\"126,1*\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln(" <frame name=\"arriba\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/aa762.html\">");
  doc.writeln("  <frameset rows=\"1*,66\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln("   <frame name=\"centro\" src=\""+theURL+"\">");
  doc.writeln("   <frame name=\"abajo\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/oo762.html\">");
  doc.writeln("  </frameset>");
  doc.writeln("</frameset>");

  doc.close();

  w.focus();
}




function MM_openPop2Window(winName,features,theURL) { //v2.0
 var w=window.open(theURL, winName, features+'resizable=no');
w.focus();
}


/*carreras/alumnos/*/



function openAlu762(nombre, w, h, src, scroll, x, y){

 var wwwroot = "/fadu.uba.ar/"; // en linux
 wwwroot="/";


  window.name="home_fadu";
  var w = window.open("", nombre, 'scrollbars='+scroll+',status=no,width='+w+',height='+h+',screenX='+x+',screenY='+y);
  doc = w.document;

  doc.open();
  doc.writeln("<frameset rows=\"90,1*\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln(" <frame name=\"arriba\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/aa762.html\" >");
  doc.writeln("  <frameset rows=\"1*,30\" frameborder=\"NO\" border=\"0\" framespacing=\"0\">");
  doc.writeln("   <frame name=\"centro\" src=\""+src+"\">");
  doc.writeln("   <frame name=\"abajo\" scrolling=\"NO\" noresize src=\""+wwwroot+"mg/imas/win/oo762.html\">");
  doc.writeln("  </frameset>");
  doc.writeln("</frameset>");

  doc.close();

  w.focus();
}


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}



function MM_openPopWindow(theURL,winName,features) { //v2.0
  newWnd = window.open(theURL,winName,features);
  newWnd.focus(); 
}


function openAlumnos() {
        window.name="home_fadu";
        {
        window.open('alumnos.html','catedra','scrollbars=no,status=no,width=762,height=552,screenX=0,screenY=0');
        }
window.close();
}

function goToTopAlu(){
  f = parent.frames['n01ccf'].frames['n02dd'];
  f.location.href = f.location.pathname + '#';
  }



 function goToTopHh(){
  f = parent.frames['n03cc'];
  f.location.href = f.location.pathname + '#';
  }



 function goToTopPop(){
  f = parent.frames['nupcc'];
  f.location.href = f.location.pathname + '#';
  }

 function fraNiv(f1, f2, url){
  eval("top.frames['"+f1+"'].frames['"+f2+"'].location='"+url+"'");
 }



 function anidar(){
  args = anidar.arguments;
 
  nesting = "top.";
  i = 0; 
 

  for(i = 0; i <= args.length - 2; i++){
			 nesting += "frames['"+args[i]+"'].";
  }

 eval(nesting+"location='"+args[i]+"'");

 }
/**/

var actualTexto = new Array();
var actualBack = new Array();  

function initTexto(idAnchor,nroMenu,color1,color2)
{
   if (typeof(actualTexto[nroMenu])!="undefined") { actualTexto[nroMenu].style.color = color1;  }
   actualTexto[nroMenu] = document.getElementById(idAnchor);
   actualTexto[nroMenu].style.color = color2;
}
 
function menuTexto(idAnchor,nroMenu,color1,color2)
{
   actualTexto[nroMenu].style.color = color1; 
   actualTexto[nroMenu] = document.getElementById(idAnchor);
   actualTexto[nroMenu].style.color = color2;
}
 

function initBack(idAnchor,nroMenu,color1,color2)
{
   if (typeof(actualBack[nroMenu])!="undefined")  { actualBack[nroMenu].style.background = color1;  }
   actualBack[nroMenu] = document.getElementById(idAnchor);
   actualBack[nroMenu].style.background = color2;
}
 
function menuBack(idAnchor,nroMenu,color1,color2)
{
   actualBack[nroMenu].style.background = color1; 
   actualBack[nroMenu] = document.getElementById(idAnchor);
   actualBack[nroMenu].style.background = color2;
}


function getLocation()
{ 
  var loc=String(document.location);
  loc=unescape(loc.substring(0,loc.length-location.search.length));
  return loc;
}

function parseSearchString()
{
 var pairs=unescape(location.search.substring(1).replace(/\+/g," ")).split('&');
 for (var i=0;i<pairs.length;i++){
  var pair = pairs[i].split('=');
  this[pair[0]]=pair[1];
 }
}
// JavaScript Document