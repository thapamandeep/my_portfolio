<!-- resources/views/projects.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Inter',sans-serif;}

        body{
            background:#05060a;
            color:#e5e7eb;
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
            grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
            gap:30px;
        }

        .card{
            position:relative;
            padding:30px;
            border-radius:20px;
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.1);
            backdrop-filter:blur(15px);
            transition:0.4s ease;
        }

        .card::before{
            content:"";
            position:absolute;
            inset:0;
            border-radius:20px;
            padding:1px;
            background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
            -webkit-mask:
                linear-gradient(#000 0 0) content-box,
                linear-gradient(#000 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            opacity:0;
            transition:0.4s;
        }

        .card:hover::before{opacity:1;}

        .card:hover{transform:translateY(-12px) scale(1.03);} 

        .status{
            display:inline-block;
            font-size:11px;
            padding:5px 10px;
            border-radius:8px;
            margin-bottom:10px;
        }

        .completed{background:rgba(34,197,94,0.15);color:#22c55e;}

        .progress{
            background:rgba(250,204,21,0.15);
            color:#facc15;
            animation:pulse 1.5s infinite;
        }

        @keyframes pulse{
            0%{opacity:1;} 
            50%{opacity:0.5;} 
            100%{opacity:1;} 
        }

        .card h3{
            font-size:22px;
            margin-bottom:10px;
        }

        .card p{
            font-size:14px;
            color:#94a3b8;
            line-height:1.6;
        }

        .tags{margin-top:15px;}

        .tag{
            display:inline-block;
            font-size:11px;
            padding:5px 10px;
            margin:3px;
            border-radius:8px;
            background:rgba(56,189,248,0.1);
            color:#38bdf8;
        }

        .btn{
            display:inline-block;
            margin-top:20px;
            padding:10px 18px;
            border-radius:12px;
            background:linear-gradient(90deg,#38bdf8,#a78bfa);
            color:#000;
            font-weight:600;
            text-decoration:none;
        }

        .btn.disabled{
            background:#1e293b;
            color:#64748b;
            pointer-events:none;
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

    <h1>My Projects</h1>

   <div class="grid">

    @foreach($projects as $project)

    <div class="card">

        <!-- Status -->
        <span class="status {{ $project->status == 'completed' ? 'completed' : 'progress' }}">
            {{ ucfirst($project->status) }}
        </span>

        <!-- Title -->
        <h3>{{ $project->title }}</h3>

        <!-- Description -->
        <p>{{ $project->description }}</p>

        <!-- Tags (optional static for now) -->
        <div class="tags">
            <span class="tag">Laravel</span>
            <span class="tag">Blade</span>
            <span class="tag">Project</span>
        </div>

        <!-- Link -->
        @if($project->link)
            <a href="{{ $project->link }}" target="_blank" class="btn">
                View Project
            </a>
        @else
            <a href="#" class="btn disabled">
                No Link
            </a>
        @endif

    </div>

    @endforeach

</div>

    <footer>
        © 2026 Mandeep Portfolio
    </footer>

</div>

</body>
</html>