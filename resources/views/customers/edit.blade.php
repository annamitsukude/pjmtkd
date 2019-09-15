<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>顧客編集</title>
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
      <form method="post" action="{{ url('/customers')}}">
        {{ csrf_field() }}

        <section class="edit-button">
            <a href="#" class="btn-flat-border">登録する<i class="fas fa-address-card"></i></a>
        </section>

        <!-- <button type="submit" class="btn btn-success">顧客登録</button> -->
        <section class="touroku">
          <div class="form-group">
              <label for ="company_name" class="label">会社名</label>
              <input type="text" value="{{old('company_name',$customer->company_name)}}" name="company_name" id="company_name">
          </div>

          <div class="form-group">
              <label for="company_name_kana" class="label">会社名(ふりがな)</label>
              <input type="text" value="{{old('company_name_kana',$customer->company_name_kana)}}" name="company_name_kana" id="company_name_kana">
          </div>

          <div class="form-group">
              <label for="division" class="label">所属(部署)/役職</label>
              <input type="text" value="{{old('division',$customer->division)}}" name="division" id="division">
          </div>

          <div class="form-group">
              <label for="name" class="label">氏名</label>
              <input type="text" value="{{old('name',$customer->name)}}" name="name" id="name">
          </div>

          <div class="form-group">
              <label for="name_furigana" class="label">氏名(ふりがな)</label>
              <input type="text" value="{{old('name_furigana',$customer->name_furigana)}}" name="name_furigana" id="name_furigana">
          </div>

          <div class="form-group">
              <label for="name_renmei" class="label">連名</label>
              <input type="text" value="{{old('name_renmei',$customer->name_renmei)}}" name="name_renmei" id="name_renmei">
          </div>

          <div class="form-group">
              <label for="payment_term" class="label">支払い条件</label>
              <select value="{{old('payment_term',$customer->payment_term)}}" name="payment_term" id="payment_term">
                <option value="mae">
                  前支払い
                </option>
                <option value="seikyusho-yokugetu" selected>
                  請求書支払(翌月末)
                </option>
                <option value="seikyusho-yokuyokugetu">
                  請求書支払(翌々月末)
                </option>
              </select>
          </div>

          <div class="form-group">
              <label for="discount" class="label">割引率</label>
              <input type="text" value="{{old('discount',$customer->discount)}}" name="discount" id="discount" placeholder="5%">
          </div>

          <div class="form-group">
            <!-- 郵便番号紐付けできないのかな -->
              <label for="address_main" class="label">郵便番号</label>
              <input type="number" value="{{old('address_main',$customer->address_main)}}" name="address_main" id="address_main">
          </div>

          <div class="form-group">
              <label for="address_sub" class="label">住所</label>
              <input type="text" value="{{old('address_sub',$customer->address_sub)}}" name="address_sub" id="address_sub">
          </div>

          <div class="form-group">
              <label for="phone_num" class="label">携帯番号</label>
              <input type="number" value="{{old('phone_num',$customer->phone_num)}}" name="phone_num" id="phone_num">
          </div>

          <div class="form-group">
              <label for="tel" class="label">電話番号</label>
              <input type="number" value="{{old('tel',$customer->tel)}}" name="tel" id="tel">
          </div>

          <div class="form-group">
              <label for="mail" class="label">メールアドレス</label>
              <input type="email" value="{{old('mail',$customer->mail)}}" name="mail" id="mail">
          </div>

          <!-- チェックボックスの隙間きになる -->
          <div class="form-group">
              <label class="label">
                <input type="hidden" name="dm" value="無">
                <input type="checkbox" name="dm" value="有">DM
              </label>
          </div>

          <div class="form-group">
              <label for="route" class="label">搬入経路</label>
              <textarea value="{{old('route',$customer->route)}}" name="route" id="route"></textarea>
          </div>

          <div class="form-group">
            <!-- placeoholder入れる -->
              <label for="memo" class="label">メモ</label>
              <textarea value="{{old('memo',$customer->memo)}}" name="memo" id="memo" placeholder="引き継ぎ項目を記入">
              </textarea>
          </div>

        </section>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
