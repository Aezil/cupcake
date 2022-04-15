<!--
Author: Leonzyo Zyfuentes
Date: 4/14/2022
URL: https://lzyfuentes.greenriverdev.com/328/cupcakes/
Description: This program allows user to enter name, choose cupcakes,
and display total of order
-->
<html><h1>Cupcake Fundraiser</h1>
<body>
    <form action="process.php" method="post">
        <label>Your name:</label>
        <br>
        <input type="text" name="customerName" placeholder="Please input your name">
        <br>
        <span>Cupcake Flavors:</span>
        <br>
        <input type="checkbox" name="flavor[]" value="The Grasshopper">The Grasshopper
        <br>
        <input type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">Whiskey Maple Bacon
        <br>
        <input type="checkbox" name="flavor[]" value="Carrot Walnut">Carrot Walnut
        <br>
        <input type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">Salted Caramel Cupcake
        <br>
        <input type="checkbox" name="flavor[]" value="Red Velvet">Red Velvet
        <br>
        <input type="checkbox" name="flavor[]" value="Lemon Drop">Lemon Drop
        <br>
        <input type="checkbox" name="flavor[]" value="Tiramisu">Tiramisu
        <br>
        <button>Order</button>
    </form>
</body>
</html>
