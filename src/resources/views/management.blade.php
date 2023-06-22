<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/management.css') }}" />
</head>

<body>
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>管理システム</h2>
      </div>
    </div>
    <form class="form" action="/management/search" method="get">
      @csrf
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">お名前</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="fullname" value="">
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">性別</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--gender">
            <input type="radio" name="gender" value=""checked>
            <label class="all" for="">全て</label>
            <input type="radio" name="gender" value="男性">
            <label class="male" for="">男性</label>
            <input type="radio" name="gender" value="女性">
            <label class="female" for="">女性</label>
          </div>
        </div>
      </div>
      <div class="form__group">
        <div class="form__group-title">
          <span class="form__label--item">メールアドレス</span>
        </div>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="email" name="email" value="">
          </div>
        </div>
      </div>
      <div class="form__button">
        <button class="form__button-submit" type="submit">検索</button>
      </div>
      <div class="form__modify">
        <a class="form__modify-submit" href="">リセット</a>
      </div>
    </form>
    <table>
      <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      
    </table>
    <div>
      <button type="submit">削除</button>
    </div>
  </main>
</body>
</html>