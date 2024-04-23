const gallery = document.getElementById("slider");
const left = document.getElementsByClassName("left")[0];
left.classList.add("disabled");
const right = document.getElementsByClassName("right")[0];
const images = 6;
// const imagesUrl = "https://picsum.photos/seed/{seed}/500/350";
const imagesUrls = []; // Array to store image URLs

for (var i = 1; i <= images; i++) {
    // Assuming your images are named sequentially like "image1.jpg", "image2.jpg", etc.
    var imageUrl = "slides/image" + i + ".png";
    imagesUrls.push(imageUrl);
}
const imagesNames = ["Budgeting","Expense Analysing","Purchase Power","Investment","Happiness","Peacefulness"];

const textContent = [
    "<h3>Budgeting</h3><p>Budgeting Content Needed</p>",
    "<h3>Expense Analysing</h3><p>Expense Analysing Content Needed</p>",
    "<h3>Purchase Power</h3><p>Purchase Power Content Needed</p>.",
    "<h3>Investment</h3><p>Investment Content Needed</p>",
    "<h3>Happiness</h3><p>Happiness Content Needed</p>",
    "<h3>Peacefulness</h3><p>Peacefulness Content Needed</p>"
];

var selected = 0;

function init() {
for (var i = 0; i < images; i++) {
    var imageWrapper = document.createElement("div");
    imageWrapper.id = `image_${i}`;
    imageWrapper.classList.add("wrapper");
    imageWrapper.innerHTML = "<div class='text-wrapper'>"+imagesNames[i]+"</div><BR/>";
    if (i === selected) {
    imageWrapper.classList.add("selected");
    }
    var image = document.createElement("img");
    image.classList.add("imageClass");
    // image.src = imagesUrl.replace(
    // "{seed}",
    // i + 1 + Math.floor(Math.random() * 100)
    // );
    image.src = imagesUrls[i];
    imageWrapper.appendChild(image);
    // var mirrored = image.cloneNode();
    // mirrored.classList.add("flipped");
    // imageWrapper.appendChild(mirrored);
    gallery.appendChild(imageWrapper);
}
}

init();

right.onclick = function () {
selected++;
if (selected > images - 1) {
    selected = images - 1;
}
handleSelection();
};

left.onclick = function () {
selected--;
if (selected < 0) {
    selected = 0;
}
handleSelection();
};

function handleSelection() {
var images = document.getElementsByClassName("wrapper");
if (selected === images.length - 1) {
    right.classList.add("disabled");
} else {
    right.classList.remove("disabled");
}
if (selected === 0) {
    left.classList.add("disabled");
} else {
    left.classList.remove("disabled");
}
for (var i = 0; i < images.length; i++) {
    var img = images[i];
    if (img.id === `image_${selected}`) {
        img.classList.add("selected");
        document.getElementById("change_text").innerHTML = textContent[selected];
    } else {
        img.classList.remove("selected");
    }
}
}   