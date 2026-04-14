<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Education</title>

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
    max-width:500px;
    border-radius:25px;
    padding:40px;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    box-shadow:0 30px 80px rgba(0,0,0,0.6);
}

/* TITLE */
.card h1{
    font-size:32px;
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
input, select{
    padding:12px;
    border-radius:12px;
    border:1px solid rgba(255,255,255,0.1);
    background:rgba(255,255,255,0.05);
    color:#e5e7eb;
    outline:none;
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

    <h1>Add Education 🎓</h1>

    <form action="{{route('post.education')}}" method="POST">
        @csrf

        <input type="text" name="degree" placeholder="Degree (BCA, +2, SEE)">

        <input type="text" name="institution" placeholder="School / College Name">

        <input type="text" name="field" placeholder="Field (Computer Science, Management)">

        <input type="number" name="start_year" placeholder="Start Year">

        <input type="number" name="end_year" placeholder="End Year">

        <select name="status">
            <option value="">Select Status</option>
            <option value="running">Running</option>
            <option value="completed">Completed</option>
        </select>

        <button type="submit">Save Education</button>

    </form>

</div>

</div>

</body>
</html>