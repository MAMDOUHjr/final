<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="HomeStyle.css">
    <title>Chapter 2</title>
    <nav class="navbar">
        <a href="./home.htm" class="logo">Skill Zone <span>| BETA</span></a>
        <ul class="nav-list">
            <li class="nav-item"><a href="../index.php">Home</a></li>
            <li class="nav-item"><a href="../tasks_road.php">Tracks / Roadmaps</a></li>
            <li class="nav-item"><a href="../intern.php">Internships</a></li>
            <?php
        
        if (isset($_SESSION['username'])) {
         
            echo '<li class="nav-item"><a href="../stuprof.php">' . $_SESSION['username'] . '</a></li>';
        } else {
          
            echo '<li class="nav-item"><a href="./loading.html">Sign In / Up</a></li>';
        }
        ?>  
        </ul>
    </nav>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: normal;
        }
        body{
            background-color: #DDF2FD;
            overflow-x: hidden;
        }
        .heading{
            margin: 10px auto;
            padding: 5px 0;
            color: #144272;
            font-style: italic;
            font-family: sans-serif;
            text-shadow: 5px 1px 1px #ccc ;
            font-size: 40px;
            text-align: center;
        }
        .container{
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 15px;
            align-items: flex-start;
            padding: 5px 5%;
        }
        .container .main-video{
            background-color: #144272;
            padding: 15px;
            border-radius: 5px;
        }
        .container .main-video video{
            width: 100%;
            border-radius: 5px;
        }
        .container .main-video .title{
            color: #fff;
            font-size: 23px;
            padding-top: 15px;
            padding-bottom: 15px;
        }
         .container .video-list{
            margin: 50px auto;
            padding: 10px 15px;
            background-color: #144272;
            border-radius: 5px;
            width: 450px;
            height: 350px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .container .video-list h4{
            height: 35px;
            padding: 6px;
            background-color: #DDF2FD;
            color: #333;
            text-align: center;
            font-size: 18px;
            font-family: sans-serif;
            font-weight: 600;
            font-style: bold;
        }  
        .container .video-list .vid{
            display: flex;
            align-items: center;
            gap: 15px;
            background-color: #fff ;
            border-radius: 5px;
            margin: 10px;
            padding: 10px;
            border: 2px solid rgba(0,0,0,.1);
            cursor: pointer;
        }
        .container .video-list .vid:hover{
            background-color: #ccc;
        }
        .container .video-list .vid.active{
            background-color: #4eaceb;
        }
        .container .video-list .vid.active .title{
            color: #fff;
        }
        .container .video-list .vid .title{
            color: #333;
            font-size: 17px;
        }
         .container .video-list .vid video{
            width: 100px;
            border-radius: 5px;
        } 
        @media (max-width:990px) {
            .container{
            grid-template-columns: 1.5fr 1fr;
            padding: 10px;
        }
    }
        @media (max-width:768px) {
            .container{
            grid-template-columns: 1fr;
        }
        }
        .but{
            background-color: #144272;
            margin: 30px 900px;
            position: relative;
        display: inline-block;
        cursor: pointer;
        outline: none;
        border: 0;
        vertical-align: middle;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 15px;
        }
        button{
            width: 170px;
            height: 80px;
    padding: 20px 20px;
    border: none;
    text-align: center;
    border-radius: 5px;
    background-color: #144272;
    color: #fff;
    font-size: larger;
    font-weight: bold;
    cursor: pointer;
    transition: 0.5s;

}
button:hover{
    background-color: #427D9D;
    transition: 0.5s;
}
    </style>
</head>
<body>
    <h3 class="heading">Python course</h3>
    <div class="container">
        <div class="main-video">
            <div class="video">
                <video src="./python course/10.mp4" controls muted></video>
                <h3 class="title">01. Getting inputs</h3>
            </div>
        </div>
        <div class="video-list">
                <h4>Chapter 2</h4>
            <div class="vid active">
                <video src="./python course/10.mp4" muted></video>
                <h3 class="title">01. Getting inputs</h3>
            </div>
            <div class="vid">
                <video src="./python course/11.mp4" muted></video>
                <h3 class="title">02. Building a calculator.(Simple project)</h3>
            </div>
            <div class="vid">
                <video src="./python course/12.mp4" muted></video>
                <h3 class="title">03. Mad libs</h3>
            </div>
            <div class="vid">
                <video src="./python course/13.mp4" muted></video>
                <h3 class="title">04. Lists (part 1)</h3>
            </div>
            <div class="vid">
                <video src="./python course/14.mp4" muted></video>
                <h3 class="title">05.  Lists (part 2)</h3>
            </div>
            <div class="vid">
                <video src="./python course/15.mp4" muted></video>
                <h3 class="title">06. Tuples</h3>
            </div>
        </div>
    </div>
    <div class="but">
        <a href="./chapter3.php"> <button>Go to <br> Chapter 3</button></a>
           </div>
           <footer>
            <div class="footer">
                <div class="footer-content">
                    <div class="footer-section-about">
                        <a href="./home.htm" style="text-decoration: none;color: aliceblue;"><h1 style="font-family: 'Agentur';">Skill Zone<span>| BETA</h1></a>
                        <p>Skill Roads is a platform that provides you with the best courses and tracks to learn programming languages and computer science.</p>
                        <p>&copy; <span id="currentYear"></span> Skill Roads</p>
                        <div class="contact">
                            <i class="fa fa-envelope"></i>
                            contactUs@skillzone.com
                        </div>
                        <span id="currentTime" style="
                            font-size: 1.5rem;
                            font-weight: bold;
                            color: aliceblue;
                            margin-top: 1rem;
                            display: block;
                        " ></span>
                    </div>
                </div>
            </div>
    <script>
        let ListVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');

        ListVideo.forEach(video =>{
            video.onclick = () =>{
                ListVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');
                if(video.classList.contains('active')){
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;
                    let text = video.children[1].innerHTML;
                    title.innerHTML = text;
                };
            };
        });
    </script>
</body>
</html>