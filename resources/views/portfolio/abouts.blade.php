<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Inter',sans-serif;
        }

        body{
            background:#05060a;
            color:#e5e7eb;
            overflow-x:hidden;
        }

        /* BACKGROUND IMAGE */
        .bg-img{
            position:fixed;
            width:100%;
            height:100%;
            top:0;
            left:0;
            background:url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80');
            background-size:cover;
            background-position:center;
            filter:brightness(0.25) blur(2px);
            z-index:-2;
        }

        /* OVERLAY */
        .overlay{
            position:fixed;
            width:100%;
            height:100%;
            top:0;
            left:0;
            background:
                radial-gradient(circle at 30% 30%, rgba(56,189,248,0.25), transparent 40%),
                radial-gradient(circle at 70% 70%, rgba(167,139,250,0.25), transparent 40%),
                rgba(5,6,10,0.75);
            z-index:-1;
        }

        .container{
            padding:80px 60px;
        }

        h1{
            font-size:60px;
            text-align:center;
            margin-bottom:40px;
            background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
            -webkit-background-clip:text;
            color:transparent;
        }

        .card{
            max-width:900px;
            margin:0 auto;
            padding:40px;
            border-radius:22px;
            background:rgba(255,255,255,0.06);
            border:1px solid rgba(255,255,255,0.12);
            backdrop-filter:blur(18px);
            transition:0.4s ease;
            position:relative;
            overflow:hidden;
        }

        .card:hover{
            transform:translateY(-10px);
            border-color:#38bdf8;
        }

        /* TOP IMAGE BANNER */
        .banner{
            width:100%;
            height:180px;
            border-radius:18px;
            margin-bottom:25px;
            background:url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80');
            background-size:cover;
            background-position:center;
            position:relative;
            overflow:hidden;
        }

        .banner::after{
            content:"";
            position:absolute;
            width:100%;
            height:100%;
            background:linear-gradient(to top, rgba(5,6,10,0.7), transparent);
        }

        .profile{
            display:flex;
            align-items:center;
            gap:20px;
            margin-top:-50px;
            position:relative;
            z-index:2;
        }

        .avatar{
            width:90px;
            height:90px;
            border-radius:50%;
            border:3px solid #38bdf8;
            box-shadow:0 0 25px rgba(56,189,248,0.5);
            background:url('{{ asset('img/mine_portfolio.jpg')}}');
            background-size:cover;
            background-position:center;
        }

        .info h2{
            font-size:26px;
        }

        .info p{
            font-size:14px;
            color:#94a3b8;
        }

        .content{
            margin-top:20px;
            line-height:1.8;
            color:#cbd5e1;
            font-size:15px;
        }

        .highlights{
            margin-top:30px;
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
            gap:15px;
        }

        .box{
            padding:20px;
            border-radius:16px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.1);
            text-align:center;
        }

        .box h3{
            font-size:18px;
            margin-bottom:5px;
        }

        .box p{
            font-size:12px;
            color:#94a3b8;
        }

        footer{
            text-align:center;
            margin-top:60px;
            color:#64748b;
        }

    </style>
</head>

<body>

<div class="bg-img"></div>
<div class="overlay"></div>

<div class="container">

    <h1>About Me</h1>

    <div class="card">

        <!-- IMAGE BANNER -->
        <div class="banner"></div>

        <div class="profile">
            <div class="avatar"></div>
            <div class="info">
                <h2>Mandeep Magar</h2>
                <p>Laravel Developer • Web Designer • Learner</p>
            </div>
        </div>

        <div class="content">
            I am a passionate web developer focused on building modern, clean, and interactive web applications. 
            I enjoy working with Laravel, PHP, and JavaScript to create smooth user experiences. 
            My goal is to become a strong full-stack developer and build impactful digital products like Siya Collection and Magar Web.
        </div>

        <div class="highlights">

            <div class="box">
                <h3>2+ Projects</h3>
                <p>Built and in progress</p>
            </div>

            <div class="box">
                <h3>Frontend + Backend</h3>
                <p>Full web development</p>
            </div>

            <div class="box">
                <h3>Learning Path</h3>
                <p>Consistent growth</p>
            </div>

        </div>

    </div>

    <footer>
        © 2026 Mandeep Portfolio
    </footer>

</div>

</body>
</html>