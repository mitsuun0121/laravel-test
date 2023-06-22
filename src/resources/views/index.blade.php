<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="fullname" value="{{ old('fullname', session('contact.fullname')) }}">
              <p class="form__input-alert">例）山田　太郎</p>
              <div class="form__error">
                @error('fullname')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--gender">
              <input type="radio" name="gender" value="男性"checked>
              <label class="male" for="">男性</label>
              <input type="radio" name="gender" value="女性">
              <label class="female" for="">女性</label>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email', session('contact.email')) }}">
              <p class="form__input-alert">例）test@examle.com</p>
              <div class="form__error">
                @error('email')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <span class="form__label--unit">〒</span>
            <div class="form__input--text">
              <input type="text" name="postcode" value="{{ old('postcode', session('contact.postcode')) }}">
              <div class="form__input-alert">例）123-4567</div>
              <div class="form__error">
                @error('postcode')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" value="{{ old('address', session('contact.address')) }}">
              <p class="form__input-alert">例）東京都渋谷区千駄ヶ谷1-2-3</p>
              <div class="form__error">
                @error('address')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" value="{{ old('building_name', session('contact.building_name')) }}">
              <p class="form__input-alert">例）千駄ヶ谷マンション101</p>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="option">{{ old('option', session('contact.option')) }}</textarea>
              <div class="form__error">
                @error('option')
                {{ $message }}
                @enderror
              </div>
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
  </main>  

</body>
</html>