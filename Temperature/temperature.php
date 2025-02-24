<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Phudu:wght@300..900&display=swap" rel="stylesheet">
    
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: black;
        font-family: "Bebas Neue", serif;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        color: brown;
        margin-top: 1rem;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1200px;
        padding: 20px;
    }

    .left img {
        width: 100%;
        max-width: 500px;
        height: auto;
        margin-bottom: 2rem;
    }

    .right {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 100%;
        max-width: 400px;
        padding: 20px;
        border-radius: 10px;
    }

    .input {
        height: 45px;
        width: 100%;
        max-width: 300px;
        border: 1px solid grey;
        border-radius: 4px;
        text-align: center;
        margin-bottom: 15px;
        transition: background 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
    }

    .input:focus {
        background: linear-gradient(to right, pink, white, blue);
        box-shadow: 0 0 10px rgba(0, 128, 255, 0.6);
        outline: none;
    }

    .text {
        color: aqua;
        font-size: 1.5rem;
        margin: 10px;
    }

    #submit {
        width: 200px;
        height: 50px;
        font-size: 1.5rem;
        cursor: pointer;
        transition: background 0.2s ease-in-out;
        margin-top: 10px;
    }

    #submit:active {
        background: linear-gradient(to left, blue, aqua, grey);
    }

    .heart {
        position: relative;
        width: 120px;
        height: 90px;
        margin: 2em auto 1em;
    }

    .heart::before, .heart::after {
        content: "";
        position: absolute;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, #FF0000, #DC143C);
        border-radius: 50px 50px 0 0;
        top: 0;
        left: 50px;
        transform: rotate(45deg);
        box-shadow: 0 0 15px rgba(110, 88, 100, 0.7);
        transition: background 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
    }

    .heart:hover::before, .heart:hover::after {
        background: linear-gradient(135deg, #00FFFF, #1E90FF);
        box-shadow: 0 0 15px rgba(0, 255, 255, 0.7);
    }

    .heart::after {
        left: 0;
        transform: rotate(-45deg);
    }

    .heart p {
        position: absolute;
        z-index: 2;
        top: 76%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        font-weight: bold;
        color: white;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
        text-align: center;
    }

    /* ✅ Responsive Styling */
    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
            text-align: center;
        }

        .left img {
            max-width: 300px;
            margin-top: 1rem;
        }

        .right {
            max-width: 90%;
            padding: 15px;
        }

        .input {
            width: 90%;
        }

        .text {
            font-size: 1.2rem;
        }

        #submit {
            width: 90%;
        }
    }

</style>
</head>

<body>

    <h1>Temperature Converter</h1>
    
    <div class="container">
        <div class="left">
            <img src="https://egqusrjtrmt.exactdn.com/wp-content/uploads/2022/12/temperature-converter.webp?strip=all&lossy=1&ssl=1" alt="Temperature">
        </div>

        <div class="right">
            <form method="POST">
                <input type="number" name="Input" placeholder="Enter the temperature" class="input">
                <br>

                <input type="radio" name="temp" value="fah" id="fah">
                <label for="fah" class="text">Fahrenheit</label>

                <input type="radio" name="temp" value="cel" id="cel">
                <label for="cel" class="text">Celsius</label>
                
                <br><br>

                <input type="submit" value="Convert Now" name="submit" id="submit">
            </form>
            
            <div class="heart">
                <p>
                    <?php
                    if(isset($_POST['submit'])){
                        $Input=$_POST['Input'];
                        $temp=$_POST['temp'];
                        if($temp=="fah"){
                            echo "Conversion to Celsius: ";
                            $celsius=5/9*($Input-32);
                            echo round($celsius, 2) . "°C";
                        }
                        else{
                            echo "Conversion to Fahrenheit: ";
                            $fah=($Input * 1.8) + 32;
                            echo round($fah, 2) . "°F";
                        }
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>
