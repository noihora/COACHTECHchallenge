<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>

  <main>
 
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>お問い合わせ内容確認</h2>
      </div>


      <form class="form" action="/contacts" method="post">
      @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">

            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
              <input type="text" name="name" value="{{ $b['name'] }}" readonly />
              </td>
            </tr>

            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="sex" value="{{ $b['sex'] }}" readonly />
              </td>
            </tr>



            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $b['email'] }}" readonly />
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">郵便番号</th>
              <td class="confirm-table__text">
                <input type="number" name="postal-code" value="{{ $b['postal-code'] }}" readonly />
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $b['address'] }}" readonly/>
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="city" value="{{ $b['city'] }}" readonly />
              </td>
            </tr>


            <tr class="confirm-table__row">
              <th class="confirm-table__header">ご意見</th>
              <td class="confirm-table__text">
                <input type="text" name="content" value="{{ $b['content'] }}" readonly />
              </td>
            </tr>

          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
      </form>
      <div class="form__button">
        <a href="http://localhost/">
            <button class="form__button-submit" type="submit">リセット</button>
        </a>
      </div>
    </div>
  </main>
</body>

</html>