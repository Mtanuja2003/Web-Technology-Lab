function Playersdata()
    {
        a=document.getElementById("player 1").value;
        b=document.getElementById("player 2").value;
        document.getElementById("p1").innerHTML=a + " should enter 'X'";
        document.getElementById("p2").innerHTML=b + " should enter 'O'";
        return false;
    }
function enter(){
    p=window.location.href;
    var x=document.getElementById("game").innerHTML;
    win=window.open("","_self","width:200,height:100");
    win.document.write(x);
}
function back(){
    window.open(p,"_self");
}

function fun() {
var b1, b2, b3, b4, b5, b6, b7, b8, b9;
b1 = document.getElementById("1").value;
b2 = document.getElementById("2").value;
b3 = document.getElementById("3").value;
b4 = document.getElementById("4").value;
b5 = document.getElementById("5").value;
b6 = document.getElementById("6").value;
b7 = document.getElementById("7").value;
b8 = document.getElementById("8").value;
b9 = document.getElementById("9").value;
if ((b1 == 'X') && 
    (b2 == 'X') && (b3 == 'X')) {
    document.getElementById('result')
        .innerHTML = a+ " won";
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(a+" won");
}
else if ((b1 == 'X') && (b4 == 'X') && (b7 == 'X')) {
    document.getElementById('result')
        .innerHTML = a + "won";
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(a+" won");
}
else if ((b7 == 'X') && (b8 == 'X') && (b9 == 'X')) {
    document.getElementById('result')
        .innerHTML = a+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    window.alert(a+' won');
}
else if ((b3 == 'X') && (b6 == 'X') && (b9 == 'X')) {
    document.getElementById('result')
        .innerHTML =a+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    window.alert(a+ ' won');
}
else if ((b1 == 'X') && (b5 == 'X') && (b9 == 'X')) {
    document.getElementById('result')
        .innerHTML = a+ " won";
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    window.alert(a+ ' won');
}
else if ((b3 == 'X') && (b5 == 'X') && (b7 == 'X')) {
    document.getElementById("result")
        .innerHTML = a+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(a+ ' won');
}
else if ((b2 == 'X') && (b5 == 'X') && (b8 == 'X')) {
    document.getElementById('result')
        .innerHTML = a+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(a+ ' won');
}
else if ((b4 == 'X') && (b5 == 'X') && (b6 == 'X')) {
    document.getElementById('result')
        .innerHTML =a+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(a+ ' won');
}
else if ((b1 == 'O') && (b2 == 'O') && (b3 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+ " won";
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(b+ ' won');
}
else if ((b1 == 'O') && (b4 == 'O') && (b7 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+ " won";
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(b+ ' won');
}
else if ((b7 == 'O') && (b8 == 'O') && (b9 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+" won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("6").disabled = true;
    window.alert(b+ ' won');
}
else if ((b3 == 'O') && (b6 == 'O') && (b9 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("5").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    window.alert(b+' won');
}
else if ((1 == 'O') && (b5 == 'O') && (b9 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+" won";
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    window.alert(b+' won');
}
else if ((b3 == 'O') && (b5 == 'O') && (b7 == 'O')) {
    document.getElementById('result')
        .innerHTML =b+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(b+ ' won');
}
else if ((b2 == 'O') && (
    b5 == 'O') && (b8 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+ " won";
    document.getElementById("1").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("4").disabled = true;
    document.getElementById("6").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(b+ ' won');
}
else if((b5 == 'O') && (b6 == 'O') && (b4 == 'O')) {
    document.getElementById('result')
        .innerHTML = b+" won";
    document.getElementById("1").disabled = true;
    document.getElementById("2").disabled = true;
    document.getElementById("3").disabled = true;
    document.getElementById("7").disabled = true;
    document.getElementById("8").disabled = true;
    document.getElementById("9").disabled = true;
    window.alert(b+' won');
}
else if ((b1 == 'X' || b1=='O') && (b2 == 'X'
    || b2=='O') && (b3 == 'X' || b3=='O') &&
    (b4 == 'X' || b4=='O') && (b5 == 'X' || b5=='O') && (b6 == 'X' || b6=='O') &&
    (b7 == 'X' || b7=='O') && (b8 == 'X' || b8=='O') && (b9 == 'X' || b9=='O')) {
        document.getElementById('result')
            .innerHTML = "Match Tie";
        window.alert('Match Tie');
}
else {
    if (flag == 1) {
        document.getElementById('result')
            .innerHTML = a +"'s Turn";
    }
    else {
        document.getElementById('result')
            .innerHTML = b+"'s Turn";
    }
}
}

function fun2() {
document.getElementById('1').value = '';
document.getElementById('1').disabled= false;
document.getElementById("2").value = '';
document.getElementById('2').disabled= false;
document.getElementById("3").value = '';
document.getElementById('3').disabled= false;
document.getElementById("4").value = '';
document.getElementById('4').disabled= false;
document.getElementById("5").value = '';
document.getElementById('5').disabled= false;
document.getElementById("6").value = '';
document.getElementById('6').disabled= false;
document.getElementById("7").value = '';
document.getElementById('7').disabled= false;
document.getElementById("8").value = '';
document.getElementById('8').disabled= false;
document.getElementById("9").value = '';
document.getElementById('9').disabled= false;
}

flag = 1;
function fun3() {
if (flag == 1) {
    document.getElementById("1").value = "X";
    document.getElementById("1").disabled = true;
    flag = 0;
}
else {
    document.getElementById("1").value = "O";
    document.getElementById("1").disabled = true;
    flag = 1;
}
}

function fun4() {
if (flag == 1) {
    document.getElementById("2").value = "X";
    document.getElementById("2").disabled = true;
    flag = 0;
}
else {
    document.getElementById("2").value = "O";
    document.getElementById("2").disabled = true;
    flag = 1;
}
}

function fun5() {
if (flag == 1) {
    document.getElementById("3").value = "X";
    document.getElementById("3").disabled = true;
    flag = 0;
}
else {
    document.getElementById("3").value = "O";
    document.getElementById("3").disabled = true;
    flag = 1;
}
}

function fun6() {
if (flag == 1) {
    document.getElementById("4").value = "X";
    document.getElementById("4").disabled = true;
    flag = 0;
}
else {
    document.getElementById("4").value = "O";
    document.getElementById("4").disabled = true;
    flag = 1;
}
}

function fun7() {
if (flag == 1) {
    document.getElementById("5").value = "X";
    document.getElementById("5").disabled = true;
    flag = 0;
}
else {
    document.getElementById("5").value = "O";
    document.getElementById("5").disabled = true;
    flag = 1;
}
}

function fun8() {
if (flag == 1) {
    document.getElementById("6").value = "X";
    document.getElementById("6").disabled = true;
    flag = 0;
}
else {
    document.getElementById("6").value = "O";
    document.getElementById("6").disabled = true;
    flag = 1;
}
}

function fun9() {
if (flag == 1) {
    document.getElementById("7").value = "X";
    document.getElementById("7").disabled = true;
    flag = 0;
}
else {
    document.getElementById("7").value = "O";
    document.getElementById("7").disabled = true;
    flag = 1;
}
}

function fun10() {
if (flag == 1) {
    document.getElementById("8").value = "X";
    document.getElementById("8").disabled = true;
    flag = 0;
}
else {
    document.getElementById("8").value = "O";
    document.getElementById("8").disabled = true;
    flag = 1;
}
}

function fun11() {
if (flag == 1) {
    document.getElementById("9").value = "X";
    document.getElementById("9").disabled = true;
    flag = 0;
}
else {
    document.getElementById("9").value = "O";
    document.getElementById("9").disabled = true;
    flag = 1;
}
}