<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Portfolio</title>

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

/* BG */
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

/* TITLE */
h1{
    font-size:50px;
    text-align:center;
    margin-bottom:40px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
    -webkit-background-clip:text;
    color:transparent;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:25px;
}

/* CARD */
.card{
    padding:30px;
    border-radius:20px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter:blur(15px);
    text-align:center;
    transition:0.4s;
}

.card:hover{
    transform:translateY(-10px);
    border-color:#38bdf8;
}

.icon{
    font-size:35px;
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
}

.label{
    font-size:12px;
    color:#94a3b8;
    margin-top:8px;
}

/* EDUCATION */
.timeline{
    margin-top:60px;
    border-left:2px solid rgba(255,255,255,0.1);
    padding-left:30px;
}

.edu-card{
    margin-bottom:30px;
    position:relative;
}

.edu-card::before{
    content:'';
    position:absolute;
    left:-40px;
    top:5px;
    width:12px;
    height:12px;
    background:#38bdf8;
    border-radius:50%;
}

.edu-title{
    font-size:18px;
    font-weight:600;
}

.edu-sub{
    font-size:14px;
    color:#94a3b8;
}

.edu-year{
    font-size:12px;
    margin-top:5px;
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

    <!-- 🔥 SKILLS -->
    <h1>My Skills</h1>

    <div class="grid">
    @foreach($skills as $skill)
        <div class="card">
            <div class="icon">⚡</div>
            <h3>{{ $skill->name }}</h3>

            <div class="bar">
                <div class="fill" style="width: {{ $skill->percentage }}%"></div>
            </div>

            <div class="label">
                {{ $skill->percentage }}%
            </div>
        </div>
    @endforeach
    </div>

    <!-- 🎓 EDUCATION -->
    <h1 style="margin-top:80px;">Education</h1>

    <div class="timeline">

    @foreach($educations as $edu)
        <div class="edu-card">

            <div class="edu-title">
                {{ $edu->degree }} - {{ $edu->field }}
            </div>

            <div class="edu-sub">
                {{ $edu->institution }}
            </div>

            <div class="edu-year">
                {{ $edu->start_year }} - 
                {{ $edu->end_year ?? 'Present' }}
                ({{ ucfirst($edu->status) }})
            </div>

        </div>
    @endforeach

    </div>

    <footer>
        © 2026 Mandeep Portfolio
    </footer>

</div>

</body>
</html>