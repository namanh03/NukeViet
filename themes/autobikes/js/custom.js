/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 2 or any later version
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

/* Các tùy chỉnh JS của giao diện nên để vào đây */
// === MENU AUTOBIKES CUSTOM ===
// === MENU AUTOBIKES CUSTOM ===
// === MENU AUTOBIKES TOGGLE ===
document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.main-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('open');
    });
  }

  // Xử lý mở submenu trong mobile
  const items = document.querySelectorAll('.main-menu > li');
  items.forEach(item => {
    item.addEventListener('click', e => {
      if (window.innerWidth <= 991 && item.querySelector('.sub-menu')) {
        e.preventDefault();
        item.classList.toggle('open');
      }
    });
  });
});

