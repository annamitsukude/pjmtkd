<!-- 詳細画面 -->
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>請求書詳細</title>
    <script src="https://kit.fontawesome.com/cb42dc71a3.js"></script>
    <link rel="stylesheet" href="/css/stylesheet2.css">
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
    <section class="edit-button">
      <div class="container">
        <!-- <a href="{{ url('/customers/' . $customer->id . '/edit') }}" class="btn-flat-border">編集する<i class="fas fa-marker"></i></a> -->
      </div>
    </section>

    <section class="first-info">
      <div class="container">
        <div class="username">
          <h1>{{ $customer->name }}</h1>
          <h3>{{ $customer->name_furigana }}</h3>
        </div>
        <div class="main_info">
          <table class="tabel-base">
            <tr>
              <th scope="col">#</th><td scope="row">1</td>
            </tr>
            <tr>
              <th>連名</th><td>{{ $customer->name_renmei }}</td>
            </tr>
            <tr>
              <th>会社名</th><td>{{ $customer->company_name }} <span>{{ $customer->company_name_kana }}</span></td>
            </tr>
            <tr>
              <th>所属</th><td>{{ $customer->division }}</td>
            </tr>
            <tr>
              <th>電話</th><td>{{ $customer->tel }}</td>
            </tr>
            <tr>
              <th>携帯</th><td>{{ $customer->phone_num }}</td>
            </tr>
            <tr>
              <th>メール</th><td><a href="#">{{ $customer->mail }}</a></td>
            </tr>
            <tr>
              <th>郵便番号</th><td>{{ $customer->address_main }}</td>
            </tr>
            <tr>
              <th>住所</th><td>{{ $customer->address_sub}}</td>
            </tr>
            <tr>
              <th>メモ</th><td>{{ $customer->memo}}</td>
            </tr>
          </table>
      </div>
      </div>
    </section>

    <section class="secound-info">
      <div class="container">
          <h3 class="subtitle">経理情報</h3>
          <div class="secound-left-info">
            <table class="tabel-base">
              <tr>
                <th>支払い条件</th><td>{{ $customer->payment_term}}</td>
              </tr>
              <tr>
                <th>DM</th><td>{{ $customer->dm}}</td>
              </tr>
            </table>
          </div>

          <div class="second-right-info">
            <table class="tabel-base">
              <tr>
                <th>割引率</th><td>{{ $customer->discount}}</td>
              </tr>
              <tr>
                <th>搬入経路</th><td>{{ $customer->route}}</td>
              </tr>
            </table>
          </div>
      </div>
    </section>


    <section class="invoices-info">
      <div class="container">
        <h3 class="subtitle">請求書</h3>

        @foreach ($customer->invoices as $invoice)
        <div class="box7">
          <p>{{ $invoice->payment_num }}</p>
        </div>
        @endforeach
      </div>
      <!-- あとで移動 -->
      <form method="post" action="{{ action('InvoicesController@store',$customer->id)}}">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-success">請求書登録</button>
          <div class="form-group">
              <label>発行日</label>
              <input type="date" value="{{old('create_date')}}" name="create_date" class="form-control">
          </div>
          <div class="form-group">
              <label>支払期限</label>
              <input type="date" value="{{old('payment_date')}}" name="payment_date" class="form-control">
          </div>
          <div class="form-group">
              <label>請求番号</label>
              <input type="text" value="{{old('payment_num')}}" name="payment_num" class="form-control">
          </div>
          <div class="form-group">
              <label>支払い方法</label>
              <input type="text" value="{{old('method_pay')}}" name="method_pay" class="form-control">
          </div>
          <div class="form-group">
              <label>支払い日</label>
              <input type="date" value="{{old('date_pay')}}" name="date_pay" class="form-control">
          </div>
          <div class="form-group">
              <label>担当名</label>
              <input type="text" value="{{old('staff')}}" name="staff" class="form-control">
          </div>
          <div class="form-group">
              <label>納品場所</label>
              <input type="text" value="{{old('place_delivery')}}" name="place_delivery" class="form-control">
          </div>
      </form>
      <!-- ここから上あとで移動 -->
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>
