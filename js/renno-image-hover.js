const div = document.getElementById("hero-hover");
const links = div.querySelectorAll(".p-newsreader-hover");

links.forEach((link) => {
  link.onmousemove = (e) => {
    const rect = link.getBoundingClientRect(),
      img = link.querySelector("img");

    img.style.left = `${e.clientX - rect.left}px`;
    img.style.top = `${e.clientY - rect.top}px`;
  };
});
