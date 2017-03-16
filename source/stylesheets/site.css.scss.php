<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/couch/cms.php"); ?>
@charset "utf-8";
@import "normalize";
@import "colors";
@import "mixins";
@import "font-awesome-sprockets";
@import "font-awesome";

$z-index-0: 0;
$z-index-1: 100;
$z-index-2: 200;
$z-index-3: 300;
$z-index-4: 400;
$z-index-5: 500;


////////////////////////// Base /////////////////////
body {
  background: white;
  text-align: center;
  font-family: 'Fira Sans', 'Helvetica Neue', sans-serif, Helvetica, Arial;
  font-size: .85em;
  overflow-x: hidden;
}

.container {
  margin: 0 auto;
}

.fill-height {
  height: 100%;
}

blockquote {
  font-size: 3em;
  font-weight: 300;
  font-style: italic;
  text-align: center;
  color: $salmon;
  // max-width: 820px;
  quotes: "	\201C" "	\201D";
}
blockquote:before {
  content: open-quote;
}
blockquote:after {
  content: close-quote;
}

.author {
  color: $salmon;
  font-weight: 300;
  font-style: italic;
  text-align: left;
  margin-bottom: 0px;
}

h1 {
  text-align: left;
  font-size: 46px;
}
h1.title {
  text-align: center;
  font-weight: 300;
  font-size: 60px;
  color: $darkGray;

}
h1.title-left {
  text-align: left;
  font-weight: 300;
  font-size: 52px;
  line-height: 0px;
  color: $darkGray;
}
h2 {
  font-weight: 300;
  text-align: left;
  font-size: 48px;
}
h3 {
  text-align: left;
  font-size: 21px;
}
h4 {
  text-align: left;
  font-size: 18px;
  font-weight: 300;
  color: $darkGray;
  margin: 0px;
}
p {
  text-align: left;
  line-height: 20px;
  font-weight: 300;
}
p.title-description {
  line-height: 29px;
}
a {
  font-weight: 300;
  font-style: italic;
  text-decoration: none;
  color: $green;
  font-size: 16px;
  font-style: normal;
}
ul {
  list-style: none;
}
.logo img {
  height: 18.75em;
  margin-top: 6em;
}

.title {
  text-align: center;
}
.title-description {
    font-size: 21px;
    font-style: italic;
    font-weight: 300;
    color: RGBA(122, 120, 115, 1);
}

.row {
  // max-width: 1280px;
  margin: 0px;
}

.featured-image img {
  width: 425px;
  margin: 0px 10px;
}

.bold {
  font-weight: 500;
}

.caps {
  text-transform: uppercase;
}

@media (min-width:800px) {
  body{
    margin: 0 auto;
  }
}

.hidden {
  display: none;
}

////////////////////////// Helpers /////////////////////
.clearfix {
  @include clearfix;
}

////////////////////////// Icons /////////////////////
.gear-icon {
  @include icon('/assets/gear.png', 50, 50);
}

.circle-square {
  @include circle(300);

}
.cat {
  @include circle(250);
}

////////////////////////// buttons /////////////////////
.btn {
  display: block;
  width: 120px;
  height: 30px;
  padding: 8px 0 0 0;
  text-decoration: none;
}

.btn-work {
  display: block;
  width: 152px;
  height: 30px;
  padding: 8px 18px 0 18px;
  text-decoration: none;
}

.btn-veda-way {
  display: block;
  width: 244px;
  height: 30px;
  padding: 8px 18px 0 18px;
  text-decoration: none;
}

.btn-primary {
  color: white;
  background-color: $green;
  font-style: italic;
}

.btn-white {
  background-color: $cream;
  color: $mediumGray;
  display: block;
  width: 170px;
  height: 30px;
  padding: 8px 18px 0 18px;
  text-decoration: none;
}



////////////////////////// Navbar /////////////////////

.hamburger {
  display: none;
  float: right;
  position: fixed;
  font-size: 3em;
  top: 10px;
  right: 15px;
}

.navbar {
  height: 54px;
  margin: 0 auto;
  background: $darkGray;
  clear: both;
  &,a, a:visited {
    color: $cream;
  }
  a {
    display: block;
    min-width: 100px;
    min-height: 60px;
  }
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
    @include clearfix;
    li {
      // float: left;
    }
  }
  .logo {
    background-image: url("../images/veda-nav-logo.svg");
    background-repeat: no-repeat;
    background-clip: border-box;
    max-width: 109px;
    max-height: 25px;
    float: left;
    margin-left: 30px;
  }
  .logo-mobile {
    display: none;
  }
  .logo img {
    width: 190px;
    max-height: 100px;
    margin-top: 0px;
    margin-left: 45px;
  }
}

.nav-inner {
  height: 100%;
}

.navigation-links {
  margin: 0px;

  height: 18px;
  ul {
    list-style: none;
    display: inline-flex;
    li {
      max-height: 25px;
      a {
        font-size: 14px;
        font-style: normal;
        font-weight: 300;
        color: $cream;
        text-transform: uppercase;
        text-decoration: none;
      }
      a.active {
        color: $green;
      }
    }
    li:nth-child(1){
      padding: 0px 0px 0px 0px;
      text-align: center;
    }
    li:nth-child(2){
      padding: 0px 0px 0px 10px;
      text-align: center;
    }
    li:nth-child(3){
      padding: 0px 5px 0px 5px;
      text-align: center;
    }
    li:nth-child(4){
      border-left: 2px solid $mediumGray;
      text-align: left;
      max-width: 60px;
      margin-left: 11px;
      padding-left: 33px;
      a {
        font-style: italic;
        text-transform: none;
      }
    }
  }
}

.menu-hover .navbar {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: $z-index-5;
  background: none;
  height: 60px;
  margin-top: 37px;
  a {
    display: block;
    min-width: 100px;
    min-height: 60px;
  }
  .logo {
    background-image: url("../images/logo-top.svg");
    background-repeat: no-repeat;
    background-clip: border-box;
    min-width: 187px;
    min-height: 60px;
  }
}

@media screen and (max-width: 800px){
  .hamburger {
    display: inline-block;
    z-index: $z-index-5;
  }
  .mobile-menu {
    align-items: flex-start;
    align-content: flex-start;
    background: black;
    position: fixed;
    padding: 0px;
    top: 0;
    left: -320px;
    bottom: 0;
    z-index: $z-index-5;
    width: 300px;
    box-shadow: -63px 0px 3px 70px RGBA(0, 0, 0, .50);
      transition: all 500ms cubic-bezier(0.215, 0.610, 0.355, 1.000);
    &.active {
      left: 0;
      transition: all 500ms cubic-bezier(0.215, 0.610, 0.355, 1.000);
    }
  }
  .menu-hover .navbar {
    position: inherit;
  }

  .navbar .logo {
    float: none;
  }

  .navbar .logo-mobile {
    min-width: 170px;
    float: left;
    padding: 10px;
    top: 10px;
    z-index: $z-index-4;
  }

  .menu-hover .navbar {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 500;
      background: none;
      height: 0px;
      margin-top: -3px;
  }

  .navigation-links {
    float: none;
    ul {
      list-style: none;
      display: block;
      li {
        float: none;
        padding: 0 5px 0 5px;
        a {
          text-decoration: none;
        }
      }
      li:nth-child(1){
        margin: 0px 0px 0px 0px;
      }
      li:nth-child(2){
        margin: 0px 0px 0px 0px;
      }
      li:nth-child(3){
        margin: 0px 0px 0px 0px;
      }
      li:nth-child(4){
        border-left: 0px solid $mediumGray;
        a {
          font-style: italic;
          text-transform: none;
        }
        padding: 0px 0px 0px 0px;
      }
    }
  }

  .nav-inner .navigation-links {
    float: none;
    ul {
      list-style: none;
      li {
        float: none;
        padding: 0 5px 0 5px;
        a {
          text-decoration: none;
        }
      }
    }
  }

  .navigation-links:active {
    ul {
      display: block;
      list-style: none;
      li {
        padding: 0 5px 0 5px;
        a {
          text-decoration: none;
        }
      }
    }
  }
}



////////////////////////// Hero /////////////////////

.hero {
  height: 100vh;
  position: relative;
  .hero-background{
    background: url('/images/');
    width: 100%;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-size: cover;
    z-index: $z-index-1;
    display: block;
    &.active {
      // display: block;
    }
    .container {
      height: 100%;
    }
  }
  .hero-text {
    max-width: 900px;
    position: relative;
    z-index: $z-index-2;
    h1 {
      font-weight: 500;
      font-size: 90px;
      line-height: 92.64px;
      color: $cream;
    }
  }
  .hero-link {
    color: $green;
    text-decoration: none;
    float: left;
    display: flex;
    align-items: center;
    span {
      font-size: 24px;
      margin-right: 24px;
    }
    .icon-right-arrow {
      height: 24px;
      img {
      width: 14px;
      height: 25px;
      }
    }
  }
}

////////////////////////// Featured Case Study /////////////////////
.case-study-featured {
  padding: 80px;
  background-color: $cream;
  .display-none {
    display: none;
  }
  .featured-case-study-image {
    margin-right: -150px;
    img {
      @include circle(876);
      width: 876px;
      height: 876px;
      position: relative;
      display: none;
      animation:
        fadeOut 1s 1 forwards,
        slideOut 2s 1 forwards;
    }
    img.active {
      display: block;
      right: 0px;
      animation:
        slideIn 2s 1 forwards,
        fadeIn 1s 1 forwards;
    }
  }

  .case-study-details {
    display: none;
    animation: fadeOut 2s 1 forwards;
  }
  .case-study-details.active {
    display: block;
    animation: fadeIn 2s 1 forwards;
  }
}

h2.featured-project-title {
  font-weight: 300;
  color: $darkGray;
}

p.description {
  font-weight: 300;
  font-style: italic;
  font-size: 21px;
  color: $mediumGray;
}

.slider-list {
  font-size: 14px;
  font-weight: 500;
  color: $mediumGray;
}

a.indicator.active{
  background: RGBA(122, 120, 115, 1);
}

.indicator-list {
  display: flex;
  padding-left: 0px;
  li {
    list-style-type: none;
  }
  .indicator {
    border: solid 1px $mediumGray;
    border-radius: 50%;
    height: 6px;
    width: 6px;
    display: block;
    margin: 4px;
  }
}

////////////////////////// Case Study Page /////////////////////
.case-study-page {
  background-color: $cream;
  .featured-image{
    margin-top: 35px;
  }
  .featured-image img {
    height: 571px;
    width: inherit;
    @include circle(571);
  }
  .title {
    font-size: 52px;
  }
  .title-description{
    margin-bottom: 105px;
    h3 {
      color: $salmon;
      font-weight: 300;
    }
  }


  .info-header {
    .col-md-4 {
    border-left: 1px solid $lightGray;
    padding-left: 22px;
    padding-bottom: 40px;
    margin-bottom: 50px;
    }
    .col-md-2 img{
      width: 20px;
    }
    .col-md-2 {
      padding: 0px 0px;
    }
    p.icon-title {
      font-size: 12px;
      font-weight: 400;
      text-transform: uppercase;
      color: $darkGray;
    }
    .icon-row .col-md-10 {
      padding-left: 0px;
    }
    .col-md-12{
      padding-left: 10px;
      p{
        font-size: 17px;
        font-weight: 300;
        color: $darkGray;
        margin: 0px;
      }
    }
  }
  .detail-textblock {
    margin-bottom: 50px;
    h4 {
      color: $salmon;
      font-weight: 500;
    }
    p {
      margin-top: 0px;
    }
  }
  ul {
    text-align: left;
    font-weight: 300;
    padding-left: 0px;
    li {
      list-style: none;
      color: $darkGray;
    }
  }
  .author {
    font-size: 16px;
  }
  .client-shout-out{
    background-color: $salmon;
    color: $cream;
    padding: 100px 0px;
    .col-md-5{
      padding-left: 0px;
    }
    .col-md-5 p {
      font-size: 12px;
      margin: 0px;
    }
    h3{
      font-size: 20px;
      font-weight: 500;
      margin: 0px;
      margin-bottom: 35px;
    }
  }
}


////////////////////////// How We Work /////////////////////
.how-we-work {
  min-height: 100vh;
  background-color: $darkGray;
  color: $cream;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
  .container {
    margin: 20px 0 20px 0;
  }
  h2 {
    font-size: 60px;
    color: $green;
    margin: 0 auto;
    padding: 0px 0px 35px 0px
  }
  p {
    max-width: 800px;
    font-size: 21px;
    text-align: center;
    font-style: italic;
    margin: 0 auto;
    padding: 0px 0px 65px 0px
  }
  a {
    margin-bottom: 30px;
    margin-top: 30px;
  }
  img {
    width: 585px;
  }
}

////////////////////////// Clients /////////////////////
.client-list {
  title {
    margin-top: 125px;
  }
  min-height: 100vh;
  background-color: $cream;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  align-content: center;
  h1 {
    font-weight: 300;
    font-size: 60px;
    margin-bottom: 0px;
    color: $darkGray;
  }
  img {
    padding: 25px 0px 25px 0px;
    opacity: 1;
    mix-blend-mode: multiply;
  }
  .client-list-link {
    margin: 0px 0px 50px 0px;
    font-style: italic;
    display: block;
  }

}

div .client-grid > div:nth-child(3) {
    // margin-left: 50px;
    // margin-right: 50px;
    // background-color: red;
}

.client-grid {
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 115px;
  min-width: 100%;
  display: block;
  .row div {
  }
  .row div:last-child {
    background-color: none;
  }
}


////////////////////////// Our Work /////////////////////
.our-work-container {
  background: $cream;
}

.our-work {
  .job {
    h3 {
      line-height: 21px;
      margin-bottom: 0px;
      color: $darkGray;
    }
    p {
      line-height: 5px;
      font-weight: 300px;
      color: $darkGray;
    }
    .bold {
      font-weight: 500;
    }
  }
  .content-col:last-child{
    margin-bottom: 105px;
  }
}

.page-title {
  margin-top: 110px;
  h1 {
    text-align: center;
  }
}

.case-study {
  margin: 75px 0px;
  .thumb {
    height: 315px;
    width: 315px;
    @include circle(315);
  }

  div {
    h3 {
      text-align: center;
      color: $darkGray;
      font-size: 25px;
      font-weight: 300;
    }
  }
  a {
    margin: 0px auto;
    text-align: center;
  }
}

.morework-row {
  width: 937px;
  margin: 0 auto;
  .left {
    padding-left: 0px;
  }
}

.morework-row-border {
  border-bottom: 1px solid $extraLightGray;
  border-top: 1px solid $extraLightGray;
}

.content-col {
  border-left: 1px solid $extraLightGray;
  margin: 0 auto;
  min-height: 450px;
}

.thumbnail-row {
  img {
    background: url("../images/anders-jilden-108186.jpg") center center no-repeat;
    @include square(95);
  }
}

.veda-quote {
  padding: 80px 0px 140px 0px;
}

.work-nav {
  padding: 0px;
  ul {
    padding-left: 0px;
    li {
      font-weight: 300;
      font-size: 17px;
      text-align: left;
      color: $mediumGray;
      a {
        color: $mediumGray;
      }
    }
    li.active {
      text-align: left;
      background-color: $extraLightGray;
      a {
        font-weight: 500;
        color: $darkGray;
      }
    }
  }
}

////////////////////////// the-veda-way /////////////////////
.the-veda-way {
  background-image: url("../images/background-worm.svg");
  background-repeat: no-repeat;
  background-clip: border-box;
  background-size: 50% 50%;
  background-position-y: 0px;
  background-position-x: 320px;
  min-height: 100vh;
  .services-section {
    margin: 55px 0px 0px 0px;
    padding: 55px 0px 110px 0px;
    .row {
    min-width: 100%;
    }
    max-width: 1000px;
    .service {
      margin: 25px 0px;
      padding: 35px 0px;
    }
    h4 {
    }
    p {
      margin: 0px;
      font-size: 16px;
      font-style: normal;
      font-weight: 300;
      color: $mediumGray;
    }
    a {
      display: block;
      text-align: left;
      font-style: italic;
      font-size: 16px;
      font-weight: 300;
    }
    .col-md-2 img {
      max-width: 92px;
    }
    .col-md-8 a {
      font-style: italic;
      text-align: left;
      display: block;
    }
  }
  .row.process {
    margin: 75px 0px;
  }
  .process .col-md-5 {
    max-width: 420px;
  }
  min-height: 100vh;
  background-color: $cream;
  .number {
    max-width: 160px;
  }
  .number img {
    max-height: 150px;
    min-width: 120px;
    margin: 0px 0px;
    padding: 0px 10px;
  }
  .featured-image img {
    width: 420px;
    margin: 0px 10px;
  }
  .bottom-border {
    border-bottom: 1px solid $extraLightGray;
  }
  p {
    font-size: 21px;
    font-style: italic;
    font-weight: 300;
    color: $mediumGray;
  }
  .title{
    margin-top: 110px;
  }
  .process-description {
    padding: 0px 40px;
    h3 {
      font-size: 28px;
      margin: 0px;
      line-height: 0px;
      color: $darkGray;
    }
    p {
      font-size: 17px;
      font-style: normal;
      font-weight: 500;
      color: $darkGray;
    }
    ul {
      text-align: left;
      padding-left: 20px;
      li {
        color: $mediumGray;
        list-style: disc;
        font-size: 14px;
        font-style: italic;
        font-weight: 300;
      }
    }
  }
  .author {
    text-align: center;
    color: RGBA(231, 115, 108, 1);
    font-weight: 300;
    font-size: 16px;
    font-style: italic;
    text-align: left;
    margin-bottom: 0px;
  }
  .on-a-mission {
    max-width: 1000px;
    padding: 10px 0px 10px 0px;
    margin: 0px 0px;
    min-height: 700px;
    img {
    margin-right: 30px;
    }
    .on-a-mission-description {
      margin-left: 60px;
      padding: 0px;
      .body-text {
        margin-top: 70px;
      }
    }
  }
}

////////////////////////// contact-us /////////////////////
.contact-us {
  min-height: 100vh;
  background-color: $cream;
}


////////////////////////// the-veda-team /////////////////////
.the-veda-team {
  min-height: 100vh;
  background-color: $cream;
  .bio-col{
    margin-top: 55px;
    margin-bottom: 120px;
    .team-member{
      margin-top: 60px;
      .name{
        text-align: center;
        font-size: 28px;
        font-style: normal;
        font-weight: 600;
        color: $darkGray;
        line-height: 5px;
        margin: 0px;
      }
      .team-title{
        margin-bottom: 50px;
        text-align: center;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        color: $darkGray;
        text-transform: uppercase;
      }
      ul{
        list-style: none;
        text-align: left;
        padding-left: 0px;
        li{
          color: $darkGray;
          font-weight: 300;
          font-size: 16px;
          font-style: normal;
        }
      }
      .description{
        margin: 0px;
        font-size: 16px;
        font-style: normal;
        font-weight: 300;
        color: $darkGray;
      }
    }
    .blue-block{
      background-color: $blue;
      border-radius: 5px;
      margin-top: 45px;
    }
    .green-block{
      background-color: $green;
      border-radius: 5px;
      margin-top: 45px;
    }
    .phone-number{
      color: $darkGray;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
      margin-right: 20px;
    }
    .email{
      color: $green;
      font-size: 21px;
      font-style: normal;
      font-weight: 500;
    }
    .testimonial {
      padding: 40px 40px 10px 40px;
      font-size: 16px;
      font-weight: 300;
      color: $cream;
      quotes: "	\201C" "	\201D";
    }
    .testimonial:before {
      content: open-quote;
    }
    .testimonial:after {
      content: close-quote;
    }
    .author{
      padding: 0px 40px 40px 40px;
      font-size: 12px;
      color: $darkGray;
      font-weight: 300;
    }
  }
  .fun-fact{
    background-color: $orange;
    min-width: 100%;
    padding: 190px 0px;
    h3{
      font-size: 24px;
      color: $darkGray;
      font-weight: 300;
    }
  }
}

////////////////////////// Footer /////////////////////
footer {
  min-height: 35vh;
  background-color: $darkGray;
  color: $cream;
  padding-top: 50px;
  padding-bottom: 50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-content: center;
  ul {
    float: left;
    text-align: left;
  }
  li {
    a {
      display: block;
      text-transform: uppercase;
      font-style: normal;
      font-weight: 300;
      line-height: 30px;
      color: $mediumGray;
      text-decoration: none;
    }
    a.list-item-plain {
      display: block;
      text-transform: none;
      margin-top: 20px;
    }
  }
  .footer-content-row{
    margin-bottom: 100px;
  }
  div {
    ul {
      display: flex;
      padding: 0px;
    }
    p {
      font-weight: 100;
      text-transform: uppercase;
      margin: 0px;
      font-size: .85em;
    }
    p.footer-address {
      font-size: .85em;
      margin: 0px;
      line-height: 18px;
    }
    h4.footer-email {
      font-size: 2em;
      font-weight: 300;
      font-style: italic;
      color: $green;
      margin: 0px 0px 20px 0px;
    }
    h4.footer-phone {
      font-size: 2em;
      font-style: italic;
      font-weight: 300;
      color: $cream;
      margin: 0px;
    }
  }
}

.footer-nav {
  min-height: 215px;
  border-left: 1px solid $mediumGray;
  border-right: 1px solid $mediumGray;
  margin-right: 0px;
  div {
    ul {
      margin-left: 25px;
      margin-right: 45px;
      display: block;
      padding-right: 25px;
    }
  }
}

.social-nav {
  margin: 0px;
  .social-icon {
    min-width: 32px;
    margin-left: 6px;
    margin-right: 6px;
  }
}

.footer-logo {
  background-color: $darkGray;
  // max-width: 120px;
  margin: 30px;
  margin-right: 35px;
  img {
    width: 115px;
  }
}

.footer-badge {
  min-width: 142px;
  padding-left: 55px;
}


.copyright {
  font-size: .85em;
  display: block;
  font-style: italic;
  font-weight: 300;
  color: $mediumGray;
  text-decoration: none;
  align-items: center;
  display: flex;
}
<?php COUCH::invoke(); ?>
