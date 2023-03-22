const iconActive = document.querySelectorAll(".icon-hover-active");

iconActive.forEach((div) => {
  div.addEventListener("mouseenter", () => {
    iconActive.forEach((otherDiv) => {
      if (otherDiv !== div) {
        otherDiv.style.opacity = "0.1";
      }
    });
  });

  div.addEventListener("mouseleave", () => {
    iconActive.forEach((otherDiv) => {
      otherDiv.style.opacity = "1";
    });
  });
});
