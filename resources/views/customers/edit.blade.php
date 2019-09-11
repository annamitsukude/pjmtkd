<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>顧客編集</title>
    <link rel="stylesheet" href="/css/stylesheet3.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">pjmtkd</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">ホーム<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">顧客名簿</a>
          </li>
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">請求書一覧</a>
          </li>
          <li class="nav-item dropdown">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">物品登録</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
    <form method="post" action="{{ url('/customers')}}">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-success">顧客登録</button>
        <div class="form-group">
          <label>会社名</label>
          <input type="text" value="{{old('company_name',$customer->company_name)}}" name="company_name" class="form-control">
      </div>
      <div class="form-group">
          <label>会社名(ふりがな)</label>
          <input type="text" value="{{old('company_name_kana',$customer->company_name_kana)}}" name="company_name_kana" class="form-control">
      </div>
      <div class="form-group">
          <label>所属(部署)/役職</label>
          <input type="text" value="{{old('division',$customer->division)}}" name="division" class="form-control">
      </div>
      <div class="form-group">
          <label>氏名</label>
          <input type="text" value="{{old('name',$customer->name)}}" name="name" class="form-control">
      </div>
      <div class="form-group">
          <label>氏名(ふりがな)</label>
          <input type="text" value="{{old('name_furigana',$customer->name_furigana)}}" name="name_furigana" class="form-control">
      </div>
      <div class="form-group">
          <label>連名</label>
          <input type="text" value="{{old('name_renmei',$customer->name_renmei)}}" name="name_renmei" class="form-control">
      </div>
        <!-- いくつかの候補から選べるようにしたい -->
      <div class="form-group">
          <label>支払い条件</label>
          <input type="text" value="{{old('payment_term',$customer->payment_term)}}" name="payment_term" class="form-control">
      </div>
      <div class="form-group">
        <!-- 元のカラムに%入れたい -->
          <label>割引率</label>
          <input type="text" value="{{old('discount',$customer->discount)}}" name="discount" class="form-control">
      </div>
      <div class="form-group">
        <!-- 郵便番号紐付けできないのかな -->
        <!-- 自宅/会社　など種類選びたい -->
          <label>住所(メイン)</label>
          <input type="text" value="{{old('address_main',$customer->address_main)}}" name="address_main" class="form-control">
      </div>
      <div class="form-group">
          <label>住所(サブ)</label>
          <input type="text" value="{{old('address_sub',$customer->address_sub)}}" name="address_sub" class="form-control">
      </div>
      <div class="form-group">
          <label>携帯番号</label>
          <input type="number" value="{{old('phone_num',$customer->phone_num)}}" name="phone_num" class="form-control">
      </div>
      <div class="form-group">
          <label>電話番号</label>
          <input type="text" value="{{old('tel',$customer->tel)}}" name="tel" class="form-control">
      </div>
      <div class="form-group">
          <label>メールアドレス</label>
          <input type="text" value="{{old('mail',$customer->mail)}}" name="mail" class="form-control">
      </div>
      <!-- チェックボックスの隙間きになる -->
      <div class="checkbox">
          <label>
            <input type="hidden" name="dm" value="無">
            <input type="checkbox" name="dm" value="有">DM
          </label>
      </div>
      <div class="form-group">
          <label>搬入経路</label>
          <input type="text" value="{{old('route',$customer->route)}}" name="route" class="form-control">
      </div>
      <div class="form-group">
          <label>メモ</label>
          <input type="text" value="{{old('memo',$customer->memo)}}" name="memo" class="form-control">
      </div>

        <button type="submit" class="btn btn-success">顧客登録</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
