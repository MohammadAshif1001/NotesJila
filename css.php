<style>
:root {
    /*  Primary */
    --orange: hsl(26, 100%, 55%);
    --pale-orange: hsl(25, 100%, 94%);

    /* Neutral */

    --very-dark-blue: hsl(220, 13%, 13%);
    --dark-grayish-blue: hsl(219, 9%, 45%);
    --grayish-blue: hsl(220, 14%, 75%);
    --light-grayish-blue: hsl(223, 64%, 98%);
    --white: hsl(0, 0%, 100%);
    /* with 75% opacity for lightbox background */
    --black: hsl(0, 0%, 0%);

    /* Pseudo element txt */
    --pseudo-text: "0";
}

html {
    font-size: 62.5%;
    box-sizing: border-box;
}

*,
*::before,
*::after {
    padding: 0;
    margin: 0;
    box-sizing: inherit;
}

/*/////////////
Main CSS
 //////////////*/

body {
    font-family: "Kumbh Sans", sans-serif;
    position: relative;
}

.body-wrapper {
    position: absolute;
    z-index: 50;
}

/*/////////////
Overlay image modal
 //////////////*/

.overlay-container {
    display: none;
    z-index: 1000;
    width: 100%;
    height: 100%;
    position: fixed;
    background-color: rgba(0, 0, 0, 0.5);
}

.item-overlay {
    max-width: 50rem;
    padding-top: 5rem;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

.item-overlay__btn {
    align-self: flex-end;
    background: none;
    border: none;
    filter: invert(52%) sepia(14%) saturate(3126%) hue-rotate(344deg) brightness(107%) contrast(102%);
    cursor: pointer;
}

.item-overlay__mainImg {
    position: relative;
}

.item-overlay__img {
    align-self: center;
    width: 100%;
    height: 100%;
    border-radius: 5%;
}

.overlay-btn {
    position: absolute;
    top: 50%;
    padding: 1.6rem 2rem;
    border: none;
    border-radius: 50%;
    background-color: var(--white);
    cursor: pointer;
}

.item-overlay__btnlft-img {
    transform: rotate(180deg);
}

.overlay-btn:hover .overlay-btn__img {
    filter: invert(52%) sepia(14%) saturate(3126%) hue-rotate(344deg) brightness(107%) contrast(102%);
}

.item-overlay__btnlft {
    left: 0;
    transform: translateX(-50%);
}

.item-overlay__btnrgt {
    right: 0;
    transform: translateX(50%);
}

.overlay-img__btns {
    align-self: center;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.overlay-img__btn {
    display: block;
    cursor: pointer;
    background: none;
    border: none;
    border-radius: 10%;
    transition: all 0.3s;
    position: relative;
}

.overlay-img__btn::after {
    content: "";
    max-width: 100%;
    height: 100%;
    background-color: var(--white);
    border-radius: 10%;
    border: 3px solid transparent;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
}

.overlay-img__btn:hover {
    background-color: var(--orange);
}

.overlay-img__btn:hover::after {
    border: 3px solid var(--orange);
    opacity: 0.5;
}

.overlay-img__btn-img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10%;
    transition: all 0.3s;
    transform-origin: bottom;
}


/* Btn stylling */
.btn--orange {
    padding: 2rem 5rem;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--white);
    background-color: var(--orange);
    border: none;
    border-radius: 1rem;
    cursor: pointer;
}


/* //////////////////
Product section stylling
/////////////////////// */

.item {
    padding: 0 3rem;
    max-width: 134rem;
    margin: auto;
    display: grid;
    grid-template-columns: 0.8fr 1fr;
    gap: 10rem;
}

/* Left img container stylling */
.img-main {
    max-width: 100%;
    border-radius: 5%;
    cursor: pointer;
    margin-bottom: 2rem;
    margin-left: 4rem;
}

.img-main__btn {
    display: none;
}

.img-btns {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.img-btn {
    display: block;
    cursor: pointer;
    background: none;
    border: none;
    border-radius: 10%;
    transition: all 0.3s;
    position: relative;
}

.img-btn::after {
    content: "";
    max-width: 100%;
    height: 100%;
    background-color: var(--white);
    border-radius: 10%;
    border: 3px solid transparent;
    margin: auto;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    opacity: 0;
}

.img-btn:hover {
    background-color: var(--orange);
}

.img-btn:hover::after {
    border: 3px solid var(--orange);
    opacity: 0.5;
}

.img-btn__img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10%;
    border: 3px solid transparent;
    transition: all 0.3s;
    transform-origin: bottom;
}

/*Right item details stylling */
.price {
    margin-top: 3.5rem;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.price-sub__heading {
    text-transform: uppercase;
    letter-spacing: 1.5px;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--orange);
}

.price-main__heading {
    font-size: 5rem;
    font-weight: 700;
}

.price-txt {
    margin-top: 2rem;
    font-size: 1.6rem;
    color: var(--dark-grayish-blue);
    line-height: 1.5;
}

.price-box {
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
}

.price-box__main {
    display: flex;
    gap: 1rem;
    align-items: center;
}

.price-box__main-new {
    font-size: 3.5rem;
    font-weight: 700;
}

.price-box__main-discount {
    border: none;
    padding: 0.5rem 1.25rem;
    background-color: var(--pale-orange);
    border-radius: 0.5rem;
    font-size: 1.7rem;
    font-weight: 700;
    color: var(--orange);
}

.price-box__old {
    font-size: 1.5rem;
    color: var(--grayish-blue);
    position: relative;
}

.price-box__old::after {
    content: "";
    height: 1px;
    width: 9%;
    background-color: var(--grayish-blue);
    position: absolute;
    left: 0;
    top: 50%;
}

.price-btnbox {
    margin-top: 2rem;
}

.price-btnbox {
    display: flex;
    gap: 2.5rem;
}

.price-btns {
    width: 30%;
    padding: 1.5rem 1.25rem;
    border: none;
    background-color: var(--light-grayish-blue);
    border-radius: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3.5rem;
}

.price-btn {
    border: none;
    background: none;
    cursor: pointer;
    height: 100%;
}

.price-btn__txt {
    font-size: 1.7rem;
    font-weight: 700;
}

.price-cart__btn {
    width: 50%;
    box-shadow: 0px 10px 25px 3px rgba(255, 125, 26, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
}

/* Attribution */
.attribution {
    margin-top: 7rem;
    font-size: 11px;
    text-align: center;
}

.attribution a {
    color: hsl(228, 45%, 44%);
}

/*/////////////
Media Queries
 //////////////*/
@media only screen and (max-width: 1600px) {
    .head {
        max-width: 100%;
        margin-left: 3rem;
        margin-right: 3rem;
    }

    .head-cart {
        right: 10%;
    }
}

@media only screen and (max-width: 1100px) {
    html {
        font-size: 50%;
    }

    .head {
        max-width: 100%;
        margin-left: 3rem;
        margin-right: 3rem;
    }

    .price {
        margin-top: 0.5rem;
    }

    .head {
        max-width: 100%;
        margin-left: 3rem;
        margin-right: 3rem;
    }
}

@media only screen and (max-width: 850px) {
    .overlay-container {
        display: none;
    }

    .head {
        position: unset;
        max-width: 100%;
        margin-top: 0;
        margin-bottom: 5rem;
    }

    .head::after {
        display: none;
    }

    .head-nav__item::after {
        display: none;
    }

    .item {
        padding: 0;
        grid-template-columns: 1fr;
        gap: 5rem;
    }

    .img {
        position: relative;
    }

    .img-main {
        border-radius: 0;
    }

    .img-main__btn {
        display: block;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        padding: 2rem 2.6rem;
        border: none;
        border-radius: 100px;
        cursor: pointer;
    }

    .img-main__btn:hover .img-main__btn-img {
        filter: invert(52%) sepia(14%) saturate(3126%) hue-rotate(344deg) brightness(107%) contrast(102%);
    }

    .img-main__btnlft {
        left: 10%;
    }

    .img-main__btnlft-img {
        transform: rotate(180deg);
    }

    .img-main__btnrgt {
        right: 10%;
    }

    .img-btns {
        display: none;
    }

    .price {
        padding: 0 3rem;
    }

    .price-btnbox {
        flex-direction: column;
    }

    .price-btns {
        padding: 3rem 5rem;
        width: 100%;
    }

    .price-cart__btn {
        padding: 3rem 5rem;
        width: 100%;
    }

    .price-box {
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    .price-box__old::after {
        width: 100%;
    }




}

@media only screen and (max-width: 600px) {
    .head-cart {
        max-width: 100%;
        left: 50%;
        transform: translateX(-50%);
    }
}

@media only screen and (max-width: 420px) {
    .price {
        gap: 3rem;
    }

    .price-txt {
        margin-top: 0;
    }

    .price-btnbox {
        margin-top: 0;
    }

    .price-main__heading {
        font-size: 3.5rem;
    }

    .price-box__main-new {
        font-size: 3rem;
    }

    .head-lft {
        gap: 1.5rem;
    }

    .head-rgt {
        gap: 1.5rem;
    }
}

/*/////////////
JavaScript Triggered Classes
 //////////////*/
.open-cart {
    visibility: visible;
}

.open-menu {
    transform: translateX(0%);
}

.open-overlay {
    height: 100%;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.preload * {
    transition: none !important;
}



/*/////////////
Buy Button
 //////////////*/


.updated-btn-style {
    width: 50%;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    /*background: #111;*/
    cursor: pointer;
    position: relative;
    z-index: 0;
    margin: 0.5rem;
    border-radius: 10px;
    box-shadow: 0 0 11px rgba(33, 33, 33, .2);
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
}

.updated-btn-style a {
    font-weight: 600;
    text-decoration: none;
    color: #111;
}

.updated-btn-style:before {
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

.updated-btn-style:active {
    color: #000;
}

.updated-btn-style:active:after {
    background: transparent;
}

.updated-btn-style:hover:before {
    opacity: 1;
}

.updated-btn-style:after {
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


/* General styling */

.gallery h3 {
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
    margin-top: 6rem;
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

/* *********
for heading div 
*********/
.heading {
    text-align: center;
    margin: 2rem 0 0 0;
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
}
</style>