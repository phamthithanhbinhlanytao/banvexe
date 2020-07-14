@extends('client.main')

@section('titleclient','Thanh toán')

@section('mainclient')
<script>
function datcho(a) {
  var x = Math.floor((Math.random() * 1000) + 1);
  document.getElementById("dc").style.color = "red";
  document.getElementById("dc").innerHTML = a+x;
}
</script>
 <section class="ftco-section ftco-no-pb bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
            
            
            <h2 class="mb-4">Điền thông tin thanh toán</h2>
            <button onclick="datcho('{{$tk->Ma}}')">Lấy mã đặt chỗ</button>
          </div>
        </div>
            <div class="row block-9">
              @if(Auth::check())
          <div class="col-md-6 order-md-last d-flex">
            <form class="bg-white p-5 contact-form" align="center" method="post">
              @include('error.note')
              <div class="form-group">
                <input type="text" name="ten" class="form-control" value="{{Auth::user()->email}}" autofocus="autofocus" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="status" class="form-control" readonly="readonly" value="0">
              </div>
              <div class="form-group">
               <p id="dc">Lấy mã đặt chỗ ở trên</p>
               <input type="text" name="madatcho" class="form-control" placeholder="Nhập mã trên vào đây" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" value="0{{Auth::user()->phone}}" required="required"> 
              </div>
              <div class="form-group">
                <input type="date" name="ngaydi" class="form-control" value="{{$ngayd}}" readonly="readonly">
              </div>
              <div class="form-group">
                <input type="text" name="ghedat" class="form-control" readonly="readonly" value="{{$vedat1}} {{$vedat2}} {{$vedat3}} {{$vedat4}} ">
              </div>
              <div class="form-group">
                <input type="text" name="tongtien" class="form-control" readonly="readonly" value="520000">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="noidi"  value="{{$tk->Noidi}}" readonly="readonly">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="noiden"  value="{{$tk->Noiden}}" readonly="readonly">
              </div>
              <div class="form-group">
                <select required name="hang" class="form-control">
                      
                      <option  value="{{$tk->IDHang}}">{{$tk->tenhang}}</option>
                  
                              </select>
              </div>
              <div class="form-group">
              <ul class="payment_methods methods">
                <li class="payment_method_bacs">
                  <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="Thanh toán tại quầy" checked="checked" data-order_button_text="">
                  <label for="payment_method_bacs">Thanh toán tại quầy </label>
                  <div class="payment_box payment_method_bacs" style="display: block;">
                    Bạn hãy di chuyển đến bến xe trung tâm thành phố. Sau đó đưa mã đặt chỗ ra cho nhân viên và tiến hành thanh toán
                  </div>            
                </li>

                <li class="payment_method_cheque">
                  <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="Chuyển khoản" data-order_button_text="">
                  <label for="payment_method_cheque">Chuyển khoản </label>
                  <div class="payment_box payment_method_cheque" style="display: block;">
                    Chức năng này hiện tại chưa hoàn thiện
                    Mong khách hàng thông cảm
                  </div>            
                </li>
                
              </ul>
              </div>
              <div class="form-group">
                <textarea name="note" id="" cols="40" rows="4" class="form-control" placeholder="lời nhắn"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Thanh toán" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
          @else
               <div class="col-md-6 order-md-last d-flex" >
            <form class="bg-white p-5 contact-form" align="center" method="post">
              @include('error.note')
              <div class="form-group">
                <input type="text" name="ten" class="form-control" placeholder="Your Name" autofocus="autofocus" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="status" class="form-control" readonly="readonly" value="0">
              </div>
              <div class="form-group">
               <p id="dc">Lấy mã đặt chỗ ở trên</p>
               <input type="text" name="madatcho" class="form-control" placeholder="Nhập mã trên vào đây" required="required">
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Số điện thoại" required="required"> 
              </div>
              <div class="form-group">
                <input type="date" name="ngaydi" class="form-control" value="{{$ngayd}}" readonly="readonly">
              </div>
              <div class="form-group">
                <input type="text" name="ghedat" class="form-control" readonly="readonly" value="{{$vedat1}} {{$vedat2}} {{$vedat3}} {{$vedat4}} ">
              </div>
              <div class="form-group">
                <input type="text" name="tongtien" class="form-control" readonly="readonly" value="520000">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="noidi"  value="{{$tk->Noidi}}" readonly="readonly">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="noiden"  value="{{$tk->Noiden}}" readonly="readonly">
              </div>
              <div class="form-group">
                <select required name="hang" class="form-control">
                      
                      <option  value="{{$tk->IDHang}}">{{$tk->tenhang}}</option>
                  
                              </select>
              </div>
              <div class="form-group">
              <ul class="payment_methods methods">
                <li class="payment_method_bacs">
                  <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="Thanh toán tại quầy" checked="checked" data-order_button_text="">
                  <label for="payment_method_bacs">Thanh toán tại quầy </label>
                  <div class="payment_box payment_method_bacs" style="display: block;">
                    Bạn hãy di chuyển đến bến xe trung tâm thành phố. Sau đó đưa mã đặt chỗ ra cho nhân viên và tiến hành thanh toán
                  </div>            
                </li>

                <li class="payment_method_cheque">
                  <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="Chuyển khoản" data-order_button_text="">
                  <label for="payment_method_cheque">Chuyển khoản </label>
                  <div class="payment_box payment_method_cheque" style="display: block;">
                    Chức năng này hiện tại chưa hoàn thiện
                    Mong khách hàng thông cảm
                  </div>            
                </li>
                
              </ul>
              </div>
              <div class="form-group">
                <textarea name="note" id="" cols="40" rows="4" class="form-control" placeholder="lời nhắn"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Thanh toán" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
          @endif
        </div>
        </div>
    </section>
    @stop