@extends('layouts.main')
@section('container')
<div>
    <div class="container">
        <div class="row">
        <h3 class="text-center mb-5 mt-5">BUKU KAS 2024</h3>
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th class="text-center">Total Income</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"> Rp.{{$total_income}}</td>
                </tr>
              </tbody>
            </table>
          </div>
    
          <div class="col-md-6">
          <table class="table">
              <thead>
                <tr>
                  <th class="text-center">Total Outcome</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td class="text-center"> Rp.{{$total_outcome}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    
    
      </div>
    
      
      <div class="container">
        <div class="row">
          <!-- First column -->
          <div class="col-md-6 border">
            <h2>Category</h2>
            <?php foreach($all_Category as $row):?>
            <p class="border"><?= $row?></p>
            <?php endforeach; ?>
          </div>
          <!-- Second column -->
    
          <div class="col-md-6 border">
            <h2>Total</h2>
            <?php foreach($sum_Category as $row):?>
            <p><?= $row
            ?></p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <a href="dashboard.php" class="btn btn-md btn-primary">Back</a>
</div>
@endsection   