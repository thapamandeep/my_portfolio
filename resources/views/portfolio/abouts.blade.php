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
}

.card:hover{
    transform:translateY(-10px);
    border-color:#38bdf8;
}

/* BANNER */
.banner{
    width:100%;
    height:180px;
    border-radius:18px;
    margin-bottom:25px;
    overflow:hidden;
}

/* PROFILE */
.profile{
    display:flex;
    align-items:center;
    gap:20px;
    margin-top:-50px;
}

.avatar{
    width:90px;
    height:90px;
    border-radius:50%;
    border:3px solid #38bdf8;
    box-shadow:0 0 25px rgba(56,189,248,0.5);
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

@foreach($abouts as $about)

    {{-- Banner --}}
    <div class="banner"
        style="background:url('{{ asset('storage/photos/'.$about->banner) }}');
        background-size:cover; background-position:center;">
    </div>

    {{-- Profile --}}
    <div class="profile">

        {{-- Image --}}
        <div class="avatar"
            style="background:url('{{ asset('storage/photos/'.$about->image) }}');
            background-size:cover; background-position:center;">
        </div>

        {{-- Info --}}
        <div class="info">
            <h2>{{ $about->title }}</h2>
            <p>{{ $about->role }}</p>
        </div>

    </div>

    {{-- Description --}}
    <div class="content">
        {{ $about->description }}
    </div>



@endforeach

</div>

<footer>
    © 2026 Mandeep Portfolio
</footer>

</div>

</body>
</html>