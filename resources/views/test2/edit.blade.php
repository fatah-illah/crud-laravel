<h1>Edit Test2</h1>

<form action="/test2/{{$test2->id}}" method="POST">
  @method('put')
  @csrf

  <label for="description">Description:</label>
  <select name="description" id="description">
    <option value="Pembelian" @if($test2->description == "Pembelian") selected @endif>Pembelian</option>
    <option value="Penjualan" @if($test2->description == "Penjualan") selected @endif>Penjualan</option>
  </select><br>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date" value="{{$test2->date}}"><br>

  <label for="qty">Qty:</label>
  <input type="number" id="qty" name="qty" value="{{$test2->qty}}"><br>

  <label for="cost">Cost:</label>
  <input type="number" step="0.01" id="cost" name="cost" value="{{$test2->cost}}"><br>

  <label for="price">Price:</label>
  <input type="number" step="0.01" id="price" name="price" value="{{$test2->price}}"><br>

  <label for="total_cost">Total Cost:</label>
  <input type="number" step="0.01" id="total_cost" name="total_cost" value="{{$test2->total_cost}}"><br>

  <label for="qty_balance">Qty Balance:</label>
  <input type="number" id="qty_balance" name="qty_balance" value="{{$test2->qty_balance}}"><br>

  <label for="value_balance">Value Balance:</label>
  <input type="number" step="0.01" id="value_balance" name="value_balance" value="{{$test2->value_balance}}"><br>

  <label for="hpp">HPP:</label>
  <input type="number" step="0.01" id="hpp" name="hpp" value="{{$test2->hpp}}"><br>

  <input type="submit" name="submit" value="Submit">
</form>

