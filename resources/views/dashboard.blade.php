@extends('layouts.main')
@section('container')
<div>
    <div class="container">
        <div class="row">
          <div class="col-12 p-3 bg-white">
            <h3 class="text-center mb-5 mt-5">Welcome {{$username}}</h3>
  
            <form class="horizontal-form" method="POST" action="">
      <input type="date" id="transaction_date" name="transaction_date" required>
  
          <select  name="category_id" required>

            @foreach ($all_Category as $ktg)
            <option value="{{$ktg['category_id']}}">{{$ktg['category_name']}}  || {{$ktg['category_id']}}</option>
            @endforeach
          </select>
  
      <label for="input3">Nama</label>
      <input type="text" id="transaction_name" name="transaction_name" required>
  
      <label for="input4"> Jumlah</label>
      <input type="number" id="input4" name="transaction_amount" required>
  
      <label for="input5">Harga</label>
      <input type="number" id="input5" name="transaction_price" required>
  
      <button type="submit" class="btn btn-primary" name="submit" required >Simpan</button>
  </form>
  
  
  <!-- Date range filter form -->
  <form class="horizontal-form mb-3" method="GET">
          <label for="start_date">Start Date:</label>
          <input type="date" id="start_date" name="start_date" required>
  
          <label for="end_date">End Date:</label>
          <input type="date" id="end_date" name="end_date"  required>
  
          <button type="submit" class="btn btn-primary" name="filter" >Filter</button>
        </form>
  
  
            <div class="dropdown mb-3 mt-3">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Category
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

        @foreach ($all_Category as $row)
        <li><a class="dropdown-item" href="dashboard.php?category_id={{$row['category_id']}}">{{$row['category_name']}} || {{$row['category_id']}}</a></li>
        @endforeach
    </ul>
  
    <a href="dashboard.php" class="btn btn-md btn-primary">Back</a>
  </div>
  
  
  
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th class="text-center">Date</th>
                      <th class="text-center">Transaction Name</th>                
                      <th class="text-center">Category ID</th>                  
                      <th class="text-center">Transaction Amount</th>                  
                      <th class="text-center">Transaction Price</th>                  
                      <th class="text-center">Grand Total</th>                  
                      <th class="text-center">Balance</th>                  
                      <th class="text-center">Action</th>                  
                    </tr>
              </thead>
              <tbody>
          <?php $balance = 0; ?>
                <?php foreach($transactions as $row):?>
                  <tr>
                    <td class="text-center" ><?=$row['transaction_date']?></td>
                    <td ><?=$row['transaction_name']?></td>
                    <td class="text-center" ><?=$row['category_id']?></td>
                    <td class="text-center" ><?=$row['transaction_amount']?></td>
                    <td class="text-center" >Rp.<?=number_format($row['transaction_price'], 0, ".", ".")?></td>
  
                    <?php $grandtotal = $row['transaction_price'] * $row['transaction_amount'] ?>
                    <td class="text-center" >Rp. <?= number_format( $grandtotal, 0, ".", ".") ?></td>
                    <td> Rp.
                      <?php
                      if ($row['category_type'] == 'income') {
                      $balance += $grandtotal; // Add to balance for income
                  } else {
                      $balance -= $grandtotal; // Subtract from balance for outcome
                  } 
                  echo number_format( $balance, 0, ".", ".")
                  ?>
                    </td>
                    <td>
                          <a  href="transactionEdit.php?transaction_id=<?=$row['transaction_id'];?>" class="btn btn-warning btn-sm ">Edit</a>
                          <a href="../Controller/transactionDelete.php?transaction_id=<?=$row['transaction_id'];?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                     </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
          </table>
          <div>
                  
            </div>
      </div>
    </div>
  </div>
</div>
@endsection   