<!-- resources/views/skills.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Skills</title>

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

        .bg{
            position:fixed;
            width:200%;
            height:200%;
            top:-50%;
            left:-50%;
            background:
                radial-gradient(circle at 30% 30%, rgba(56,189,248,0.2), transparent 40%),
                radial-gradient(circle at 70% 70%, rgba(167,139,250,0.2), transparent 40%),
                #05060a;
            animation:rotate 25s linear infinite;
            z-index:-1;
        }

        @keyframes rotate{
            0%{transform:rotate(0deg) scale(1.2);} 
            100%{transform:rotate(360deg) scale(1.2);} 
        }

        .container{
            padding:80px 60px;
        }

        h1{
            font-size:60px;
            text-align:center;
            margin-bottom:60px;
            background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
            -webkit-background-clip:text;
            color:transparent;
        }

        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:25px;
        }

        .card{
            position:relative;
            padding:30px;
            border-radius:20px;
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.1);
            backdrop-filter:blur(15px);
            text-align:center;
            transition:0.4s ease;
        }

        .card:hover{
            transform:translateY(-10px) scale(1.03);
            border-color:#38bdf8;
        }

        .icon{
            font-size:40px;
            margin-bottom:15px;
        }

        .card h3{
            font-size:20px;
            margin-bottom:10px;
        }

        .bar{
            width:100%;
            height:8px;
            background:rgba(255,255,255,0.1);
            border-radius:10px;
            overflow:hidden;
            margin-top:15px;
        }

        .fill{
            height:100%;
            background:linear-gradient(90deg,#38bdf8,#a78bfa);
            border-radius:10px;
        }

        .label{
            font-size:12px;
            color:#94a3b8;
            margin-top:8px;
        }

        footer{
            text-align:center;
            margin-top:60px;
            color:#64748b;
        }

    </style>
</head>

<body>

<div class="bg"></div>

<div class="container">

    <h1>My Skills</h1>

    <div class="grid">

        <!-- Laravel -->
        <div class="card">
            <div class="icon">🔥</div>
            <h3>Laravel</h3>
            <div class="bar">
                <div class="fill" style="width:85%"></div>
            </div>
            <div class="label">Advanced</div>
        </div>

        <!-- PHP -->
        <div class="card">
            <div class="icon">🐘</div>
            <h3>PHP</h3>
            <div class="bar">
                <div class="fill" style="width:80%"></div>
            </div>
            <div class="label">Strong</div>
        </div>

        <!-- JavaScript -->
        <div class="card">
            <div class="icon">⚡</div>
            <h3>JavaScript</h3>
            <div class="bar">
                <div class="fill" style="width:75%"></div>
            </div>
            <div class="label">Intermediate</div>
        </div>

        <!-- Diploma -->
        <div class="card">
            <div class="icon">🎓</div>
            <h3>Diploma</h3>
            <div class="bar">
                <div class="fill" style="width:70%"></div>
            </div>
            <div class="label">Ongoing / Learned</div>
        </div>

    </div>

    <footer>
        © 2026 Mandeep Portfolio
    </footer>

</div>

</body>
</html>