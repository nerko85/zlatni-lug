const tagLine = document.querySelector(".tag--line");
const navigation = [...document.querySelectorAll(".navigation a")];

gsap.from(tagLine, { duration: 0.6, y: 20, opacity: 0, delay: 0.6 });

gsap.from(navigation, {
  duration: 0.5,
  y: -10,
  ease: "power1.inOut",
  stagger: 0.1,
});
