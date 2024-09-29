<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1 style ="font-size: 3rem;">Menu</h1>

    
    <table style="border: 2px solid black; font-size: 3rem; padding: 0.1rem;">
  <tr">
    <th style="border: 2px solid black; padding-left: 2rem; padding-right: 2rem;">Order</th>
    <th style="border: 2px solid black; padding-left: 2rem; padding-right: 2rem;">Amount</th>
  </tr>
  <tr>
    <td style="border: 2px solid black;">Burger</td>
    <td style="border: 2px solid black;">50</td>
  </tr>
  <tr>
    <td style="border: 2px solid black;">Fries</td>
    <td style="border: 2px solid black;">75</td>
  </tr>
  <tr>
    <td style="border: 2px solid black;">Steak</td>
    <td style="border: 2px solid black;">150</td>
  </tr>
</table> 
<br></br>
    <form action="/total.php" method = "POST" style ="font-size: 2rem;">
        <label for="order">select an order</label>
        <select id="order" name="order" size="1" style ="font-size: 2rem;">
            <option value="burger">Burger</option>
            <option value="fries">Fries</option>
            <option value="steak">Steak</option>
        </select> <br></br>
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" style ="font-size: 2rem;"> <br></br>
        <label for="cash">Cash</label>
        <input type="number" id="cash" name="cash" style ="font-size: 2rem;"> <br></br>
        <button type="submit" formaction="/Chan(2)/total.php" style="font-size:2rem;">Submit</button>  
    </form>
</body>
</html>