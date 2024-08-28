<style type="text/css">
body {

    background-color: var(--body-color);
}

/*for responsive category slider*/

.item img {
    height: 7rem;

}

h3 {
    text-align: center;
    font-size: 18px;
    margin: 0;
    padding-top: 10px;
}

a {
    color: white;
    text-decoration: none;
}

.gallery {

    position: relative;
    display: grid;
    grid-template-columns: repeat(, 1fr);
    grid-gap: 15px;
    column-gap: 15px;
    padding-right: 0px;
    padding-top: 0pX;
    padding: 15px;
}

/* For small devices */
@media screen and (max-width:300px) {
    .gallery {
        grid-template-columns: repeat(1, 1fr);
    }
}

/* For medium devices */
@media screen and (min-width:576px) {
    .gallery {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media screen and (min-width:700px) {
    .gallery {
        grid-template-columns: repeat(4, 1fr);
    }
}

.content {
    box-sizing: border-box;
    float: left;
    text-align: center;
    margin-bottom: 1rem;
    border-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: .4s;
}

.content:hover {
    box-shadow: 0 0 11px rgba(33, 33, 33, .2);
    transform: translate(0px, -8px);
    transition: .6s;
}




.content img {
    width: 194px;
    height: 228px;
    margin-top: 1rem;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 10px;
}



.p_dec {
    height: 10vh;
    font-size: 10px;
    text-align: center;
    color: #111;
    padding: 0 auto;
    margin: 3px;

}


.p_price {
    display: flex;
    justify-content: flex-start;
    font-size: 20px;
    text-align: center;
    color: #222f3e;
    margin-left: .5em;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
    font-variant: small-caps;

}

.p_price h6 {
    font-size: 1rem;
    margin-left: .5em;
    text-align: center;
    text-decoration-line: line-through;
    text-decoration-color: green;
}

.p_price p {
    color: green;
    font-size: 0.68rem;
    margin-left: .5em;
    text-align: center;

}


.glow-on-hover-btn {

    width: 100px;
    height: 30px;
    border: none;
    outline: none;
    color: #fff;
    /*background: #111;*/
    cursor: pointer;
    position: relative;
    z-index: 0;
    margin: 0.5rem;
    border-radius: 10px;
}


.glow-on-hover-btn a {
    font-weight: 600;
    text-decoration: none;
    color: #111;
}

.glow-on-hover-btn:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left: -2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover-btn:active {
    color: #000;
}




.glow-on-hover-btn:active:after {
    background: transparent;
}

.glow-on-hover-btn:hover:before {
    opacity: 1;
}

.glow-on-hover-btn:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    /* background: #111; */
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% {
        background-position: 0 0;
    }

    50% {
        background-position: 400% 0;
    }

    100% {
        background-position: 0 0;
    }
}



.heading {
    text-align: center;
    color: black;
    font-family: is_double;
    border: black;
    text-align: center;
    border-radius: 15px;
    box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
}

@keyframes myanimation {
    0% {
        color: red;
    }

    25% {
        color: blue;
    }

    50% {
        color: green;
    }

    75% {
        color: yellow;
    }

    100% {
        color: red;
    }
</style>