// JavaScript code
const myImg = document.getElementById("myImg");
const image1 = document.getElementById("image1");
const image2 = document.getElementById("image2");
const image3 = document.getElementById("image3");
const image4 = document.getElementById("image4");
const image5 = document.getElementById("image5");


image1.addEventListener("click", function() {
  myImg.src = "image1.jpg";
});

image2.addEventListener("click", function() {
    myImg.src = "image2.jpg";
  });

  image3.addEventListener("hover", function() {
    myImg.src = "image3.jpg";
  });

  image4.addEventListener("hover", function() {
    myImg.src = "image4.jpg";
  });

  image5.addEventListener("hover", function() {
    myImg.src = "image5.jpg";
  });