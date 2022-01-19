/* For ALL pages */

*, *::before, *::after {
    font-family: 'Open Sans', sans-serif;
}

header {
    text-align: right;
    z-index: 999;
    margin-right: 5mm;
}

*{
    --color_items : #0066FF;
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
}

/* For NavBar in ALL pages*/
.navbar {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    gap:10px;
    background-color: rgb(255, 255, 255);
    flex-wrap: nowrap;
    color: var(--color_items);
    padding-right: 0%;
}
.brand_title {
    margin: .5rem;
}

.navbar_links ul {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;

}

.navbar_links ul li {
    list-style: none;
}

.navbar_links li a {
    text-decoration: none;
    position: relative;
    font-size: 1.2rem;
    padding: 1rem;
    padding-left: 3vw;
    display: block;
    letter-spacing: 0.2px;
    color: var(--color_items);
    padding: 0 10px;
    font-weight: bold;
}

.navbar_links li a:after {
    content:"";
    position: absolute;
    background: var(--color_items);
    height: 3px;
    width:  0;
    left: 0;
    bottom: -10px;
    transition: 0.3s;
}

.navbar_links li a:hover:after {
    width:  100%;
    text-decoration: underline;
    font-weight: bold;
}

.toggle_button {
    position: absolute;
    top: .75rem;
    right: 1rem;
    flex-direction: column;
    justify-content: space-between;
    width: 30px;
    height: 21px;
    display: none;
    margin-top: 1vh;
}

.default_btn{
    background-color: var(--color_items);
    color: white;
    font-size: medium;
    border:none;
    display: inline-block;
    cursor: pointer;
    padding: .5em .75em;
    border-radius: .25rem;
}

.default_btn:hover {
    background-color: var(--color_items);
    color: white;
    text-decoration: underline;
    transition: 0.5s;
    border-color: #0066FF;
}

.Image_Google_play {
    cursor: pointer;
}

.toggle_button .bar {
    width: 100%;
    height: 3px;
    background-color: var(--color_items);
    border-radius: 10px;
}

@media (max-width: 750px) {
    .toggle_button {
        display: flex;
    }

    .navbar_links {
        display: none;
        padding-left: 20vw;
    }

    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar_links ul {
        flex-direction: row;
        width: 100%;
    }

    .navbar_links  ul li {
       justify-content: center;
    }

    .navbar_links li a {
     text-align: center;
     justify-content: center;
    }

    .navbar_links.active {
        display: flex;
    }
}

/* For FOOTER in ALL pages*/

.footer {
    background-color: rgb(255, 255, 255);
    display: flex;
    flex-direction: row;
    height: 200px;
    justify-content: space-around;
    gap:10px;
}

.footer_col_1{
    height: auto;
    padding: 10px 20px 10px 20px;
}

.footer_text {
    color: var(--color_items);
    font-weight: 1000;
    font-size: 6mm;
    text-align: center;
}
.footer_col_2 {
    padding: 10px 20px 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}

.footer_col_3 {
    height: auto;
    padding: 10px 20px 10px 20px;
}
.footer_col_1,.footer_col_2,.footer_col_3{
    width: 350px;
}

.push {
    height: 100px;
}

.footer_2_text{
    background-color: white;
    color: var(--color_items);
    font-size: 8px;
}

@media only screen and (max-width: 750px) {
    .footer_col_1,.footer_col_2,.footer_col_3{
        width: 20%;
    }

    .image {
        width: 140px;
    }

    .footer_2_text {
        font-size: 0.5px;
    }
}

.footer_col_3 ul {
    list-style: none;
    padding: 0;
}

.footer ul li {
    display: inline-block;
    margin-right: 10px;
    font-size: 12px
}
.footer_content {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-evenly;
}

.Image_Google_play {
    cursor: pointer;
}

.redes {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
}
.redes li {
    margin: 0 5px;
}
.redes a {
    text-decoration: none;
}

.button_container {
    text-align: center;
}

.btn {
    border: 1px solid var(--color_items);
    background: none;
    padding: 10px 20px;
    cursor: pointer;
    margin: 10px;
    transition: 0.8s;
    position: relative;
    color: var(--color_items);
    overflow: hidden;
    font-family: 'Open Sans', sans-serif;
    font-weight: bold;
}

.btn:hover {
    color: white;
}

.btn::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: var(--color_items);
    z-index: -1;
    transition: 0.8s;
    top: 0;
    border-radius:  0 0 50% 50%;
}

.btn:hover::before {
    height: 180%;
}

/* For HOMEPAGE */

.grid_container_p{
    display: grid;
    background-image: url("../resources/images/Foto_Home.JPG");
    background-repeat: no-repeat;
    grid-template-columns: 40% 60%;
    margin: 1% auto;
    list-style: none;
}
.caja_grid {
    color: var(--color_items);
    display: block;
    background-color: transparent;
    margin: 30px;
    margin-left: 0px;
    height: auto;
    text-align: center;
}

.image_home {
    margin-left: 0px;
    padding-left: 0px;
    width: 100%;
}

@media only screen and (max-width: 750px) {
    .caja_grid{
        width: 90%;
    }

    .top_text, .medium_text, .small_text {
        color: black;
    }
}

.top_text {
    font-size: 50px;
    font-weight: bold;
}

.medium_text {
    font-size: 25px;
    font-weight: bold;
}

.small_text {
    font-size: 18px;
    font-weight: lighter;
    text-justify: distribute-all-lines;
}

.grid_container_c {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr;
    grid-auto-rows: 50px; 
    grid-gap: 10px;
    padding: 0;
    margin: 1% auto;
    list-style: none;
}

.caja_flex {
    background-color:white;
    text-decoration: none;
    justify-content: center;
    margin: 0 5px;
}

.caja_flex p {
    font-size: 14px;
    text-align: center;
    margin: 0;
}

/* For LOGIN page*/

.login_bg_container {
    margin:0;
    padding:0;
    background-image: url(../resources/images/Login_bg.JPG);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
}

.center {
    position: absolute;
    top: 30%;
    left: 32%;
}

.center h1 {
    text-align: center;
    border-bottom: 1px;
    font-size: 50px;
    font-weight: bold;
    color: var(--color_items);
}

.center form {
    text-align: center;
    box-sizing: border-box;
    width: 100%;
}

.text_field {
    position: relative;
    padding-bottom: 5%;
}

::placeholder {
    color: var(--color_items);
    font-weight: bold;
}

.text_field input {
    display: inline-block;
    border: none;
    border-bottom: 1px solid var(--color_items);
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight:lighter;
    color: var(--color_items);
    padding: 0;
    margin: 0;
    width: 60%;
}

.text_field_nom_ape {
    position: relative;
    padding-bottom: 5%;
}
.text_field_nom_ape input {
    display: inline-block;
    border: none;
    border-bottom: 1px solid var(--color_items);
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight:lighter;
    color: var(--color_items);
    padding: 0;
    margin: 0;
}

.registrate_link {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
}

.registrate_link a {
    text-decoration: none;
    color: var(--color_items);
}

.condiciones {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    text-decoration: none;
    color: var(--color_items);
}

.condiciones:hover {
    text-decoration: underline;
    transition: 0.5s;
}

.registrate_link a:hover {
    text-decoration: underline;
    transition: 0.5s;
}

/* For SIGNUP page*/

.signup_bg_container {
    min-height: 170vh;
    margin-bottom: 10px;
    background-image: url(../resources/images/Registro_bg.JPG);
    background-repeat: no-repeat;
    background-size: cover;
}

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 2px;
}

input.error, textarea.error {
    border: 1px dashed red;
    font-weight: bold;
    color: red;
    
}

.rbtn {
    display: block;
    position: relative;
    margin-bottom: 5px;
    cursor: pointer;
    padding-left: 10px;
    font-weight: bold;
    color: var(--color_items);
    border-radius: 5px;

}


.radio_button_signup {
    color: var(--color_items);
    display: inline-block;
    align-items: left;
}


/* For CAMPAIGNS page */

.campaigns_container {
    min-height: 100vh;
    margin-bottom: -80px;
}

.campaigns_container h1 {
    text-align: center;
    border-bottom: 1px;
    font-size: 50px;
    font-weight: bold;
    color: var(--color_items);
}

.campaigns_container h2 {
    text-align: left;
    border-bottom: 1px;
    font-size: 25px;
    font-weight: bold;
    color: var(--color_items);
    padding-left: 4vw;
}

.cajas {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.logout_message {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    color: var(--color_items);
    padding-top: 100px;
}

.caja_texto {
    color: var(--color_items);
    background-color: white;
    width: 44%;
    height: auto;
    padding: 20px;
    margin: 30px;
    justify-content: center;
    text-align: justify;
    text-decoration: none;
    border: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .2);
}

@media only screen and (max-width: 750px) {
    .caja_texto{
        width: 90%;
    }
}

.caja_texto h2 {
    text-align: center;
    border-bottom: 1px;
    font-size: 20px;
    font-weight: bold;
    color: var(--color_items);
}

.product {
    width: 100;
    height: 200;
    justify-content: center;
    align-items: center;
    padding-left: 10vw;
}

.product:hover, .producto:hover {
    transform: scale(1.025);

}

.producto {
    width: 100;
    height: 200;
    justify-content: center;
    align-items: center;
    padding-left: 5vw;
}

.info {
    text-decoration: none;
    color: var(--color_items);
    margin-right: 2vw;
}

.info:hover {
    text-decoration: underline;
    transition: 0.5s;
}

.card_footer {
    margin-top: 1rem;
    font-size: 1.5erm;
}

.button_donar {
    background-color: var(--color_items);
    color: white;
    font-size: medium;
    border:none;
    display: inline-block;
    cursor: pointer;
    padding: .5em .75em;
    border-radius: .25rem;
    margin-top: 2.45em;
    margin-right: 10vw;
}

.rounded-circle {
    clip-path: circle();
    margin-right: -6px;
}

.page_btns {
    margin-left: 75vw;
    color:var(--color_items)
}

.page_btns span {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 5px;
    width: 35px;
    height: 35px;
    border: 1px solid var(--color_items);
    cursor: pointer;
    text-align: center;
    background-color: var(--color_items);
    color: white;
}

.page_btns span:hover {
    background-color: var(--color_items);
    color: white;
    text-decoration: underline;
    transition: 0.5s;
    border-color: #0066FF;
    transform: scale(1.025);
    font-weight: bold;
}

/* For PROFILE page*/

.profile_container {
    min-height: 100vh;
    min-width: 100vw;
    margin-bottom: -100px;
    background-image: url(../resources/images/faqs_bg.JPG);
    background-repeat: no-repeat;
    background-size: cover;
}

.profile_container h1{
    text-align: center;
    border-bottom: 1px;
    font-size: 50px;
    font-weight: bold;
    color: var(--color_items);
}

.cajas_privada {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr;
    grid-auto-rows: 50px; 
    grid-gap: 10px;
    padding: 0;
    margin: 1% auto;
    list-style: none;
}

.caja_texto_perfil {
    color: var(--color_items);
    background: transparent;
    margin: 20px;
    padding: 10px;
    height: auto;
    justify-content: center;
    text-align: justify;
    border: none;
}

.caja_texto_perfil h2 {
    text-align: center;
    border-bottom: 1px;
    font-size: 30px;
    font-weight: bold;
    color: var(--color_items);
}

.rounded-circle_profile {
    clip-path: circle();
    margin-left: 12vw;
}

.rounded-circle_profile:hover {
    transform: scale(1.025);
}

.button_profile {
    background-color: var(--color_items);
    color: white;
    font-size: medium;
    border:none;
    display: inline-block;
    cursor: pointer;
    padding: .5em .75em;
    border-radius: .25rem;
    margin-top: 2.45em;
    margin-left: 16vw;
}

.text_profile {
    color: var(--color_items);
    font-size: 15px;
    font-weight: bold;
    margin-left: 18vw;
}

.text_question{
    color: var(--color_items);
    font-size: 15px;
    font-weight: bold;
    margin-left: 5vw;
    margin-top: 4vh;
}

.text_answer {
    color: var(--color_items);
    font-size: 15px;
    font-weight: lighter;
    margin-left: 10vw;
}

/* For DONATIONS page */

.donation_container {
    min-height: 150vh;
    min-width: 100vw;
    margin-bottom: -100px;
}

.donation_container h1{
    text-align: center;
    border-bottom: 1px;
    font-size: 50px;
    font-weight: bold;
    color: var(--color_items);
}

.colaboraciones {
    list-style: none;
    display: flex;
    padding-left: 1vw;
}

.colaboraciones a {
    text-decoration: none;
    padding-right: 5vw;
}

.loading_bar {
    position: relative;
    width: 500px;
    height: 3em;
    background-color: var(--color_items);
    border-radius: 1.5rem;
    color: var(--color_items);
    margin-top: 5vh;
}

.loading_bar::before {
    content: attr(data-label);
    display: flex;
    align-items: center;
    position: absolute;
    margin-left: .5em;
    margin-top: .5em;
    padding-bottom: .5em;
    background-color: rgb(0, 204, 255);
    border-radius: 1em;
    width: 20.6em;
    font-weight: bold;
}

.cifra_container {
    margin-top: 5vh;
    margin-left: 3vw;
    color: var(--color_items);
    font-size: 15px;
    margin-bottom: 5vh;
}

.cifra {
    display: inline-block;
    border: none;
    border-bottom: 1px solid var(--color_items);
    background-color: transparent;
    outline: none;
    font-size: 18px;
    font-weight:lighter;
    color: var(--color_items);
    padding: 0;
    margin: 0;
    width: 25%;
}

.donacion_formalizar_container {
    justify-content: center;
    padding-left: 15vw;
}

.metodos_pago {
    list-style: none;
    display: grid;
    padding-bottom: 2vh;
    justify-content: center;
    padding-top: 5vh;
}

.metodos_pago  img{
    text-decoration: none;
    padding-right: 2vw;
}

.metodos_pago img:hover {
    transform: scale(1.125);
}

.container_faqs {
    min-height: 100vh;
    margin-bottom: -50px;
    padding: 0 1.5rem;
}

.container_faqs h1 {
    text-align: center;
    border-bottom: 1px;
    font-size: 50px;
    font-weight: bold;
    color: var(--color_items);
}

/* For FAQS page */

.section_faqs {
    display:flex;
    margin-top: 20vh;
    align-items: center;
    justify-content: center;
    width: 100%;
    margin:0;
    padding:0;
    background-image: url(../resources/images/faqs_bg.JPG);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100vh;
}

.accordion_item {
    background-color: rgba(4, 4, 236, 0.2);
    border-radius: .4em;
    margin-bottom: 1rem;
    padding: 1rem;
    box-shadow: .5rem 2px .5rem rgba(0, 0, 0, .2);
}

.accordion_link {
    font-size: medium;
    color: var(--color_items);
    text-decoration: none;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 1rem 0;
    padding-bottom: 0.4rem;
    font-weight: bold;
}

.answer {
    max-height: 0;
    overflow: hidden;
    position: relative;
    background-color:transparent;
    padding: .3rem;
    border-radius: 0.2em;
    transition: max-height 650ms;
}

.answer::before {
    content: "";
    position: absolute;
    width: .2rem;
    height: 90%;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    
}

.answer p {
    color: var(--color_items);
    font-size: 0.8rem;
    font-weight: bold;
}

.accordion_item:target .answer {
    max-height: 20rem;
}

/* For USER page */

.profile_container {
    min-height: 100vh;
    min-width: 100vw;
    margin-bottom: -100px;
    background-image: url(../resources/images/faqs_bg.JPG);
    background-repeat: no-repeat;
    background-size: cover;
}

.profile_header {
    width: 100%;
    display: flex;
    height: 190px;
}

.profile_img {
    padding-top: 10vh;
    float: left;
    width: 340px;
    height: 200px;
}

.profile_img img {
    border-radius: 50%;
    height: 180px;
    width: 180px;
    border: 4px solid var(--color_items);
    box-shadow: 0px 5px 10px rgba(0,0,0,.2);
    position: absolute;
    left: 50px;
}

.profile_nav_info {
    float: left;
    flex-direction: column;
    justify-content: center;
    padding-top: 20px;
}

.profile_nav_info h3 {
    font-size: 3rem;
    color: var(--color_items);
    padding-left: 17vw;
}

.profile_nav_info .address {
    display: flex;
    font-weight: bold;
    color: var(--color_items);
    font-size: 1.5rem;
}

.profile_nav_info .address p {
    margin-right: 5px;
}

.main_bd {
    width: 100%;
    display: flex;
    padding-right: 15px;
}

.profile_side {
    width: 300px;
    padding: 90px 30px 20px;
    padding-left: 3vw;
}

.profile_side h3 {
    color: var(--color_items);
    font-weight: bold;
    font-size: 1.5rem;
    padding-left: 2vw;
}
.profile_side p {
    margin-bottom: 7px;
    color: #333;
    font-size: 14px;
}

.profile_side p i {
    color: var(--color_items);
    margin-right: 5px;
}

.profile_btn {
    display: flex;
}

button.chat_btn {
    border: 0;
    padding: 10px;
    width: 100%;
    border-radius: 3px;
    margin: 5px 2px;
    cursor: pointer;
    font-size: medium;
    display: inline-block;
    padding: .5em .75em;
    border-radius: .25rem;
}

button.chat_btn:hover {
    background-color:  white;
    color: #333;
    font-weight: bold;
    text-decoration: underline;
    transition: 0.5s;
    border-color: #0066FF;
}

.nav {
    width: 100%;
    z-index: -1;
}

.profile_nav ul {
    display: flex;
    justify-content: center;
    list-style-type: none;
    height: 40px;
    background: #fff;
    box-shadow: 0px 2px 5px rgba(0,0,0,.3);
}

.profile_nav ul li {
    padding: 10px;
    width: 90mm;
    cursor: pointer;
    text-align: center;
    transition: all .2s ease-in-out;
}

.profile_nav ul li.active,
.profile_nav ul li:hover {
    box-shadow: 0px -3px 0px var(--color_items) inset;
}

.profile_body {
    width: 100%;
    z-index: -1;
}

.profile_tab {
    padding: 20px; 
    width: 270mm;
    text-align: center;
    display: none;
}

.user_post_active {
    color: var(--color_items);
    font-weight: bold;
}

.user_review {
    color: var(--color_items);
    font-weight: bold;
}

.user_setting{
    color: var(--color_items);
    font-weight: bold;
}

