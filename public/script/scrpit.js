function getWidth() {
  return Math.min(
    document.body.scrollWidth,
    document.documentElement.scrollWidth,
    document.body.offsetWidth,
    document.documentElement.offsetWidth,
    document.documentElement.clientWidth
  );
}

function getHeight() {
  return Math.min(
    document.body.scrollHeight,
    document.documentElement.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.offsetHeight,
    document.documentElement.clientHeight
  );
}

console.log("Width:  " + getWidth());
console.log("Height: " + getHeight());

if (getWidth() >= 991) {
  console.log("I got in!");
  document.querySelector("div.container.hideInMobileScreen").style.display =
    "contents";
  document.querySelector("div.container.hideInMainScreen").style.display =
    "none";
} else {
  console.log("I got in!");
  document.querySelector("div.container.hideInMobileScreen").style.display =
    "none";
  document.querySelector("div.container.hideInMainScreen").style.display =
    "contents";
}
