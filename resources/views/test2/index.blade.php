<a href="/test2/create">Add Test2</a>

<table border="1">
  <tr>
    <th>Id</th>
    <th>Description</th>
    <th>Date</th>
    <th>Qty</th>
    <th>Cost</th>
    <th>Price</th>
    <th>Total Cost</th>
    <th>Qty Balance</th>
    <th>Value Balance</th>
    <th>HPP</th>
    <th>Created At</th>
    <th>Action</th>
  </tr>

  @foreach($test2 as $t)
    <tr>
      <td>{{$t->id}}</td>
      <td>{{$t->description}}</td>
      <td>{{$t->date}}</td>
      <td>{{$t->qty}}</td>
      <td>{{$t->cost}}</td>
      <td>{{$t->price}}</td>
      <td>{{$t->total_cost}}</td>
      <td>{{$t->qty_balance}}</td>
      <td>{{$t->value_balance}}</td>
      <td>{{$t->hpp}}</td>
      <td>{{$t->created_at}}</td>
      <td>
        <a href="/test2/{{$t->id}}/edit">Edit</a>
        <form action="/test2/{{$t->id}}" method="POST">
          @csrf
          @method('delete')
          <input type="submit" name="submit" value="Delete">
        </form>
      </td>
    </tr>
  @endforeach
</table>