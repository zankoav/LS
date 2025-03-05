(()=>{"use strict";var t={296:(t,e,o)=>{o.d(e,{Z:()=>s});var n=o(81),r=o.n(n),a=o(645),i=o.n(a)()(r());i.push([t.id,"*,*::before,*::after{box-sizing:border-box;max-width:100%;margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;-webkit-font-smoothing:antialiased;-webkit-tap-highlight-color:rgba(0,0,0,0)}article,aside,main,section,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}ul{list-style:none}a{text-decoration:none}input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}body{font-family:Roboto,sans-serif;background-color:#f6f7f8}.single-post{display:flex;flex-direction:column;min-height:100vh;justify-content:space-between}.ls-editor em{font-style:italic}.ls-editor strong{font-weight:bold}.ls-editor ol,.ls-editor ul{padding-inline-start:20px}.ls-editor p{margin:1rem 0}.mb-16{margin-bottom:16px}.mb-20{margin-bottom:20px}.mb-24{margin-bottom:24px}.mb-32{margin-bottom:32px}.mb-40{margin-bottom:40px}.mb-48{margin-bottom:48px}.mb-64{margin-bottom:64px}.mb-74{margin-bottom:74px}.mt-32{margin-top:32px}.pt-88{padding-top:88px}.pt-128{padding-top:128px}.d-b{display:block}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}",""]);const s=i},111:(t,e,o)=>{o.d(e,{Z:()=>s});var n=o(81),r=o.n(n),a=o(645),i=o.n(a)()(r());i.push([t.id,".footer__top{border-top:1px solid #dddfe0;background-color:#fff}.footer__top-container{max-width:1062px;margin-left:auto;margin-right:auto;display:flex;justify-content:space-between;align-items:center;padding:20px 0}.footer__logo{color:#333;font:700 24px/28px Roboto}.footer__phone{color:#333;font:700 24px/28px Roboto}.footer__phone-label{color:#9299a2;font:400 11px/1 Roboto;text-align:right}.footer__bottom-container{max-width:1062px;margin-left:auto;margin-right:auto;display:flex;justify-content:space-between;align-items:center;padding:20px 0}.footer__copy{color:#9299a2;font:400 13px/1 Roboto}",""]);const s=i},717:(t,e,o)=>{o.d(e,{Z:()=>s});var n=o(81),r=o.n(n),a=o(645),i=o.n(a)()(r());i.push([t.id,".header{position:fixed;top:0;left:0;z-index:100;width:100%;background-color:#fff;border-bottom:1px solid #dddfe0}.header__container{max-width:1062px;margin-left:auto;margin-right:auto;height:64px;display:flex;align-items:center}.header__logo{color:#333;font:700 24px/28px Roboto}.header__menu{margin-left:52px}.header__menu:hover .header__menu-item{color:#9299a2}.header__menu-item{color:#333;font:400 15px/24px Roboto;margin-right:24px;transition:color .3s;padding:8px 0}.header__menu-item:hover{color:#333 !important}.header__phone{margin-left:auto;color:#4e89d1;font:400 18px/24px Roboto}.header__telegram{margin-left:44px;display:flex}",""]);const s=i},952:(t,e,o)=>{o.d(e,{Z:()=>s});var n=o(81),r=o.n(n),a=o(645),i=o.n(a)()(r());i.push([t.id,".page404{max-width:1062px;margin-left:auto;margin-right:auto;height:calc(100vh - 144px);display:flex;align-items:center;justify-content:center}.page404__title{color:#333;font:700 44px/1 Roboto;text-align:center}",""]);const s=i},645:t=>{t.exports=function(t){var e=[];return e.toString=function(){return this.map((function(e){var o="",n=void 0!==e[5];return e[4]&&(o+="@supports (".concat(e[4],") {")),e[2]&&(o+="@media ".concat(e[2]," {")),n&&(o+="@layer".concat(e[5].length>0?" ".concat(e[5]):""," {")),o+=t(e),n&&(o+="}"),e[2]&&(o+="}"),e[4]&&(o+="}"),o})).join("")},e.i=function(t,o,n,r,a){"string"==typeof t&&(t=[[null,t,void 0]]);var i={};if(n)for(var s=0;s<this.length;s++){var l=this[s][0];null!=l&&(i[l]=!0)}for(var c=0;c<t.length;c++){var p=[].concat(t[c]);n&&i[p[0]]||(void 0!==a&&(void 0===p[5]||(p[1]="@layer".concat(p[5].length>0?" ".concat(p[5]):""," {").concat(p[1],"}")),p[5]=a),o&&(p[2]?(p[1]="@media ".concat(p[2]," {").concat(p[1],"}"),p[2]=o):p[2]=o),r&&(p[4]?(p[1]="@supports (".concat(p[4],") {").concat(p[1],"}"),p[4]=r):p[4]="".concat(r)),e.push(p))}},e}},81:t=>{t.exports=function(t){return t[1]}},379:t=>{var e=[];function o(t){for(var o=-1,n=0;n<e.length;n++)if(e[n].identifier===t){o=n;break}return o}function n(t,n){for(var a={},i=[],s=0;s<t.length;s++){var l=t[s],c=n.base?l[0]+n.base:l[0],p=a[c]||0,d="".concat(c," ").concat(p);a[c]=p+1;var u=o(d),f={css:l[1],media:l[2],sourceMap:l[3],supports:l[4],layer:l[5]};if(-1!==u)e[u].references++,e[u].updater(f);else{var m=r(f,n);n.byIndex=s,e.splice(s,0,{identifier:d,updater:m,references:1})}i.push(d)}return i}function r(t,e){var o=e.domAPI(e);return o.update(t),function(e){if(e){if(e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap&&e.supports===t.supports&&e.layer===t.layer)return;o.update(t=e)}else o.remove()}}t.exports=function(t,r){var a=n(t=t||[],r=r||{});return function(t){t=t||[];for(var i=0;i<a.length;i++){var s=o(a[i]);e[s].references--}for(var l=n(t,r),c=0;c<a.length;c++){var p=o(a[c]);0===e[p].references&&(e[p].updater(),e.splice(p,1))}a=l}}},569:t=>{var e={};t.exports=function(t,o){var n=function(t){if(void 0===e[t]){var o=document.querySelector(t);if(window.HTMLIFrameElement&&o instanceof window.HTMLIFrameElement)try{o=o.contentDocument.head}catch(t){o=null}e[t]=o}return e[t]}(t);if(!n)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");n.appendChild(o)}},216:t=>{t.exports=function(t){var e=document.createElement("style");return t.setAttributes(e,t.attributes),t.insert(e,t.options),e}},565:(t,e,o)=>{t.exports=function(t){var e=o.nc;e&&t.setAttribute("nonce",e)}},795:t=>{t.exports=function(t){if("undefined"==typeof document)return{update:function(){},remove:function(){}};var e=t.insertStyleElement(t);return{update:function(o){!function(t,e,o){var n="";o.supports&&(n+="@supports (".concat(o.supports,") {")),o.media&&(n+="@media ".concat(o.media," {"));var r=void 0!==o.layer;r&&(n+="@layer".concat(o.layer.length>0?" ".concat(o.layer):""," {")),n+=o.css,r&&(n+="}"),o.media&&(n+="}"),o.supports&&(n+="}");var a=o.sourceMap;a&&"undefined"!=typeof btoa&&(n+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a))))," */")),e.styleTagTransform(n,t,e.options)}(e,t,o)},remove:function(){!function(t){if(null===t.parentNode)return!1;t.parentNode.removeChild(t)}(e)}}}},589:t=>{t.exports=function(t,e){if(e.styleSheet)e.styleSheet.cssText=t;else{for(;e.firstChild;)e.removeChild(e.firstChild);e.appendChild(document.createTextNode(t))}}}},e={};function o(n){var r=e[n];if(void 0!==r)return r.exports;var a=e[n]={id:n,exports:{}};return t[n](a,a.exports,o),a.exports}o.n=t=>{var e=t&&t.__esModule?()=>t.default:()=>t;return o.d(e,{a:e}),e},o.d=(t,e)=>{for(var n in e)o.o(e,n)&&!o.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:e[n]})},o.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),o.nc=void 0,(()=>{var t=o(379),e=o.n(t),n=o(795),r=o.n(n),a=o(569),i=o.n(a),s=o(565),l=o.n(s),c=o(216),p=o.n(c),d=o(589),u=o.n(d),f=o(296),m={};m.styleTagTransform=u(),m.setAttributes=l(),m.insert=i().bind(null,"head"),m.domAPI=r(),m.insertStyleElement=p(),e()(f.Z,m),f.Z&&f.Z.locals&&f.Z.locals;var g=o(717),h={};h.styleTagTransform=u(),h.setAttributes=l(),h.insert=i().bind(null,"head"),h.domAPI=r(),h.insertStyleElement=p(),e()(g.Z,h),g.Z&&g.Z.locals&&g.Z.locals;var b=o(111),x={};x.styleTagTransform=u(),x.setAttributes=l(),x.insert=i().bind(null,"head"),x.domAPI=r(),x.insertStyleElement=p(),e()(b.Z,x),b.Z&&b.Z.locals&&b.Z.locals;var v=o(952),y={};y.styleTagTransform=u(),y.setAttributes=l(),y.insert=i().bind(null,"head"),y.domAPI=r(),y.insertStyleElement=p(),e()(v.Z,y),v.Z&&v.Z.locals&&v.Z.locals})()})();