const buttons = document.querySelectorAll(".like-button, .comment-button");
const body = document.querySelector("body");

buttons.forEach(button => {
    button.addEventListener("mouseover", function() {
        body.style.cursor = 'pointer';
    });

    button.addEventListener("mouseleave", function() {
        body.style.cursor = 'default';
    });
});
