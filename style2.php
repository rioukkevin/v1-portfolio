@import url('https://fonts.googleapis.com/css?family=Ubuntu');
@import url('https://fonts.googleapis.com/css?family=Megrim');

*{
    padding: 0;
    margin: 0;
    border: solid 0px black;
    box-sizing: border-box;
}
body{
    background-color: #3E90BB;
}

#p1:target .page1,
#p2:target .page2,
#p3:target .page3,
#p4:target .page4,
#p5:target .page5,
#p6:target .page6 {
    top: 0;
    transform: rotate(0deg);
}
.fleche_bas,.fleche_haut{
    width: 70px;
    height: 70px;
    left: 50%;
    position:absolute;
    background-color: #FEAA00;
    transform-origin: center center;
    transform: rotate(45deg);
    box-shadow: 0px 0px 25px -2px rgba(0,0,0,1);
    transition-duration:500ms;
}
.fleche_bas a{
    width: 70px;
    height: 70px;
    display: block;
    transition-duration: 0.7s;
    box-shadow: inset -35px -35px 0px 0px #FEAA00,
        inset -40px -40px 0px 0px #FFFFFF;
}
.fleche_haut a{
    width: 70px;
    height: 70px;
    display: block;
    transition-duration: 0.7s;
    box-shadow: inset -35px -35px 0px 0px #FEAA00,
        inset -40px -40px 0px 0px #FFFFFF;
}
.fleche_bas a:hover, .fleche_haut a:hover{
    background-color: #FFFFFF;
    box-shadow: inset -30px -30px 5px 0px #FFFFFF,
        inset -35px -35px 5px 0px #FEAA00;
}
.fleche_bas{
    bottom:-35px;
}
.fleche_haut{
    top:-35px;
    transform: rotate(225deg);
}
.page{
    box-shadow: 0px 0px 25px 5px rgba(0,0,0,0.75);
    position: fixed;
    display: block;
    width: 100vw;
    height: 100vh;
    transition-duration: 1.0s;
    overflow: hidden;
}
.page1{
    left:0;
    top:0vh;
    z-index:10;
    transform-origin: top left;
    transform: rotate(0deg);
}
.page2{
    left:0;
    top:110vh;
    z-index:12;
    background-color: white;
    transform-origin: top right;
    transform: rotate(-10deg);
}
.page3{
    left:0;
    top:110vh;
    z-index:14;
    background-color: white;
    transform-origin: top left;
    transform: rotate(10deg);
}
.page4{
    left:0;
    top:110vh;
    z-index:16;
    background-color: white;
    transform-origin: top right;
    transform: rotate(-10deg); 
}
.page5{
    left:0;
    top:110vh;
    z-index:18;
    background-color: white;
    transform-origin: top left;
    transform: rotate(10deg);
}
.page6{
    left:0;
    top:110vh;
    z-index:20;
    background-color: white;
    transform-origin: top right;
    transform: rotate(-10deg); 
}

/************/
.menu{
    position:fixed;
    top:0;
    left:-300px;
    z-index: 26;
    height: 2000px;
    width: 400px;
    transform-origin: top right;
    transform: rotate(45deg);
    background-color: #FEAA00;
    transition-duration: 0.7s;
    box-shadow: 0px 0px 25px -2px rgba(0,0,0,0.75);
    overflow: hidden;
}
.menu > *{
    transform: rotate(-5deg);
}
.menu_fond{
    position:fixed;
    top:0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0,0,0,0.7);
    position: fixed;
    opacity: 0;
    top: 0;
    left: 0;
    z-index: 25;
    pointer-events: none;
    transition-duration: 1.0s;
}
.menu > img{
    width: 200px;
    height: 200px;
    margin-left: 100px;
    margin-bottom: 20px;
    margin-top: 40px;
    transition-delay: 0.0s;
    transition-duration: 0.3s;
}
.menu > li{
    width: 110%;
    height: 50px;
    margin-left: -5%;
    text-align: center;
    list-style-type: none;
    transition-delay: 0.0s;
    transition-duration: 0.5s;
    transition-duration: 200ms;
    line-height: 50px;
    white-space: nowrap;
}
.menu a{
    margin: 10px 0;
    display: block;
    border-bottom: 1px solid white;
    font-size: 3vh;
    color: white;
    font-family: 'Megrim', cursive;
    font-weight: 800;
    transition-duration: 300ms;
    text-decoration: none;
}
.menu a:hover{
    box-shadow: inset 0px 0px 20px 2px rgba(255,255,255,1);
}

.menu_button{
    display: flex;
    flex-direction: column;
    position: fixed;
    z-index: 27;
    top: 0px;
    left: 0px;
    width: 50px;
    height: 50px;
    justify-content: space-around;
    align-items: center;
}
.menu_button .bar{
    flex-direction: column;
    background-color: white;
    width: 40px;
    height: 4px;
}

#menuO:target .menu{
    left:100px;
    transform: rotate(5deg);
    transition-duration: 0.7s;
}
#menuO:target .menu_fond{
    pointer-events: all;
    opacity: 1;
}
/************/

.page h2{
    height: 5vh;
    margin: 5vh 0 5vh 150px;
    font-family: 'Megrim', cursive;
    left: 0;
    top: 0;
    position: relative;
    text-align: left;
    font-size: 5vh;
    text-shadow:2px 6px 11px #000000;
}
.page p{
    font-family: 'Ubuntu',cursive;
    font-size: 1.2em;
    text-align: center;
    margin: 25px 5%;
}
.projet{
    width: 100vw;
    height: 85vh;
    overflow-y: auto;
    position: relative;
    top: 0;
    left: 0;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-around;
}
.pro{
    color: white;
    background-size: 550px;
    background-position: center center;
    width: 300px;
    height: 300px;
    box-shadow: inset 0px 0px 0px 150px rgba(0,0,0,0.4), 
        0px 0px 20px 1px rgba(0,0,0,0.8);
    transition-duration: 400ms;
}
.pro:hover{
    box-shadow: inset 0px 0px 0px 150px rgba(0,0,0,0.85);
    border-radius: 5px;
    background-size: 800px;
}
.pro:hover > h6,.pro > p{
    opacity: 0;
    transition-duration: 200ms;
}
.pro:hover > p, .pro > h6{
    opacity: 1;
    transition-delay: 200ms;
    transition-duration: 200ms;
}
.pro > h6{
    position: relative;
    top:40%;
    left: 0;
    width: 100%;
    font-size: 1.3em;
    text-align: center;
}
.pro > p{
    font-size: 1.1em;
    text-align: justify;
    margin: 20px;
}
.projet > a{
    text-decoration: none;
    display: block;
}
.classeur{
    height: 85vh;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    overflow-y: scroll; 
    overflow-x: hidden; 
}
.competence:hover{
    margin: 25px 5px;
    width: 340px;
}
.competence:hover > div{width: 340px;}
.competence:hover > div > h3{width: 340px;}
.competence:hover > div > h3:first-child{top: -100px;}
.competence:hover > div > h3:last-child{top: -60px;}

.competence{
    transition-duration: 0.3s;
    width: 300px;
    height: 70px;
    padding: 0;
    overflow: hidden;
    margin: 25px;
    box-shadow: 0px 0px 25px 1px rgba(0,0,0,0.75);
}
progress[value] {
    margin: 0;
    width: 300px;
    height: 10px;
    transform-origin: top left;
    transform: skewX(-20deg);
    position: relative;
    left: 0;
    top:-7px;
    z-index: 0;
    transition-delay: 500ms;
    transition-duration: 500ms;
}
.titre_comp{
    width: 300px;
    height: 72px;
    padding: 0;
    overflow: hidden;
    box-shadow: 0px 8px 10px -5px rgba(0,0,0,0.75);
    margin: 25px;
}
.titre_comp > h3{
    text-align: center;
    width: 300px;
    height: 70px;
    line-height: 70px;
    word-break: keep-all;
    font-size: 2em;
    font-family: 'Megrim', cursive;
}

progress::-webkit-progress-value { background: #FEAA00; }
progress::-webkit-progress-bar{ background: white; }
progress::-moz-progress-bar{background: #FEAA00;}

.competence > div{
    background-color: white;
    width: 300px;
    height: 60px;
    position: relative;
    top: 0;
    left: 0;
    overflow: hidden;
    transition-duration: 0.3s;
}
.competence > div > h3:first-child{word-spacing: 20px;}
.competence > div > h3{
    transition-duration: 0.6s;
    text-align: center;
    height: 60px;
    line-height: 60px;
    white-space: nowrap;
    font-size: 1.2em;
    width: 300px;
    position: relative;
    top: 0;
    left: 0;
}
.page1 > h1{
    color: white;
    font-family: 'Megrim', cursive;
    position: relative;
    top: 40%;
    left: 0;
    width: 100%;
    height: 20%;
    text-align: center;
    font-size: 8em;
    text-shadow: 0px 0px 40px 10px rgba(0, 0, 0, 1);
    pointer-events: none;
}
.page1 > .fond {
    background-image: url(img/fond.jpg);
    background-position: center;
    background-size:110vw;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: 120%
}
.page1 > .fond > div{
    position: absolute;
    box-shadow: inset 0px 0px 25px 2px #ffffff,
        0px 0px 25px 2px #ffffff;
    border-radius: 10px;
    transform-origin: top left;
    transform: skewX(10deg);
    transition-duration: 0.5s;
}
.page1 > .fond > div:hover{
    box-shadow: inset 0px 0px 40px 5px #ffffff,
        0px 0px 40px 5px #ffffff;
    background-color: rgba(255,255,255,0.2);
}
.page1 > .fond > div:nth-child(1){
    top: -3%;
    left: -13%;
    width: 50%;
    height: 35%;
}
.page1 > .fond > div:nth-child(2){
    bottom: -3%;
    left: -13%;
    width: 40%;
    height: 60%;
}
.page1 > .fond > div:nth-child(7){
    top: 20%;
    left: 10%;
    bottom: 45%;
    width: 45%;
}
.page1 > .fond > div:nth-child(4){
    top: -3%;
    right: -3%;
    left: 70%;
    height: 65%;
}
.page1 > .fond > div:nth-child(6){
    bottom: -3%;
    right: 20%;
    left: 60%;
    height: 65%;
}
.page1 > .fond > div:nth-child(5){
    bottom: 30%;
    right: 35%;
    left: 45%;
    height: 25%;
}
.page1 > .fond > div:nth-child(3){
    top: 15%;
    right: 40%;
    left: 50%;
    height: 20%;
}
.map{
    position: relative;
    right: 0;
    left: 0;
    width: 100vw;
    height: 80vw;
    overflow: auto;
    box-shadow: inset 0px 10px 20px 5px rgba(255,255,255,1);
}
.map > div:nth-child(1){
    width: 1200px;
    height: 1035px;
    margin-right: 0;
    margin-left: auto;
    background-repeat: no-repeat;/*up size veticale img*/
    background-attachment: scroll;
    animation: diapo 10s linear infinite;
}
@keyframes diapo{
    from,to,20%,75%{background-image: url(img/th%C3%A9pot.jpg);}
    25%,70%{background-image: url(img/iutlannion2.jpg);}
}
@keyframes diapo1{
    from,to,20%,75%{opacity: 1;}
    25%,70%{opacity: 0;}
}
@keyframes diapo2{
    from,to,20%,75%{opacity: 0;}
    25%,70%{opacity: 1;}
}
form{
    width: 600px;
    margin: auto;
    display: flex;
    flex-direction: column;
    font-weight: 700;
    overflow-y: auto;
    height: 85vh;
}
.form{
    width: 100%; 
    margin: 5px auto 10px auto;
    position: relative;
    min-height: 30px;
    height: 30px;
    box-shadow: 0px 8px 10px -8px rgba(0,0,0,0.75)
        ,0px -8px 10px -8px rgba(0,0,0,0.75);
    text-align: center;
    font-family: 'Ubuntu',cursive;
}
.formarea{
    font-family: 'Ubuntu',cursive;
    width: 100%; 
    margin: 10px auto;
    position: relative;
    min-height: 300px;
    height: 300px;
    box-shadow: 0px 8px 10px -8px rgba(0,0,0,0.75)
        ,0px -8px 10px -8px rgba(0,0,0,0.75);
    text-align: left;
    padding: 5px;
    border: 1px white solid
}
.submit{
    background-color: #FEAA00;
    color: white;
    min-height: 50px;
    height: 50px;
}
.formarea:hover,.form:hover{
    border: 2px #FEAA00 dashed;
}
.contains{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: flex-end;
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
}
.left{
    position: relative;
    left: 0;
    top: 0;
    height: 100vh;
    display: flex;
    flex-direction: column;
}
.left > div{
    position: relative;
    left: 0;
    top: 15vh;
    height: 85vh;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 20px 20px;
    overflow-y: auto;
}
.right{
    position: relative;
    right: 0;
    height: 100vh;
}

.cv {
    position: relative;
    right: 0;
    top: 0;
    height: 100vh; 
    filter: grayscale(0%);
    transition-duration: 300ms;
}
.cv > img{
    border: 0px solid white;
    box-shadow: 0px 0px 40px 10px rgba(0,0,0,0.75);
    height: 100vh;
}
.cv:hover{
    filter: grayscale(100%);
}
.left a{
    width: 100%;
    text-decoration: none;
    color: black;
    font-size: 1.4em;
    font-family: 'ubuntu',cursive;
}
.left a:hover{
    color: #FEAA00;
}
.link{
    text-align: center;
    width: 100%;
}

.pointer{
    width: 20px;
    height: 20px;
    margin-left: 10px;
    margin-top: 10px;
    position: absolute;
    background-color: #3E90BB;
    border-radius: 50%;
    transform-origin: left top;
    box-shadow: 0px 0px 30px 1px rgba(0,0,0,1);
}
.pointer1{
    top: 415px;
    right: 850px;
}
.pointer2{
    top: 65px;
    right: 655px;
}
