<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Floating Action Button — Demo</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --p1: #1A2A80;
    --p2: #3B38A0;
    --p3: #7A85C1;
    --p4: #B2B0E8;
    --glass: rgba(255,255,255,0.06);
    --shadow: 0 10px 30px rgba(26,42,128,0.18);
  }
  *{box-sizing:border-box;font-family:Inter,system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial;}
  body{
    min-height:100vh;
    margin:0;
    background: linear-gradient(180deg, #f5f7ff 0%, #ffffff 100%);
    display:flex;
    align-items:flex-end;
    justify-content:flex-end;
    padding:36px;
  }

  /* Floating container (bottom-right) */
  .fab-wrap{
    position:fixed;
    right:28px;
    bottom:28px;
    display:flex;
    gap:12px;
    align-items:center;
    z-index:1200;
  }

  /* Tooltip / label */
  .fab-label{
    background: rgba(255,255,255,0.98);
    color: #1a1a1a;
    padding:10px 14px;
    border-radius:12px;
    font-weight:600;
    font-size:14px;
    box-shadow: 0 6px 20px rgba(43,37,77,0.06);
    transform-origin:right center;
    transform: translateX(8px) scale(0.93);
    opacity:0;
    pointer-events:none;
    transition: 180ms ease;
    white-space:nowrap;
  }

  /* Main circular button */
  .fab {
    width:64px;
    height:64px;
    border-radius:999px;
    display:inline-grid;
    place-items:center;
    cursor:pointer;
    position:relative;
    overflow:hidden;
    border: none;
    outline: none;
    background: linear-gradient(135deg,var(--p1), var(--p2));
    box-shadow: var(--shadow);
    transition: transform 160ms cubic-bezier(.2,.9,.2,1), box-shadow 160ms;
  }
  .fab:focus{ box-shadow: 0 0 0 6px rgba(59,56,160,0.12); }

  /* Hover/active */
  .fab:hover{ transform: translateY(-4px) scale(1.03); }
  .fab:active{ transform: translateY(-1px) scale(.99); }

  /* Icon inside */
  .fab svg{ width:28px; height:28px; filter: drop-shadow(0 2px 6px rgba(0,0,0,0.12)); }

  /* small notification badge */
  .fab-badge{
    position:absolute;
    top:8px;
    right:8px;
    min-width:18px;
    height:18px;
    padding:0 5px;
    border-radius:999px;
    background: #FF4D4F;
    color:white;
    font-size:12px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    box-shadow:0 6px 16px rgba(26,42,128,0.12);
  }

  /* click ripple */
  .ripple {
    position:absolute;
    border-radius:50%;
    transform:scale(0);
    background:rgba(255,255,255,0.18);
    animation:ripple 600ms linear;
    pointer-events:none;
  }
  @keyframes ripple {
    to { transform: scale(4); opacity: 0; }
  }

  /* show label on hover */
  .fab-wrap:hover .fab-label,
  .fab:focus + .fab-label {
    opacity:1;
    transform: translateX(0) scale(1);
    pointer-events:auto;
  }

  /* small accessibility helper for keyboard */
  .sr-only { position:absolute; left:-9999px; }

  /* Responsive: smaller button on tiny screens */
  @media (max-width:420px){
    .fab{ width:56px; height:56px; }
    .fab svg{ width:22px; height:22px; }
    .fab-label{ display:none; }
  }
</style>
</head>
<body>

  <div class="fab-wrap" aria-hidden="false">
    <!-- The button itself -->
    <button class="fab" id="mainFab" aria-label="Play" title="Play">
      <!-- Example SVG icon (Play) - change to any icon -->
      <svg viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12" cy="12" r="11" fill="rgba(255,255,255,0.06)"/>
        <path d="M10 8.5v7l6-3.5-6-3.5z" fill="white"/>
      </svg>

      <!-- optional badge -->
      <span class="fab-badge" id="fabBadge" style="display:none">3</span>
    </button>

    <!-- Label -->
    <div class="fab-label" id="fabLabel">Play something</div>
  </div>

<script>
  // Ripple effect on click
  const fab = document.getElementById('mainFab');
  fab.addEventListener('click', function(e){
    const rect = fab.getBoundingClientRect();
    const ripple = document.createElement('span');
    const size = Math.max(rect.width, rect.height);
    ripple.className = 'ripple';
    ripple.style.width = ripple.style.height = size + 'px';
    ripple.style.left = (e.clientX - rect.left - size/2) + 'px';
    ripple.style.top  = (e.clientY - rect.top  - size/2) + 'px';
    fab.appendChild(ripple);
    setTimeout(()=> ripple.remove(), 650);

    // Example action: toggle badge for demo
    const badge = document.getElementById('fabBadge');
    if(badge.style.display === 'none') badge.style.display = 'inline-flex';
    else badge.style.display = 'none';

    // put your action here, e.g. open modal, play video, route to page...
    // window.location.href = '/somewhere';
  });

  // Keyboard accessibility (Enter/Space)
  fab.addEventListener('keydown', function(e){
    if(e.key === 'Enter' || e.key === ' '){
      e.preventDefault();
      fab.click();
    }
  });
</script>

</body>
</html>
