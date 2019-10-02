<!-- 詳細画面 -->
<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>請求書詳細</title>
    <script src="https://kit.fontawesome.com/cb42dc71a3.js"></script>
    <link rel="stylesheet" href="/css/stylesheet6.css">
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
        <!-- 下記のhrefの中、修正する -->
        <a href="{{ url('/customers/' . $customer->id .'/invoices/' . $invoice->id . '/edit') }}" class="btn-flat-border">編集する<i class="fas fa-marker"></i></a>
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
              <th scope="col">#</th><td scope="row">{{ $invoice->customer_id }}</td>
            </tr>
            <tr>
              <th>会社名</th><td>{{ $customer->company_name }} <span>{{ $customer->company_name_kana }}</span></td>
            </tr>
            <tr>
              <th>請求書作成日</th><td>{{ $invoice->create_date }}</td>
            </tr>
            <tr>
              <th>支払期限</th><td>{{ $invoice->payment_date }}</td>
            </tr>
            <tr>
              <th>納品場所</th><td>{{ $invoice->place_delivery}}</a></td>
            </tr>
            <tr>
              <th>請求書番号</th><td>{{ $invoice->payment_num }}</td>
            </tr>
            <tr>
              <th>支払方法</th><td>{{ $invoice->method_pay}}</td>
            </tr>
            <tr>
              <th>担当</th><td>{{ $invoice->staff}}</td>
            </tr>
          </table>
      </div>
      </div>
    </section>

    <section class="secound-info">
      <div class="container">
          <h3 class="subtitle">経理情報</h3>
          <!-- <div class="secound-left-info"> -->
            <table class="tabel-base">
              <tr>
                <th>支払い条件</th>
                <th>割引率</th>
                <td>{{ $customer->payment_term}}</td>
                <td>{{ $customer->discount}}</td>
              </tr>
            </table>
          <!-- </div> -->
      </div>
    </section>



    <section class="invoices-item container">
        <h3 class="subtitle">請求内容</h3>
        <table>
          <tr>
            <th>品番</th>
            <th>品名</th>
            <th>仕様</th>
            <th>数量</th>
            <th>単価</th>
          </tr>
          @foreach ($invoice->invoice_items as $invoice_item)
          <tr>
            <td>{{$invoice_item->item_num}}</td>
            <td>{{$invoice_item->item_name}}</td>
            <td>{{$invoice_item->spec}}</td>
            <td>{{$invoice_item->number}}</td>
            <td>{{$invoice_item->unit_price}}</td>
          </tr>
          @endforeach

        </table>
    </section>

    <!-- <section class="invoices-info">
      <div class="container">
        <h3 class="subtitle">請求書</h3>

        @foreach ($customer->invoices as $invoice)
        <div class="box7">
          <p>{{ $invoice->payment_num }}</p>
        </div>
        @endforeach
      </div>
    </section> -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  </body>
</html>
