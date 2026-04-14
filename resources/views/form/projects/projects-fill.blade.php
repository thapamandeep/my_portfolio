<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Project</title>

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
    max-width:700px;
    border-radius:25px;
    padding:40px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    box-shadow:0 30px 80px rgba(0,0,0,0.6);
}

/* TITLE */
.card h1{
    font-size:35px;
    margin-bottom:25px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
    -webkit-background-clip:text;
    color:transparent;
}

/* FORM */
form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

input, textarea, select{
    padding:12px;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.1);
    background:rgba(255,255,255,0.05);
    color:#e5e7eb;
    outline:none;
}

textarea{
    resize:none;
    height:120px;
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

    <h1>Add Project 🚀</h1>

    <form action="{{route('post.projects')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="title" placeholder="Project Title" >

        <textarea name="description" placeholder="Project Description"></textarea>

        <input type="text" name="link" placeholder="Project Link (optional)">

        <input type="file" name="image">

        <select name="status">
            <option value="ongoing">Ongoing</option>
            <option value="completed">Completed</option>
        </select>

        <input type="number" name="order" placeholder="Display Order (optional)">

        <button type="submit">Save Project</button>
    </form>

</div>

</div>

</body>
</html>