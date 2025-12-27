<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600&family=Poppins&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        background: #fff5d9; /* light summer yellow */
        font-family: 'Poppins', sans-serif;
    }

    /* Summer Banner */
    #banner-container {
        width: 100%;
        height: 400px;
        overflow: hidden;
        border-bottom: 6px solid #ffb83d;
    }

    #banner-container img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }

    /* Heading */
    h1 {
        font-family: 'Baloo 2', cursive;
        text-align: center;
        color: #ff7a00;
        font-size: 45px;
        margin-top: 20px;
        text-shadow: 3px 3px #ffe0a1;
    }

    /* Form Box */
    .form-box {
        width: 75%;
        margin: 25px auto;
        padding: 30px;
        background: #ffe7c4;
        border-radius: 16px;
        box-shadow: 0 0 20px rgba(255, 170, 50, 0.3);
        border: 4px dashed #ffa62b;
    }

    label {
        font-size: 18px;
        font-weight: bold;
        color: #d45b00;
        display: block;
        margin-top: 18px;
        font-family: 'Baloo 2', cursive;
    }

    /* Input fields */
    input[type="text"], input[type="email"] {
        width: 90%;
        padding: 12px;
        margin-top: 6px;
        border: 3px solid #ffcc80;
        border-radius: 12px;
        font-size: 16px;
        background: #fff7e6;
    }

    /* Summer Button */
    .btn {
        background: #ff7a00;
        color: white;
        border: none;
        padding: 15px 35px;
        font-size: 20px;
        margin-top: 30px;
        border-radius: 10px;
        cursor: pointer;
        font-family: 'Baloo 2', cursive;
        display: block;
        width: 220px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0 5px 0 #cc5f00;
        transition: 0.2s;
    }

    .btn:hover {
        background: #ff9900;
        box-shadow: 0 4px 0 #b84f00;
    }
</style>

<script>
// Rotating Summer Banners
let banners = ["banner1.png", "banner2.gif"];
let i = 0;

function rotateBanner() {
    const b = document.getElementById("banner");
    i = (i + 1) % banners.length;
    b.src = banners[i];
    setTimeout(rotateBanner, 5000);
}

// Email Validation
function validateEmail() {
    let x = document.myform.email.value;
    let at = x.indexOf("@");
    let dot = x.lastIndexOf(".");

    if (at < 1 || dot < at + 2 || dot + 2 >= x.length) {
        alert("Please enter a valid email.");
        return false;
    }
}
</script>

</head>

<body onload="rotateBanner()">

<!-- Summer Banner -->
<div id="banner-container">
    <img src="banner1.png" id="banner">
</div>

<h1>☀️ Summer Camp Feedback ☀️</h1>

<div class="form-box">

    <form name="myform" method="post" action="FeeConn.php" onsubmit="return validateEmail();">

        <label>Your Name:</label>
        <input type="text" name="name" maxlength="20" placeholder="John Doe">

        <label>Your Email:</label>
        <input type="email" name="email" placeholder="example@gmail.com">

        <label>Your Experience With Our Camp Website:</label>
        <input type="text" name="experience" maxlength="40" placeholder="Share your thoughts">

        <label>Any Trouble While Using the Website:</label>
        <input type="text" name="trouble" maxlength="40" placeholder="Tell us if any">

        <label>Your Suggestions to Improve Our Website:</label>
        <input type="text" name="improvement" maxlength="40" placeholder="Your message">

        <button type="submit" class="btn">Send Feedback</button>
    </form>

</div>

</body>
</html>
