var Images = [];
for (var i = 1; i <= 5; i++) {
    Images[i] = new Image();
    Images[i].src = "../public/img/slide/slide-" + i + ".png";
}

var index = 1;
function Next() {
    index++;
    if (index >= Images.length) {
        index = 1;
    }
    document.imgs.src = Images[index].src;
}

function Prev() {
    index--;
    if (index < 1) {
        index = Images.length - 1;
    }
    document.imgs.src = Images[index].src;
}

// slide auto 
setInterval(Next,5000);