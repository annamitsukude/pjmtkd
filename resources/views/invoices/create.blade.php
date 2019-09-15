<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>請求書編集</title>
  <script src="https://kit.fontawesome.com/cb42dc71a3.js"></script>
  <link rel="stylesheet" href="/css/stylesheet4.css">
</head>
  <body>
    <header>
      <nav>
        <ul class="main-nav">
            <li><a href="#" class="logo">seiton</a></li>

            <!-- 多分liにform入らない -->
            <li>
              <form id="form02" action="#">
                <input id="input02" type="text" placeholder="検索"><!--
                /input間で改行したい場合はコメントアウト必須/
                --><input id="submit02" type="submit" value="">
              </form>
            </li>
            <!-- 再度調査 -->

            <li><a href="#">顧客名簿</a></li>
            <li><a href="#">請求書一覧</a></li>
            <li><a href="#">物品登録</a></li>
        </ul>
          <!-- サーチの方法探す -->
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
      </nav>
    </header>

    <div class="container">
        <!-- <button type="submit" class="btn btn-success">顧客登録</button> -->

        <form method="post" action="{{ action('InvoicesController@store',$customer)}}">
          {{ csrf_field() }}
          <button type="submit" class="btn-flat-border">登録する<i class="fas fa-address-card"></i></button>

          <div class="form-group">
              <label for="create_date">発行日</label>
              <input type="date" value="{{old('create_date')}}" name="create_date" id="create_date">
          </div>

          <div class="form-group">
              <label for="payment_date">支払期限</label>
              <input type="date" value="{{old('payment_date')}}" name="payment_date" id="payment_date">
          </div>

          <div class="form-group">
              <label for="payment_num">請求番号</label>
              <input type="number" value="{{old('payment_num')}}" name="payment_num" id="payment_num">
          </div>

          <div class="form-group">
              <label for="method_pay">支払い方法</label>
              <input type="text" value="{{old('method_pay')}}" name="method_pay" id="method_pay">
          </div>

          <div class="form-group">
              <label for="date_pay">支払い日</label>
              <input type="date" value="{{old('date_pay')}}" name="date_pay" id="date_pay">
          </div>

          <div class="form-group">
              <label for="staff">担当名</label>
              <input type="text" value="{{old('staff')}}" name="staff" id="staff">
          </div>

          <div class="form-group">
              <label for="place_delivery">納品場所</label>
              <input type="text" value="{{old('place_delivery')}}" name="place_delivery" id="place_delivery">
          </div>

      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
