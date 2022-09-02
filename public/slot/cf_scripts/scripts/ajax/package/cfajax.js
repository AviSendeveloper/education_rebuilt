/*ADOBE SYSTEMS INCORPORATED
Copyright 2012 Adobe Systems Incorporated
All Rights Reserved.

NOTICE:  Adobe permits you to use, modify, and distribute this file in accordance with the
terms of the Adobe license agreement accompanying it.  If you have received this file from a
source other than Adobe, then your use, modification, or distribution of it requires the prior
written permission of Adobe.*/
if(!String.prototype.startsWith){
Object.defineProperty(String.prototype,"startsWith",{value:function(_684,pos){
pos=!pos||pos<0?0:+pos;
return this.substring(pos,pos+_684.length)===_684;
}});
}
function cfinit(){
if(!window.ColdFusion){
ColdFusion={};
var $C=ColdFusion;
if(!$C.Ajax){
$C.Ajax={};
}
var $A=$C.Ajax;
if(!$C.AjaxProxy){
$C.AjaxProxy={};
}
var $X=$C.AjaxProxy;
if(!$C.Bind){
$C.Bind={};
}
var $B=$C.Bind;
if(!$C.Event){
$C.Event={};
}
var $E=$C.Event;
if(!$C.Log){
$C.Log={};
}
var $L=$C.Log;
if(!$C.Util){
$C.Util={};
}
var $U=$C.Util;
if(!$C.DOM){
$C.DOM={};
}
var $D=$C.DOM;
if(!$C.Spry){
$C.Spry={};
}
var $S=$C.Spry;
if(!$C.Pod){
$C.Pod={};
}
var $P=$C.Pod;
if(!$C.objectCache){
$C.objectCache={};
}
if(!$C.required){
$C.required={};
}
if(!$C.importedTags){
$C.importedTags=[];
}
if(!$C.requestCounter){
$C.requestCounter=0;
}
if(!$C.bindHandlerCache){
$C.bindHandlerCache={};
}
window._cf_loadingtexthtml="<div style=\"text-align: center;\">"+window._cf_loadingtexthtml+"&nbsp;"+CFMessage["loading"]+"</div>";
$C.globalErrorHandler=function(_690,_691){
if($L.isAvailable){
$L.error(_690,_691);
}
if($C.userGlobalErrorHandler){
$C.userGlobalErrorHandler(_690);
}
if(!$L.isAvailable&&!$C.userGlobalErrorHandler){
alert(_690+CFMessage["globalErrorHandler.alert"]);
}
};
$C.handleError=function(_692,_693,_694,_695,_696,_697,_698,_699){
var msg=$L.format(_693,_695);
if(_692){
$L.error(msg,"http");
if(!_696){
_696=-1;
}
if(!_697){
_697=msg;
}
_692(_696,_697,_699);
}else{
if(_698){
$L.error(msg,"http");
throw msg;
}else{
$C.globalErrorHandler(msg,_694);
}
}
};
$C.setGlobalErrorHandler=function(_69b){
$C.userGlobalErrorHandler=_69b;
};
$A.createXMLHttpRequest=function(){
try{
return new XMLHttpRequest();
}
catch(e){
}
var _69c=["Microsoft.XMLHTTP","MSXML2.XMLHTTP.5.0","MSXML2.XMLHTTP.4.0","MSXML2.XMLHTTP.3.0","MSXML2.XMLHTTP"];
for(var i=0;i<_69c.length;i++){
try{
return new ActiveXObject(_69c[i]);
}
catch(e){
}
}
return false;
};
$A.isRequestError=function(req){
return ((req.status!=0&&req.status!=200)||req.getResponseHeader("server-error"));
};
$A.sendMessage=function(url,_6a0,_6a1,_6a2,_6a3,_6a4,_6a5){
var req=$A.createXMLHttpRequest();
if(!_6a0){
_6a0="GET";
}
if(_6a2&&_6a3){
req.onreadystatechange=function(){
$A.callback(req,_6a3,_6a4);
};
}
if(_6a1){
_6a1+="&_cf_nodebug=true&_cf_nocache=true";
}else{
_6a1="_cf_nodebug=true&_cf_nocache=true";
}
if(window._cf_clientid){
_6a1+="&_cf_clientid="+_cf_clientid;
}
if(_6a0=="GET"){
if(_6a1){
_6a1+="&_cf_rc="+($C.requestCounter++);
if(url.indexOf("?")==-1){
url+="?"+_6a1;
}else{
url+="&"+_6a1;
}
}
$L.info("ajax.sendmessage.get","http",[url]);
req.open(_6a0,url,_6a2);
req.send(null);
}else{
$L.info("ajax.sendmessage.post","http",[url,_6a1]);
req.open(_6a0,url,_6a2);
req.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
if(_6a1){
req.send(_6a1);
}else{
req.send(null);
}
}
if(!_6a2){
while(req.readyState!=4){
}
if($A.isRequestError(req)){
$C.handleError(null,"ajax.sendmessage.error","http",[req.status,req.statusText],req.status,req.statusText,_6a5);
}else{
return req;
}
}
};
$A.callback=function(req,_6a8,_6a9){
if(req.readyState!=4){
return;
}
req.onreadystatechange=new Function;
_6a8(req,_6a9);
};
$A.submitForm=function(_6aa,url,_6ac,_6ad,_6ae,_6af){
var _6b0=$C.getFormQueryString(_6aa);
if(_6b0==-1){
$C.handleError(_6ad,"ajax.submitform.formnotfound","http",[_6aa],-1,null,true);
return;
}
if(!_6ae){
_6ae="POST";
}
_6af=!(_6af===false);
var _6b1=function(req){
$A.submitForm.callback(req,_6aa,_6ac,_6ad);
};
$L.info("ajax.submitform.submitting","http",[_6aa]);
var _6b3=$A.sendMessage(url,_6ae,_6b0,_6af,_6b1);
if(!_6af){
$L.info("ajax.submitform.success","http",[_6aa]);
return _6b3.responseText;
}
};
$A.submitForm.callback=function(req,_6b5,_6b6,_6b7){
if($A.isRequestError(req)){
$C.handleError(_6b7,"ajax.submitform.error","http",[req.status,_6b5,req.statusText],req.status,req.statusText);
}else{
$L.info("ajax.submitform.success","http",[_6b5]);
if(_6b6){
_6b6(req.responseText);
}
}
};
$C.empty=function(){
};
$C.setSubmitClicked=function(_6b8,_6b9){
var el=$D.getElement(_6b9,_6b8);
el.cfinputbutton=true;
$C.setClickedProperty=function(){
el.clicked=true;
};
$E.addListener(el,"click",$C.setClickedProperty);
};
$C.getFormQueryString=function(_6bb,_6bc){
var _6bd;
if(typeof _6bb=="string"){
_6bd=(document.getElementById(_6bb)||document.forms[_6bb]);
}else{
if(typeof _6bb=="object"){
_6bd=_6bb;
}
}
if(!_6bd||null==_6bd.elements){
return -1;
}
var _6be,elementName,elementValue,elementDisabled;
var _6bf=false;
var _6c0=(_6bc)?{}:"";
for(var i=0;i<_6bd.elements.length;i++){
_6be=_6bd.elements[i];
elementDisabled=_6be.disabled;
elementName=_6be.name;
elementValue=_6be.value;
if(_6be.id&&_6be.id.startsWith("cf_textarea")){
var _6c2=CKEDITOR.instances;
if(_6c2){
for(ta in _6c2){
if(_6c2[ta].getData){
elementValue=_6c2[ta].getData();
break;
}
}
}
}
if(!elementDisabled&&elementName){
switch(_6be.type){
case "select-one":
case "select-multiple":
for(var j=0;j<_6be.options.length;j++){
if(_6be.options[j].selected){
if(window.ActiveXObject){
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,_6be.options[j].attributes["value"].specified?_6be.options[j].value:_6be.options[j].text);
}else{
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,_6be.options[j].hasAttribute("value")?_6be.options[j].value:_6be.options[j].text);
}
}
}
break;
case "radio":
case "checkbox":
if(_6be.checked){
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
}
break;
case "file":
case undefined:
case "reset":
break;
case "button":
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
break;
case "submit":
if(_6be.cfinputbutton){
if(_6bf==false&&_6be.clicked){
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
_6bf=true;
}
}else{
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
}
break;
case "textarea":
var _6c4;
if(window.FCKeditorAPI&&(_6c4=$C.objectCache[elementName])&&_6c4.richtextid){
var _6c5=FCKeditorAPI.GetInstance(_6c4.richtextid);
if(_6c5){
elementValue=_6c5.GetXHTML();
}
}
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
break;
default:
_6c0=$C.getFormQueryString.processFormData(_6c0,_6bc,elementName,elementValue);
break;
}
}
}
if(!_6bc){
_6c0=_6c0.substr(0,_6c0.length-1);
}
return _6c0;
};
$C.getFormQueryString.processFormData=function(_6c6,_6c7,_6c8,_6c9){
if(_6c7){
if(_6c6[_6c8]){
_6c6[_6c8]+=","+_6c9;
}else{
_6c6[_6c8]=_6c9;
}
}else{
_6c6+=encodeURIComponent(_6c8)+"="+encodeURIComponent(_6c9)+"&";
}
return _6c6;
};
$A.importTag=function(_6ca){
$C.importedTags.push(_6ca);
};
$A.checkImportedTag=function(_6cb){
var _6cc=false;
for(var i=0;i<$C.importedTags.length;i++){
if($C.importedTags[i]==_6cb){
_6cc=true;
break;
}
}
if(!_6cc){
$C.handleError(null,"ajax.checkimportedtag.error","widget",[_6cb]);
}
};
$C.getElementValue=function(_6ce,_6cf,_6d0){
if(!_6ce){
$C.handleError(null,"getelementvalue.noelementname","bind",null,null,null,true);
return;
}
if(!_6d0){
_6d0="value";
}
var _6d1=$B.getBindElementValue(_6ce,_6cf,_6d0);
if(typeof (_6d1)=="undefined"){
_6d1=null;
}
if(_6d1==null){
$C.handleError(null,"getelementvalue.elnotfound","bind",[_6ce,_6d0],null,null,true);
return;
}
return _6d1;
};
$B.getBindElementValue=function(_6d2,_6d3,_6d4,_6d5,_6d6){
var _6d7="";
if(window[_6d2]){
var _6d8=eval(_6d2);
if(_6d8&&_6d8._cf_getAttribute){
_6d7=_6d8._cf_getAttribute(_6d4);
return _6d7;
}
}
var _6d9=$C.objectCache[_6d2];
if(_6d9&&_6d9._cf_getAttribute){
_6d7=_6d9._cf_getAttribute(_6d4);
return _6d7;
}
var el=$D.getElement(_6d2,_6d3);
var _6db=(el&&((!el.length&&el.length!=0)||(el.length&&el.length>0)||el.tagName=="SELECT"));
if(!_6db&&!_6d6){
$C.handleError(null,"bind.getbindelementvalue.elnotfound","bind",[_6d2]);
return null;
}
if(el.tagName!="SELECT"){
if(el.length>1){
var _6dc=true;
for(var i=0;i<el.length;i++){
var _6de=(el[i].getAttribute("type")=="radio"||el[i].getAttribute("type")=="checkbox");
if(!_6de||(_6de&&el[i].checked)){
if(!_6dc){
_6d7+=",";
}
_6d7+=$B.getBindElementValue.extract(el[i],_6d4);
_6dc=false;
}
}
}else{
_6d7=$B.getBindElementValue.extract(el,_6d4);
}
}else{
var _6dc=true;
for(var i=0;i<el.options.length;i++){
if(el.options[i].selected){
if(!_6dc){
_6d7+=",";
}
_6d7+=$B.getBindElementValue.extract(el.options[i],_6d4);
_6dc=false;
}
}
}
if(typeof (_6d7)=="object"){
$C.handleError(null,"bind.getbindelementvalue.simplevalrequired","bind",[_6d2,_6d4]);
return null;
}
if(_6d5&&$C.required[_6d2]&&_6d7.length==0){
return null;
}
return _6d7;
};
$B.getBindElementValue.extract=function(el,_6e0){
var _6e1=el[_6e0];
if((_6e1==null||typeof (_6e1)=="undefined")&&el.getAttribute){
_6e1=el.getAttribute(_6e0);
}
return _6e1;
};
$L.init=function(){
if(window.YAHOO&&YAHOO.widget&&YAHOO.widget.Logger){
YAHOO.widget.Logger.categories=[CFMessage["debug"],CFMessage["info"],CFMessage["error"],CFMessage["window"]];
YAHOO.widget.LogReader.prototype.formatMsg=function(_6e2){
var _6e3=_6e2.category;
return "<p>"+"<span class='"+_6e3+"'>"+_6e3+"</span>:<i>"+_6e2.source+"</i>: "+_6e2.msg+"</p>";
};
var _6e4=new YAHOO.widget.LogReader(null,{width:"30em",fontSize:"100%"});
_6e4.setTitle(CFMessage["log.title"]||"ColdFusion AJAX Logger");
_6e4._btnCollapse.value=CFMessage["log.collapse"]||"Collapse";
_6e4._btnPause.value=CFMessage["log.pause"]||"Pause";
_6e4._btnClear.value=CFMessage["log.clear"]||"Clear";
$L.isAvailable=true;
}
};
$L.log=function(_6e5,_6e6,_6e7,_6e8){
if(!$L.isAvailable){
return;
}
if(!_6e7){
_6e7="global";
}
_6e7=CFMessage[_6e7]||_6e7;
_6e6=CFMessage[_6e6]||_6e6;
_6e5=$L.format(_6e5,_6e8);
YAHOO.log(_6e5,_6e6,_6e7);
};
$L.format=function(code,_6ea){
var msg=CFMessage[code]||code;
if(_6ea){
for(i=0;i<_6ea.length;i++){
if(!_6ea[i].length){
_6ea[i]="";
}
var _6ec="{"+i+"}";
msg=msg.replace(_6ec,_6ea[i]);
}
}
return msg;
};
$L.debug=function(_6ed,_6ee,_6ef){
$L.log(_6ed,"debug",_6ee,_6ef);
};
$L.info=function(_6f0,_6f1,_6f2){
$L.log(_6f0,"info",_6f1,_6f2);
};
$L.error=function(_6f3,_6f4,_6f5){
$L.log(_6f3,"error",_6f4,_6f5);
};
$L.dump=function(_6f6,_6f7){
if($L.isAvailable){
var dump=(/string|number|undefined|boolean/.test(typeof (_6f6))||_6f6==null)?_6f6:recurse(_6f6,typeof _6f6,true);
$L.debug(dump,_6f7);
}
};
$X.invoke=function(_6f9,_6fa,_6fb,_6fc,_6fd){
return $X.invokeInternal(_6f9,_6fa,_6fb,_6fc,_6fd,false,null,null);
};
$X.invokeInternal=function(_6fe,_6ff,_700,_701,_702,_703,_704,_705){
var _706="method="+_6ff+"&_cf_ajaxproxytoken="+_700;
if(_703){
_706+="&_cfclient="+"true";
var _707=$X.JSON.encodeInternal(_6fe._variables,_703);
_706+="&_variables="+encodeURIComponent(_707);
var _708=$X.JSON.encodeInternal(_6fe._metadata,_703);
_706+="&_metadata="+encodeURIComponent(_708);
}
var _709=_6fe.returnFormat||"json";
_706+="&returnFormat="+_709;
if(_6fe.queryFormat){
_706+="&queryFormat="+_6fe.queryFormat;
}
if(_6fe.formId){
var _70a=$C.getFormQueryString(_6fe.formId,true);
if(_701!=null){
for(prop in _70a){
_701[prop]=_70a[prop];
}
}else{
_701=_70a;
}
_6fe.formId=null;
}
var _70b="";
if(_701!=null){
_70b=$X.JSON.encodeInternal(_701,_703);
_706+="&argumentCollection="+encodeURIComponent(_70b);
}
$L.info("ajaxproxy.invoke.invoking","http",[_6fe.cfcPath,_6ff,_70b]);
if(_6fe.callHandler){
_6fe.callHandler.call(null,_6fe.callHandlerParams,_6fe.cfcPath,_706);
return;
}
var _70c;
var _70d=_6fe.async;
if(_704!=null){
_70d=true;
_70c=function(req){
$X.callbackOp(req,_6fe,_702,_704,_705);
};
}else{
if(_6fe.async){
_70c=function(req){
$X.callback(req,_6fe,_702);
};
}
}
var req=$A.sendMessage(_6fe.cfcPath,_6fe.httpMethod,_706,_70d,_70c,null,true);
if(!_70d){
return $X.processResponse(req,_6fe);
}
};
$X.callback=function(req,_712,_713){
if($A.isRequestError(req)){
$C.handleError(_712.errorHandler,"ajaxproxy.invoke.error","http",[req.status,_712.cfcPath,req.statusText],req.status,req.statusText,false,_713);
}else{
if(_712.callbackHandler){
var _714=$X.processResponse(req,_712);
_712.callbackHandler(_714,_713);
}
}
};
$X.callbackOp=function(req,_716,_717,_718,_719){
if($A.isRequestError(req)){
var _71a=_716.errorHandler;
if(_719!=null){
_71a=_719;
}
$C.handleError(_71a,"ajaxproxy.invoke.error","http",[req.status,_716.cfcPath,req.statusText],req.status,req.statusText,false,_717);
}else{
if(_718){
var _71b=$X.processResponse(req,_716);
_718(_71b,_717);
}
}
};
$X.processResponse=function(req,_71d){
var _71e=true;
for(var i=0;i<req.responseText.length;i++){
var c=req.responseText.charAt(i);
_71e=(c==" "||c=="\n"||c=="\t"||c=="\r");
if(!_71e){
break;
}
}
var _721=(req.responseXML&&req.responseXML.childNodes.length>0);
var _722=_721?"[XML Document]":req.responseText;
$L.info("ajaxproxy.invoke.response","http",[_722]);
var _723;
var _724=_71d.returnFormat||"json";
if(_724=="json"){
try{
_723=_71e?null:$X.JSON.decode(req.responseText);
}
catch(e){
if(typeof _71d._metadata!=="undefined"&&_71d._metadata.servercfc&&typeof req.responseText==="string"){
_723=req.responseText;
}else{
throw e;
}
}
}else{
_723=_721?req.responseXML:(_71e?null:req.responseText);
}
return _723;
};
$X.init=function(_725,_726,_727){
if(typeof _727==="undefined"){
_727=false;
}
var _728=_726;
if(!_727){
var _729=_726.split(".");
var ns=self;
for(i=0;i<_729.length-1;i++){
if(_729[i].length){
ns[_729[i]]=ns[_729[i]]||{};
ns=ns[_729[i]];
}
}
var _72b=_729[_729.length-1];
if(ns[_72b]){
return ns[_72b];
}
ns[_72b]=function(){
this.httpMethod="GET";
this.async=false;
this.callbackHandler=null;
this.errorHandler=null;
this.formId=null;
};
_728=ns[_72b].prototype;
}else{
_728.httpMethod="GET";
_728.async=false;
_728.callbackHandler=null;
_728.errorHandler=null;
_728.formId=null;
}
_728.cfcPath=_725;
_728.setHTTPMethod=function(_72c){
if(_72c){
_72c=_72c.toUpperCase();
}
if(_72c!="GET"&&_72c!="POST"){
$C.handleError(null,"ajaxproxy.sethttpmethod.invalidmethod","http",[_72c],null,null,true);
}
this.httpMethod=_72c;
};
_728.setSyncMode=function(){
this.async=false;
};
_728.setAsyncMode=function(){
this.async=true;
};
_728.setCallbackHandler=function(fn){
this.callbackHandler=fn;
this.setAsyncMode();
};
_728.setErrorHandler=function(fn){
this.errorHandler=fn;
this.setAsyncMode();
};
_728.setForm=function(fn){
this.formId=fn;
};
_728.setQueryFormat=function(_730){
if(_730){
_730=_730.toLowerCase();
}
if(!_730||(_730!="column"&&_730!="row"&&_730!="struct")){
$C.handleError(null,"ajaxproxy.setqueryformat.invalidformat","http",[_730],null,null,true);
}
this.queryFormat=_730;
};
_728.setReturnFormat=function(_731){
if(_731){
_731=_731.toLowerCase();
}
if(!_731||(_731!="plain"&&_731!="json"&&_731!="wddx")){
$C.handleError(null,"ajaxproxy.setreturnformat.invalidformat","http",[_731],null,null,true);
}
this.returnFormat=_731;
};
$L.info("ajaxproxy.init.created","http",[_725]);
if(_727){
return _728;
}else{
return ns[_72b];
}
};
$U.isWhitespace=function(s){
var _733=true;
for(var i=0;i<s.length;i++){
var c=s.charAt(i);
_733=(c==" "||c=="\n"||c=="\t"||c=="\r");
if(!_733){
break;
}
}
return _733;
};
$U.getFirstNonWhitespaceIndex=function(s){
var _737=true;
for(var i=0;i<s.length;i++){
var c=s.charAt(i);
_737=(c==" "||c=="\n"||c=="\t"||c=="\r");
if(!_737){
break;
}
}
return i;
};
$C.trim=function(_73a){
return _73a.replace(/^\s+|\s+$/g,"");
};
$U.isInteger=function(n){
var _73c=true;
if(typeof (n)=="number"){
_73c=(n>=0);
}else{
for(i=0;i<n.length;i++){
if($U.isInteger.numberChars.indexOf(n.charAt(i))==-1){
_73c=false;
break;
}
}
}
return _73c;
};
$U.isInteger.numberChars="0123456789";
$U.isArray=function(a){
return (typeof (a.length)=="number"&&!a.toUpperCase);
};
$U.isBoolean=function(b){
if(b===true||b===false){
return true;
}else{
if(b.toLowerCase){
b=b.toLowerCase();
return (b==$U.isBoolean.trueChars||b==$U.isBoolean.falseChars);
}else{
return false;
}
}
};
$U.isBoolean.trueChars="true";
$U.isBoolean.falseChars="false";
$U.castBoolean=function(b){
if(b===true){
return true;
}else{
if(b===false){
return false;
}else{
if(b.toLowerCase){
b=b.toLowerCase();
if(b==$U.isBoolean.trueChars){
return true;
}else{
if(b==$U.isBoolean.falseChars){
return false;
}else{
return false;
}
}
}else{
return false;
}
}
}
};
$U.checkQuery=function(o){
var _741=null;
if(o&&o.COLUMNS&&$U.isArray(o.COLUMNS)&&o.DATA&&$U.isArray(o.DATA)&&(o.DATA.length==0||(o.DATA.length>0&&$U.isArray(o.DATA[0])))){
_741="row";
}else{
if(o&&o.COLUMNS&&$U.isArray(o.COLUMNS)&&o.ROWCOUNT&&$U.isInteger(o.ROWCOUNT)&&o.DATA){
_741="col";
for(var i=0;i<o.COLUMNS.length;i++){
var _743=o.DATA[o.COLUMNS[i]];
if(!_743||!$U.isArray(_743)){
_741=null;
break;
}
}
}
}
return _741;
};
$X.JSON=new function(){
var _744={}.hasOwnProperty?true:false;
var _745=/^("(\\.|[^"\\\n\r])*?"|[,:{}\[\]0-9.\-+Eaeflnr-u \n\r\t])+?$/;
var pad=function(n){
return n<10?"0"+n:n;
};
var m={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r","\"":"\\\"","\\":"\\\\"};
var _749=function(s){
if(/["\\\x00-\x1f]/.test(s)){
return "\""+s.replace(/([\x00-\x1f\\"])/g,function(a,b){
var c=m[b];
if(c){
return c;
}
c=b.charCodeAt();
return "\\u00"+Math.floor(c/16).toString(16)+(c%16).toString(16);
})+"\"";
}
return "\""+s+"\"";
};
var _74e=function(o){
var a=["["],b,i,l=o.length,v;
for(i=0;i<l;i+=1){
v=o[i];
switch(typeof v){
case "undefined":
case "function":
case "unknown":
break;
default:
if(b){
a.push(",");
}
a.push(v===null?"null":$X.JSON.encode(v));
b=true;
}
}
a.push("]");
return a.join("");
};
var _751=function(o){
return "\""+o.getFullYear()+"-"+pad(o.getMonth()+1)+"-"+pad(o.getDate())+"T"+pad(o.getHours())+":"+pad(o.getMinutes())+":"+pad(o.getSeconds())+"\"";
};
this.encode=function(o){
return this.encodeInternal(o,false);
};
this.encodeInternal=function(o,cfc){
if(typeof o=="undefined"||o===null){
return "null";
}else{
if(o instanceof Array){
return _74e(o);
}else{
if(o instanceof Date){
if(cfc){
return this.encodeInternal({_date_:o.getTime()},cfc);
}
return _751(o);
}else{
if(typeof o=="string"){
return _749(o);
}else{
if(typeof o=="number"){
return isFinite(o)?String(o):"null";
}else{
if(typeof o=="boolean"){
return String(o);
}else{
if(cfc&&typeof o=="object"&&typeof o._metadata!=="undefined"){
return "{\"_metadata\":"+this.encodeInternal(o._metadata,false)+",\"_variables\":"+this.encodeInternal(o._variables,cfc)+"}";
}else{
var a=["{"],b,i,v;
for(var i in o){
if(!_744||o.hasOwnProperty(i)){
v=o[i];
switch(typeof v){
case "undefined":
case "function":
case "unknown":
break;
default:
if(b){
a.push(",");
}
a.push(this.encodeInternal(i,cfc),":",v===null?"null":this.encodeInternal(v,cfc));
b=true;
}
}
}
a.push("}");
return a.join("");
}
}
}
}
}
}
}
};
this.decode=function(json){
if(typeof json=="object"){
return json;
}
if($U.isWhitespace(json)){
return null;
}
var _759=$U.getFirstNonWhitespaceIndex(json);
if(_759>0){
json=json.slice(_759);
}
if(window._cf_jsonprefix&&json.indexOf(_cf_jsonprefix)==0){
json=json.slice(_cf_jsonprefix.length);
}
try{
if(_745.test(json)){
return JSON.parse(json);
}
}
catch(e){
}
throw new SyntaxError("parseJSON");
};
}();
if(!$C.JSON){
$C.JSON={};
}
$C.JSON.encode=$X.JSON.encode;
$C.JSON.encodeInternal=$X.JSON.encodeInternal;
$C.JSON.decode=$X.JSON.decode;
$C.navigate=function(url,_75b,_75c,_75d,_75e,_75f){
if(url==null){
$C.handleError(_75d,"navigate.urlrequired","widget");
return;
}
if(_75e){
_75e=_75e.toUpperCase();
if(_75e!="GET"&&_75e!="POST"){
$C.handleError(null,"navigate.invalidhttpmethod","http",[_75e],null,null,true);
}
}else{
_75e="GET";
}
var _760;
if(_75f){
_760=$C.getFormQueryString(_75f);
if(_760==-1){
$C.handleError(null,"navigate.formnotfound","http",[_75f],null,null,true);
}
}
if(_75b==null){
if(_760){
if(url.indexOf("?")==-1){
url+="?"+_760;
}else{
url+="&"+_760;
}
}
$L.info("navigate.towindow","widget",[url]);
window.location.replace(url);
return;
}
$L.info("navigate.tocontainer","widget",[url,_75b]);
var obj=$C.objectCache[_75b];
if(obj!=null){
if(typeof (obj._cf_body)!="undefined"&&obj._cf_body!=null){
_75b=obj._cf_body;
}
}
$A.replaceHTML(_75b,url,_75e,_760,_75c,_75d);
};
$A.checkForm=function(_762,_763,_764,_765,_766){
var _767=_763.call(null,_762);
if(_767==false){
return false;
}
var _768=$C.getFormQueryString(_762);
$L.info("ajax.submitform.submitting","http",[_762.name]);
$A.replaceHTML(_764,_762.action,_762.method,_768,_765,_766);
return false;
};
$A.replaceHTML=function(_769,url,_76b,_76c,_76d,_76e){
var _76f=document.getElementById(_769);
if(!_76f){
$C.handleError(_76e,"ajax.replacehtml.elnotfound","http",[_769]);
return;
}
var _770="_cf_containerId="+encodeURIComponent(_769);
_76c=(_76c)?_76c+"&"+_770:_770;
$L.info("ajax.replacehtml.replacing","http",[_769,url,_76c]);
if(_cf_loadingtexthtml){
try{
_76f.innerHTML=_cf_loadingtexthtml;
}
catch(e){
}
}
var _771=function(req,_773){
var _774=false;
if($A.isRequestError(req)){
$C.handleError(_76e,"ajax.replacehtml.error","http",[req.status,_773.id,req.statusText],req.status,req.statusText);
_774=true;
}
var _775=new $E.CustomEvent("onReplaceHTML",_773);
var _776=new $E.CustomEvent("onReplaceHTMLUser",_773);
$E.loadEvents[_773.id]={system:_775,user:_776};
if(req.responseText.search(/<script/i)!=-1){
try{
_773.innerHTML="";
}
catch(e){
}
$A.replaceHTML.processResponseText(req.responseText,_773,_76e);
}else{
try{
_773.innerHTML=req.responseText;
$A.updateLayouttab(_773);
}
catch(e){
}
}
$E.loadEvents[_773.id]=null;
_775.fire();
_775.unsubscribe();
_776.fire();
_776.unsubscribe();
$L.info("ajax.replacehtml.success","http",[_773.id]);
if(_76d&&!_774){
_76d();
}
};
try{
$A.sendMessage(url,_76b,_76c,true,_771,_76f);
}
catch(e){
try{
_76f.innerHTML=$L.format(CFMessage["ajax.replacehtml.connectionerrordisplay"],[url,e]);
}
catch(e){
}
$C.handleError(_76e,"ajax.replacehtml.connectionerror","http",[_769,url,e]);
}
};
$A.replaceHTML.processResponseText=function(text,_778,_779){
var pos=0;
var _77b=0;
var _77c=0;
_778._cf_innerHTML="";
while(pos<text.length){
var _77d=text.indexOf("<s",pos);
if(_77d==-1){
_77d=text.indexOf("<S",pos);
}
if(_77d==-1){
break;
}
pos=_77d;
var _77e=true;
var _77f=$A.replaceHTML.processResponseText.scriptTagChars;
for(var i=1;i<_77f.length;i++){
var _781=pos+i+1;
if(_781>text.length){
break;
}
var _782=text.charAt(_781);
if(_77f[i][0]!=_782&&_77f[i][1]!=_782){
pos+=i+1;
_77e=false;
break;
}
}
if(!_77e){
continue;
}
var _783=text.substring(_77b,pos);
if(_783){
_778._cf_innerHTML+=_783;
}
var _784=text.indexOf(">",pos)+1;
if(_784==0){
pos++;
continue;
}else{
pos+=7;
}
var _785=_784;
while(_785<text.length&&_785!=-1){
_785=text.indexOf("</s",_785);
if(_785==-1){
_785=text.indexOf("</S",_785);
}
if(_785!=-1){
_77e=true;
for(var i=1;i<_77f.length;i++){
var _781=_785+2+i;
if(_781>text.length){
break;
}
var _782=text.charAt(_781);
if(_77f[i][0]!=_782&&_77f[i][1]!=_782){
_785=_781;
_77e=false;
break;
}
}
if(_77e){
break;
}
}
}
if(_785!=-1){
var _786=text.substring(_784,_785);
var _787=_786.indexOf("<!--");
if(_787!=-1){
_786=_786.substring(_787+4);
}
var _788=_786.lastIndexOf("//-->");
if(_788!=-1){
_786=_786.substring(0,_788-1);
}
if(_786.indexOf("document.write")!=-1||_786.indexOf("CF_RunContent")!=-1){
if(_786.indexOf("CF_RunContent")!=-1){
_786=_786.replace("CF_RunContent","document.write");
}
_786="var _cfDomNode = document.getElementById('"+_778.id+"'); var _cfBuffer='';"+"if (!document._cf_write)"+"{document._cf_write = document.write;"+"document.write = function(str){if (_cfBuffer!=null){_cfBuffer+=str;}else{document._cf_write(str);}};};"+_786+";_cfDomNode._cf_innerHTML += _cfBuffer; _cfBuffer=null;";
}
try{
eval(_786);
}
catch(ex){
$C.handleError(_779,"ajax.replacehtml.jserror","http",[_778.id,ex]);
}
}
_77d=text.indexOf(">",_785)+1;
if(_77d==0){
_77c=_785+1;
break;
}
_77c=_77d;
pos=_77d;
_77b=_77d;
}
if(_77c<text.length-1){
var _783=text.substring(_77c,text.length);
if(_783){
_778._cf_innerHTML+=_783;
}
}
try{
_778.innerHTML=_778._cf_innerHTML;
$A.updateLayouttab(_778);
}
catch(e){
}
_778._cf_innerHTML="";
};
$A.updateLayouttab=function(_789){
var _78a=_789.id;
if(_78a.length>13&&_78a.indexOf("cf_layoutarea")==0){
var s=_78a.substr(13,_78a.length);
var cmp=Ext.getCmp(s);
var _78d=_789.innerHTML;
var _78e=document.getElementById(_78a);
var html=_78e.innerHTML;
_78e.innerHTML="";
if(cmp){
cmp.update("<div id="+_789.id+">"+html+"</div>");
}
var _78e=document.getElementById(_78a);
if(_78e){
}
}
};
$A.replaceHTML.processResponseText.scriptTagChars=[["s","S"],["c","C"],["r","R"],["i","I"],["p","P"],["t","T"]];
$D.getElement=function(_790,_791){
var _792=function(_793){
return (_793.name==_790||_793.id==_790);
};
var _794=$D.getElementsBy(_792,null,_791);
if(_794.length==1){
return _794[0];
}else{
return _794;
}
};
$D.getElementsBy=function(_795,tag,root){
tag=tag||"*";
var _798=[];
if(root){
root=$D.get(root);
if(!root){
return _798;
}
}else{
root=document;
}
var _799=root.getElementsByTagName(tag);
if(!_799.length&&(tag=="*"&&root.all)){
_799=root.all;
}
for(var i=0,len=_799.length;i<len;++i){
if(_795(_799[i])){
_798[_798.length]=_799[i];
}
}
return _798;
};
$D.get=function(el){
if(!el){
return null;
}
if(typeof el!="string"&&!(el instanceof Array)){
return el;
}
if(typeof el=="string"){
return document.getElementById(el);
}else{
var _79c=[];
for(var i=0,len=el.length;i<len;++i){
_79c[_79c.length]=$D.get(el[i]);
}
return _79c;
}
return null;
};
$E.loadEvents={};
$E.CustomEvent=function(_79e,_79f){
return {name:_79e,domNode:_79f,subs:[],subscribe:function(func,_7a1){
var dup=false;
for(var i=0;i<this.subs.length;i++){
var sub=this.subs[i];
if(sub.f==func&&sub.p==_7a1){
dup=true;
break;
}
}
if(!dup){
this.subs.push({f:func,p:_7a1});
}
},fire:function(){
for(var i=0;i<this.subs.length;i++){
var sub=this.subs[i];
sub.f.call(null,this,sub.p);
}
},unsubscribe:function(){
this.subscribers=[];
}};
};
$E.windowLoadImpEvent=new $E.CustomEvent("cfWindowLoadImp");
$E.windowLoadEvent=new $E.CustomEvent("cfWindowLoad");
$E.windowLoadUserEvent=new $E.CustomEvent("cfWindowLoadUser");
$E.listeners=[];
$E.addListener=function(el,ev,fn,_7aa){
var l={el:el,ev:ev,fn:fn,params:_7aa};
$E.listeners.push(l);
var _7ac=function(e){
if(!e){
var e=window.event;
}
fn.call(null,e,_7aa);
};
if(el.addEventListener){
el.addEventListener(ev,_7ac,false);
return true;
}else{
if(el.attachEvent){
el.attachEvent("on"+ev,_7ac);
return true;
}else{
return false;
}
}
};
$E.isListener=function(el,ev,fn,_7b1){
var _7b2=false;
var ls=$E.listeners;
for(var i=0;i<ls.length;i++){
if(ls[i].el==el&&ls[i].ev==ev&&ls[i].fn==fn&&ls[i].params==_7b1){
_7b2=true;
break;
}
}
return _7b2;
};
$E.callBindHandlers=function(id,_7b6,ev){
var el=document.getElementById(id);
if(!el){
return;
}
var ls=$E.listeners;
for(var i=0;i<ls.length;i++){
if(ls[i].el==el&&ls[i].ev==ev&&ls[i].fn._cf_bindhandler){
ls[i].fn.call(null,null,ls[i].params);
}
}
};
$E.registerOnLoad=function(func,_7bc,_7bd,user){
if($E.registerOnLoad.windowLoaded){
if(_7bc&&_7bc._cf_containerId&&$E.loadEvents[_7bc._cf_containerId]){
if(user){
$E.loadEvents[_7bc._cf_containerId].user.subscribe(func,_7bc);
}else{
$E.loadEvents[_7bc._cf_containerId].system.subscribe(func,_7bc);
}
}else{
func.call(null,null,_7bc);
}
}else{
if(user){
$E.windowLoadUserEvent.subscribe(func,_7bc);
}else{
if(_7bd){
$E.windowLoadImpEvent.subscribe(func,_7bc);
}else{
$E.windowLoadEvent.subscribe(func,_7bc);
}
}
}
};
$E.registerOnLoad.windowLoaded=false;
$E.onWindowLoad=function(fn){
if(window.addEventListener){
window.addEventListener("load",fn,false);
}else{
if(window.attachEvent){
window.attachEvent("onload",fn);
}else{
if(document.getElementById){
window.onload=fn;
}
}
}
};
$C.addSpanToDom=function(){
var _7c0=document.createElement("span");
document.body.insertBefore(_7c0,document.body.firstChild);
};
$E.windowLoadHandler=function(e){
if(window.Ext){
Ext.BLANK_IMAGE_URL=_cf_ajaxscriptsrc+"/resources/ext/images/default/s.gif";
}
$C.addSpanToDom();
$L.init();
$E.registerOnLoad.windowLoaded=true;
$E.windowLoadImpEvent.fire();
$E.windowLoadImpEvent.unsubscribe();
$E.windowLoadEvent.fire();
$E.windowLoadEvent.unsubscribe();
if(window.Ext){
Ext.onReady(function(){
$E.windowLoadUserEvent.fire();
});
}else{
$E.windowLoadUserEvent.fire();
}
$E.windowLoadUserEvent.unsubscribe();
};
$E.onWindowLoad($E.windowLoadHandler);
$B.register=function(_7c2,_7c3,_7c4,_7c5){
for(var i=0;i<_7c2.length;i++){
var _7c7=_7c2[i][0];
var _7c8=_7c2[i][1];
var _7c9=_7c2[i][2];
if(window[_7c7]){
var _7ca=eval(_7c7);
if(_7ca&&_7ca._cf_register){
_7ca._cf_register(_7c9,_7c4,_7c3);
continue;
}
}
var _7cb=$C.objectCache[_7c7];
if(_7cb&&_7cb._cf_register){
_7cb._cf_register(_7c9,_7c4,_7c3);
continue;
}
var _7cc=$D.getElement(_7c7,_7c8);
var _7cd=(_7cc&&((!_7cc.length&&_7cc.length!=0)||(_7cc.length&&_7cc.length>0)||_7cc.tagName=="SELECT"));
if(!_7cd){
$C.handleError(null,"bind.register.elnotfound","bind",[_7c7]);
}
if(_7cc.length>1&&!_7cc.options){
for(var j=0;j<_7cc.length;j++){
$B.register.addListener(_7cc[j],_7c9,_7c4,_7c3);
}
}else{
$B.register.addListener(_7cc,_7c9,_7c4,_7c3);
}
}
if(!$C.bindHandlerCache[_7c3.bindTo]&&typeof (_7c3.bindTo)=="string"){
$C.bindHandlerCache[_7c3.bindTo]=function(){
_7c4.call(null,null,_7c3);
};
}
if(_7c5){
_7c4.call(null,null,_7c3);
}
};
$B.register.addListener=function(_7cf,_7d0,_7d1,_7d2){
if(!$E.isListener(_7cf,_7d0,_7d1,_7d2)){
$E.addListener(_7cf,_7d0,_7d1,_7d2);
}
};
$B.assignValue=function(_7d3,_7d4,_7d5,_7d6){
if(!_7d3){
return;
}
if(_7d3.call){
_7d3.call(null,_7d5,_7d6);
return;
}
var _7d7=$C.objectCache[_7d3];
if(_7d7&&_7d7._cf_setValue){
_7d7._cf_setValue(_7d5);
return;
}
var _7d8=document.getElementById(_7d3);
if(!_7d8){
$C.handleError(null,"bind.assignvalue.elnotfound","bind",[_7d3]);
}
if(_7d8.tagName=="SELECT"){
var _7d9=$U.checkQuery(_7d5);
var _7da=$C.objectCache[_7d3];
if(_7d9){
if(!_7da||(_7da&&(!_7da.valueCol||!_7da.displayCol))){
$C.handleError(null,"bind.assignvalue.selboxmissingvaldisplay","bind",[_7d3]);
return;
}
}else{
if(typeof (_7d5.length)=="number"&&!_7d5.toUpperCase){
if(_7d5.length>0&&(typeof (_7d5[0].length)!="number"||_7d5[0].toUpperCase)){
$C.handleError(null,"bind.assignvalue.selboxerror","bind",[_7d3]);
return;
}
}else{
$C.handleError(null,"bind.assignvalue.selboxerror","bind",[_7d3]);
return;
}
}
_7d8.options.length=0;
var _7db;
var _7dc=false;
if(_7da){
_7db=_7da.selected;
if(_7db&&_7db.length>0){
_7dc=true;
}
}
if(!_7d9){
for(var i=0;i<_7d5.length;i++){
var opt=new Option(_7d5[i][1],_7d5[i][0]);
_7d8.options[i]=opt;
if(_7dc){
for(var j=0;j<_7db.length;j++){
if(_7db[j]==opt.value){
opt.selected=true;
}
}
}
}
}else{
if(_7d9=="col"){
var _7e0=_7d5.DATA[_7da.valueCol];
var _7e1=_7d5.DATA[_7da.displayCol];
if(!_7e0||!_7e1){
$C.handleError(null,"bind.assignvalue.selboxinvalidvaldisplay","bind",[_7d3]);
return;
}
for(var i=0;i<_7e0.length;i++){
var opt=new Option(_7e1[i],_7e0[i]);
_7d8.options[i]=opt;
if(_7dc){
for(var j=0;j<_7db.length;j++){
if(_7db[j]==opt.value){
opt.selected=true;
}
}
}
}
}else{
if(_7d9=="row"){
var _7e2=-1;
var _7e3=-1;
for(var i=0;i<_7d5.COLUMNS.length;i++){
var col=_7d5.COLUMNS[i];
if(col==_7da.valueCol){
_7e2=i;
}
if(col==_7da.displayCol){
_7e3=i;
}
if(_7e2!=-1&&_7e3!=-1){
break;
}
}
if(_7e2==-1||_7e3==-1){
$C.handleError(null,"bind.assignvalue.selboxinvalidvaldisplay","bind",[_7d3]);
return;
}
for(var i=0;i<_7d5.DATA.length;i++){
var opt=new Option(_7d5.DATA[i][_7e3],_7d5.DATA[i][_7e2]);
_7d8.options[i]=opt;
if(_7dc){
for(var j=0;j<_7db.length;j++){
if(_7db[j]==opt.value){
opt.selected=true;
}
}
}
}
}
}
}
}else{
_7d8[_7d4]=_7d5;
}
$E.callBindHandlers(_7d3,null,"change");
$L.info("bind.assignvalue.success","bind",[_7d5,_7d3,_7d4]);
};
$B.localBindHandler=function(e,_7e6){
var _7e7=document.getElementById(_7e6.bindTo);
var _7e8=$B.evaluateBindTemplate(_7e6,true);
$B.assignValue(_7e6.bindTo,_7e6.bindToAttr,_7e8);
};
$B.localBindHandler._cf_bindhandler=true;
$B.evaluateBindTemplate=function(_7e9,_7ea,_7eb,_7ec,_7ed){
var _7ee=_7e9.bindExpr;
var _7ef="";
if(typeof _7ed=="undefined"){
_7ed=false;
}
for(var i=0;i<_7ee.length;i++){
if(typeof (_7ee[i])=="object"){
var _7f1=null;
if(!_7ee[i].length||typeof _7ee[i][0]=="object"){
_7f1=$X.JSON.encode(_7ee[i]);
}else{
var _7f1=$B.getBindElementValue(_7ee[i][0],_7ee[i][1],_7ee[i][2],_7ea,_7ec);
if(_7f1==null){
if(_7ea){
_7ef="";
break;
}else{
_7f1="";
}
}
}
if(_7eb){
_7f1=encodeURIComponent(_7f1);
}
_7ef+=_7f1;
}else{
var _7f2=_7ee[i];
if(_7ed==true&&i>0){
if(typeof (_7f2)=="string"&&_7f2.indexOf("&")!=0){
_7f2=encodeURIComponent(_7f2);
}
}
_7ef+=_7f2;
}
}
return _7ef;
};
$B.jsBindHandler=function(e,_7f4){
var _7f5=_7f4.bindExpr;
var _7f6=new Array();
var _7f7=_7f4.callFunction+"(";
for(var i=0;i<_7f5.length;i++){
var _7f9;
if(typeof (_7f5[i])=="object"){
if(_7f5[i].length){
if(typeof _7f5[i][0]=="object"){
_7f9=_7f5[i];
}else{
_7f9=$B.getBindElementValue(_7f5[i][0],_7f5[i][1],_7f5[i][2],false);
}
}else{
_7f9=_7f5[i];
}
}else{
_7f9=_7f5[i];
}
if(i!=0){
_7f7+=",";
}
_7f6[i]=_7f9;
_7f7+="'"+_7f9+"'";
}
_7f7+=")";
var _7fa=_7f4.callFunction.apply(null,_7f6);
$B.assignValue(_7f4.bindTo,_7f4.bindToAttr,_7fa,_7f4.bindToParams);
};
$B.jsBindHandler._cf_bindhandler=true;
$B.urlBindHandler=function(e,_7fc){
var _7fd=_7fc.bindTo;
if($C.objectCache[_7fd]&&$C.objectCache[_7fd]._cf_visible===false){
$C.objectCache[_7fd]._cf_dirtyview=true;
return;
}
var url=$B.evaluateBindTemplate(_7fc,false,true,false,true);
var _7ff=$U.extractReturnFormat(url);
if(_7ff==null||typeof _7ff=="undefined"){
_7ff="JSON";
}
if(_7fc.bindToAttr||typeof _7fc.bindTo=="undefined"||typeof _7fc.bindTo=="function"){
var _7fc={"bindTo":_7fc.bindTo,"bindToAttr":_7fc.bindToAttr,"bindToParams":_7fc.bindToParams,"errorHandler":_7fc.errorHandler,"url":url,returnFormat:_7ff};
try{
$A.sendMessage(url,"GET",null,true,$B.urlBindHandler.callback,_7fc);
}
catch(e){
$C.handleError(_7fc.errorHandler,"ajax.urlbindhandler.connectionerror","http",[url,e]);
}
}else{
$A.replaceHTML(_7fd,url,null,null,_7fc.callback,_7fc.errorHandler);
}
};
$B.urlBindHandler._cf_bindhandler=true;
$B.urlBindHandler.callback=function(req,_801){
if($A.isRequestError(req)){
$C.handleError(_801.errorHandler,"bind.urlbindhandler.httperror","http",[req.status,_801.url,req.statusText],req.status,req.statusText);
}else{
$L.info("bind.urlbindhandler.response","http",[req.responseText]);
var _802;
try{
if(_801.returnFormat==null||_801.returnFormat==="JSON"){
_802=$X.JSON.decode(req.responseText);
}else{
_802=req.responseText;
}
}
catch(e){
if(req.responseText!=null&&typeof req.responseText=="string"){
_802=req.responseText;
}else{
$C.handleError(_801.errorHandler,"bind.urlbindhandler.jsonerror","http",[req.responseText]);
}
}
$B.assignValue(_801.bindTo,_801.bindToAttr,_802,_801.bindToParams);
}
};
$A.initSelect=function(_803,_804,_805,_806){
$C.objectCache[_803]={"valueCol":_804,"displayCol":_805,selected:_806};
};
$S.setupSpry=function(){
if(typeof (Spry)!="undefined"&&Spry.Data){
Spry.Data.DataSet.prototype._cf_getAttribute=function(_807){
var val;
var row=this.getCurrentRow();
if(row){
val=row[_807];
}
return val;
};
Spry.Data.DataSet.prototype._cf_register=function(_80a,_80b,_80c){
var obs={bindParams:_80c};
obs.onCurrentRowChanged=function(){
_80b.call(null,null,this.bindParams);
};
obs.onDataChanged=function(){
_80b.call(null,null,this.bindParams);
};
this.addObserver(obs);
};
if(Spry.Debug.trace){
var _80e=Spry.Debug.trace;
Spry.Debug.trace=function(str){
$L.info(str,"spry");
_80e(str);
};
}
if(Spry.Debug.reportError){
var _810=Spry.Debug.reportError;
Spry.Debug.reportError=function(str){
$L.error(str,"spry");
_810(str);
};
}
$L.info("spry.setupcomplete","bind");
}
};
$E.registerOnLoad($S.setupSpry,null,true);
$S.bindHandler=function(_812,_813){
var url;
var _815="_cf_nodebug=true&_cf_nocache=true";
if(window._cf_clientid){
_815+="&_cf_clientid="+_cf_clientid;
}
var _816=window[_813.bindTo];
var _817=(typeof (_816)=="undefined");
if(_813.cfc){
var _818={};
var _819=_813.bindExpr;
for(var i=0;i<_819.length;i++){
var _81b;
if(_819[i].length==2){
_81b=_819[i][1];
}else{
_81b=$B.getBindElementValue(_819[i][1],_819[i][2],_819[i][3],false,_817);
}
_818[_819[i][0]]=_81b;
}
_818=$X.JSON.encode(_818);
_815+="&method="+_813.cfcFunction;
_815+="&argumentCollection="+encodeURIComponent(_818);
$L.info("spry.bindhandler.loadingcfc","http",[_813.bindTo,_813.cfc,_813.cfcFunction,_818]);
url=_813.cfc;
}else{
url=$B.evaluateBindTemplate(_813,false,true,_817);
$L.info("spry.bindhandler.loadingurl","http",[_813.bindTo,url]);
}
var _81c=_813.options||{};
if((_816&&_816._cf_type=="json")||_813.dsType=="json"){
_815+="&returnformat=json";
}
if(_816){
if(_816.requestInfo.method=="GET"){
_81c.method="GET";
if(url.indexOf("?")==-1){
url+="?"+_815;
}else{
url+="&"+_815;
}
}else{
_81c.postData=_815;
_81c.method="POST";
_816.setURL("");
}
_816.setURL(url,_81c);
_816.loadData();
}else{
if(!_81c.method||_81c.method=="GET"){
if(url.indexOf("?")==-1){
url+="?"+_815;
}else{
url+="&"+_815;
}
}else{
_81c.postData=_815;
_81c.useCache=false;
}
var ds;
if(_813.dsType=="xml"){
ds=new Spry.Data.XMLDataSet(url,_813.xpath,_81c);
}else{
ds=new Spry.Data.JSONDataSet(url,_81c);
ds.preparseFunc=$S.preparseData;
}
ds._cf_type=_813.dsType;
var _81e={onLoadError:function(req){
$C.handleError(_813.errorHandler,"spry.bindhandler.error","http",[_813.bindTo,req.url,req.requestInfo.postData]);
}};
ds.addObserver(_81e);
window[_813.bindTo]=ds;
}
};
$S.bindHandler._cf_bindhandler=true;
$S.preparseData=function(ds,_821){
var _822=$U.getFirstNonWhitespaceIndex(_821);
if(_822>0){
_821=_821.slice(_822);
}
if(window._cf_jsonprefix&&_821.indexOf(_cf_jsonprefix)==0){
_821=_821.slice(_cf_jsonprefix.length);
}
return _821;
};
$P.init=function(_823){
$L.info("pod.init.creating","widget",[_823]);
var _824={};
_824._cf_body=_823+"_body";
$C.objectCache[_823]=_824;
};
$B.cfcBindHandler=function(e,_826){
var _827=(_826.httpMethod)?_826.httpMethod:"GET";
var _828={};
var _829=_826.bindExpr;
for(var i=0;i<_829.length;i++){
var _82b;
if(_829[i].length==2){
_82b=_829[i][1];
}else{
_82b=$B.getBindElementValue(_829[i][1],_829[i][2],_829[i][3],false);
}
_828[_829[i][0]]=_82b;
}
var _82c=function(_82d,_82e){
$B.assignValue(_82e.bindTo,_82e.bindToAttr,_82d,_82e.bindToParams);
};
var _82f={"bindTo":_826.bindTo,"bindToAttr":_826.bindToAttr,"bindToParams":_826.bindToParams};
var _830={"async":true,"cfcPath":_826.cfc,"httpMethod":_827,"callbackHandler":_82c,"errorHandler":_826.errorHandler};
if(_826.proxyCallHandler){
_830.callHandler=_826.proxyCallHandler;
_830.callHandlerParams=_826;
}
$X.invoke(_830,_826.cfcFunction,_826._cf_ajaxproxytoken,_828,_82f);
};
$B.cfcBindHandler._cf_bindhandler=true;
$U.extractReturnFormat=function(url){
var _832;
var _833=url.toUpperCase();
var _834=_833.indexOf("RETURNFORMAT");
if(_834>0){
var _835=_833.indexOf("&",_834+13);
if(_835<0){
_835=_833.length;
}
_832=_833.substring(_834+13,_835);
}
return _832;
};
$U.replaceAll=function(_836,_837,_838){
var _839=_836.indexOf(_837);
while(_839>-1){
_836=_836.replace(_837,_838);
_839=_836.indexOf(_837);
}
return _836;
};
$U.cloneObject=function(obj){
var _83b={};
for(key in obj){
var _83c=obj[key];
if(typeof _83c=="object"){
_83c=$U.cloneObject(_83c);
}
_83b.key=_83c;
}
return _83b;
};
$C.clone=function(obj,_83e){
if(typeof (obj)!="object"){
return obj;
}
if(obj==null){
return obj;
}
var _83f=new Object();
for(var i in obj){
if(_83e===true){
_83f[i]=$C.clone(obj[i]);
}else{
_83f[i]=obj[i];
}
}
return _83f;
};
$C.printObject=function(obj){
var str="";
for(key in obj){
str=str+"  "+key+"=";
value=obj[key];
if(typeof (value)=="object"){
value=$C.printObject(value);
}
str+=value;
}
return str;
};
}
}
cfinit();
