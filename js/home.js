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
    "<h3>Budgeting</h3><ol><li>Identify Purchasing Power</li><li>Identify Character</li><li>Where your money goes?</li><li>Give you control</li></ol>",
    "<h3>Expense Analysing</h3><b>How to control the expenses?</b><ol><li>Fixed</li><li>Variable</li><li>Discretionary expenses</li></ol>",
    "<h3>Purchase Power</h3><ul><li>Salary - expenses = Surplus is called purchasing power.</li><li>Reduced EMI Burden</li><li>Create Rsave Formula.</li></ul>",
    "<h3>Investment</h3><ul><li>Time value of money</li><li>Cost of the goals</li><li>Risk - Return Analysis</li><li>Focus on compounded annual Growth Rate.</li></ul>",
    "<h3>Happiness</h3><ul><li>Right time get Right Amount.</li><li>Debt Free</li><li>ROH -Return on Happiness</li></ul>",
    "<h3>Peacefulness</h3><ul><li>Stability Security in Finance</li><li>Increase Networth</li><li>Peace of Mind</li></ul>"
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