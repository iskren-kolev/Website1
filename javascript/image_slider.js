let sliders = document.querySelectorAll(".image_slider_box");

class ImageSliderBox {
    constructor(imageSliderBox) {
        this.imageSliderBox = imageSliderBox;
        this.img_length = this.imageSliderBox.getElementsByTagName("img").length;
        this.num = 0;
        this.img = this.imageSliderBox.getElementsByTagName("img")[this.num];
        this.prevButton = this.imageSliderBox.querySelector('.prev');
        this.nextButton = this.imageSliderBox.querySelector('.next');
        this.prevButton.addEventListener("click", () => this.prev());
        this.nextButton.addEventListener("click", () => this.next());
        this.dot = this.imageSliderBox.getElementsByTagName("span")[this.num];
        this.img.style.display = "inline";
        this.dot.setAttribute("id", "active");
        this.dots = this.imageSliderBox.querySelector(".dots")
        this.dataType = this.dots.getAttribute("data-slider-options");
        this.setOptions();
    }
    setOptions() {
        if (this.dataType === "nodots") {
            this.dots.style.display = "none";
        }
    }
    change_pic_and_dot() {
        this.dot.removeAttribute("id");
        this.img = this.imageSliderBox.getElementsByTagName("img")[this.num];
        this.dot = this.imageSliderBox.getElementsByTagName("span")[this.num];
        this.img.style.display = "inline";
        this.dot.setAttribute("id", "active");
        clearInterval(this.callEveryFiveSeconds);
        this.callEveryFiveSeconds = setInterval(() => this.next(), 5000);
    }

    next() {
        if (this.num < this.img_length - 1) {
            this.img.style.display = "none";
            this.num++;
            this.change_pic_and_dot();
        }
    }

    prev() {
        if (this.num > 0) {
            this.img.style.display = "none";
            this.num--;
            this.change_pic_and_dot();
        }
    }

    callEveryFiveSeconds = setInterval(() => this.next(), 5000);
}
sliders.forEach(slider => new ImageSliderBox(slider));