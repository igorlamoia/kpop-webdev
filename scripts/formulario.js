const ulSquares = document.querySelector('ul.quadradinhos');

for (let i = 0; i < 20; i++) {
  const li = document.createElement('li');

  const random = (min, max) => Math.random() * (max - min) + min;

  const size = Math.floor(random(10, 120));
  const position = random(1, 99);
  const duration = random(24, 12);

  li.style.width = `${size}px`;
  li.style.height = `${size}px`;
  li.style.bottom = `0px`;

  li.style.left = `${position}%`;

  li.style.animationDelay = `1s`;
  li.style.animationDuration = `${duration}s`;
  li.style.animationTimingFunction = `cubic-bezier(${Math.random()}, ${Math.random()}, ${Math.random()}, ${Math.random()})`;

  // Pra não aparecer ao ser criado
  li.style.opacity = 0;
  ulSquares.appendChild(li);
}
