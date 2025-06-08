const tabs = document.querySelectorAll(".aba");
const bioContents = document.querySelectorAll(".bio-content");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    if (tab.classList.contains("active")) return;

    tabs.forEach((t) => {
      t.classList.remove("active");
      t.setAttribute("aria-selected", "false");
      t.setAttribute("tabindex", "-1");
    });
    bioContents.forEach((content) => (content.hidden = true));

    tab.classList.add("active");
    tab.setAttribute("aria-selected", "true");
    tab.setAttribute("tabindex", "0");
    const targetId = tab.getAttribute("aria-controls");
    const targetContent = document.getElementById(targetId);
    targetContent.hidden = false;
    targetContent.focus();
  });
});

const modalOverlay = document.querySelector(".modal-overlay");
const modalImage = modalOverlay.querySelector(".modal-image");
const modalDescription = modalOverlay.querySelector(".modal-description");
const modalCloseBtn = modalOverlay.querySelector(".modal-close");
const paintCards = document.querySelectorAll(".paint-card");

paintCards.forEach((card) => {
  card.addEventListener("click", () => {
    const imgSrc = card.getAttribute("data-img");
    const title = card.getAttribute("data-title");
    const year = card.getAttribute("data-year");
    const description = card.getAttribute("data-description");

    modalImage.src = imgSrc;
    modalImage.alt = `Quadro ${title}`;
    modalDescription.textContent = `${title} (${year}) - ${description}`;

    modalOverlay.hidden = false;
    modalOverlay.classList.add("active");
    modalCloseBtn.focus();
  });
  card.addEventListener("keydown", (e) => {
    if (e.key === "Enter" || e.key === " ") {
      e.preventDefault();
      card.click();
    }
  });
});

modalCloseBtn.addEventListener("click", () => {
  modalOverlay.hidden = true;
  modalOverlay.classList.remove("active");
});

modalOverlay.addEventListener("click", (e) => {
  if (e.target === modalOverlay) {
    modalCloseBtn.click();
  }
});

document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && !modalOverlay.hidden) {
    modalCloseBtn.click();
  }
});
