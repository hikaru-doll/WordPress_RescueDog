document.addEventListener("DOMContentLoaded", () => {
  // --------------------
  //  ハンバーガーメニュー
  // --------------------
  const ham = document.querySelector(".ham");
  const body = document.body;
  const navMenu = document.querySelector(".open-nav .nav-menu");
  // 将来配列のメソッドを使う時を考慮して、配列にしておく（NodeListではなくて）
  const navLinks = Array.from(navMenu.querySelectorAll("li > a, li > button"));

  console.log(navMenu);
  console.log(navLinks);

  // 🍔用*************************
  let isOpen = false;
  function openMenu() {
    isOpen = true;
    body.classList.add("open");
    // 🍔が開いた時のWAI-ARIA属性を指定
    ham.setAttribute("aria-expanded", "true");
    ham.setAttribute("aria-label", "メニューを閉じる");

    // 開いたら先頭のliのリンクへフォーカス
    if (navLinks.length > 0) {
      navLinks[0].focus();
    }
    document.addEventListener("keydown", handleKeydown);
  }

  function closeMenu() {
    isOpen = false;
    body.classList.remove("open");
    // 🍔が閉じた時のWAI-ARIA属性を指定
    ham.setAttribute("aria-expanded", "false");
    ham.setAttribute("aria-label", "メニューを開く");

    // スマホメニューを閉じるとき、開いているサブメニューも全部リセットする
    closeAllSubMenus();

    document.removeEventListener("keydown", handleKeydown);
    ham.focus();
  }
  // フラグで判定
  function toggleMenu() {
    if (isOpen) {
      closeMenu();
    } else {
      openMenu();
    }
  }

  function handleKeydown(e) {
    if (!isOpen) return;
    // ESCキーで閉じる
    if (e.key === "Escape" || e.key === "Esc") {
      closeMenu();
      return;
    }

    if (e.key !== "Tab") return;

    const active = document.activeElement;
    const lastLink = navLinks[navLinks.length - 1];
    const firstLink = navLinks[0];

    if (e.shiftKey) {
      // Shift+Tabでタブキーが🍔ボタンにいる時は最後のliへループ
      if (active === ham) {
        e.preventDefault();
        lastLink.focus();
      }
      // 先頭リンクからShift+Tabで🍔ボタンへ戻るのは自然な挙動なのでそのまま
      return;
    }
    // タブキーが🍔ボタンにいる時は先頭のliへ
    if (active === ham) {
      e.preventDefault();
      firstLink.focus();
      return;
    }
    // タブキーが最後のliにいる時は🍔ボタンへ戻る、のループ
    if (active === lastLink) {
      e.preventDefault();
      ham.focus();
      // それ以外（li同士の移動）はブラウザ標準のTab移動に任せる
      return;
    }
  }
  // 🍔ボタンをクリックしたときにtoggleMenu()を実行
  ham.addEventListener("click", toggleMenu);
  // 🍔メニューが開いてる状態でPCサイズ（768px以上）になったら、メニューを閉じる
  const mediaQuery = window.matchMedia("(min-width: 768px)");
  function handleResize(e) {
    if (e.matches && isOpen) {
      // （aria-expandedをfalseにし、フォーカスロックやスクロール解除）
      closeMenu();
    }
  }
  mediaQuery.addEventListener("change", handleResize);

  // --------------------
  //  サブメニュー（アコーディオン）
  // --------------------
  // 親メニューを取得
  const parentItems = document.querySelectorAll(".menu-item-has-children");
  console.log(parentItems);
  // サブメニューを開いた時のWAI-ARIA属性を指定
  function openSubMenu(button) {
    button.setAttribute("aria-expanded", "true");
  }

  // サブメニューを閉じた時のWAI-ARIA属性を指定
  function closeSubMenu(button) {
    button.setAttribute("aria-expanded", "false");
  }

  // 引数に指定した親メニュー以外のサブメニューを全部閉じる関数
  function closeAllSubMenus(exceptLi = null) {
    parentItems.forEach((li) => {
      if (li !== exceptLi) {
        const button = li.querySelector(":scope > button");
        if (button) {
          closeSubMenu(button);
        }
      }
    });
  }

  parentItems.forEach((li) => {
    const button = li.querySelector(":scope > button");
    const submenu = li.querySelector(":scope > .sub-menu");
    // <button>と.sub-menu のペアが無かったら終了
    if (!button || !submenu) return;

    // ペアがあったら以下を実行
    button.addEventListener("click", () => {
      // WAI-ARIA属性を比較して、真偽値のフラグ
      const isSubOpen = button.getAttribute("aria-expanded") === "true";
      closeAllSubMenus(li); // 今処理中のli以外のサブメニューを閉じる
      // フラグで判定
      if (isSubOpen) {
        closeSubMenu(button);
      } else {
        openSubMenu(button);
      }
    });

    // Escキーで閉じてボタンへフォーカス戻す
    submenu.addEventListener("keydown", (e) => {
      if (e.key === "Escape" || e.key === "Esc") {
        closeSubMenu(button);
        button.focus();
      }
    });

    // フォーカスが離れたら閉じる
    li.addEventListener("focusout", (e) => {
      if (!li.contains(e.relatedTarget)) {
        closeSubMenu(button);
      }
    });
  });

  // メニュー領域外をクリックしたらすべて閉じる
  document.addEventListener("click", (e) => {
    if (!e.target.closest(".menu-item-has-children")) {
      closeAllSubMenus();
    }
  });

  //-----------------------------------
  // コピーライトの西暦を動的に出力する
  // ----------------------------------
  const year = document.getElementById("year");
  if (year) {
    year.textContent = new Date().getFullYear();
  }
});
