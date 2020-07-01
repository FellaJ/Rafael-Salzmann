"use strict";

/* trigger when page is ready */
var menuBtn = document.querySelector('.menu-button');
var pageBlocker = document.querySelector('.menu-page-blocker');
menuBtn.addEventListener('click', function () {
  document.querySelector('body').classList.toggle('menu-open');
});
pageBlocker.addEventListener('click', function () {
  document.querySelector('body').classList.remove('menu-open');
});