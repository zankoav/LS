"use strict";(self.webpackChunkweb_pack_5=self.webpackChunkweb_pack_5||[]).push([[666],{971:(e,n,t)=>{var r=t(379),o=t.n(r),a=t(795),i=t.n(a),s=t(569),c=t.n(s),u=t(565),l=t.n(u),d=t(216),p=t.n(d),f=t(589),v=t.n(f),h=t(111),m={};m.styleTagTransform=v(),m.setAttributes=l(),m.insert=c().bind(null,"head"),m.domAPI=i(),m.insertStyleElement=p(),o()(h.Z,m),h.Z&&h.Z.locals&&h.Z.locals},221:(e,n,t)=>{var r=t(379),o=t.n(r),a=t(795),i=t.n(a),s=t(569),c=t.n(s),u=t(565),l=t.n(u),d=t(216),p=t.n(d),f=t(589),v=t.n(f),h=t(717),m={};m.styleTagTransform=v(),m.setAttributes=l(),m.insert=c().bind(null,"head"),m.domAPI=i(),m.insertStyleElement=p(),o()(h.Z,m),h.Z&&h.Z.locals&&h.Z.locals,console.log("123",123)},192:(e,n,t)=>{t(615),t(221),t(971)},163:(e,n,t)=>{t.d(n,{Z:()=>s});var r=t(81),o=t.n(r),a=t(645),i=t.n(a)()(o());i.push([e.id,"*,*::before,*::after{box-sizing:border-box;max-width:100%;margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;-webkit-font-smoothing:antialiased;-webkit-tap-highlight-color:rgba(0,0,0,0)}article,aside,main,section,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}ul{list-style:none}a{text-decoration:none}input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}",""]);const s=i},111:(e,n,t)=>{t.d(n,{Z:()=>s});var r=t(81),o=t.n(r),a=t(645),i=t.n(a)()(o());i.push([e.id,".footer{background-color:green}",""]);const s=i},717:(e,n,t)=>{t.d(n,{Z:()=>s});var r=t(81),o=t.n(r),a=t(645),i=t.n(a)()(o());i.push([e.id,".header{background-color:red}",""]);const s=i},645:e=>{e.exports=function(e){var n=[];return n.toString=function(){return this.map((function(n){var t="",r=void 0!==n[5];return n[4]&&(t+="@supports (".concat(n[4],") {")),n[2]&&(t+="@media ".concat(n[2]," {")),r&&(t+="@layer".concat(n[5].length>0?" ".concat(n[5]):""," {")),t+=e(n),r&&(t+="}"),n[2]&&(t+="}"),n[4]&&(t+="}"),t})).join("")},n.i=function(e,t,r,o,a){"string"==typeof e&&(e=[[null,e,void 0]]);var i={};if(r)for(var s=0;s<this.length;s++){var c=this[s][0];null!=c&&(i[c]=!0)}for(var u=0;u<e.length;u++){var l=[].concat(e[u]);r&&i[l[0]]||(void 0!==a&&(void 0===l[5]||(l[1]="@layer".concat(l[5].length>0?" ".concat(l[5]):""," {").concat(l[1],"}")),l[5]=a),t&&(l[2]?(l[1]="@media ".concat(l[2]," {").concat(l[1],"}"),l[2]=t):l[2]=t),o&&(l[4]?(l[1]="@supports (".concat(l[4],") {").concat(l[1],"}"),l[4]=o):l[4]="".concat(o)),n.push(l))}},n}},81:e=>{e.exports=function(e){return e[1]}},615:(e,n,t)=>{var r=t(379),o=t.n(r),a=t(795),i=t.n(a),s=t(569),c=t.n(s),u=t(565),l=t.n(u),d=t(216),p=t.n(d),f=t(589),v=t.n(f),h=t(163),m={};m.styleTagTransform=v(),m.setAttributes=l(),m.insert=c().bind(null,"head"),m.domAPI=i(),m.insertStyleElement=p(),o()(h.Z,m),h.Z&&h.Z.locals&&h.Z.locals},379:e=>{var n=[];function t(e){for(var t=-1,r=0;r<n.length;r++)if(n[r].identifier===e){t=r;break}return t}function r(e,r){for(var a={},i=[],s=0;s<e.length;s++){var c=e[s],u=r.base?c[0]+r.base:c[0],l=a[u]||0,d="".concat(u," ").concat(l);a[u]=l+1;var p=t(d),f={css:c[1],media:c[2],sourceMap:c[3],supports:c[4],layer:c[5]};if(-1!==p)n[p].references++,n[p].updater(f);else{var v=o(f,r);r.byIndex=s,n.splice(s,0,{identifier:d,updater:v,references:1})}i.push(d)}return i}function o(e,n){var t=n.domAPI(n);return t.update(e),function(n){if(n){if(n.css===e.css&&n.media===e.media&&n.sourceMap===e.sourceMap&&n.supports===e.supports&&n.layer===e.layer)return;t.update(e=n)}else t.remove()}}e.exports=function(e,o){var a=r(e=e||[],o=o||{});return function(e){e=e||[];for(var i=0;i<a.length;i++){var s=t(a[i]);n[s].references--}for(var c=r(e,o),u=0;u<a.length;u++){var l=t(a[u]);0===n[l].references&&(n[l].updater(),n.splice(l,1))}a=c}}},569:e=>{var n={};e.exports=function(e,t){var r=function(e){if(void 0===n[e]){var t=document.querySelector(e);if(window.HTMLIFrameElement&&t instanceof window.HTMLIFrameElement)try{t=t.contentDocument.head}catch(e){t=null}n[e]=t}return n[e]}(e);if(!r)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");r.appendChild(t)}},216:e=>{e.exports=function(e){var n=document.createElement("style");return e.setAttributes(n,e.attributes),e.insert(n,e.options),n}},565:(e,n,t)=>{e.exports=function(e){var n=t.nc;n&&e.setAttribute("nonce",n)}},795:e=>{e.exports=function(e){if("undefined"==typeof document)return{update:function(){},remove:function(){}};var n=e.insertStyleElement(e);return{update:function(t){!function(e,n,t){var r="";t.supports&&(r+="@supports (".concat(t.supports,") {")),t.media&&(r+="@media ".concat(t.media," {"));var o=void 0!==t.layer;o&&(r+="@layer".concat(t.layer.length>0?" ".concat(t.layer):""," {")),r+=t.css,o&&(r+="}"),t.media&&(r+="}"),t.supports&&(r+="}");var a=t.sourceMap;a&&"undefined"!=typeof btoa&&(r+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a))))," */")),n.styleTagTransform(r,e,n.options)}(n,e,t)},remove:function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(n)}}}},589:e=>{e.exports=function(e,n){if(n.styleSheet)n.styleSheet.cssText=e;else{for(;n.firstChild;)n.removeChild(n.firstChild);n.appendChild(document.createTextNode(e))}}}},e=>{e(e.s=192)}]);