<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator ajijee</title>
    <style>
        body {
            font-family: Courier, sans-serif;
            background-color: #8FBC8F;
            margin: 100;
            padding-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
            
        }

        .calculator {
            background-color: #DCDCDC;
            width: 600px;
            height: 450px;
            font-weight : bold;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 5px 5px  10px; rgba(6, 6, 6, 6,8);
            text-align: left;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 400px;
            border: 1px solid #ccc;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            border-radius: 50px;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin:  10px;
            border: 10;
            border-radius: 10px;
            cursor: pointer;
            background-color: #D3D3D3;
            color: dark;
            font-size: 20px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            transition: background-color 0,3s;
        }

        input[type="submit"]:hover {
            background-color: #A52A2A;
            
            
        }
        input[type="reset"] {
            padding: 10px 20px;
            margin: 10px;
            border: 10;
            border-radius: 10px;
            cursor: pointer;
            background-color: #D3D3D3;
            color: dark;
            font-size: 20px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            transition: background-color 0,3s;
        }

        
    </style>

</head>
<body>
    <div class="calculator">
    <h1><center>KALKULATOR AZIZAH</center></h1>
    <form action="{{route ('proses.store')}}" method="post">
        @csrf
        <center>
        <label for="a">INPUT ANGKA PERTAMA :</label><br>
        <input type="number" name="a" id=""><br><br>
        <label for="b">INPUT ANGKA KEDUA :</label><br>
        <input type="number" name="b" id=""><br><br>
        <input type="submit" value="+" name="op">
        <input type="submit" value="_" name="op">
        <input type="submit" value=":" name="op">
        <input type="submit" value="x" name="op">
        <input type="reset" value="Reset" name="op">
        </center>

     <br>
        <center>
        <tr>
            <td colspan=>
            NAMA : NUR'AZIZAH <br>
            KELAS: XII RPL 2
            </td>
        </tr>
        </center>


    
    </form>
    </div>
</body>
</html>