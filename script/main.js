const block = document.querySelector(".block");
const container = document.querySelector(".s1");

let offsetX = 0;
let offsetY = 0;

container.addEventListener("mousemove", moveBlock);
container.addEventListener("mouseleave", savePosition);

function moveBlock(e) {
  const mouseX = e.clientX;
  const mouseY = e.clientY;
  const blockRect = block.getBoundingClientRect();
  const distanceX = mouseX - blockRect.left - blockRect.width / 2;
  const distanceY = mouseY - blockRect.top - blockRect.height / 2;

  offsetX = distanceX * 0.005; // Уменьшаем множитель для медленного движения
  offsetY = distanceY * 0.005; // Уменьшаем множитель для медленного движения

  block.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
}
function savePosition() {
  prevOffsetX += offsetX;
  prevOffsetY += offsetY;
  block.style.transform = `translate(${prevOffsetX}px, ${prevOffsetY}px)`;
}

// Функция для генерации случайных чисел в заданном диапазоне
function getRandom(min, max) {
  return Math.random() * (max - min) + min;
}

// Генерация SVG звезд
// let svg =
//   '<svg width="1920" height="916" viewBox="0 0 1920 916" fill="none" xmlns="http://www.w3.org/2000/svg">';

// for (let i = 0; i < 500; i++) {
//   let cx = getRandom(0, 1920); // Случайная координата x
//   let cy = getRandom(0, 916); // Случайная координата y

//   svg += `<circle cx="${cx}" cy="${cy}" r="0.5" fill="#8B9FCE">
//              <animate attributeName="cy" dur="${getRandom(
//                6,
//                12
//              )}s" values="${cy}; ${
//     cy - getRandom(50, 150)
//   }" repeatCount="indefinite" />
//              <animate attributeName="opacity" dur="${getRandom(
//                6,
//                12
//              )}s" values="1; 0" repeatCount="indefinite" />
//           </circle>`;
// }

// svg += "</svg>";

// console.log(svg);
