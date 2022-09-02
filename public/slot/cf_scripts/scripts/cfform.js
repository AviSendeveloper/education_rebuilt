/*ADOBE SYSTEMS INCORPORATED
Copyright 2012 Adobe Systems Incorporated
All Rights Reserved.

NOTICE:  Adobe permits you to use, modify, and distribute this file in accordance with the
terms of the Adobe license agreement accompanying it.  If you have received this file from a
source other than Adobe, then your use, modification, or distribution of it requires the prior
written permission of Adobe.*/
var _CF_error_messages=new Array();
var _CF_error_fields=new Object();
var _CF_FirstErrorField=null;
var _CF_submit_status=new Array();
_CF_signalLoad=function(){
_CF_loaded=1;
};
_CF_onError=function(_91f,_920,_921,_922){
if(_CF_error_fields[_920]==null){
if(_CF_FirstErrorField==null){
_CF_FirstErrorField=_920;
}
_CF_error_exists=true;
_CF_error_fields[_920]=_922;
_CF_error_messages[_CF_error_messages.length]=_922;
}
};
_CF_onErrorAlert=function(_923){
var _924="";
for(var i=0;i<_923.length;i++){
_924+=_923[i]+"\n";
}
alert(_924);
return false;
};
updateHiddenValue=function(val,form,name){
if(form==null||form==""){
form=0;
}
if(document.forms[form]==null||document.forms[form][name]==null){
return;
}
document.forms[form][name].value=val;
};
_CF_hasValue=function(obj,_92a,_92b){
if(_92a=="TEXT"||_92a=="FILE"||_92a=="PASSWORD"||_92a=="CFTEXTAREA"||_92a=="TEXTAREA"||_92a=="CFTEXTINPUT"||_92a=="DATEFIELD"){
if(obj.value.length==0){
return false;
}else{
if(_92b){
str=obj.value.replace(/^\s+/,"").replace(/\s+$/,"");
if(str.length==0){
return false;
}
}
}
return true;
}else{
if(_92a=="SELECT"){
for(i=0;i<obj.length;i++){
if(obj.options[i].selected&&obj.options[i].value.length>0){
return true;
}
}
return false;
}else{
if(_92a=="SINGLE_VALUE_RADIO"||_92a=="SINGLE_VALUE_CHECKBOX"){
if(obj.checked){
return true;
}else{
return false;
}
}else{
if(_92a=="RADIO"||_92a=="CHECKBOX"){
if(obj.length==undefined&&obj.checked){
return true;
}else{
for(i=0;i<obj.length;i++){
if(obj[i].checked){
return true;
}
}
}
return false;
}else{
if(_92a=="CFTREE"){
if(obj["value"].length>0){
return true;
}else{
return false;
}
}else{
if(_92a=="RICHTEXT"){
var _92c=FCKeditorAPI.GetInstance(obj.id);
var val=_92c.GetXHTML();
if(val.length==0){
return false;
}else{
if(_92b){
str=val.replace(/^\s+/,"").replace(/\s+$/,"");
if(str.length==0){
return false;
}
}
return true;
}
}else{
return true;
}
}
}
}
}
}
};
_CF_checkdate=function(_92e,_92f){
_92e=_92e.replace(/^\s+/,"").replace(/\s+$/,"");
_92e=_92e=_92e.replace(/{d \'/,"").replace(/'}/,"");
if(_92f){
if(_92e.length==0){
return false;
}
}else{
if(_92e.length==0){
return true;
}
}
if(_92e.length==0){
return true;
}
isplit=_92e.indexOf("/");
splitchr="/";
if(isplit==-1){
isplit=_92e.indexOf(".");
splitchr=".";
}
if(isplit==-1){
isplit=_92e.indexOf("-");
splitchr="-";
}
if(isplit==-1||isplit==_92e.length){
return false;
}
var _930=_92e.substring(0,isplit);
if(_930.length==4){
sYear=_92e.substring(0,isplit);
isplit=_92e.indexOf(splitchr,isplit+1);
if(isplit==-1||(isplit+1)==_92e.length){
return false;
}
sMonth=_92e.substring((sYear.length+1),isplit);
sDay=_92e.substring(isplit+1);
}else{
sMonth=_92e.substring(0,isplit);
isplit=_92e.indexOf(splitchr,isplit+1);
if(isplit==-1||(isplit+1)==_92e.length){
return false;
}
sDay=_92e.substring((sMonth.length+1),isplit);
sYear=_92e.substring(isplit+1);
}
if((sDay.length==0)||(sMonth.length==0)||(sYear.length==0)){
return false;
}
if(!_CF_checkinteger(sMonth)){
return false;
}else{
if(!_CF_checkrange(sMonth,1,12)){
return false;
}else{
if(!_CF_checkinteger(sYear)){
return false;
}else{
if(sYear.length!=1&&sYear.length!=2&&sYear.length!=4){
return false;
}else{
if(!_CF_checkrange(sYear,0,9999)){
return false;
}else{
if(!_CF_checkinteger(sDay)){
return false;
}else{
if(!_CF_checkday(sYear,sMonth,sDay)){
return false;
}else{
return true;
}
}
}
}
}
}
}
};
_CF_checkeurodate=function(_931,_932){
_931=_931.replace(/^\s+/,"").replace(/\s+$/,"");
_931=_931=_931.replace(/{d \'/,"").replace(/'}/,"");
if(_932){
if(_931.length==0){
return false;
}
}else{
if(_931.length==0){
return true;
}
}
isplit=_931.indexOf("/");
splitchr="/";
if(isplit==-1){
isplit=_931.indexOf(".");
splitchr=".";
}
if(isplit==-1){
isplit=_931.indexOf("-");
splitchr="-";
}
if(isplit==-1||isplit==_931.length){
return false;
}
var _933=_931.substring(0,isplit);
if(_933.length==4){
sYear=_931.substring(0,isplit);
isplit=_931.indexOf(splitchr,isplit+1);
if(isplit==-1||(isplit+1)==_931.length){
return false;
}
sMonth=_931.substring((sYear.length+1),isplit);
sDay=_931.substring(isplit+1);
}else{
sDay=_931.substring(0,isplit);
isplit=_931.indexOf(splitchr,isplit+1);
if(isplit==-1||(isplit+1)==_931.length){
return false;
}
sMonth=_931.substring((sDay.length+1),isplit);
sYear=_931.substring(isplit+1);
}
if(!_CF_checkinteger(sMonth)){
return false;
}else{
if(!_CF_checkrange(sMonth,1,12)){
return false;
}else{
if(!_CF_checkinteger(sYear)){
return false;
}else{
if(!_CF_checkrange(sYear,0,null)){
return false;
}else{
if(!_CF_checkinteger(sDay)){
return false;
}else{
if(!_CF_checkday(sYear,sMonth,sDay)){
return false;
}else{
return true;
}
}
}
}
}
}
};
_CF_checkday=function(_934,_935,_936){
maxDay=31;
if(_935==4||_935==6||_935==9||_935==11){
maxDay=30;
}else{
if(_935==2){
if(_934%4>0){
maxDay=28;
}else{
if(_934%100==0&&_934%400>0){
maxDay=28;
}else{
maxDay=29;
}
}
}
}
return _CF_checkrange(_936,1,maxDay);
};
_CF_checkinteger=function(_937,_938){
_937=_937.replace(/^\s+/,"").replace(/\s+$/,"");
_937=_937.replace(/[$Â£Â¥â‚¬,~+]?/g,"");
if(_938){
if(_937.length==0){
return false;
}
}else{
if(_937.length==0){
return true;
}
}
var _939=".";
var _93a=_937.indexOf(_939);
if(_93a==-1){
return _CF_checknumber(_937);
}else{
return false;
}
};
_CF_numberrange=function(_93b,_93c,_93d,_93e){
if(_93e){
if(_93b.length==0){
return false;
}
}else{
if(_93b.length==0){
return true;
}
}
if(_93c!=null){
if(_93b<_93c){
return false;
}
}
if(_93d!=null){
if(_93b>_93d){
return false;
}
}
return true;
};
_CF_checknumber=function(_93f,_940){
var _941=" .+-0123456789";
var _942=" .0123456789";
var _943;
var _944=false;
var _945=false;
var _946=false;
_93f=_93f.replace(/^\s+/,"").replace(/\s+$/,"");
_93f=_93f.replace(/[$Â£Â¥â‚¬,~+]?/g,"");
if(_940){
if(_93f.length==0){
return false;
}
}else{
if(_93f.length==0){
return true;
}
}
_943=_941.indexOf(_93f.charAt(0));
if(_943==1){
_944=true;
}else{
if(_943<1){
return false;
}
}
for(var i=1;i<_93f.length;i++){
_943=_942.indexOf(_93f.charAt(i));
if(_943<0){
return false;
}else{
if(_943==1){
if(_944){
return false;
}else{
_944=true;
}
}else{
if(_943==0){
if(_944||_946){
_945=true;
}
}else{
if(_945){
return false;
}else{
_946=true;
}
}
}
}
}
return true;
};
_CF_checkrange=function(_948,_949,_94a,_94b){
_948=_948.replace(/^\s+/,"").replace(/\s+$/,"");
if(_94b){
if(_948.length==0){
return false;
}
}else{
if(_948.length==0){
return true;
}
}
if(!_CF_checknumber(_948)){
return false;
}else{
return (_CF_numberrange((eval(_948)),_949,_94a));
}
return true;
};
_CF_checktime=function(_94c,_94d){
_94c=_94c.replace(/^\s+/,"").replace(/\s+$/,"");
_94c=_94c.replace(/\s+:\s+/,":");
_94c=_94c=_94c.replace(/{t \'/,"").replace(/'}/,"");
if(_94d){
if(_94c.length==0){
return false;
}
}else{
if(_94c.length==0){
return true;
}
}
var _94e=_CF_checkregex(_94c,/^((([0-1]?\d)|(2[0-3])):[0-5]?\d)?(:[0-5]?\d)? ?([AP]M|[AP]m|[ap]m|[ap]M)?$/,_94d);
return _94e;
};
_CF_checkphone=function(_94f,_950){
_94f=_94f.replace(/^\s+/,"").replace(/\s+$/,"");
if(_950){
if(_94f.length==0){
return false;
}
}else{
if(_94f.length==0){
return true;
}
}
if(_94f.length==0){
return true;
}
return _CF_checkregex(_94f,/^(((1))?[ ,\-,\.]?([\\(]?([1-9][0-9]{2})[\\)]?))?[ ,\-,\.]?([^0-1]){1}([0-9]){2}[ ,\-,\.]?([0-9]){4}(( )((x){0,1}([0-9]){1,5}){0,1})?$/,_950);
};
_CF_checkzip=function(_951,_952){
_951=_951.replace(/^\s+/,"").replace(/\s+$/,"");
if(_952){
if(_951.length==0){
return false;
}
}else{
if(_951.length==0){
return true;
}
}
return _CF_checkregex(_951,/^([0-9]){5,5}$|(([0-9]){5,5}(-| ){1}([0-9]){4,4}$)/,_952);
};
_CF_checkcreditcard=function(_953,_954){
_953=_953.replace(/^\s+/,"").replace(/\s+$/,"");
if(_954){
if(_953.length==0){
return false;
}
}else{
if(_953.length==0){
return true;
}
}
if(_953.length==0){
return true;
}
var _955=" -";
var _956="";
var _957;
for(var i=0;i<_953.length;i++){
_957=_955.indexOf(_953.charAt(i));
if(_957<0){
_956+=_953.substring(i,(i+1));
}
}
if(_956.length<13||_956.length>19){
return false;
}
if(_956.charAt(0)=="+"){
return false;
}
if(!_CF_checkinteger(_956)){
return false;
}
var _959=_956.length%2==1?false:true;
var _95a=0;
var _95b;
for(var i=0;i<_956.length;i++){
_95b=eval(_956.charAt(i));
if(_959){
_95b*=2;
_95a+=(_95b%10);
if((_95b/10)>=1){
_95a++;
}
_959=false;
}else{
_95a+=_95b;
_959=true;
}
}
return (_95a%10)==0?true:false;
};
_CF_checkssn=function(_95c,_95d){
_95c=_95c.replace(/^\s+/,"").replace(/\s+$/,"");
if(_95d){
if(_95c.length==0){
return false;
}
}else{
if(_95c.length==0){
return true;
}
}
return _CF_checkregex(_95c,/^[0-9]{3}(-| )[0-9]{2}(-| )[0-9]{4}$/,_95d);
};
_CF_checkEmail=function(_95e,_95f){
_95e=_95e.replace(/^\s+/,"").replace(/\s+$/,"");
if(_95f){
if(_95e.length==0){
return false;
}
}else{
if(_95e.length==0){
return true;
}
}
return _CF_checkregex(_95e,/^[a-zA-Z_0-9-'\+~]+(\.[a-zA-Z_0-9-'\+~]+)*@([a-zA-Z_0-9-]+\.)+[a-zA-Z]*$/,_95f);
};
_CF_checkURL=function(_960,_961){
_960=_960.replace(/^\s+/,"").replace(/\s+$/,"");
if(_961){
if(_960.length==0){
return false;
}
}else{
if(_960.length==0){
return true;
}
}
return _CF_checkregex(_960.toLowerCase(),/^((http|https|ftp|file)\:\/\/([a-zA-Z0-0]*:[a-zA-Z0-0]*(@))?[a-zA-Z0-9-\.]+(\.[a-zA-Z]{2,3})?(:[a-zA-Z0-9]*)?\/?([a-zA-Z0-9-\._\?\,\'\/\+&amp;%\$#\=~])*)|((mailto)\:[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+[a-zA-Z0-9]*)|((news)\:[a-zA-Z0-9\.]*)$/,_961);
};
_CF_checkUUID=function(_962,_963){
_962=_962.replace(/^\s+/,"").replace(/\s+$/,"");
if(_963){
if(_962.length==0){
return false;
}
}else{
if(_962.length==0){
return true;
}
}
return _CF_checkregex(_962,/[A-Fa-f0-9]{8,8}-[A-Fa-f0-9]{4,4}-[A-Fa-f0-9]{4,4}-[A-Fa-f0-9]{16,16}/,_963);
};
_CF_checkGUID=function(_964,_965){
_964=_964.replace(/^\s+/,"").replace(/\s+$/,"");
if(_965){
if(_964.length==0){
return false;
}
}else{
if(_964.length==0){
return true;
}
}
return _CF_checkregex(_964,/[A-Fa-f0-9]{8,8}-[A-Fa-f0-9]{4,4}-[A-Fa-f0-9]{4,4}-[A-Fa-f0-9]{4,4}-[A-Fa-f0-9]{12,12}/,_965);
};
_CF_checkBoolean=function(_966,_967){
_966=_966.replace(/^\s+/,"").replace(/\s+$/,"");
if(_967){
if(_966.length==0){
return false;
}
}else{
if(_966.length==0){
return true;
}
}
if(_966.toUpperCase()=="TRUE"||_966.toUpperCase()=="YES"||(_CF_checknumber(_966)&&_966!="0")){
return true;
}else{
if(_966.toUpperCase()=="FALSE"||_966.toUpperCase()=="NO"||_966=="0"){
return true;
}else{
return false;
}
}
};
_CF_setFormParam=function(_968,_969,_96a){
var _96b="document['"+_968+"']['"+_969+"']";
var obj=eval(_96b);
if(obj==undefined){
return false;
}else{
obj.value=_96a;
return true;
}
};
_CF_checkregex=function(_96d,_96e,_96f){
if(_96f){
if(_96d.length==0){
return false;
}
}else{
if(_96d.length==0){
return true;
}
}
return _96e.test(_96d);
};
