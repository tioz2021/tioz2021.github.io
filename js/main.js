document.addEventListener('DOMContentLoaded', function() {
  const track = document.querySelector('.ticker__track');
  const originalHTML = track.innerHTML;
  track.innerHTML = originalHTML + originalHTML + originalHTML + originalHTML + originalHTML + originalHTML;
  
  let position = 0;
  const speed = 2;
  const trackWidth = track.scrollWidth / 6;
  
  function animate() {
    position -= speed;
    
    // Плавный сброс без рывка
    if (Math.abs(position) >= trackWidth) {
      position = 0;
    }
    
    track.style.transform = `translateX(${position}px)`;
    requestAnimationFrame(animate);
  }
  
  animate();
});