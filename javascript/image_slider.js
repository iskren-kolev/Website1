let sliders = document.querySelectorAll(".image_slider_box");

class ImageSliderBox {
    constructor(imageSliderBox) {
        this.imageSliderBox = imageSliderBox;
        this.img_length = this.imageSliderBox.getElementsByTagName("img").length;
        this.num = 0;
        this.prevButton = this.imageSliderBox.querySelector('.prev');
        this.nextButton = this.imageSliderBox.querySelector('.next');
        this.prevButton.addEventListener("click", () => this.prev());
        this.nextButton.addEventListener("click", () => this.next());
        this.dots = this.imageSliderBox.querySelector(".dots");
        this.slider_options = this.imageSliderBox.getAttribute("data-slider-options");
        this.applyOptions();
    }
    hasOption(name) {
        return !!this.slider_options.includes(name);
    }

    applyOptions() {
        if (this.slider_options.includes("nodots")) {
            this.dots.style.display = "none";
        }
        if (this.slider_options.includes("start-from")) {
            let expression = /start-from-(\d+)/;
            let match = this.slider_options.match(expression);
            let startFrom = match ? parseInt(match[1]) : null;
            if(startFrom<=this.img_length) {
                this.num = startFrom - 1;
            }
        }
        this.changePicAndDot();
    }

    changePicAndDot() {
        this.img = this.imageSliderBox.getElementsByTagName("img")[this.num];
        this.dot = this.imageSliderBox.getElementsByTagName("span")[this.num];
        this.textDescription = this.imageSliderBox.getElementsByTagName("p")[this.num];

        this.img.style.display = "inline";
        this.dot.setAttribute("id", "active");
        this.textDescription.style.display = "inline";
        clearInterval(this.callEveryFiveSeconds);
        this.callEveryFiveSeconds = setInterval(() => this.next(), 5000);
    }

    hideShowArrows() {
        if (this.num === 0) {
            //hide the prev button
            this.prevButton.style.display = "none";
        } else if (this.num === this.img_length - 1) {
            //hide the next button
            this.nextButton.style.display = "none";
        } else {
            //display the prev and next buttons
            this.prevButton.style.display = "inline";
            this.nextButton.style.display = "inline";
        }
    }

    next() {
        if (this.hasOption("infinate")) {
            this.num++;
            if (this.num < this.img_length) {
                this.img.style.display = "none";
                this.textDescription.style.display = "none";
                this.dot.removeAttribute("id");
                this.changePicAndDot();
            } else {
                this.num = 0;
                this.img.style.display = "none";
                this.textDescription.style.display = "none";
                this.dot.removeAttribute("id");
                this.changePicAndDot();
            }
        } else {
            if (this.num < this.img_length - 1) {
                this.img.style.display = "none";
                this.textDescription.style.display = "none";
                this.num++;
                this.dot.removeAttribute("id");
                this.changePicAndDot();
            }
        }
        this.hideShowArrows();
    }

    prev() {
        if (this.num > 0) {
            this.img.style.display = "none";
            this.textDescription.style.display = "none";
            this.num--;
            this.dot.removeAttribute("id");
            this.changePicAndDot();
        }
        this.hideShowArrows();
    }

    callEveryFiveSeconds = setInterval(() => this.next(), 5000);
}

sliders.forEach(slider => new ImageSliderBox(slider));