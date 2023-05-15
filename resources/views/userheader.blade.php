  
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>
.search {
 background-color: #fff;
 padding: 4px;
 border-radius: 5px
}

.search-1 {
 position: relative;
 width: 100%
}

.search-1 input {
 height: 45px;
 border: none;
 width: 100%;
 padding-left: 34px;
 padding-right: 10px;
 border-right: 2px solid #eee
}

.search-1 input:focus {
 border-color: none;
 box-shadow: none;
 outline: none
}

.search-1 i {
 position: absolute;
 top: 12px;
 left: 5px;
 font-size: 24px;
 color: #eee
}

::placeholder {
 color: #eee;
 opacity: 1
}

.search-2 {
 position: relative;
 width: 100%
}

.search-2 input {
 height: 45px;
 border: none;
 width: 100%;
 padding-left: 18px;
 padding-right: 100px
}

.search-2 input:focus {
 border-color: none;
 box-shadow: none;
 outline: none
}

.search-2 i {
 position: absolute;
 top: 12px;
 left: -10px;
 font-size: 24px;
 color: #eee
}

.search-2 button {
 position: absolute;
 right: 1px;
 top: 0px;
 border: none;
 height: 45px;
 background-color: red;
 color: #fff;
 width: 90px;
 border-radius: 4px
}

@media (max-width:800px) {
 .search-1 input {
     border-right: none;
     border-bottom: 1px solid #eee
 }

 .search-2 i {
     left: 4px
 }

 .search-2 input {
     padding-left: 34px
 }

 .search-2 button {
     height: 37px;
     top: 5px
 }
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}

body {
 font-family: "Poppins", sans-serif;
}

.container {
 max-width: 100%;
 width: 90%;
 margin: 0 auto;
}


/* //........top text ........// */

:root {
 /* //....... Color ........// */
 --primary-color: #ff3c78;
 --light-black: rgba(0, 0, 0, 0.89);
 --black: #000;
 --white: #fff;
 --grey: #aaa;
}


/* //........top text ........// */

.top-txt {
 background-color: var(--black);
}

.head {
 display: flex;
 justify-content: space-between;
 color: rgba(255, 255, 255, 0.945);
 padding: 10px 0;
 font-size: 14px;
}

.head a {
 text-decoration: none;
 color: rgba(255, 255, 255, 0.945);
 margin: 0 10px;
}


/* //........ Navbar ........// */

.navbar input[type="checkbox"],
.navbar .hamburger-lines {
 display: none;
}

.navbar {
 box-shadow: 0 5px 4px rgb(146 161 176 / 15%);
 position: sticky;
 top: 0;
 background: var(--white);
 color: var(--black);
 z-index: 100;
}

.navbar-container {
 display: flex;
 justify-content: space-between;
 align-items: center;
 height: 64px;
}

.navbar img {
 margin-left: 3rem;
}

.menu-items-new{
 order: 2;
 display: flex;
 margin-left: 781px;
}

.menu-items-new li {
 list-style: none;
 margin-left: 1.5rem;
 font-size: 1.2rem;
}

.navbar-container ul a {
 text-decoration: none;
 color: var(--black);
 font-size: 18px;
 position: relative;
}

.navbar-container ul a:after {
 content: "";
 position: absolute;
 background: var(--primary-color);
 height: 3px;
 width: 0;
 left: 0;
 bottom: -10px;
 transition: 0.3s;
}

.navbar-container ul a:hover:after {
 width: 100%;
}

@media (max-width: 768px) {
 .navbar {
     opacity: 0.95;
 }
 .navbar-container input[type="checkbox"],
 .navbar-container .hamburger-lines {
     display: block;
 }
 .navbar-container {
     display: block;
     position: relative;
     height: 64px;
 }
 .navbar-container input[type="checkbox"] {
     position: absolute;
     display: block;
     height: 32px;
     width: 30px;
     top: 20px;
     left: 20px;
     z-index: 5;
     opacity: 0;
     cursor: pointer;
 }
 .navbar-container .hamburger-lines {
     display: block;
     height: 28px;
     width: 35px;
     position: absolute;
     top: 20px;
     left: 20px;
     z-index: 2;
     display: flex;
     flex-direction: column;
     justify-content: space-between;
 }
 .navbar-container .hamburger-lines .line {
     display: block;
     height: 4px;
     width: 100%;
     border-radius: 10px;
     background: #333;
 }
 .navbar-container .hamburger-lines .line1 {
     transform-origin: 0% 0%;
     transition: transform 0.3s ease-in-out;
 }
 .navbar-container .hamburger-lines .line2 {
     transition: transform 0.2s ease-in-out;
 }
 .navbar-container .hamburger-lines .line3 {
     transform-origin: 0% 100%;
     transition: transform 0.3s ease-in-out;
 }
 .navbar .menu-items-new {
     padding-top: 100px;
     background: #fff;
     height: 100vh;
     max-width: 100%;
     transform: translate(-150%);
     display: flex;
     flex-direction: column;
     /* margin-left: -40px;
     padding-left: 40px; */
     text-align: center;
     transition: transform 0.5s ease-in-out;
     /* box-shadow: 5px 0px 10px 0px #aaa; */
     overflow: scroll;
 }
 .navbar .menu-items-new li {
     margin-bottom: 2rem;
     font-size: 1.1rem;
     font-weight: 500;
 }
 .menu-items-new li,
 .navbar img {
     margin: 0;
 }
 .navbar .menu-items-new li:nth-child(1) {
     margin-top: 1.5rem;
 }
 .navbar-container .logo img {
     position: absolute;
     top: 10px;
     right: 15px;
     margin-top: 8px;
 }
 .navbar-container input[type="checkbox"]:checked~.menu-items-new{
     transform: translateX(0);
 }
 .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line1 {
     transform: rotate(45deg);
 }
 .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line2 {
     transform: scaleY(0);
 }
 .navbar-container input[type="checkbox"]:checked~.hamburger-lines .line3 {
     transform: rotate(-45deg);
 }
 .navbar-container input[type="checkbox"]:checked~.home_page img {
     display: none;
     background: #fff;
 }
}

@media (max-width: 500px) {
 .navbar-container input[type="checkbox"]:checked~.navbar-container img {
     display: none;
 }
}


/* //........ Home ........// */

.home_page img {
 height: auto;
 width: 100%;
 background-position: center;
 position: relative;
 background-size: center;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
}

.home_txt {
 position: absolute;
 top: 37%;
 left: 5%;
}

.home_txt p {
 color: var(--primary-color);
 font-weight: 600;
 padding-bottom: 20px;
 letter-spacing: 1.5px;
}

.home_txt h2 {
 font-size: 2.6rem;
 font-weight: 500;
 line-height: 53px;
 letter-spacing: 3px;
 font-weight: 600;
 color: var(--light-black);
}

.home_txt .home_label p {
 color: grey;
 font-size: 14px;
 padding-top: 10px;
}

.home_txt a {
 text-decoration: none;
 color: var(--white);
}

.home_txt button {
 background-color: var(--black);
 color: var(--white);
 border: none;
 padding: 15px 30px;
 font-size: 14px;
 letter-spacing: 2px;
 display: flex;
 justify-content: center;
 align-items: center;
 margin-bottom: 30px;
 cursor: pointer;
}

.home_txt .bx-right-arrow-alt {
 font-size: 25px;
 padding-left: 5px;
}

.home_txt .home_social_icons a {
 text-decoration: none;
 color: var(--light-black);
 margin-right: 15px;
 font-size: 18px;
}


/* //........ Collections ........// */

.collections {
 display: flex;
 justify-content: center;
 flex-wrap: wrap;
 margin-top: 65px;
}

.content {
 width: 330px;
 margin: 20px;
 position: relative;
}

.content::after {
 content: "";
 position: absolute;
 top: 0;
 left: 0%;
 width: 100%;
 height: 100%;
 background: rgba(0, 0, 0, 0.871);
 z-index: 2;
 opacity: 0;
}

.content:hover::after {
 opacity: 1;
}

.content img {
 width: 100%;
 height: 300px;
 box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.img-content {
 position: absolute;
 top: 70%;
 left: 50%;
 transform: translate(-50%, -50%);
 transition: all 0.3s ease-in-out;
 color: var(--white);
 text-align: center;
 font-size: 2.2rem;
 font-weight: bolder;
 z-index: 5;
 opacity: 0;
}

.img-content p {
 font-size: 1.6rem;
}

.img-content button {
 border: none;
 background-color: var(--primary-color);
 color: var(--white);
 border-radius: 10px;
 padding: 10px;
}

.img-content a {
 text-decoration: none;
 font-size: 1.1rem;
 color: #fff;
 transition: 0.3s;
}

.img-content button:hover {
 background: var(--white);
 color: var(--primary-color);
}

.img-content button:hover~.img-content a {
 color: var(--primary-color);
}

.img-content a:hover {
 color: var(--primary-color);
}

.content:hover .img-content {
 opacity: 1;
 top: 50%;
}


/* //........ Content 2 ........// */

.content2 {
 width: 330px;
 margin: 20px;
 position: relative;
}

.content2::after {
 content: "";
 position: absolute;
 top: 0;
 left: 0%;
 width: 100%;
 height: 100%;
 background: rgba(0, 0, 0, 0.871);
 z-index: 2;
 opacity: 0;
}

.content2:hover::after {
 opacity: 1;
}

.content2 img {
 width: 100%;
 height: 300px;
 box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.img-content2 {
 position: absolute;
 top: 70%;
 left: 50%;
 transform: translate(-50%, -50%);
 transition: all 0.3s ease-in-out;
 color: var(--white);
 text-align: center;
 font-size: 2.2rem;
 font-weight: bolder;
 z-index: 5;
 opacity: 0;
}

.img-content2 p {
 font-size: 1.6rem;
}

.img-content2 a {
 text-decoration: none;
 font-size: 1.1rem;
 color: #fff;
 transition: 0.3s;
}

.img-content2 button {
 border: none;
 background-color: var(--primary-color);
 color: var(--white);
 border-radius: 10px;
 padding: 10px;
}

.img-content2 button:hover {
 background: var(--white);
 color: var(--primary-color);
}

.img-content2 button:hover~.img-content2 a {
 color: var(--primary-color);
}

.img-content2 a:hover {
 color: var(--primary-color);
}

.content2:hover .img-content2 {
 opacity: 1;
 top: 50%;
}


/* //........ Content 3 ........// */

.content3 {
 width: 330px;
 margin: 20px;
 position: relative;
}

.content3::after {
 content: "";
 position: absolute;
 top: 0;
 left: 0%;
 width: 100%;
 height: 100%;
 background: rgba(0, 0, 0, 0.871);
 z-index: 2;
 opacity: 0;
}

.content3:hover::after {
 opacity: 1;
}

.content3 img {
 width: 100%;
 height: 300px;
 box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
}

.img-content3 {
 position: absolute;
 top: 70%;
 left: 50%;
 transform: translate(-50%, -50%);
 transition: all 0.3s ease-in-out;
 color: var(--white);
 text-align: center;
 font-size: 2.2rem;
 font-weight: bolder;
 z-index: 5;
 opacity: 0;
}

.img-content3 p {
 font-size: 1.6rem;
}

.img-content3 a {
 text-decoration: none;
 font-size: 1.2rem;
 color: #fff;
 transition: 0.3s;
}

.img-content3 button {
 border: none;
 background-color: var(--primary-color);
 color: var(--white);
 border-radius: 10px;
 padding: 10px;
}

.img-content3 button:hover {
 background: var(--white);
 color: var(--primary-color);
}

.img-content3 button:hover~.img-content3 a {
 color: var(--primary-color);
}

.img-content3 a:hover {
 color: var(--primary-color);
}

.content3:hover .img-content3 {
 opacity: 1;
 top: 50%;
}

.content3:hover .img-content3 {
 opacity: 1;
 top: 50%;
}


/* //........ seller  ........// */

.best-seller {
 display: flex;
 justify-content: space-between;
 align-items: center;
}

.best-seller .red {
 color: var(--primary-color);
 cursor: pointer;
}

.best-seller .blue {
 color: #8989ce;
 cursor: pointer;
}

.best-seller .white {
 color: var(--light-black);
 cursor: pointer;
}

.best-seller .grey {
 color: grey;
 cursor: pointer;
}

.best-seller .brown {
 color: rgb(175, 53, 53);
 cursor: pointer;
}

.best-seller .yellow {
 color: #ffff00;
 cursor: pointer;
}

.best-seller .orange {
 color: #ffa500;
 cursor: pointer;
}

.best-seller .green {
 color: #008000;
 cursor: pointer;
}

.seller h2 {
 margin-top: 65px;
 margin-bottom: 20px;
}

.seller .best-p1 {
 width: 250px;
 height: 370px;
 /* border: 2px solid black; */
}

.seller .best-p1 img {
 height: 250px;
 width: 250px;
}

.seller .best-p1 .price {
 display: flex;
 justify-content: space-between;
}

.seller .best-p1 .price .colors input[type="radio"] {
 color: #000;
 background-color: #000;
}

.best-seller .buy-now a {
 text-decoration: none;
 color: var(--white);
}

.seller a:hover {
 color: #f05e8a;
}

.best-seller .buy-now button,
.best-seller .add-cart button {
 padding: 10px 15px;
 margin-top: 5px;
 font-size: 14px;
 cursor: pointer;
 text-transform: uppercase;
 background-color: #f05e8a;
 color: var(--white);
 border: none;
 border-radius: 15px;
 font-weight: 500;
 border: 1px solid #f05e8a;
 transition: 0.5s;
}

.best-seller .buy-now button:hover,
.best-seller .add-cart button:hover {
 background-color: var(--white);
 font-weight: 600;
}

.best-seller .buy-now button:hover a,
.best-seller .add-cart button:hover a {
 color: #f05e8a;
}


/* .best-seller .add-cart button {
 padding: 5px 5px;
 margin-top: 5px;
 font-size: 14px;
 cursor: pointer;
} */


/* //........ deal of week ........// */

.deal_of_week {
 display: flex;
 justify-content: center;
 align-items: center;
}

.deal_of_week .names_of_brand p,
.deal_of_week .names_of_brand h3 {
 font-size: 1.8rem;
 margin-bottom: 1rem;
}

.deal_of_week .names_of_brand p {
 color: var(--grey);
}

.deal_of_week .countdown span {
 color: var(--primary-color);
 font-weight: 600;
 letter-spacing: 2px;
 margin: 0.8rem 0 0 3rem;
}

.deal_of_week .countdown h3 {
 font-size: 2rem;
 font-weight: 600;
 color: var(--light-black);
 line-height: 40px;
 margin: 0.8rem 0 0 3rem;
}

.deal_of_week .countdown p {
 margin: 0.8rem 0 0 3rem;
}

.deal_of_week .countdown a {
 text-decoration: none;
 color: var(--white);
 font-weight: 800;
}

.deal_of_week .countdown button {
 margin: 0.8rem 3rem;
 border: 2px solid var(--primary-color);
 background-color: var(--primary-color);
 color: var(--white);
 border-radius: 10px;
 padding: 12px;
 transition: 0.4s;
}

.deal_of_week .countdown button:hover {
 background: var(--white);
 color: var(--primary-color);
}

.deal_of_week .countdown button:hover~.countdown a {
 background: var(--white);
 color: var(--primary-color);
}

.countdown a:hover {
 color: var(--primary-color);
}


/* //........ NEWS ........// */

#news {
 margin-bottom: 250px;
}

.news-heading p {
 text-align: center;
 font-size: 18px;
 color: var(--primary-color);
 letter-spacing: 2px;
 font-weight: 500;
 margin-bottom: 15px;
 margin-top: 70px;
}

.news-heading h2 {
 text-align: center;
 font-size: 32px;
 font-weight: 600;
 color: var(--light-black);
}

.l-news {
 padding-top: 45px;
 display: flex;
 justify-content: space-evenly;
 align-items: center;
 position: relative;
}

.l-news img {
 height: 200px;
 width: 300px;
}

.l-news1 {
 position: relative;
 width: 280px;
 height: 230px;
}

.l-news1 .news1-conte {
 position: absolute;
 bottom: -60%;
 left: 7%;
 background: var(--white);
 padding: 25px;
}

.l-news2 {
 position: relative;
 width: 280px;
 height: 230px;
}

.l-news2 .news2-conte {
 position: absolute;
 bottom: -60%;
 left: 7%;
 background: var(--white);
 padding: 25px;
}

.l-news3 {
 position: relative;
 width: 280px;
 height: 230px;
}

.l-news3 .news3-conte {
 position: absolute;
 bottom: -60%;
 left: 7%;
 background: var(--white);
 padding: 25px;
}

.l-news1 .news1-conte .date-news1 p {
 color: var(--light-black);
 text-align: center;
 padding: 15px 0;
}

.l-news1 .news1-conte .date-news1 h4 {
 font-size: 18px;
 text-align: center;
 font-weight: 600;
 padding-bottom: 15px;
}

.l-news1 .news1-conte .date-news1 a {
 text-decoration: none;
 text-align: center;
 padding: 0 50px;
 color: var(--primary-color);
 position: relative;
 font-weight: 600;
}

.l-news1 .news1-conte .date-news1 a::after {
 content: "";
 position: absolute;
 background: #ff3c78;
 height: 3px;
 width: 100%;
 left: 0;
 bottom: -10px;
 transition: 0.3s;
}

.l-news1 .news1-conte .date-news1 a:hover:after {
 width: 0%;
}

.l-news1 .news1-conte .date-news1 a:hover {
 color: var(--black);
}

.l-news2 .news2-conte .date-news2 p {
 color: var(--light-black);
 text-align: center;
 padding: 15px 0;
}

.l-news2 .news2-conte .date-news2 h4 {
 font-size: 18px;
 text-align: center;
 font-weight: 600;
 padding-bottom: 15px;
}

.l-news2 .news2-conte .date-news2 a {
 text-decoration: none;
 text-align: center;
 padding: 0 60px;
 color: var(--primary-color);
 position: relative;
 font-weight: 600;
}

.l-news2 .news2-conte .date-news2 a::after {
 content: "";
 position: absolute;
 background: #ff3c78;
 height: 3px;
 width: 100%;
 left: 0;
 bottom: -10px;
 transition: 0.3s;
}

.l-news2 .news2-conte .date-news2 a:hover:after {
 width: 0%;
}

.l-news2 .news2-conte .date-news2 a:hover {
 color: var(--black);
}

.l-news3 .news3-conte .date-news3 p {
 color: var(--light-black);
 text-align: center;
 padding: 15px 0;
}

.l-news3 .news3-conte .date-news3 h4 {
 font-size: 18px;
 text-align: center;
 font-weight: 600;
 padding-bottom: 15px;
}

.l-news3 .news3-conte .date-news3 a {
 text-decoration: none;
 text-align: center;
 padding: 0 60px;
 color: var(--primary-color);
 position: relative;
 font-weight: 600;
}

.l-news3 .news3-conte .date-news3 a::after {
 content: "";
 position: absolute;
 background: #ff3c78;
 height: 3px;
 width: 100%;
 left: 0;
 bottom: -10px;
 transition: 0.3s;
}

.l-news3 .news3-conte .date-news3 a:hover:after {
 width: 0%;
}

.l-news3 .news3-conte .date-news3 a:hover {
 color: var(--black);
}


/* //........ Footer ...... // */

footer {
 width: 100%;
 background: var(--black);
}

.footer-container .content_1 img {
 height: 25px;
 width: 180px;
}

.footer-container {
 display: flex;
 justify-content: space-between;
 padding: 60px 0;
}

.footer-container h4 {
 color: var(--white);
 font-weight: 500;
 letter-spacing: 1px;
 margin-bottom: 25px;
 font-size: 18px;
}

.footer-container a {
 display: block;
 text-decoration: none;
 color: var(--grey);
 margin-bottom: 15px;
 font-size: 14px;
}

.footer-container .content_1 p,
.footer-container .content_4 p {
 color: var(--grey);
 margin: 25px 0;
 font-size: 14px;
}

.footer-container .content_4 input[type="email"] {
 background-color: var(--black);
 border: none;
 color: var(--white);
 outline: none;
 padding: 15px 0;
}

.footer-container .content_4 .f-mail {
 display: flex;
 justify-content: space-between;
 align-items: center;
}

.footer-container .content_4 .bx {
 color: var(--white);
}

.f-design {
 width: 100%;
 color: var(--white);
 text-align: center;
}

.f-design .f-design-txt {
 border-top: 1px solid var(--grey);
 padding: 25px 0;
 font-size: 14px;
 color: var(--grey);
}


/* //........ contact ...... // */

.contact {
 margin-top: 45px;
}

iframe {
 height: 72vh;
 width: 100%;
}

.form {
 display: flex;
 justify-content: space-between;
 margin: 80px 0;
}

.form .form-txt {
 flex-basis: 48%;
}

.form .form-txt h4 {
 font-weight: 600;
 color: var(--primary-color);
 letter-spacing: 1.5px;
 font-size: 15px;
 margin-bottom: 15px;
}

.form .form-txt h1 {
 font-weight: 600;
 color: var(--black);
 font-size: 40px;
 letter-spacing: 1.5px;
 margin-bottom: 10px;
 color: var(--light-black);
}

.form .form-txt span {
 color: var(--light-black);
 font-size: 14px;
}

.form .form-txt h3 {
 font-size: 22px;
 font-weight: 600;
 margin: 15px 0;
 color: var(--light-black);
}

.form .form-txt p {
 color: var(--light-black);
 font-size: 14px;
}

.form .form-details {
 flex-basis: 48%;
}

.form .form-details input[type="text"],
.form .form-details input[type="email"] {
 padding: 15px 20px;
 color: var(--grey);
 outline: none;
 border: 1px solid var(--grey);
 margin: 35px 15px;
 font-size: 14px;
}

.form .form-details textarea {
 padding: 15px 20px;
 margin: 0 15px;
 color: var(--grey);
 outline: none;
 border: 1px solid var(--grey);
 font-size: 14px;
 resize: none;
}

.form .form-details button {
 padding: 15px 25px;
 color: var(--white);
 font-weight: 500;
 background: var(--black);
 outline: none;
 border: none;
 margin: 15px;
 font-size: 14px;
 letter-spacing: 2px;
 cursor: pointer;
}


/* //....... Media Queries .......// */

@media (max-width: 500px) {
 .head {
     display: none;
 }
 .top-txt .head p,
 .top-txt .head a {
     font-size: 10px;
 }
 .home_txt h2,
 .home_txt .home_label p {
     display: none;
 }
 .home_txt {
     position: absolute;
     top: 20%;
     left: 5%;
     font-size: 12px;
 }
 .home_txt button {
     padding: 7px 7px;
     font-size: 10px;
 }
 .home_txt i {
     display: none;
 }
 .home_txt .home_social_icons {
     /* display: flex; */
     display: none;
 }
 .menu-items-new{
     margin-right: 0;
 }
 .best-seller {
     display: flex;
     flex-direction: column;
     align-items: center;
 }
 .l-news {
     display: flex;
     flex-direction: column;
     margin-right: 30px;
 }
 .l-news .l-news1,
 .l-news .l-news2 {
     margin-bottom: 200px;
 }
 .footer-container {
     display: flex;
     flex-direction: column;
 }
 .footer-container .content_1 {
     margin-bottom: 30px;
 }
 .best-seller img {
     padding-top: 40px;
 }
}

@media(min-width: 501px) and (max-width: 768px) {
 .head {
     display: none;
 }
 .top-txt .head p,
 .top-txt .head a {
     font-size: 10px;
 }
 .home_txt h2,
 .home_txt .home_label p {
     display: none;
 }
 .home_txt {
     position: absolute;
     top: 20%;
     left: 5%;
     font-size: 12px;
 }
 .home_txt button {
     padding: 7px 7px;
     font-size: 10px;
 }
 .home_txt i {
     display: none;
 }
 .home_txt .home_social_icons {
     /* display: flex; */
     display: none;
 }
 .menu-items-new {
     margin-right: 0;
 }
 .best-seller {
     display: flex;
     flex-direction: column;
 }
 .l-news {
     display: flex;
     flex-direction: column;
     margin-right: 30px;
 }
 .l-news .l-news1,
 .l-news .l-news2 {
     margin-bottom: 200px;
 }
 .footer-container {
     display: flex;
     flex-direction: column;
 }
 .footer-container .content_1 {
     margin-bottom: 30px;
 }
 .best-seller img {
     padding-top: 40px;
 }
}

@media(orientation: landscape) and (max-height: 500px) {
 .header {
     height: 90vmax;
 }
}


/* //....... Media Queries For Contact .......// */

@media (max-width: 500px) {
 .form {
     display: flex;
     flex-direction: column;
 }
 .form .form-details button {
     margin-left: 0;
 }
 .form .form-details input[type="text"],
 .form .form-details input[type="email"],
 .form .form-details textarea {
     width: 100%;
     margin-left: 0;
 }
 .form .form-details input[type="text"] {
     margin-bottom: 0px;
 }
}

@media(min-width: 501px) and (max-width: 768px) {
 .form {
     display: flex;
     flex-direction: column;
 }
 .form .form-details button {
     margin-left: 0;
 }
 .form .form-details input[type="text"],
 .form .form-details input[type="email"],
 .form .form-details textarea {
     width: 100%;
     margin-left: 0;
 }
 .form .form-details input[type="text"] {
     margin-bottom: 0px;
 }
}
</style>
<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Packt User Panel</title>
</head>
 <section class=" top-txt ">
     <div class="head container ">
         <div class="head-txt ">
             <p>Packt shipping, 30-day return or refund guarantee.</p>
         </div>
         <div class="sing_in_up ">
             <!-- <a href="# ">SIGN Out</a> -->
             <a href="/user/login">SIGN Out</a>
         </div>
     </div>
 </section>
 <nav class="navbar">
     <div class="navbar-container">
         <input type="checkbox" name="" id="checkbox">
         <div class="hamburger-lines">
             <span class="line line1"></span>
             <span class="line line2"></span>
             <span class="line line3"></span>
         </div>
         <ul class="menu-items-new">
             <li><a href="#home">Home</a></li>
             <li><a href="#sellers">Shop</a></li>
             <li><a href="#news">Blog</a></li>
             <li><a href="#contact">Contact</a></li>
         </ul>
         <div class="logo">
         <h4>Packt</h4>
         </div>
     </div>
 </nav>
