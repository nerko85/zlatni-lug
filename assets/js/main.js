const nav = document.querySelector("header nav");
const items = Array.from(nav.querySelectorAll("li"));
const hamb = document.querySelector(".hamb-menu");

// checkWidth();

// function checkWidth() {
//   if (window.innerWidth < 768) {
//     gsap.to(items, { duration: 0, opacity: 0, y: 50 });
//   } else {
//     gsap.to(items, { duration: 0, opacity: 1, y: 0 });
//   }
// }

// window.addEventListener("resize", checkWidth);

if (window.innerWidth < 768) {
  gsap.to(items, { duration: 0, opacity: 0, y: 50 });
}

console.log("test");

const tl2 = gsap.timeline({ paused: true });
tl2
  .to(nav, {
    duration: 1,
    width: "100%",
    ease: "Expo.easeInOut",
  })
  .to(
    items,
    {
      opacity: 1,
      y: 0,
      stagger: 0.1,
    },
    "-=.2"
  );

tl2.reverse();

hamb.addEventListener("click", (e) => {
  nav.classList.toggle("active");

  if (nav.classList.contains("active")) {
    hamb.children[0].classList = "bi bi-x";
  } else {
    hamb.children[0].classList = "bi bi-list";
  }
  document.body.classList.toggle("open");
  tl2.reversed(!tl2.reversed());
});
