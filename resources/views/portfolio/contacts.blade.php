<!-- resources/views/contact.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Me</title>

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

/* CENTER WRAPPER */
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
    max-width:900px;
    display:flex;
    border-radius:25px;
    overflow:hidden;
    background:rgba(255,255,255,0.05);
    border:1px solid rgba(255,255,255,0.1);
    backdrop-filter:blur(20px);
    box-shadow:0 30px 80px rgba(0,0,0,0.6);
}

/* LEFT SIDE */
.left{
    width:40%;
    background:url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
    position:relative;
}

.left::after{
    content:'';
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(0,0,0,0.85), transparent);
}

/* RIGHT SIDE */
.right{
    width:60%;
    padding:50px;
}

/* TITLE */
.right h1{
    font-size:40px;
    margin-bottom:10px;
    background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
    -webkit-background-clip:text;
    color:transparent;
}

.right p{
    font-size:14px;
    color:#94a3b8;
    margin-bottom:30px;
}

/* FORM */
form{
    display:flex;
    flex-direction:column;
    gap:15px;
}

input, textarea{
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

/* INFO BOX */
.info{
    margin-top:25px;
    font-size:13px;
    color:#94a3b8;
}

/* RESPONSIVE */
@media(max-width:800px){
    .card{
        flex-direction:column;
    }

    .left{
        width:100%;
        height:200px;
    }

    .right{
        width:100%;
    }
}
</style>
</head>

<body>

<div class="bg"></div>

<div class="wrapper">

<div class="card">

    <!-- IMAGE SIDE -->
    <div class="left"></div>

    <!-- FORM SIDE -->
    <div class="right">

        <h1>Contact Me</h1>
        <p>Let’s build something amazing together 🚀</p>

        <form>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button type="submit">Send Message</button>
        </form>

        <div class="info">
            📧 Email: mandeep@example.com <br>
            📱 WhatsApp: +977-XXXXXXXXXX
        </div>

    </div>

</div>

</div>

</body>
</html>