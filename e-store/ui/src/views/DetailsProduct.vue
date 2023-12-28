<template>
    <div class="erer">
        <div class="container">
            <div class="box">
                <div class="images">
                    <div class="img-holder active">
                        <img src="@/assets/product-1.jpg" />
                    </div>
                    <div class="img-holder">
                        <img src="@/assets/product-1.jpg" />
                    </div>
                    <div class="img-holder">
                        <img src="@/assets/product-1.jpg" />
                    </div>
                    <div class="img-holder">
                        <img src="@/assets/product-1.jpg" />
                    </div>
                </div>
                <div class="basic-info">
                    <h1>Headphone</h1>
                    <div class="rate">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                    </div>
                    <span>$250</span>
                    <div class="options">
                        <a href="#">Buy It Now</a>
                        <a href="#">Add to Cart</a>
                    </div>
                </div>
                <div class="description">
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Natus temporibus corporis repudiandae, consectetur
                        nostrum nisi commodi placeat rerum molestias numquam
                        nihil accusantium deleniti! Enim, nesciunt a quis amet
                        hic officia. Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Molestiae nemo accusantium tempora
                        facere doloremque cum iusto, ut neque, fuga omnis libero
                        laborum ullam. At dolorum qui atque labore illo
                        dignissimos.
                    </p>

                    <form action="" method="post">
                        <textarea
                            name="comment"
                            id=""
                            cols="30"
                            rows="10"
                            placeholder="write comment "
                        >
                        </textarea>
                        <button class="comment-submit">Comment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap");

:root {
    --primary-color: #90e0ef;
    --secondary-color: #00b4d5;
    --tertiary-color: #0077b6;
    --yellow-color: #ffb900;
    --gray-color: #808080;
}

* {
    box-sizing: border-box;
    font-family: "Source Sans Pro", sans-serif;
    line-height: 1;
    padding: 0;
    margin: 0;
}
.erer {
    background-color: #90e0ef;
}
.container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.box {
    background-color: white;
    border-radius: 10px;
    box-shadow: 5px 5px 10px 1px rgb(0, 0, 0, 12%);
    padding: 45px;
    margin: 15px 0;
    width: 950px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-rows: auto 1fr;
    grid-template-areas:
        "images info"
        "images description";
    grid-gap: 35px;
}

.box .images {
    grid-area: images;
    display: grid;
    grid-template-columns: repeat(3, auto);
    grid-template-rows: auto 1fr;
    grid-template-areas:
        "active active active"
        "idle idle idle";
    grid-gap: 5px;
}

.box .images .img-holder img {
    width: 100%;
    display: block;
    border-radius: 10px;
}

.box .images .img-holder.active {
    grid-area: active;
}

.box .images .img-holder:not(.active):hover {
    opacity: 0.95;
    cursor: pointer;
}

.box .basic-info {
    grid-area: info;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.box .basic-info .rate {
    color: yellow;
}

.box .basic-info span {
    font-weight: 800;
    font-size: 25px;
}

.box .basic-info .options a {
    color: white;
    background-color: #00b4d5;
    display: inline-block;
    padding: 10px 15px;
    margin: 0px 0px 0px 10px;
    text-decoration: none;
    font-weight: 600;
    font-size: 12px;
    border-radius: 5px;
}

.box .basic-info .options a:hover {
    background-color: #0077b6;
}

.box .description {
    grid-area: description;
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.box .description p {
    color: #808080;
    font-size: 14px;
    line-height: 1.5;
}

.box .description .features {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 10px;
    color: #808080;
}

.box .description .features i {
    margin-right: 5px;
}

.box .description .features .fa-circle-check {
    color: #0077b6;
}

.box .description .features .fa-circle-xmark {
    color: #ffb900;
}

.box .description .social {
    list-style: none;
    display: flex;
}

.box .description .social a {
    margin-right: 15px;
    color: #808080;
}

.box .description .social a:hover {
    color: #00b4d5;
}

@media (max-width: 991px) {
    .box {
        width: 750px;
        grid-template-areas:
            "info info"
            "images description";
    }
    .box .basic-info .options a {
        padding: 8.5px 12px;
    }
}

@media screen and (max-width: 991px) and (min-width: 769px) {
    .box .basic-info span {
        position: absolute;
        align-self: flex-end;
    }
    .box .basic-info .options {
        position: absolute;
        align-self: flex-end;
        margin-top: 40px;
    }
}

@media (max-width: 768px) {
    .box {
        width: 600px;
        grid-template-areas:
            "images info"
            "description description";
    }
    .box .images {
        gap: 3px;
    }
    .box .images .img-holder img {
        border-radius: 5px;
    }
}

@media (max-width: 640px) {
    .box {
        width: 100%;
        min-height: 100vh;
        border-radius: 0;
        padding: 35px;
        margin: 0;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(3, auto);
        grid-template-areas:
            "images"
            "info"
            "description";
    }
}

.box textarea {
    background: #eee;
    width: -webkit-fill-available;
    height: 71px;
    margin: 10px 0;
    padding: 10px;
    resize: inherit;
    border-radius: 5px;
    border: none;
    box-shadow: 0 0 0 0.5px #0003;
}

.box textarea:focus-visible {
    box-shadow: inset 0 0 0 1px #009cff;
    outline: none;
}

.box .comment-submit {
    float: right;
    padding: 6px 10px;
    border: none;
    background: #009cff;
    color: #eee;
    cursor: pointer;
    border-radius: 3px;
}

.box .comment-submit:hover {
    background: #0076bf;
}
</style>
