// resources/js/render-hover-bg.js
export default function initRenderHoverBg() {
  const boxes = document.querySelectorAll('.render-box');
  if (!boxes.length) return;

  boxes.forEach((box) => {
    const accent = box.querySelector('.accent');
    if (!accent) return;
    let pinned = false;

    function placeAccent(clientX, clientY) {
      const r = box.getBoundingClientRect();
      const x = clientX - r.left;
      const y = clientY - r.top;

      // center the chip on cursor but clamp inside the box
      const left = Math.min(Math.max(x - accent.offsetWidth / 2, 6), Math.max(r.width - accent.offsetWidth - 6, 6));
      const top  = Math.min(Math.max(y - accent.offsetHeight / 2, 6), Math.max(r.height - accent.offsetHeight - 6, 6));

      accent.style.left = left + 'px';
      accent.style.top  = top  + 'px';
    }

    function onMove(e) {
      const cx = e.touches ? e.touches[0].clientX : e.clientX;
      const cy = e.touches ? e.touches[0].clientY : e.clientY;
      placeAccent(cx, cy);
      // reveal
      accent.style.opacity = '1';
      accent.style.transform = 'scale(1) rotate(6deg)';
      box.classList.add('is-hover');
    }

    function onLeave() {
      if (pinned) return;
      accent.style.opacity = '0';
      accent.style.transform = 'scale(.85) rotate(6deg)';
      box.classList.remove('is-hover');
    }

    // desktop
    box.addEventListener('mousemove', onMove);
    box.addEventListener('mouseenter', onMove);
    box.addEventListener('mouseleave', onLeave);

    // mobile: tap to pin/unpin (prevents accidental two-tap)
    box.addEventListener('touchstart', (ev) => {
      ev.preventDefault();
      const t = ev.touches ? ev.touches[0] : ev;
      placeAccent(t.clientX, t.clientY);
      pinned = !pinned;
      if (pinned) {
        accent.style.opacity = '1';
        accent.style.transform = 'scale(1) rotate(6deg)';
      } else {
        onLeave();
      }
    }, { passive: false });
  });
}
