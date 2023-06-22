<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>
<body>
  <main>
    <form class="form" action="" method="post">
      @csrf
      <div class="thanks__content">
        <div class="thanks__heading">
          <p>ご意見いただきありがとうございました。</p>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">トップページへ</button>
        </div>
      </div>
    </form>
  </main>  
</body>
</html>