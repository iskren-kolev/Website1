let sliders = document.querySelectorAll(".image_slider_box");

class ImageSliderBox {
    constructor(imageSliderBox) {
        this.imageSliderBox = imageSliderBox;
        this.img_length = this.imageSliderBox.getElementsByTagName("img").length;
        this.num = 0;
        this.roll = false;
        this.prevButton = this.imageSliderBox.querySelector('.prev');
        this.nextButton = this.imageSliderBox.querySelector('.next');
        this.prevButton.addEventListener("click", () => this.prev());
        this.nextButton.addEventListener("click", () => this.next(this.roll));
        this.dots = this.imageSliderBox.querySelector(".dots")
        this.dataTypeDots = this.imageSliderBox.getAttribute("data-slider-options");
        this.dataTypeRoll = this.imageSliderBox.getAttribute("data-roll-options");
        this.dataStartSlide = this.imageSliderBox.getAttribute("data-start-from");
        this.setOptions();
    }

    setOptions() {
        if (this.dataTypeDots === "nodots") {
            this.dots.style.display = "none";
        }
        if (this.dataTypeRoll === "infinate") {
            this.roll = true;
        }
        if (this.dataStartSlide) {
            this.num = this.dataStartSlide-1;
        } else {
            this.num = 0;
            //option for hiding prev button
            this.prevButton.style.display = "none";
        }
        this.img = this.imageSliderBox.getElementsByTagName("img")[this.num];
        this.dot = this.imageSliderBox.getElementsByTagName("span")[this.num];
        this.img.style.display = "inline";
        this.dot.setAttribute("id", "active");
    }


    change_pic_and_dot() {
        this.dot.removeAttribute("id");
        this.img = this.imageSliderBox.getElementsByTagName("img")[this.num];
        this.dot = this.imageSliderBox.getElementsByTagName("span")[this.num];
        this.img.style.display = "inline";
        this.dot.setAttribute("id", "active");
        clearInterval(this.callEveryFiveSeconds);
        this.callEveryFiveSeconds = setInterval(() => this.next(this.roll), 5000);
    }

    hide_show_arrows() {
        //hide and show prev button
        if (this.num !== 0) {
            //display the prev Buttton
            this.prevButton.style.display = "inline";
        } else {
            //hide the prev Buttton
            this.prevButton.style.display = "none";
        }
        //hide and show next button
        if (this.num === this.img_length - 1) {
            this.nextButton.style.display = "none";
        } else {
            this.nextButton.style.display = "inline";
        }
    }

    next(roll) {
        if (roll) {
            this.num++;
            if (this.num < this.img_length) {
                this.img.style.display = "none";
                this.change_pic_and_dot();
            } else {
                this.num = 0;
                this.img.style.display = "none";
                this.change_pic_and_dot();
            }
        }
        if (!roll) {
            if (this.num < this.img_length - 1) {
                this.img.style.display = "none";
                this.num++;
                this.change_pic_and_dot();
            }
        }
        this.hide_show_arrows();
    }

    prev() {
        if (this.num > 0) {
            this.img.style.display = "none";
            this.num--;
            this.change_pic_and_dot();
        }
        this.hide_show_arrows();
    }

    callEveryFiveSeconds = setInterval(() => this.next(this.roll), 5000);
}

sliders.forEach(slider => new ImageSliderBox(slider));