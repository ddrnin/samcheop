<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>떡볶이의 새로운 기준 삼첩분식</title>
    <link rel="stylesheet" href="./lib/setup.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="./lib/jquery.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <style>
    @font-face {
        font-family: 'NEXON Lv2 Gothic';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_20-04@2.1/NEXON Lv2 Gothic.woff') format('woff');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'GmarketSans';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansLight.woff') format('woff');
        font-weight: 300;
        font-style: normal;
    }

    @font-face {
        font-family: 'GmarketSans';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansMedium.woff') format('woff');
        font-weight: 400;
        font-style: normal;
    }

    @font-face {
        font-family: 'GmarketSans';
        src: url('https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2001@1.1/GmarketSansBold.woff') format('woff');
        font-weight: 600;
        font-style: normal;
    }

    body {
        font-family: 'GmarketSans', 'NEXON Lv2 Gothic';
    }

    header {
        position: fixed;
        width: 100%;
        height: 100px;
        font-family: 'GmarketSans';
        background-color: #fff;
        z-index: 999;
    }

    .h2 {
        height: 100px;
    }

    header:hover .menubox {
        max-height: 500px;
    }

    header .logo {
        position: absolute;
        top: 50%;
        left: 2%;
        transform: translateY(-60%);
        z-index: 3;
    }

    header .menu {
        height: 100px;
    }

    header .menu .wrap {
        width: 820px;
        position: relative;
        right: -5%;
    }

    header .menu .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        padding: 35px 0;
    }

    header .menu .grid li {
        width: 100%;
        border-right: 1px solid rgba(206, 204, 204, 0.8);
    }

    header .menu .grid li:last-child {
        border: none;
    }

    header .menu .grid li:last-child a {
        color: #e04b32;
    }

    header .menu .grid li a {
        font-size: 18px;
        font-weight: 500;
    }

    header .menu .grid li a:hover {
        color: #e04b32;
    }

    header .box {
        position: absolute;
        top: 50%;
        right: 3%;
        transform: translateY(-60%);
        width: 90px;
        height: 38px;
        background-color: #e04b32;
        border-radius: 3px;
    }

    header .box a {
        color: white;
        font-size: 16px;
        line-height: 40px;
    }

    header .box .br {
        display: none;
    }

    .menubox {
        position: absolute;
        width: 100%;
        background-color: #e04b32;
        max-height: 0;
        overflow: hidden;
    }

    .menubox .wrap {
        width: 820px;
    }

    .menubox .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        padding: 40px 0 15px;
    }

    .menubox .grid li {
        width: 100%;
        line-height: 30px;
    }

    .menubox .grid li a {
        font-size: 16px;
        color: white;
    }

    .mobile {}

    header .mobile .mmenu {
        width: 380px;
        height: 100vh;
        position: fixed;
        background: rgba(224, 75, 49, 0.9);
        padding-top: 83px;
        z-index: 1;
        top: 0;
        left: 0;
        transform: translateX(-100%);
        transition: 0.3s;
    }

    header .mobile .mmenu>ul {
        padding: 0 20px;
    }

    header .mobile .mmenu ul li {
        width: 100%;
        text-align: left;
    }

    header .mobile .mmenu ul li span a {
        color: white;
        padding: 23px 0;
        width: 100%;
        font-size: 15px;
        border-bottom: 1px dotted rgba(255, 255, 255, 0.5);
    }

    header .mobile .mmenu ul li .msubmenu {
        max-height: 0;
        overflow: hidden;
        transition: 0.5s;
    }

    header .mobile .mmenu .list li.view .msubmenu {
        max-height: 500px;
    }

    header .mobile .mmenu ul li .msubmenu li:first-child {
        margin-top: 10px;
    }

    header .mobile .mmenu ul li .msubmenu li a {
        width: 100%;
        color: white;
        font-size: 14px;
        padding: 7px 0 0 25px;
    }

    header .mobile .mmenu ul li .msubmenu li a:hover {
        background-color: rgba(0, 0, 0, 0.2);
        transition: 0.5s;
    }

    #home {}

    #home .slider {
        width: 100%;
        height: calc(100vh - 100px);
        overflow: hidden;
        position: relative;
    }

    #home .slider .swiper-slide {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    #home .slider .swiper-slide {
        background-image: url(./img/slide_bg.jpg);
    }

    #home .slider .swiper img {
        position: relative;
        z-index: 1;
    }

    #home .slider .swiper-slide .box {
        width: 94%;
        height: 68%;
        top: 50%;
        left: 15%;
        transform: translate(-10%, -50%);
        position: relative;
        z-index: 99;
    }

    #home .slider .swiper-slide .box .box_wrap {
        border: 1px solid rgba(244, 176, 27, 0.6);
        width: 38%;
        max-width: 586px;
        position: absolute;
        top: 0%;
        left: 0%;
        z-index: 99;
    }

    #home .slider .swiper-slide .box .box_wrap::before {
        content: '';
        width: calc(100% - 20px);
        height: calc(100% - 20px);
        border: 1px solid rgba(244, 176, 27, 0.6);
        position: absolute;
        top: 10px;
        left: 10px;
        z-index: -1;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle {
        width: 100%;
        height: 100%;
        padding: 15% 0;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle>.name {
        width: 100%;
        font-size: 5.7em;
        line-height: 1em;
        font-weight: bold;
        color: #542623;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle>.name>span {
        font-size: 1em;
        line-height: 1em;
        font-weight: bold;
        color: #e04b31;
        display: block;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle .sub {
        color: #f0a500;
        font-size: 2.6em;
        margin-top: 10px;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle .sub span {
        font-size: 1em;
        font-weight: bold;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle .info {
        color: #542623;
        font-size: 1.5em;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle .button {
        width: 250px;
        height: 55px;

        margin: 0 auto;
        margin-top: 30px;
    }

    #home .slider .swiper-slide .box .box_wrap .boxtitle .button .btn-modal {
        color: white;
        font-size: 20px;
        font-weight: bold;
        line-height: 55px;
        background-color: #e04b31;
        border-radius: 50px;
        border: none;
        width: 100%;
        cursor: pointer;
    }

    #home .slider .swiper-slide.p1 .box {}

    #home .slider .swiper-slide img {
        width: 70%;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    #home .slider .swiper-button-next {
        right: 20px;
    }

    #home .slider .swiper-button-next:after {
        font-size: 70px;
        color: #f0a500;
    }

    #home .slider .swiper-button-prev {
        left: 20px;
    }

    #home .slider .swiper-button-prev:after {
        font-size: 70px;
        color: #f0a500;
    }

    #home .slider .swiper-pagination-bullet {
        background-color: white;
        width: 13px;
        height: 13px;
        opacity: 1;
    }

    #home .slider .swiper-pagination-bullet-active {
        background-color: #f0a500;
    }

    main .section {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    main .section.page1 {
        position: relative;
    }

    main .section.page1 .page1_wrap {
        width: 75%;
        margin: 0 auto;
        padding: 100px 0;
    }

    main .section.page1 .page1_wrap .name {
        font-size: 35px;
        position: relative;
        margin-bottom: 26px;
        top: 0;
        left: 0px;
    }

    main .section.page1 .page1_wrap .name .btn-modal {
        position: absolute;
        top: 15px;
        right: 0;
        font-size: 15px;
        font-weight: bold;
        color: #f0a500;
        border: none;
        border-bottom: 1px solid #f0a500;
        background-color: white;
        cursor: pointer;
    }

    main .section.page1 .page1_wrap .slider2 {
        position: relative;
        top: 0;
        left: 0px;
    }

    main .section.page1 .page1_wrap .slider li img {
        width: 100%;
    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    main .section.page1 .page1_wrap .swiper-slide {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    main .section.page1 .page1_wrap .swiper-slide img {
        display: block;
        width: 50%;
    }

    main .section.page2 {
        background-color: #f4eeda;
        padding: 135px 0;
        position: relative;
    }

    main .section.page2::before {
        content: '';
        width: 410px;
        height: 100%;
        background-image: url(./img/sec2_bg.png);
        position: absolute;
        bottom: 0;
        left: 0;
        z-index: 1;
    }

    main .section.page2::after {
        content: '';
        width: 410px;
        height: 100%;
        background-image: url(./img/sec2_bg2.png);
        position: absolute;
        top: 0;
        right: 0;
    }

    main .section.page2 .page2_wrap {
        margin: 0 auto;
        width: 85%;
        position: relative;
        z-index: 99;
        top: 0;
        left: 0px;
        /* z-index: ;는 포지션이 렐러티브든 픽스드든 엡솔이든 있어야 먹는다 */
    }

    main .section.page2 .page2_wrap .grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-gap: 10px;
    }

    main .section.page2 .page2_wrap .grid li {
        width: 100%;
        background-color: white;
    }

    main .section.page2 .page2_wrap .grid li img {
        width: 100%;
        height: 100%;
    }

    main .section.page2 .page2_wrap .grid li:first-child {
        background-color: white;
        background-image: url(./img/sec2_img1.png);
        background-repeat: no-repeat;
        background-position: 110% 110%;
    }

    main .section.page2 .page2_wrap .grid li:first-child .title {
        font-size: 33px;
        width: 100%;
        margin: 0 auto;
        text-align: left;
        padding: 15% 0 0 10%;
    }

    main .section.page2 .page2_wrap .grid li:first-child span {
        font-size: 14.5px;
    }

    main .section.page2 .page2_wrap .grid li:first-child .btn-modal {
        font-size: 15px;
        font-weight: bold;
        color: #f0a500;
        border: none;
        border-bottom: 1px solid #f0a500;
        background: none;
        cursor: pointer;
    }

    main .section.page3 {
        background-image: url(./img/sec3_bg.png);
        background-repeat: no-repeat;
        width: 100%;
        text-align: right;
        background-size: cover;
        background-position: center;
    }

    main .section.page3 .page3_wrap {
        width: 60%;
        display: inline-block;
        text-align: center;
        margin: 0 auto;
    }

    main .section.page3 .page3_wrap .title {
        width: 95%;
        float: right;
        padding: 140px 0;
    }

    main .section.page3 .page3_wrap .title .name {
        color: white;
        font-size: 42px;
        font-weight: 300;
        padding-bottom: 30px;
        position: relative;
        top: 0px;
        left: 0;
    }

    main .section.page3 .page3_wrap .title .name span {
        font-size: 45px;
        font-weight: normal;
        line-height: 34px;
    }

    main .section.page3 .page3_wrap .title .box {
        margin: 0 auto;
        border: 1px solid rgba(255, 255, 255, 0.4);
        width: 70%;
        height: 140px;
        position: relative;
        top: 0;
        left: 0px;
    }

    main .section.page3 .page3_wrap .title .box a {
        height: 70px;
    }

    main .section.page3 .page3_wrap .title .box .boxtitle {
        width: 100%;
    }

    main .section.page3 .page3_wrap .title .box .b1 {
        width: 50%;
        float: left;
        position: relative;
        z-index: 99;
    }

    main .section.page3 .page3_wrap .title .box .bs::before {
        background-color: #e04b32;
        content: '';
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        transition: 0s;
    }

    main .section.page3 .page3_wrap .title .box .bs:hover:before {
        width: 100%;
        transition: 0.5s;
    }

    main .section.page3 .page3_wrap .title .box .bs::after {
        background-color: #e04b32;
        content: '';
        width: 0%;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        transition: 0.5s;
        z-index: -1;
    }

    main .section.page3 .page3_wrap .title .box .bs:hover:after {
        width: 100%;
        transition: 0s 0.3s;
    }

    main .section.page3 .page3_wrap .title .box .boxtitle div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 16px;
    }

    main .section.page3 .page3_wrap .title .box img {
        position: absolute;
        top: -5%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 99;
    }

    main .section.page3 .page3_wrap .title .box .b2 {
        width: 50%;
        float: right;
        position: relative;
        z-index: 98;
    }

    main .section.page3 .page3_wrap .title .box .b3 {
        width: 100%;
        border-top: 1px solid rgba(255, 255, 255, 0.4);
        position: relative;
        z-index: 98;
    }

    main .section.page3 .page3_wrap .title .box .b3 div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 16px;
    }

    main .section.page4 {
        width: 100%;
        padding: 95px 0 90px;
    }

    main .section.page4 .page4_wrap {
        width: 85%;
        border: 1px solid #d1d1d1;
        margin-left: auto;
        margin-right: auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        text-align: left;
        overflow: hidden;
    }

    main .section.page4 .page4_wrap .map {
        width: 100%;
        background-image: url(./img/sec4_img1.png);
        background-repeat: no-repeat;
        background-position: 93% 60%;
        position: relative;
        top: 0;
        left: 0px;
    }

    main .section.page4 .page4_wrap .map a {
        padding: 8% 0 100px 10%;
        width: 100%;
        height: 100%;
    }

    main .section.page4 .page4_wrap .map a .title {}

    main .section.page4 .page4_wrap .map a .name {
        line-height: 35px;
        font-size: 30px;
    }

    main .section.page4 .page4_wrap .map a .sub {
        font-size: 16px;
        opacity: 0.5;
    }

    main .section.page4 .page4_wrap .info {
        width: 100%;
        background-image: url(./img/sec4_img2.png);
        background-repeat: no-repeat;
        background-position: 93% 60%;
        position: relative;
        top: 0;
        left: 0px;
    }

    main .section.page4 .page4_wrap .info a {
        width: 100%;
        height: 100%;
        padding: 8% 0 0 10%;
        border-left: 1px solid #d1d1d1;
    }

    main .section.page4 .page4_wrap .info a .title {}

    main .section.page4 .page4_wrap .info a .name {
        font-size: 30px;
        line-height: 35px;
    }

    main .section.page4 .page4_wrap .info a .sub {
        font-size: 1rem;
        opacity: 0.5;
        padding: 30px 0;
    }

    footer {
        border-top: 10px solid #d1d1d1;
        background-color: white;
    }

    footer .f_wrap {
        margin: 0 auto;
        max-width: 1600px;
        width: 94%;
        padding: 60px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    footer .f_wrap .title {
        width: 100%;
        text-align: left;
    }

    footer .f_wrap>img {
        padding-right: 40px;
        font-size: 0;
    }

    footer .f_wrap .title .info1 {
        width: 100%;
        padding-bottom: 15px;
    }

    footer .f_wrap .title .info1 li {
        font-size: 16px;
        padding-right: 35px;
    }

    footer .f_wrap .title .info1 li a {
        font-size: 16px;
    }

    footer .f_wrap .title .info2 {}

    footer .f_wrap .title .info2 li {
        padding-right: 15px;
        color: #989898;
        cursor: default;
        font-size: 15px;
        letter-spacing: -1px;
    }

    footer .f_wrap .title .info2 p {
        font-size: 12px;
        color: #989898;
        cursor: default;
        padding-top: 10px;
    }

    footer .f_wrap .another {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-right: 100px;
    }

    footer .f_wrap .another>div {
        padding: 0 20px;
    }

    footer .f_wrap .another>div:first-child {
        border-right: 1px solid #d1d1d1;
    }

    footer .f_wrap .another img {
        height: 30px;
    }

    footer .f_wrap .another .a2 img {
        height: 28px;
    }

    footer .f_wrap .ph {
        display: inline-block;
        font-size: 19px;
        font-weight: bold;
        text-align: right;
        line-height: 20px;
        cursor: default;
        padding-top: 20px;
    }

    footer .f_wrap .ph a {
        font-size: 37px;
        color: #e04b32;
        font-weight: bold;
    }

    #modal.modal-overlay {
        width: 100%;
        height: 100%;
        position: fixed;
        left: 0;
        top: 0;
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        background: rgba(0, 0, 0, 0.25);
        box-shadow: 0px 8px 32px 0 rgba(31, 38, 135, 0.32);
        backdrop-filter: blur(1.5px);
        -webkit-backdrop-filter: blur(1.5px);
        border-radius: 10px;
        border: 1px solid rgba(255, 255, 255, 0.18);
        z-index: 9999;
    }

    #modal .modal-window {
        background: rgba(255, 255, 255, 0.7);
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        backdrop-filter: blur(13.5px);
        -webkit-backdrop-filter: blur(13.5px);

        width: 400px;
        height: 400px;
    }

    #modal .title {
        width: 100%;
        position: relative;
        width: 400px;
    }

    #modal .close-area {
        padding: 1px 5px;
        position: absolute;
        top: 10px;
        right: 10px;
        line-height: 20px;
        font-size: 16px;
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(0, 0, 0, 0.18);
        border-radius: 30px;
        cursor: pointer;
    }

    @media only screen and (min-width: 100px) and (max-width: 1400px) {
        footer .f_wrap {
            width: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        footer .f_wrap .title {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        footer .f_wrap img {
            width: 120px;
        }

        footer .f_wrap .title .info1 {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        footer .f_wrap .title .info1 li {
            padding: 0;
            margin-right: 30px;
        }

        footer .f_wrap .title .info1 li a {
            /* font-size: 1rem; */
            font-size: 16px;
            width: 100%;
        }

        footer .f_wrap .title .info2 {
            text-align: center;
        }

        footer .f_wrap .title .info2 li {
            padding-right: 15px;
            color: #989898;
            cursor: default;
        }

        footer .f_wrap .title .info2 p {
            font-size: 12px;
            color: #989898;
            cursor: default;
            padding-top: 10px;
        }

        footer .f_wrap .another {
            margin-top: 20px;
            justify-content: center;
            margin-right: 0;
        }

        footer .f_wrap .another img {
            width: 100%;
            max-height: 28px;
        }

        footer .f_wrap .another .a2 img {
            width: 90%;
            height: 50%;
        }

        footer .f_wrap .ph {
            text-align: center;
        }
    }

    @media only screen and (min-width: 100px) and (max-width: 1280px) {
        main .section.page2 {
            background-color: #f4eeda;
            padding: 100px 0;
            position: relative;
        }

        main .section.page2 .page2_wrap {
            max-width: 840px;
        }

        main .section.page2 .page2_wrap .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        main .section.page2 .page2_wrap .grid li:first-child {
            grid-column: 1/3;
        }

        #home .slider .swiper-slide .box {
            width: 94%;
            height: 68%;
            top: 42%;
            left: 16%;
            transform: translate(-10%, -50%);
            position: relative;
            z-index: 99;
        }

        #home .slider .swiper-slide .box .box_wrap {
            border: 1px solid rgba(244, 176, 27, 0.6);
            width: 46%;
            /* max-width: px; */
            position: absolute;
            top: 0%;
            left: 0%;
            z-index: 99;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle>.name {
            font-size: 4.8em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .sub {
            font-size: 2.3em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .info {
            font-size: 1.35em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .button {
            width: 220px;
        }

        header .pc {
            display: none !important;
        }

        header {
            height: 80px;
        }

        .h2 {
            height: 80px;
        }

        .h1 {
            position: fixed;
            width: 100%;
            height: 80px;
            background-color: #fff;
            z-index: 2;
        }

        #home .slider {
            height: calc(100vh - 80px);
        }

        header .logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        header .box {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            width: 55px;
            height: 55px;
            background-color: #e04b32;
            border-radius: 50%;
            z-index: 2;
        }

        header .box2 {
            content: '';
            position: absolute;
            top: 50%;
            right: 0px;
            transform: translateY(-50%);
            width: 80px;
            height: 80px;
            background-color: #e04b32;
            opacity: 0;
            z-index: 1;
        }

        header .box a {
            font-size: 13px;
            line-height: 15px;
            font-weight: bold;
            position: absolute;
            top: 25%;
            left: 50%;
            transform: translate(-50%, 0%);
            width: 100%;
            height: 100%;
        }

        header .box .br {
            display: block;
        }

        .mobile {
            display: block !important;
            /*inline-block이 아니라 block*/
        }

        .mobile .menuBox {
            position: absolute;
            top: 50%;
            left: 13px;
            transform: translateY(-50%);
            width: 55px;
            height: 55px;
            background-color: #f4b01b;
            border-radius: 50%;
            z-index: 2;
            background-image: url(./img/mobilemenu.png);
            background-repeat: no-repeat;
            background-position: center;
            opacity: 1;
            transition: 0.2s;
        }

        .mobile .menuBox2 {
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translateY(-50%);
            width: 80px;
            height: 80px;
            background-color: #f4b01b;
            z-index: 3;
            opacity: 0;
            background-image: url(./img/mobilemenu.png);
            background-repeat: no-repeat;
            background-position: center;
            transition: 0.2s;
        }
    }

    @media only screen and (min-width: 100px) and (max-width: 1024px) {
        #home .slider .swiper-slide .box {
            width: 50%;
            height: 68%;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: relative;
            z-index: 99;
        }

        #home .slider .swiper-slide .box .box_wrap {
            border: 1px solid rgba(244, 176, 27, 0.6);
            width: 100%;
            /* max-width: px; */
            position: absolute;
            top: 0%;
            left: 0%;
            z-index: 99;
        }

        #home .slider .swiper-slide img {
            width: 80%;
            position: absolute;
            bottom: 0;
            right: 0;
        }
    }

    @media only screen and (min-width: 100px) and (max-width: 976px) {
        main .section.page4 .page4_wrap {
            width: 85%;
            border: 1px solid #d1d1d1;
            margin-left: auto;
            margin-right: auto;
            display: grid;
            grid-template-columns: 1fr;
            text-align: left;
            overflow: hidden;
        }

        main .section.page4 .page4_wrap .info a {
            width: 100%;
            height: 100%;
            border-left: none;
            border-top: 1px solid #d1d1d1;
        }

        main .section.page4 .page4_wrap>.box>a {
            padding-left: 7%;
        }
    }

    @media only screen and (min-width: 100px) and (max-width: 767px) {
        #home .slider .swiper-slide .box {
            width: 78%;
            height: 46%;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: relative;
            z-index: 99;
        }

        #home .slider .swiper-slide .box .box_wrap {
            border: 1px solid rgba(244, 176, 27, 0.6);
            width: 100%;
            height: 100%;
            /* max-width: px; */
            position: absolute;
            top: 0%;
            left: 0%;
            z-index: 99;
        }

        #home .slider .swiper-slide img {
            width: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle {
            width: 100%;
            height: 100%;
            padding: 10% 0;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle>.name {
            font-size: 4em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .sub {
            font-size: 2em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .info {
            font-size: 1.1em;
        }

        #home .slider .swiper-slide .box .box_wrap .boxtitle .button {
            width: 180px;
        }

        main .section.page3 .page3_wrap {
            width: 90%;
            display: block;
            text-align: center;
            margin: 0 auto;
        }

        main .section.page3 .page3_wrap .title {
            width: 95%;
            float: right;
            padding: 100px 0;
        }

        main .section.page3 .page3_wrap .title .box {
            margin: 0 auto;
            border: 1px solid rgba(255, 255, 255, 0.4);
            width: 100%;
            height: 140px;
            position: relative;
            top: 0;
            left: 0px;
        }

        footer .f_wrap {
            padding: 30px 0;
        }

        footer .f_wrap img {
            width: 100px;
        }

        footer .f_wrap .title .info1 li {
            padding: 0;
            margin-right: 10px;
            margin-top: 5px;
        }

        footer .f_wrap .title .info1 li a {
            font-size: 12px;
            width: 100%;
        }

        footer .f_wrap .title .info2 li {
            padding-right: 10px;
            color: #989898;
            cursor: default;
            font-size: 11px;
        }

        footer .f_wrap .title .info2 p {
            font-size: 5px;
            color: #989898;
            cursor: default;
            padding-top: 10px;
        }

        footer .f_wrap .another {
            margin-top: 20px;
            justify-content: center;
            margin-right: 0;
        }

        footer .f_wrap .another img {
            width: 100%;
            max-height: 28px;
        }

        footer .f_wrap .another .a2 img {
            width: 90%;
            height: 50%;
        }

        footer .f_wrap .ph {
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            line-height: 20px;
            cursor: default;
            padding-top: 20px;
        }

        footer .f_wrap .ph a {
            font-size: 24px;
            color: #e04b32;
            font-weight: bold;
        }

        main .section.page2 {
            background-color: #f4eeda;
            padding: 80px 0;
            position: relative;
        }

        main .section.page2 .page2_wrap {
            width: 95%;
            max-width: 540px;
        }

        main .section.page2 .page2_wrap .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        main .section.page2 .page2_wrap .grid li:first-child {
            grid-column: 1/3;
        }
    }
    </style>
</head>

<body>
    <header>
        <div class="h1"></div>
        <!-- 부모자식이 둘 다 fixed면 z-index 상관없이 자식이 무조건 위로 올라오기 때문에 h1만듦-->
        <div class="logo">
            <a href="#"><img src="./img/logo.png" alt="" /></a>
        </div>
        <div class="box">
            <a href="#">창업<br class="br" />
                문의</a>
        </div>
        <div class="box2"></div>
        <div class="pc">
            <div class="menu">
                <div class="wrap">
                    <ul class="grid">
                        <li><a href="menu1.php">메뉴</a></li>
                        <li><a href="#">매장 찾기</a></li>
                        <li><a href="#">커뮤니티</a></li>
                        <li><a href="#">고객의 소리</a></li>
                        <li><a href="#">창업 안내</a></li>
                    </ul>
                </div>
            </div>
            <div class="menubox">
                <div class="wrap">
                    <ul class="grid">
                        <li>
                            <ul>
                                <li><a href="#">대표메뉴</a></li>
                                <li><a href="#">1첩</a></li>
                                <li><a href="#">2첩</a></li>
                                <li><a href="#">3첩</a></li>
                                <li><a href="#">더하다</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="#">매장찾기</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="#">새소식</a></li>
                                <li><a href="#">인스타그램</a></li>
                                <li>
                                    <a href="#"><img src="./img/menu_img.png" alt="" />삼방구</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="#">고객 칭찬</a></li>
                                <li><a href="#">고객의 소리</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="#">왜 삼첩분식인가</a></li>
                                <li><a href="#">브랜드 강점</a></li>
                                <li><a href="#">창업 강점</a></li>
                                <li><a href="#">창업 비용</a></li>
                                <li><a href="#">창업 문의</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="mobile">
            <div class="menuBox"></div>
            <div class="menuBox2"></div>
            <div class="mmenu">
                <ul class="list">
                    <li>
                        <span class="mmainmenu"><a href="#">메뉴</a></span>
                        <ul class="msubmenu">
                            <li><a href="#">대표메뉴</a></li>
                            <li><a href="#">1첩</a></li>
                            <li><a href="#">2첩</a></li>
                            <li><a href="#">3첩</a></li>
                            <li><a href="#">더하다</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="mmainmenu"><a href="#">매장찾기</a></span>
                        <ul class="msubmenu">
                            <li><a href="#">매장찾기</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="mmainmenu"><a href="#">커뮤니티</a></span>
                        <ul class="msubmenu">
                            <li><a href="#">새소식</a></li>
                            <li><a href="#">인스타그램</a></li>
                            <li>
                                <a href="#"><img src="./img/menu_img.png" alt="" />삼방구</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <span class="mmainmenu"><a href="#">고객의 소리</a></span>
                        <ul class="msubmenu">
                            <li><a href="#">고객 칭찬</a></li>
                            <li><a href="#">고객의 소리</a></li>
                        </ul>
                    </li>
                    <li>
                        <span class="mmainmenu"><a href="#">창업 안내</a></span>
                        <ul class="msubmenu">
                            <li><a href="#">왜 삼첩분식인가</a></li>
                            <li><a href="#">브랜드 강점</a></li>
                            <li><a href="#">창업 강점</a></li>
                            <li><a href="#">창업 비용</a></li>
                            <li><a href="#">창업 문의</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="h2"></div>

    <div id="home">
        <div class="slider swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide p1">
                    <div class="box">
                        <div class="box_wrap" data-aos="fade-up" data-aos-anchor-placement="center-bottom"
                            data-aos-delay="600">
                            <div class="boxtitle">
                                <h3 class="name">삼첩<br /><span>떡볶이</span></h3>
                                <div class="sub">삼첩분식의 <span>시그니처!</span></div>
                                <div class="info">
                                    매콤하고 알싸한 국물떡볶이에<br />
                                    고소한 맛감자 폭탄 투하!
                                </div>
                                <div class="button"><button class="btn-modal">MORE+</button></div>
                            </div>
                        </div>
                    </div>
                    <img src="./img/slide_img1.png" alt="" data-aos="fade-up-left"
                        data-aos-anchor-placement="center-bottom" data-aos-delay="600" />
                </div>
                <div class="swiper-slide p2">
                    <div class="box">
                        <div class="box_wrap">
                            <div class="boxtitle">
                                <div class="name">로제<br /><span>떡볶이</span></div>
                                <div class="sub">떡볶이 <span>트렌드의 중심!</span></div>
                                <div class="info">
                                    매콤한 국물떡볶이에<br />
                                    크림의 부드러움을 더하다!
                                </div>
                                <div class="button"><button class="btn-modal">MORE+</button></div>
                            </div>
                        </div>
                    </div>
                    <img src="./img/slide_img2.png" alt="" />
                </div>
                <div class="swiper-slide p3">
                    <div class="box">
                        <div class="box_wrap">
                            <div class="boxtitle">
                                <div class="name">마라로제<br /><span>떡볶이</span></div>
                                <div class="sub">마라와 로제의 <span>완벽한 조합!</span></div>
                                <div class="info">
                                    포두부와 분모자의 다채로운 식감과<br />
                                    로제의 부드러움 속에 숨겨진 마라의 얼얼한 맛!
                                </div>
                                <div class="button"><button class="btn-modal">MORE+</button></div>
                            </div>
                        </div>
                    </div>
                    <img src="./img/slide_img3.png" alt="" />
                </div>
                <div class="swiper-slide p4">
                    <div class="box">
                        <div class="box_wrap">
                            <div class="boxtitle">
                                <div class="name">바질크림<br /><span>떡볶이</span></div>
                                <div class="sub">꾸덕한 크림소스와 <span>상큼한 바질!</span></div>
                                <div class="info">
                                    향긋한 바질에 통통한 새우와<br />
                                    베이컨이 듬뿍!
                                </div>
                                <div class="button"><button class="btn-modal">MORE+</button></div>
                            </div>
                        </div>
                    </div>
                    <img src="./img/slide_img4.png" alt="" />
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <main>
        <div class="section page1">
            <div class="page1_wrap">
                <div class="name" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                    새소식<button class="btn-modal">MORE+</button>
                </div>
                <div class="swiper slider2" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                    <ul class="swiper-wrapper slider">
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img1.png" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img2.png" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img3.png" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img4.jpg" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img5.jpg" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img6.jpg" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img7.png" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img8.png" alt="" /></a>
                        </li>
                        <li class="swiper-slide">
                            <a href="#"><img src="./img/sec1_img9.png" alt="" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="section page2">
            <div class="page2_wrap" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                <ul class="grid">
                    <li>
                        <div class="title">
                            인스타그램<br /><span>@samcheop__official</span><br /><button class="btn-modal">MORE+</button>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img src="./img/sec2_img2.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/sec2_img3.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/sec2_img4.png" alt="" /></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/sec2_img5.png" alt="" /></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section page3">
            <div class="page3_wrap">
                <div class="title">
                    <div class="name" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                        프리미엄 분식 브랜드<br /><span>삼첩분식입니다.</span>
                    </div>
                    <div class="box" data-aos="fade-left" data-aos-anchor-placement="center-bottom"
                        data-aos-delay="300">
                        <div class="boxtitle">
                            <a href="#" class="bs b1">
                                <div>창업문의</div>
                            </a>
                            <img src="./img/sec3_img.png" alt="" />
                            <a href="#" class="bs b2">
                                <div>왜 삼첩분식인가</div>
                            </a>
                        </div>
                        <a href="#" class="bs b3">
                            <div>공식 앱 다운</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section page4">
            <div class="page4_wrap">
                <div class="map box" data-aos="fade-right" data-aos-anchor-placement="center-bottom">
                    <a href="#">
                        <div class="title">
                            <div class="name">매장 찾기</div>
                            <div class="sub">우리동네 삼첩분식 어디있을까?</div>
                        </div>
                    </a>
                </div>
                <div class="info box" data-aos="fade-left" data-aos-anchor-placement="center-bottom">
                    <a href="#">
                        <div class="title">
                            <div class="name">우리동네<br />삼첩을 칭찬해주세요!</div>
                            <div class="sub">
                                삼첩분식은 언제나 고객의 소리에 귀기울이겠습니다
                                <br />고객님이 직접 남겨주신 후기를 확인하세요.
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="f_wrap">
            <img src="./img/f_logo.png" alt="" />
            <div class="title">
                <ul class="info1">
                    <li><a href="#">회사소개</a></li>
                    <li><a href="#">이용안내</a></li>
                    <li><a href="#">개인정보처리방침</a></li>
                    <li><a href="#">찾아오시는 길</a></li>
                    <li><a href="#">삼첩공간</a></li>
                </ul>
                <ul class="info2">
                    <li>씨지에프주식회사</li>
                    <li>대표이사 : 조재창</li>
                    <li>사업자번호 : 894-88-00359</li>
                    <li>개인정보보호책임자 : 조재창</li>
                    <li>창업문의 : 1644-2236</li>
                    <li>본사 : 대구 달서구 조암로200 7층 / 서울지점 : 서울 성동구 성수일로 89, 메타모르포 208호</li>
                    <p>COPYRIGHT © 씨지에프주식회사. ALL RIGHTS RESERVED.</p>
                </ul>
            </div>
            <div class="another">
                <div class="a1">
                    <a href="#"><img src="./img/f_logo2.png" alt="" /></a>
                </div>
                <div class="a2">
                    <a href="#"><img src="./img/f_logo3.png" alt="" /></a>
                </div>
            </div>
            <div class="ph">성공창업문의<br /><a href="#">1644.2236</a></div>
        </div>
    </footer>

    <div id="modal" class="modal-overlay">
        <div class="modal-window">
            <div class="title">
                <img src="./img/sec1_img4.jpg" alt="" />
                <div class="close-area">x</div>
            </div>
        </div>
    </div>
</body>

<script>
var swiper = new Swiper('#home .slider', {
    loop: true,

    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    effect: 'fade',
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
var swiper = new Swiper('.slider2', {
    loop: true,

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        1280: {
            slidesPerView: 4,
            slidesPerGroup: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 20,
        },
        360: {
            slidesPerView: 2,
            slidesPerGroup: 1,
            spaceBetween: 20,
        },
    },
});

AOS.init({
    duration: 1000,
    delay: 200,
});

var modal = document.getElementById('modal');
var btnModal = document.getElementsByClassName('btn-modal');
for (var i = 0; i < 6; i++) {
    btnModal[i].addEventListener('click', e => {
        modal.style.display = 'flex';
    });
}

var closeBtn = modal.querySelector('.close-area');
closeBtn.addEventListener('click', e => {
    modal.style.display = 'none';
});
modal.addEventListener('click', e => {
    const evTarget = e.target;
    if (evTarget.classList.contains('modal-overlay')) {
        modal.style.display = 'none';
    }
    // 이벤트타겟(클릭할 타겟 쉽게 말하면 내가 클릭 하는 대상) 중에 모달-오버레이 클래스가 들어있으면(contains) 디스플레이 논이 된다
    // 여기서 모달-오버레이 클래스가 들어있다는 것은 최종 클래스가 모달- 오버레이여야 한다는 것이다.
    // ex)close-area도 모달-오버레이 밑이라 모달-오버레이 클래스가 들어있다고 생각할 수 있지만 close-area가 contains되있다고 해야 성립한다.
});

// 모바일 메뉴
mobileBox = document.querySelector('.mobile .menuBox');
mobileBox2 = document.querySelector('.mobile .menuBox2');
msubmenu = document.querySelectorAll('.msubmenu');
mmainmenu = document.querySelectorAll('.mmainmenu');
mb = 0;

mobileBox2.addEventListener('click', function() {
    if (mb == 0) {
        document.querySelector('header .box2').style.opacity = '1';
        document.querySelector('.mobile .menuBox2').style.opacity = '1';
        mobileBox.style.opacity = '0';
        document.querySelector('.mmenu').style.transform = 'translateX(0)';
        // for (i = 0; i < 6; i++) {
        // 	msubmenu[i].style.display = 'block';
        // }
        mb = 1;
    } else {
        document.querySelector('header .box2').style.opacity = '0';
        document.querySelector('.mobile .menuBox2').style.opacity = '0';
        mobileBox.style.opacity = '1';
        document.querySelector('.mmenu').style.transform = 'translateX(-100%)';

        mb = 0;
    }
});

$(function() {
    $('header .mobile .mmenu .list li').on('click', function() {
        const check = $(this).hasClass('view');

        $('header .mobile .mmenu .list li').removeClass('view');

        if (!check) {
            $(this).addClass('view');
        }
    });
});
</script>

</html>