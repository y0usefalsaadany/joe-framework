<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Welcome animation</title>
  <link rel="stylesheet" href="./style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<STYLE>
  @import url(https://fonts.googleapis.com/css?family=Raleway:600);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #EA2E49;
}

h1 {
  color: #fff;
  font-family: "Raleway", sans-serif;
  font-size: 52px;
  font-weight: 600;
  text-transform: uppercase;
}
h1 span {
  display: inline-block;
  opacity: 0;
  transform: translateY(20px) rotate(90deg);
  transform-origin: left;
  animation: in 0.5s forwards;
}
h1 span:nth-child(1) {
  animation-delay: 0.1s;
}
h1 span:nth-child(2) {
  animation-delay: 0.2s;
}
h1 span:nth-child(3) {
  animation-delay: 0.3s;
}
h1 span:nth-child(4) {
  animation-delay: 0.4s;
}
h1 span:nth-child(5) {
  animation-delay: 0.5s;
}
h1 span:nth-child(6) {
  animation-delay: 0.6s;
}
h1 span:nth-child(7) {
  animation-delay: 0.7s;
}

@keyframes in {
  0% {
    opacity: 0;
    transform: translateY(50px) rotate(90deg);
  }
  100% {
    opacity: 1;
    transform: translateY(0) rotate(0);
  }
}
</STYLE>
<body>
<!-- partial:index.partial.html -->
<center>
<h1>
	<span>w</span>
	<span>e</span>
	<span>l</span>
	<span>c</span>
	<span>o</span>
	<span>m</span>
	<span>e</span>
	<soan> </span>
	<span> </span>
	<span>to</span>
	<span> </span>
	<span> </span>
  <span>j</span>
	<sean>o</span>
	<span>e</span>
	<span> </span>
	<span> </span>
	<BR>
	<span>f</span>
	<rpan>r</span>
	<span>a</span>
	<apan>m</span>
	<span>e</span>
	<span>w</span>
	<span>o</span>
	<span>r</span>
	<span>k</span>
</h1>
</CENTER>
<!-- partial -->
  
</body>
</html>
