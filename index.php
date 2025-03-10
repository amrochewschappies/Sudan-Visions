<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/generalStyling.css">
    <link rel="stylesheet" href="./CSS/homepageStyling.css">
    <link rel="stylesheet" href="./CSS/navigationBarStyling.css">
    <script src="./Javascript/homePage.js" defer></script>
    <script type="module"> import { loadNavbar } from "./Javascript/navigationBar.js"
        loadNavbar("Home")
    </script>
</head>

<body>
    <header id="header">
        <div id="name-section">
            <img src="./Images/Rasha Fonudation Logo.png" alt="Image of the logo" id="nav-logo">
            <div id="name-logo">Sudan Visions</div>
        </div>
        <nav id="nav-bar">
            <div id="burger-menu">
                <img src="./Images/burger-bar.png" alt="Burger menu icon" id="burger-icon">
            </div>
        </nav>
    </header>

    <aside>
        <p>Topics</p>
        <a href="">Topic 1</a>
        <a href="">Topic 2</a>
        <a href="">Topic 3</a>
        <a href="">Topic 4</a>
        <a href="">Topic 5</a>
    </aside>

    <main>
        <div id="post-button">
            <p>New Post</p>
        </div>  

        <div id="content-wrapper">
            <input type="text" id="search-bar" placeholder="search">
        
            <section id="post-container">
    
                <div class="post">
                    <p class="author">author</p>
                    <p class="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a mollitia,
                        deleniti quos laudantium quibusdam iste atque veniam nostrum totam impedit dolorem numquam ullam,
                        quo omnis temporibus, eveniet quis similique.
                    </p>
                    <div class="buttons-section">
                        <div class="like-section">
                            <img src="./Images/heart-svgrepo-com.svg" alt="Like button" class="like-button">
                            <p class="like-count">0</p>
                        </div>
                        <div class="comment-section">
                            <img src="./Images/comment-4-svgrepo-com.svg" alt="Comment button" class="comment-button"> 
                            <p class="comment-count">0</p>
                        </div>
                    </div>
                </div>
                <div class="post">
                    <p class="author">author</p>
                    <p class="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a mollitia,
                        deleniti quos laudantium quibusdam iste atque veniam nostrum totam impedit dolorem numquam ullam,
                        quo omnis temporibus, eveniet quis similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a mollitia,
                        deleniti quos laudantium quibusdam iste atque veniam nostrum totam impedit dolorem numquam ullam,
                        quo omnis temporibus, eveniet quis similique.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a mollitia,
                        deleniti quos laudantium quibusdam iste atque veniam nostrum totam impedit dolorem numquam ullam,
                        quo omnis temporibus, eveniet quis similique.
                    </p>
                    <div class="buttons-section">
                        <div class="like-section">
                            <img src="./Images/heart-svgrepo-com.svg" alt="Like button" class="like-button">
                            <p class="like-count">0</p>
                        </div>
                        <div class="comment-section">
                            <img src="./Images/comment-4-svgrepo-com.svg" alt="Comment button" class="comment-button"> 
                            <p class="comment-count">0</p>
                        </div>                   
                    </div>
                </div>
                <div class="post">
                    <p class="author">author</p>
                    <p class="content">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi a mollitia,
                        deleniti quos laudantium quibusdam iste atque veniam nostrum totam impedit dolorem numquam ullam,
                        quo omnis temporibus, eveniet quis similique.
                    </p>
                    <div class="buttons-section">
                        <div class="like-section">
                            <img src="./Images/heart-svgrepo-com.svg" alt="Like button" class="like-button">
                            <p class="like-count">0</p>
                        </div>
                        <div class="comment-section">
                            <img src="./Images/comment-4-svgrepo-com.svg" alt="Comment button" class="comment-button"> 
                            <p class="comment-count">0</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</body>

</html>