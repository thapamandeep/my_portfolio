<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>3D World Portfolio</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Inter',sans-serif;
}

body{
  overflow:hidden;
  background:#000;
  color:#e5e7eb;
}

/* 3D WORLD */
.world{
  position:fixed;
  width:200%;
  height:200%;
  top:-50%;
  left:-50%;
  background:
    radial-gradient(circle at 30% 30%, rgba(56,189,248,0.25), transparent 40%),
    radial-gradient(circle at 70% 70%, rgba(167,139,250,0.25), transparent 40%),
    #05060a;
  animation:rotate 30s linear infinite;
}

@keyframes rotate{
  0%{transform:rotate(0deg) scale(1.2);}
  100%{transform:rotate(360deg) scale(1.2);}
}

/* HUD UI */
.hud{
  position:absolute;
  top:20px;
  left:20px;
  background:rgba(255,255,255,0.05);
  padding:15px;
  border-radius:12px;
  border:1px solid rgba(255,255,255,0.1);
  backdrop-filter:blur(12px);
}

.hud h2{
  font-size:14px;
  color:#38bdf8;
}

.hud p{
  font-size:12px;
  color:#94a3b8;
  margin-top:5px;
}

/* CENTER CONTROL */
.center{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  text-align:center;
}

.center h1{
  font-size:80px;
  letter-spacing:-3px;
}

.center span{
  background:linear-gradient(90deg,#38bdf8,#a78bfa,#f472b6);
  -webkit-background-clip:text;
  color:transparent;
}

.center button{
  margin-top:20px;
  padding:12px 25px;
  border:none;
  border-radius:12px;
  background:linear-gradient(90deg,#38bdf8,#a78bfa);
  color:#000;
  font-weight:700;
  cursor:pointer;
}

/* FLOATING NODES */
.node{
  position:absolute;
  width:120px;
  height:120px;
  border-radius:16px;
  background:rgba(255,255,255,0.04);
  border:1px solid rgba(255,255,255,0.1);
  backdrop-filter:blur(10px);
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:12px;
  animation:float 6s ease-in-out infinite;
}

.n1{top:20%;left:20%;}
.n2{top:30%;right:20%;animation-delay:1s;}
.n3{bottom:20%;left:25%;animation-delay:2s;}
.n4{bottom:25%;right:25%;animation-delay:3s;}

@keyframes float{
  0%,100%{transform:translateY(0);}
  50%{transform:translateY(-20px);}
}

footer{
  position:absolute;
  bottom:20px;
  width:100%;
  text-align:center;
  color:#64748b;
}
</style>
</head>

<body>

<div class="world"></div>

<div class="hud">
  <h2>3D WORLD SYSTEM</h2>
  <p>Interactive Portfolio Environment</p>
</div>

<div class="center">
  <h1>Hi, I'm <span>Mandeep</span></h1>
  <button>Enter Portfolio</button>
</div>

<a href="{{route('get.projects')}}"><div class="node n1">Projects</div></a>
<a href="{{route('get.skills')}}"><div class="node n2">Skills</div></a>
<a href="{{route('get.abouts')}}"><div class="node n3">About</div></a>
<a href="{{route('get.contacts')}}"><div class="node n4">Contact</div></a>

<footer>
  © 2026 3D World Portfolio
</footer>

</body>
</html>