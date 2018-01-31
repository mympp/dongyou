
var xmlHttp;
var UA = navigator.userAgent.toLowerCase();
var DMURL = document.location.protocol+'//'+location.hostname+(location.port ? ':'+location.port : '')+'/';
if(DTPath.indexOf(DMURL) != -1) DMURL = DTPath;
var AJPath = DMURL+'ajax.php';
var Try = {
	these: function() {
		var returnValue;
		for (var i = 0; i < arguments.length; i++) {var lambda = arguments[i]; try {returnValue = lambda(); break;} catch (e) {}}
		return returnValue;
	}
}

function addFav(t) {
  if(UA.indexOf('chrome') != -1){
      alert('请按快捷键Ctrl+D收藏本页，谢谢');
      return false;
    }
    window.external.addFavorite(window.location.href, document.title.replace(/<|>|'|"|&/g, ''));
    return false;
}

function Dd(i) {return document.getElementById(i);}
function Dh(i) {Dd(i).style.display = 'none';}
function Tb(d, t, p, c) {
	for(var i=1; i<=t; i++) {
		if(d == i) {Dd(p+'_t_'+i).className = c+'_2'; Ds(p+'_c_'+i);} else {Dd(p+'_t_'+i).className = c+'_1'; Dh(p+'_c_'+i);}
	}
}
function Dsearch(i) {
	if(Dd('destoon_kw').value.length < 1 || Dd('destoon_kw').value == L['keyword_message']) {
		Dd('destoon_kw').value = '';window.setTimeout(function(){Dd('destoon_kw').value = L['keyword_message'];}, 500);
		return false;
	}
	if(i && Dd('destoon_search').action.indexOf('/api/') == -1) {$('#destoon_moduleid').remove();$('#destoon_spread').remove();}
	return true;
}

function STip(w) {
	if(w.length < 2) {Dd('search_tips').innerHTML = ''; Dh('search_tips'); return;}
	if(w == tip_word) {return;} else {tip_word = w;}
	makeRequest('action=tipword&mid='+searchid+'&word='+w, AJPath, '_STip');
}
function _STip() {
	if(xmlHttp.readyState==4 && xmlHttp.status==200) {
		if(xmlHttp.responseText) {
			Ds('search_tips'); Dd('search_tips').innerHTML = xmlHttp.responseText + '<label onclick="Dh(\'search_tips\');">'+L['search_tips_close']+'&nbsp;&nbsp;</label>';
		} else {
			Dd('search_tips').innerHTML = ''; Dh('search_tips');
		}
	}
}

function makeRequest(queryString, php, func, method) {
	xmlHttp = Try.these(
		function() {return new XMLHttpRequest()},
		function() {return new ActiveXObject('Msxml2.XMLHTTP')},
		function() {return new ActiveXObject('Microsoft.XMLHTTP')}
	);
	method = (typeof method == 'undefined') ? 'post' : 'get';
	if(func) xmlHttp.onreadystatechange = eval(func);
	xmlHttp.open(method, method == 'post' ? php : php+'?'+queryString, true);
	xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlHttp.send(method == 'post' ? queryString : null);
}

function setModule(i, n) {
  Dd('destoon_search').action = DTPath+'api/search.php';
  Dd('destoon_moduleid').value = i;
  searchid = i;
  Dd('destoon_select').innerText = n;
  Dd('destoon_kw').focus();
}

function set_cookie(n, v, d) {
	var e = ''; 
	var f = d ? d : 365;
	e = new Date((new Date()).getTime() + f * 86400000);
	e = "; expires=" + e.toGMTString();
	document.cookie = CKPrex + n + "=" + v + ((CKPath == "") ? "" : ("; path=" + CKPath)) + ((CKDomain =="") ? "" : ("; domain=" + CKDomain)) + e; 
}
function get_cookie(n) {
	var v = ''; var s = CKPrex + n + "=";
	if(document.cookie.length > 0) {
		o = document.cookie.indexOf(s);
		if(o != -1) {	
			o += s.length;
			end = document.cookie.indexOf(";", o);
			if(end == -1) end = document.cookie.length;
			v = unescape(document.cookie.substring(o, end));
		}
	}
	return v;
}
function del_cookie(n) {var e = new Date((new Date()).getTime() - 1 ); e = "; expires=" + e.toGMTString(); document.cookie = CKPrex + n + "=" + escape("") +";path=/"+ e;}
function Ds(i) {Dd(i).style.display = '';}

function ext(v) {return v.substring(v.lastIndexOf('.')+1, v.length).toLowerCase();}

function isImg(i, e) {
	var v = Dd(i).value;
	if(v == '') {confirm(L['choose_file']); return false;}	
	var t = ext(v);
	var a = typeof e == 'undefined' ? 'jpg|gif|png|jpeg|bmp' : e;
	if(a.length > 2 && a.indexOf(t) == -1) {confirm(L['allow']+a); return false;}
	return true;
}