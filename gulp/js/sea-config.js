!function(){var n,r,t;n=function(){for(var n,r=document.getElementsByTagName("script"),t=0;t<r.length&&!(n=r[t].getAttribute("data-config"));t++);return function(r){return"function"==typeof r?r(n):void 0}}(),r=function(){var r=n(function(n){var r=n.indexOf("?"),t=n.slice(r+1);if(!t)return"";var e=t.split("=");if(e.length<2)return"";var i={};return i[e[0]]=e[1],i});return function(n){return n?r[n]||"":r}}(),t=function(){var r=n(function(n){var r;return~n.indexOf("//")?(r=n.split("//"),r[0]+"//"+r[1].split("/")[0]):""});return function(){return r}}();var e={plugins:["shim"],debug:!0,base:t()+"/js/",map:[],vars:{},alias:{jquery:"libs/jquery-1.8.3",ept:"libs/ept_all",lodash:"libs/lodash",ko:"libs/knockout-3.2.0",juicer:"libs/juicer"},preload:["jquery","lodash"]};seajs.config(e)}();