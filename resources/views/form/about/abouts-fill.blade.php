<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add About</title>

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
}

/* BACKGROUND */
.bg{
    position:fixed;
    inset:0;
    background:
        radial-gradient(circle at 20% 20%, rgba(56,189,248,0.2), transparent 40%),
        radial-gradient(circle at 80% 80%, rgba(167,139,250,0.2), transparent 40%),
        #05060a;
    z-index:-1;
}

/* WRAPPER */
.wrapper{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:40px;
}

/* CARD */
.card{
    width:100%;
    max-width:650px;
    border-radius:25px;
    padding:40px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    box-shadow:0 30px 80px rgba(0,0,0,0.6);
}

/* TITLE */
.card h1{
    font-size:34px;
    margin-bottom:25px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
    -webkit-background-clip:text;
    color:transparent;
    text-align:center;
}

/* FORM */
form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

/* INPUTS */
input, textarea{
    padding:12px;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.1);
    background:rgba(255,255,255,0.05);
    color:#e5e7eb;
    outline:none;
}

/* TEXTAREA */
textarea{
    resize:none;
    height:120px;
}

/* FILE INPUT */
input[type="file"]{
    padding:10px;
    background:rgba(255,255,255,0.03);
}

/* BUTTON */
button{
    margin-top:10px;
    padding:12px;
    border:none;
    border-radius:12px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa);
    color:#000;
    font-weight:700;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    transform:scale(1.05);
}

</style>
</head>

<body>

<div class="bg"></div>

<div class="wrapper">

<div class="card">

    <h1>Add About Me ✨</h1>

    @if ($errors->any())
    <div style="color:red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('post.abouts')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Title -->
        <input type="text" name="title" placeholder="Title (About Me / Mandeep Magar)">

        <!-- Role -->
        <input type="text" name="role" placeholder="Role (Laravel Developer etc.)">

        <!-- Description -->
        <textarea name="description" placeholder="Write about yourself..."></textarea>

        <!-- Image -->
        <input type="file" name="image">

        <!-- Banner -->
        <input type="file" name="banner">

        <button type="submit">Save About</button>

    </form>

</div>

</div>

</body>
</html>