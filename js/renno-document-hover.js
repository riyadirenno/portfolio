const contentDivs = document.querySelectorAll(".external-document-content");

contentDivs.forEach((div) => {
  div.addEventListener("mouseenter", () => {
    contentDivs.forEach((otherDiv) => {
      if (otherDiv !== div) {
        otherDiv.style.opacity = "0.1";
      }
    });
  });

  div.addEventListener("mouseleave", () => {
    contentDivs.forEach((otherDiv) => {
      otherDiv.style.opacity = "1";
    });
  });
});
