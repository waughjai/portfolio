"use strict";!function(){function t(t){if(t)for(var e=function(t){for(var e=0,n=0;n<t.length;++n){var i=t[n];i.clientHeight>e&&(e=i.clientHeight)}return e}(t),n=0;n<t.length;++n){t[n].style.height="".concat(e,"px")}}function e(t){if(t)for(var e=0;e<t.length;++e){t[e].style.height="auto"}}function n(){e(o),e(r)}function i(){1200<=window.innerWidth?(n(),t(o),t(r)):n()}var o=document.getElementsByClassName("project-nom"),r=document.getElementsByClassName("project-summary-content");i(),window.addEventListener("resize",i)}();