<!DOCTYPE html>
<html>
<head>
<title>sum</title>
</head>
<body>


<script>
alert("exam are comming are you started study");

let num1=prompt("enter first number");
let num2=prompt("enter second number");
let msg ="are you sure want to add ${num1} and ${num2}";

let confirm = confirm(msg);

if(confirm){
Num1=parseInt(num1);
Num2=parseInt(num2);
let sum=num1+num2;

alert("The sum of ${num1} and ${num2} is ${sum}.");
}
</script>
</body>
</html>