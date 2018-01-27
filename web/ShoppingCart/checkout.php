<?php
include_once("variables.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <link rel="stylesheet" href="shoppingCart.css">
  <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
  <script type="text/javascript" src="shoppingCart.js"></script>
</head>
<body>

<h1 class="title">Wee Ones Toys</h1>
<h3 class="title">for your little girls and boys!</h3>
<div class="title">
  <form action="confirmation.php" method="post" class="title">
    <table id="review">
      <tr>
        <th>Name:</th>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <th>Email:</th>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <th>Street Address:</th>
        <td><input type="text" name="street"></td>
      </tr>
      <tr>
        <th>City:</th>
        <td><input type="text" name="city"></td>
      </tr>
      <tr>
        <th>State:</th>
        <td>
          <select name="state">
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </td>
      </tr>
      <tr>
        <th>Zip Code:</th>
        <td><input type="text" name="zip"></td>
      </tr>
    </table>
    <input type="submit" value="Place Order">
  </form>
  <form action="reviewCart.php" class="title">
  <input type="submit" value="Back to Cart"></form>
</div>
</body>
</html>
