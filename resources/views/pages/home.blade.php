@extends('layouts.main')

@section('content')
<div class="container">
    <div class="cv-card">
        <h2 class="section-title">Simple Calculator</h2>
        <form action="#" class="calc-form">
            <input type="number" class="input-field" id="num1" placeholder="Enter first number">
            <input type="number" class="input-field" id="num2" placeholder="Enter second number">
            <div class="btn-group">
                <input type="button" class="btn btn-calc" value=" + " onclick="addNumbers()">
                <input type="button" class="btn btn-calc" value=" - " onclick="subNumbers()">
                <input type="button" class="btn btn-calc" value=" × " onclick="multiply()">
                <input type="button" class="btn btn-calc" value=" ÷ " onclick="division()">
            </div>
        </form>
        <div class="result-container">
            <h3>The result = </h3>
            <div id="result"><h3>--</h3></div>
        </div>
    </div>
</div>

<div class="container">
    <div class="cv-card profile-card">
        <div class="profile-pic">
            <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture">
        </div>

        <div class="intro">
            <h2>Short Introduction</h2>
            <p>Hello! I’m <strong>Zahin Muntaha Khan</strong>, a web developer who loves learning and creating modern web applications.</p>
        </div>

        <div class="info">
            <p><strong>Full Name:</strong> Zahin Muntaha khan</p>
            <p><strong>Title:</strong> Full Stack Developer</p>
            <p><strong>Optional:</strong> AI & NLP Enthusiast</p>
            <p><strong>Quote:</strong> “Keep learning, keep building.”</p>
        </div>
    </div>
</div>

<script>
    function addNumbers(){
        let num1 = document.getElementById("num1").value;
        let num2 = document.getElementById("num2").value;
        let result = Number(num1) + Number(num2);
        document.getElementById("result").innerHTML = "<h3>" + result + "</h3>";
    }

    function subNumbers(){
        let num1 = document.getElementById("num1").value;
        let num2 = document.getElementById("num2").value;
        let result = Number(num1) - Number(num2);
        document.getElementById("result").innerHTML = "<h3>" + result + "</h3>";
    }

    function multiply(){
        let num1 = document.getElementById("num1").value;
        let num2 = document.getElementById("num2").value;
        let result = Number(num1) * Number(num2);
        document.getElementById("result").innerHTML = "<h3>" + result + "</h3>";
    }

    function division(){
        let num1 = document.getElementById("num1").value;
        let num2 = document.getElementById("num2").value;
        if (num2 == 0) {
            document.getElementById("result").innerHTML = "<h3>Cannot divide by zero!</h3>";
            return;
        }
        let result = Number(num1) / Number(num2);
        document.getElementById("result").innerHTML = "<h3>" + result + "</h3>";
    }
</script>

<style>
/* ====== General Layout ====== */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 40px;
    flex-wrap: wrap;
    background: #f4f7fb;
    min-height: 100vh;
}


.cv-card {
    width: 600px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    text-align: center;
    padding: 30px;
    margin: 20px;
    font-family: 'Poppins', sans-serif;
}


.section-title {
    font-size: 26px;
    color: #08706bff;
    margin-bottom: 20px;
    font-weight: bold;
}

.calc-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.input-field {
    width: 80%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 10px;
    border: 1px solid #ccc;
    font-size: 16px;
    text-align: center;
    outline: none;
    transition: 0.3s;
}

.input-field:focus {
    border-color: #6a0c46ff;
    box-shadow: 0 0 5px rgba(52,152,219,0.3);
}

.btn-group {
    display: flex;
    justify-content:

center;
    gap: 15px;
    margin-top: 15px;
}

.btn-calc {
    background: linear-gradient(45deg, #007bff, #00c6ff);
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 20px;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn-calc:hover {
    transform: scale(1.1);
    background: linear-gradient(45deg, #0056b3, #0099cc);
}

.result-container {
    margin-top: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    color: #2c3e50;
}


.profile-pic img {
    width: 130px;
    height: 130px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #007bff;
    margin-bottom: 15px;
    transition: 0.3s ease;
}

.profile-pic img:hover {
    transform: scale(1.05);
}

.intro h2 {
    margin-bottom: 10px;
    font-size: 22px;
    font-weight: bold;
    color: #2c3e50;
}

.intro p {
    color: #555;
    margin-bottom: 20px;
    line-height: 1.6;
}

.info {
    text-align: left;
    margin-top: 10px;
    line-height: 1.8;
    font-size: 18px;
    color: #444;
}
</style>
@endsection