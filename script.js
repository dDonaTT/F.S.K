const text = document.getElementById("animated-text");
const textContent = text.innerHTML;
text.innerHTML = "";
let index = 0;

function showText() {
  text.innerHTML = text.innerHTML + textContent.charAt(index);
  index++;
  if (index >= textContent.length) {
    clearInterval(interval);
  }
}

const interval = setInterval(showText, 50);
