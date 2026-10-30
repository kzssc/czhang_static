(function () {
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  // Scroll reveals, once per element
  var reveals = document.querySelectorAll(".reveal");
  if ("IntersectionObserver" in window && !reduce) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.classList.add("is-in");
          io.unobserve(e.target);
        }
      });
    }, { rootMargin: "0px 0px -10% 0px", threshold: 0.1 });
    reveals.forEach(function (el) { io.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add("is-in"); });
  }

  // Current section indicator
  var links = document.querySelectorAll('.nav__links a[href^="#"]');
  if ("IntersectionObserver" in window) {
    var spy = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        links.forEach(function (a) {
          if (a.getAttribute("href") === "#" + e.target.id) a.setAttribute("aria-current", "true");
          else a.removeAttribute("aria-current");
        });
      });
    }, { rootMargin: "-40% 0px -55% 0px" });
    document.querySelectorAll("main section[id]").forEach(function (s) { spy.observe(s); });
  }

  // Mobile menu
  var toggle = document.querySelector(".nav__toggle");
  var panel = document.getElementById("nav-panel");
  function setMenu(open) {
    toggle.setAttribute("aria-expanded", String(open));
    panel.dataset.open = String(open);
    document.body.style.overflow = open ? "hidden" : "";
  }
  toggle.addEventListener("click", function () {
    setMenu(toggle.getAttribute("aria-expanded") !== "true");
  });
  panel.addEventListener("click", function (e) {
    if (e.target.closest("a")) setMenu(false);
  });
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape") setMenu(false);
  });

  // Crisp loads only after a visitor asks to chat, so no chat cookies are set before that.
  var chatBtn = document.getElementById("open-chat");
  var loaded = false;
  chatBtn.addEventListener("click", function () {
    if (loaded) { window.$crisp.push(["do", "chat:open"]); return; }
    loaded = true;
    window.$crisp = [];
    if (document.documentElement.lang.indexOf("zh") === 0) window.CRISP_RUNTIME_CONFIG = { locale: "zh" };
    window.CRISP_WEBSITE_ID = "83f11913-04ec-4c38-91c4-8bbe0867116e";
    window.CRISP_READY_TRIGGER = function () { window.$crisp.push(["do", "chat:open"]); };
    var s = document.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = true;
    s.onerror = function () { loaded = false; };
    document.head.appendChild(s);
  });

  // Photo popup
  var dlg = document.getElementById("cats-dialog");
  document.getElementById("open-cats").addEventListener("click", function () { dlg.showModal(); });
  dlg.addEventListener("click", function (e) { if (e.target === dlg) dlg.close(); });
})();
