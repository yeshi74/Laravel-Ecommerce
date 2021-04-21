@extends('styles')
@extends('header')

@section('content')
<div class="custom-product">
    <div class="col-sm-10">
        <table class="table table-striped">
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{ $total }}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>$ {{ $total + 10 }}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="orderplace" method="POST">
                @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method:</label><br>
                  <input type="radio" value="cash" name="payment"><span> Credit/Debit Card</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> Net Banking</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> Cash on Delivery</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> Credit/Debit Card</span>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
    </div>
</div>
@endsection

@extends('footer')