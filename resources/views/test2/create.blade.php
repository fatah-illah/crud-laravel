<h1>Create Test2</h1>

<form action="/test2/store" method="POST">
  @csrf

  <label for="description">Description:</label>
  <select name="description" id="description">
    <option value="Pembelian">Pembelian</option>
    <option value="Penjualan">Penjualan</option>
  </select><br>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date"><br>

  <label for="qty">Qty:</label>
  <input type="number" id="qty" name="qty"><br>

  <label for="cost">Cost:</label>
  <input type="number" step="0.01" id="cost" name="cost"><br>

  <label for="price">Price:</label>
  <input type="number" step="0.01" id="price" name="price"><br>

  <label for="total_cost">Total Cost:</label>
  <input type="number" step="0.01" id="total_cost" name="total_cost"><br>

  <label for="qty_balance">Qty Balance:</label>
  <input type="number" id="qty_balance" name="qty_balance"><br>

  <label for="value_balance">Value Balance:</label>
  <input type="number" step="0.01" id="value_balance" name="value_balance"><br>

  <label for="hpp">HPP:</label>
  <input type="number" step="0.01" id="hpp" name="hpp"><br>

  <input type="submit" name="submit" value="Submit">
</form>

