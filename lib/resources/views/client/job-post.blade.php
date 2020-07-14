@extends('client.main')

@section('titleclient','Đặt chỗ')

@section('mainclient')

<!-- <script type="text/javascript">

function handleClick(evt) {
  var node = evt.target || evt.srcElement;
  if (node.name == 'trống') {
    node.value = "đã đặt";
  }
}

</script> -->
<script>
var i = 1;
var arr =[];
var tien = 0;
function myFunction(vitrighetrong,Giave) {
  if( arr.indexOf(vitrighetrong) == -1 )
  {
    arr[i] = vitrighetrong;
    document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML+arr[i]+"&nbsp;";
    i++;
    tien = tien + Giave;
    document.getElementById("total").innerText = "Tổng tiền  :" + tien;
  }

}
</script>
<!-- <script>
function myFunction(vitrighetrong,Giave) {

document.getElementById("demo").innerHTML = document.getElementById("demo").innerHTML+vitrighetrong+"&nbsp;&nbsp;";
document.getElementById("total").innerHTML = document.getElementById("total").innerHTML+ Giave ;
}
</script> -->
<script>
function datcho(a) {
  var x = Math.floor((Math.random() * 1000) + 1);
  document.getElementById("dc").innerHTML = a+x;
}
</script>
 <form action="{{asset('Thanhtoan/'.$tk->IDHang)}}" method="get">
<section class="ftco-section">
 <div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-7 heading-section text-center ftco-animate">
     <h3 style="color: red;font-family: Time New Romans;" >Nhà xe {{$tk->tenhang}}</h3>
     <h5 class="mb-0" >*Lưu ý : Mỗi hàng chỉ được chọn 1 ghế . Những ô đã được đánh dấu tích là  những ghế đã được đặt. </h5><br>
      <h5 class="mb-0" >Xin cảm ơn</h5>
     Ghế đồng giá 260.000đ
   </div>
 </div>
   
      <link rel="stylesheet" type="text/css" href="datepicker.css" /> 
      <p style="color: red;font-family: Time New Romans;"> Ngày Đi <input type="date" value="{{$ngaydi}}" name="day" readonly="readonly"></p>
 <div class="row">
   <div class="col-md-3 ftco-animate">
    <table id="table1"  onclick="handleClick(event);" >
      <tbody>
        <tr>
          <td>
            <input value="Tài xế" readonly="readonly" >
            <tr>
              <th>
                <p>Hàng A dưới</p>
                @foreach($datcho1 as $d1)
                <tr> 
                 <td>
                  @if(($d1->statusghe)==1)
                  <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" checked="checked" disabled="disabled" value="{{$d1->vitrighetrong}}">{{$d1->vitrighetrong}}ưới
                  @else
                  <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" name="h1" value="{{$d1->vitrighetrong}}">{{$d1->vitrighetrong}}ưới
                  @endif

                  <!-- <input id="edit1" onclick="myFunction(this.value,260000)" type="text" name="trống" value="{{$d1->vitrighetrong}}ưới" readonly="readonly" > -->
                  @endforeach


                </tbody>
              </table>
            </div>
            <div class="col-md-3 ftco-animate">
              <table id="table1"  onclick="handleClick(event);">
                <tbody>
                  <tr>
                    <td>
                      <input value="Cửa ra" readonly="readonly">
                      <tr>
                        <th>
                          <p>Hàng B dưới</p>
                          @foreach($datcho2 as $d2)
                          <tr> 
                           <td>

                            <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" name="h2" value="{{$d2->vitrighetrong}}">{{$d2->vitrighetrong}}ưới
                            @endforeach


                          </tbody>
                        </table>
                      </div>

                      <div class="col-md-3 ftco-animate">
                        <table id="table1"  onclick="handleClick(event);">
                          <tbody>

                            <tr>
                              <td>
                                <input type="text" readonly="readonly">
                                <tr>
                                  <th>
                                    <p>Hàng A trên</p>
                                    @foreach($datcho3 as $d3)
                                    <tr> 
                                     <td>

                                       @if(($d3->statusghe)==1)
                  <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" checked="checked" disabled="disabled" value="{{$d3->vitrighetrong}}" readonly="readonly">{{$d3->vitrighetrong}}rên
                  @else
                  <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" name="h1" value="{{$d3->vitrighetrong}}">{{$d3->vitrighetrong}}rên
                  @endif
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                                <div class="col-md-3 ftco-animate">
                                  <table id="table1"  onclick="handleClick(event);">
                                    <tbody>
                                     <tr>
                                      <td>
                                        <input value="" readonly="readonly">
                                        <tr>
                                          <th>
                                            <p>Hàng B trên</p>
                                            @foreach($datcho4 as $d4)
                                            <tr> 
                                             <td>

                                              <input id="edit1" onclick="myFunction(this.value,260000)" type="checkbox" name="h4" value="{{$d4->vitrighetrong}}">{{$d4->vitrighetrong}}rên
                                              @endforeach


                                            </tbody>
                                          </table>

                                        </div>
                                        <div class="col-md-3 ftco-animate" align="center">
                                        
                                      </div>
                                         {{csrf_field()}}
                                    
                                      
                                      </div>
                                      
                                    </div>

                                  </section>
                                  <p align="center" style="color: black;font-size:15px;" id="demo">Ghế được đặt :</p>
    <p align="center" style="color: black;font-size:15px;"  id="total">Tổng tiền : </p>
<p align="center" style="color: black;font-size:15px;"><input type="submit" name="submit" value="Thanh toán"></p>
    
     </form>

    <!--  -->

    @stop