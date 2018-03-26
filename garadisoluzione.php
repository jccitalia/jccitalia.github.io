<!DOCTYPE html>
<html>
<head>
  <title>1° JCC Italia | L'innovativa coppa U18</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web|Bungee' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="main.css" id="theme">
  <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
<header class="container-fluid">
  <div class="row">
    <div class="col-xs-4 col-sm-2">
      <a href="https://jccitalia.github.io"><img src="images/08.png"/></a>
    </div>
    <nav class="col-xs-8 col-sm-10 text-right">
      <a href="https://jccitalia.github.io/contatti"><p>Contatti</p></a>
      <a href="https://jccitalia.github.io/faq"><p>FAQ</p></a>
      <a href="https://lichess.org/team/jcc-italia" target="_blank"><p>Forum</p></a>
    </nav>
  </div>
</header>

<script language="JavaScript">

function init()
{

document.gds.a.value="";
document.gds.b.value="";
document.gds.c.value="";
document.gds.d.value="";
document.gds.e.value="";
document.gds.f.value="";
document.gds.g.value="";
document.gds.h.value="";
document.gds.i.value="";
document.gds.j.value="";
document.gds.k.value="";
document.gds.l.value="";
document.gds.m.value="";
document.gds.n.value="";
document.gds.o.value="";
document.gds.p.value="";
document.gds.q.value="";
document.gds.r.value="";
document.gds.s.value="";
document.gds.t.value="";
document.gds.punti.value="";

}

var countDownDate = new Date("Apr 8, 2018 17:40:00").getTime();
var startDate = new Date("Apr 8, 2018 17:00:00").getTime();
var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("timer").innerHTML = "Tempo rimanente: " + minutes + " minuti e " + seconds + " secondi";
}, 1000);
var distance1 = now - startDate;
var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

function verdict()
{
Y=document.gds.nome.value;
A=document.gds.a.value;
B=document.gds.b.value;
C=document.gds.c.value;
D=document.gds.d.value;
E=document.gds.e.value;
F=document.gds.f.value;
G=document.gds.g.value;
H=document.gds.h.value;
I=document.gds.i.value;
J=document.gds.j.value;
K=document.gds.k.value;
L=document.gds.l.value;
M=document.gds.m.value;
N=document.gds.n.value;
O=document.gds.o.value;
P=document.gds.p.value;
Q=document.gds.q.value;
R=document.gds.r.value;
S=document.gds.s.value;
T=document.gds.t.value;
X=0;
var startDate = new Date("Apr 8, 2018 17:00:00").getTime();
var now = new Date().getTime();
var distance1 = now - startDate;
var minutes1 = Math.floor((distance1 % (1000 * 60 * 60)) / (1000 * 60));
var seconds1 = Math.floor((distance1 % (1000 * 60)) / 1000);

if (A=='a') {
  X=X+1;
}

if (B=='a') {
  X=X+1;
}

if (C=='a') {
  X=X+1;
}

if (D=='a') {
  X=X+1;
}

if (E=='a') {
  X=X+1;
}

if (F=='a') {
  X=X+1;
}

if (G=='a') {
  X=X+1;
}

if (H=='a') {
  X=X+1;
}

if (I=='a') {
  X=X+1;
}

if (J=='a') {
  X=X+1;
}

if (K=='a') {
  X=X+1;
}

if (L=='a') {
  X=X+1;
}

if (M=='a') {
  X=X+1;
}

if (N=='a') {
  X=X+1;
}

if (O=='a') {
  X=X+1;
}

if (P=='a') {
  X=X+1;
}

if (Q=='a') {
  X=X+1;
}

if (R=='a') {
  X=X+1;
}

if (S=='a') {
  X=X+1;
}

if (T=='a') {
  X=X+1;
}

document.gds.punti.value= Y + ", hai ottenuto " + X + " punti. Hai impiegato " + minutes1 + " minuti e " + seconds1 + " secondi. Fai una foto di questa schermata e inviala al numero 327 127 3249";

}

</script>

<p align="center" id="marginTop30px"><b>La gara di soluzione è iniziata!</b></p>
<p align="center" id="timer"></p>
<p align="center">Attenzione: l'organizzatore considera solo il primo modulo inviato. Non provare ad inviare il modulo più di una volta.</p>
<form method="POST" name="gds" action="garadisoluzione1.php">
    <div align="center"><center><table id="T02" cellpadding="3" cellspacing="0" width="84%"
    bgcolor="#E7E3C2">
        <tr>
          <td colspan="2">
            <input type="text" placeholder="Nome e cognome" id="width100" name="nome">
          </td>
        </tr>
            <tr><td width="50%"><input type="text" placeholder="Quesito 1" id="width100" name="a"></td><td><input type="text" placeholder="Quesito 2" id="width100" name="b"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 3" id="width100" name="c"></td><td><input type="text" placeholder="Quesito 4" id="width100" name="d"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 5" id="width100" name="e"></td><td><input type="text" placeholder="Quesito 6" id="width100" name="f"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 7" id="width100" name="g"></td><td><input type="text" placeholder="Quesito 8" id="width100" name="h"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 9" id="width100" name="i"></td><td><input type="text" placeholder="Quesito 10" id="width100" name="j"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 11" id="width100" name="k"></td><td><input type="text" placeholder="Quesito 12" id="width100" name="l"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 13" id="width100" name="m"></td><td><input type="text" placeholder="Quesito 14" id="width100" name="n"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 15" id="width100" name="o"></td><td><input type="text" placeholder="Quesito 16" id="width100" name="p"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 17" id="width100" name="q"></td><td><input type="text" placeholder="Quesito 18" id="width100" name="r"></td></tr>
            <tr><td><input type="text" placeholder="Quesito 19" id="width100" name="s"></td><td><input type="text" placeholder="Quesito 20" id="width100" name="t"></td></tr>
        <tr>
          <td>
            <input type="submit" name="bouton1" value="Conferma"
            onclick="verdict()"></font><input type="button"
            value="Cancella" onclick="init()">
          </td>
          <td>
            <textarea disabled id="width100" name="punti" rows="2" wrap="virtual"></textarea>
          </td>
        </tr>
    </table>
    </center></div>
</form>

<footer class="container">
  <div class="row">
    <p class="col-sm-4">&copy; 2018 1<sup>a</sup> JCC Italia</p>
    <div class="col-sm-8">
      <a href="http://www.hitwebcounter.com" target="_blank">
      <img src="http://hitwebcounter.com/counter/counter.php?page=6921044&style=0010&nbdigits=5&type=page&initCount=1500" title="Free track counters" Alt="Free track counters"   border="0" >
      </a>
    </div>
    <!-- nascosto
    <script type="text/javascript">var pos = "bottomright"; var ico = "22_22";</script>
    <script type="text/javascript" src="https://www.iolecal.it/blog/posts400/post459/tornaSu.js"></script>
    -->
  </div>
</footer>

</body>
</html>
