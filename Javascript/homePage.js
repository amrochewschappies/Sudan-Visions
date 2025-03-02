const buttons = document.querySelectorAll(".like-button, .comment-button");
const body = document.querySelector("body");
const main = document.querySelector("main");
const blurElements = document.querySelectorAll("aside, #content-wrapper");
const postContainer = document.querySelector("#post-container");

buttons.forEach(button => {
    button.addEventListener("mouseover", function() {
        body.style.cursor = 'pointer';
    });

    button.addEventListener("mouseleave", function() {
        body.style.cursor = 'default';
    });
});

const postButton = document.querySelector("#post-button");

postButton.addEventListener("mouseover", function(){
    postButton.style.backgroundColor = "white";
    body.style.cursor = "pointer";
})

function postButtonColor(){
    postButton.style.backgroundColor = "rgb(253, 111, 111)";
    body.style.cursor = "default";
}

postButton.addEventListener("mouseleave", postButtonColor);

function postButtonFunctionallity(){
    blurElements.forEach(element => {
        element.style.filter = "blur(7px)";   
    });
    
    postButton.removeEventListener("mouseleave", postButtonColor);
    postButton.removeEventListener("click", postButtonFunctionallity);
    body.style.cursor = "default";

    let postTemplate = document.createElement("div");
    postTemplate.classList.add("new-post");
    postTemplate.innerHTML = `
            <input type="text" id="post-text" placeholder="What's on your mind?">
            <button id="new-post-button">Post</button>
            <button id="cancel-button">Cancel</button>
    `;
    main.appendChild(postTemplate);
    
    const cancelButton = document.querySelector("#cancel-button").addEventListener("click", function(){
        blurElements.forEach(element => {
            element.style.filter = "blur(0px)";   
        });
        postTemplate.remove();
        postButton.addEventListener("click", postButtonFunctionallity);
        postButton.addEventListener("mouseleave", postButtonColor);
        postButton.style.backgroundColor = "rgb(253, 111, 111)";
    })
};

postButton.addEventListener("click", postButtonFunctionallity);

