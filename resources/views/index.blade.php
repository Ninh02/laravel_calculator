<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        table{
            width: 200px;
            border:1px solid black;
        }
        input{
            border:1px solid black;
            text-align: right;
            width: 100%;
        }
        button{
            border: 1px solid black;
            color: #4a5568;
            text-align: center;
            background-color: #cbd5e0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<form>
    @csrf
    <table>
        <tr>
            <th colspan="5"><input type="text" id="display"></th>
        </tr>
        <tr>
            <td><button type="button" value="7" onclick="Show(this.value)">7</button></td>
            <td><button type="button" value="8" onclick="Show(this.value)">8</button></td>
            <td><button type="button" value="9" onclick="Show(this.value)">9</button></td>
            <td><button type="button" value="/" onclick="Show(this.value)">/</button></td>
            <td><button type="button" value="CE" onclick="Delete(this.value)">CE</button></td>
        </tr>
        <tr>
            <td><button type="button" value="4" onclick="Show(this.value)">4</button></td>
            <td><button type="button" value="5" onclick="Show(this.value)">5</button></td>
            <td><button type="button" value="6" onclick="Show(this.value)">6</button></td>
            <td><button type="button" value="*" onclick="Show(this.value)">*</button></td>
            <td><button type="button" value="C" onclick="Return()">C</button></td>
        </tr>
        <tr>
            <td><button type="button" value="1" onclick="Show(this.value)">1</button></td>
            <td><button type="button" value="2" onclick="Show(this.value)">2</button></td>
            <td><button type="button" value="3" onclick="Show(this.value)">3</button></td>
            <td><button type="button" value="-" onclick="Show(this.value)">-</button></td>
            <td rowspan="2" ><button type="button" style="padding: 16px" value="=" onclick="Calculator(this.value)">=</button></td>
        </tr>
        <tr>
            <td colspan="2"><button type="button" value="0" onclick="show(this.value)">0</button></td>
            <td><button type="button" value="." onclick="show(this.value)">.</button></td>
            <td><button type="button" value="+" onclick="show(this.value)">+</button></td>
        </tr>
    </table>
</form>
<script>
    function Show(number){
        document.getElementById('display').value += number;
    }
    function Return(){
        document.getElementById('display').value = "";
    }
    function Calculator(){
        document.getElementById('display').value = eval(document.getElementById('display').value);
    }
    function Delete(){
        let number = document.getElementById('display').value;
        document.getElementById('display').value = number.substring(0,number.length-1);

    }
</script>
</body>
</html>

