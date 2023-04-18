document.getElementById("prev").addEventListener("click",prev);
document.getElementById("next").addEventListener("click",next);
let img_num = document.getElementById("img_slider").getElementsByTagName("img").length;
let num = 0;
let img = document.getElementById("img_slider").getElementsByTagName("img")[num];
let dot = document.getElementById("dots").getElementsByTagName("span")[num];
img.style.display="inline";
dot.setAttribute("id","active");

function next() {
    console.log(num);
    if(num<img_num-1) {
        img.style.display="none";
        num++;
        img = document.getElementById("img_slider").getElementsByTagName("img")[num];
        img.style.display = "inline";

        dot.removeAttribute("id");
        dot = document.getElementById("dots").getElementsByTagName("span")[num];
        dot.setAttribute("id","active");

        clearInterval(callEveryFiveSeconds);
        callEveryFiveSeconds=setInterval(next,5000);
    }
}

function prev() {
    if(num>0) {
        img.style.display="none";
        num--;
        img = document.getElementById("img_slider").getElementsByTagName("img")[num];
        img.style.display = "inline";

        dot.removeAttribute("id");
        dot = document.getElementById("dots").getElementsByTagName("span")[num];
        dot.setAttribute("id","active");

        clearInterval(callEveryFiveSeconds);
        callEveryFiveSeconds=setInterval(next,5000);
    }
}
let callEveryFiveSeconds = setInterval(next, 2000) ;
