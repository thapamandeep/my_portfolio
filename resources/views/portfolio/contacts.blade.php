<!-- resources/views/contact-list.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inbox - Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Inter',sans-serif;
}

body{
    background:#070812;
    color:#e5e7eb;
}

/* BACKGROUND */
.bg{
    position:fixed;
    inset:0;
    background:
        radial-gradient(circle at 20% 30%, rgba(56,189,248,0.12), transparent 45%),
        radial-gradient(circle at 80% 70%, rgba(167,139,250,0.12), transparent 45%),
        #070812;
    z-index:-1;
}

/* HEADER */
.header{
    text-align:center;
    padding:80px 20px 40px;
}

.header h1{
    font-size:60px;
    font-weight:800;
    letter-spacing:-2px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
    -webkit-background-clip:text;
    color:transparent;
}

.header p{
    margin-top:10px;
    font-size:14px;
    color:#94a3b8;
}

/* GRID WALL */
.container{
    max-width:1200px;
    margin:auto;
    padding:40px 20px 100px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:18px;
}

/* CARD = STICKY GLASS NOTE */
.card{
    padding:18px;
    border-radius:18px;
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    backdrop-filter:blur(10px);
    transition:0.3s;
    position:relative;
    overflow:hidden;
}

.card:hover{
    transform:translateY(-8px) rotate(0.3deg);
    border-color:#38bdf8;
    box-shadow:0 25px 60px rgba(0,0,0,0.6);
}

/* TOP TAG */
.tag{
    position:absolute;
    top:12px;
    right:12px;
    font-size:10px;
    padding:4px 10px;
    border-radius:999px;
    background:rgba(56,189,248,0.12);
    color:#38bdf8;
}

/* NAME BIG */
.card h2{
    font-size:20px;
    font-weight:700;
    margin-bottom:6px;
}

/* INFO */
.card p{
    font-size:12.5px;
    color:#94a3b8;
    margin-bottom:4px;
}

/* MESSAGE BIG */
.message{
    margin-top:12px;
    font-size:14px;
    line-height:1.7;
    color:#cbd5e1;
    font-style:italic;
    padding-top:10px;
    border-top:1px solid rgba(255,255,255,0.06);
}

/* FOOTER */
.footer{
    margin-top:12px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

/* STATUS */
.status{
    font-size:11px;
    color:#10b981;
}

/* BUTTON */
.btn{
    font-size:11px;
    padding:6px 12px;
    border-radius:10px;
    background:transparent;
    border:1px solid rgba(239,68,68,0.3);
    color:#ef4444;
    text-decoration:none;
    transition:0.2s;
}

.btn:hover{
    background:#ef4444;
    color:#fff;
}

/* FLOAT EFFECT VARIATION */
.card:nth-child(odd){
    transform:rotate(-0.3deg);
}
.card:nth-child(even){
    transform:rotate(0.3deg);
}

/* RESPONSIVE */
@media(max-width:600px){
    .header h1{
        font-size:38px;
    }
}
</style>
</head>

<body>

<div class="bg"></div>

<!-- HEADER -->
<div class="header">

    <h1>Inbox Wall</h1>

    <p>
        Messages from people who discovered my portfolio — displayed like creative notes.
    </p>

</div>

<!-- GRID -->
<div class="container">

<div class="grid">

@foreach($contacts as $contact)

<div class="card">

    <span class="tag">NEW</span>

    <h2>{{ $contact->name }}</h2>

    <p>📧 {{ $contact->email }}</p>
    <p>📱 {{ $contact->whatsapp }}</p>
    <p>🌐 {{ $contact->social }}</p>

    <div class="message">
        "{{ $contact->message }}"
    </div>

    <div class="footer">
        <span class="status">Received</span>
        <a href="#" class="btn">Delete</a>
    </div>

</div>

@endforeach

</div>

</div>

</body>
</html>