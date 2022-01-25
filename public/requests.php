<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title>GroomRoom</title>
</head>

<body>
  <div class="header">
    <div class="header-title">GROOMING<span class="header-title_text">Service for dogs and cats</span></div>
    <div class="header-menu">
      <div class="header-menu-main header-menu_item">
        <svg class="menu-main_svg" width="24" height="25" viewBox="0 0 24 25" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M10 20.5V14.5H14V20.5H19V12.5H22L12 3.5L2 12.5H5V20.5H10Z" fill="#C7C7C7" />
        </svg>
        <div class="menu-main_text">ГЛАВНАЯ</div>
      </div>
      <div class="header-menu-request header-menu_item header-menu_item--checked">
        <svg class="menu-request_svg" width="24" height="25" viewBox="0 0 24 25" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M19 3.5H14.82C14.4 2.34 13.3 1.5 12 1.5C10.7 1.5 9.6 2.34 9.18 3.5H5C3.9 3.5 3 4.4 3 5.5V19.5C3 20.6 3.9 21.5 5 21.5H19C20.1 21.5 21 20.6 21 19.5V5.5C21 4.4 20.1 3.5 19 3.5ZM12 3.5C12.55 3.5 13 3.95 13 4.5C13 5.05 12.55 5.5 12 5.5C11.45 5.5 11 5.05 11 4.5C11 3.95 11.45 3.5 12 3.5ZM14 17.5H7V15.5H14V17.5ZM17 13.5H7V11.5H17V13.5ZM17 9.5H7V7.5H17V9.5Z"
            fill="#7cb5eb" />
        </svg>
        <div class="menu-request_text">ЗАЯВКИ</div>
      </div>
      <div class="header-menu-lc header-menu_item">
        <svg class="menu-main_svg" width="24" height="25" viewBox="0 0 24 25" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M12 2.5C6.48 2.5 2 6.98 2 12.5C2 18.02 6.48 22.5 12 22.5C17.52 22.5 22 18.02 22 12.5C22 6.98 17.52 2.5 12 2.5ZM12 5.5C13.66 5.5 15 6.84 15 8.5C15 10.16 13.66 11.5 12 11.5C10.34 11.5 9 10.16 9 8.5C9 6.84 10.34 5.5 12 5.5ZM12 19.7C9.5 19.7 7.29 18.42 6 16.48C6.03 14.49 10 13.4 12 13.4C13.99 13.4 17.97 14.49 18 16.48C16.71 18.42 14.5 19.7 12 19.7Z"
            fill="#C7C7C7" />
        </svg>
        <div class="menu-lc_text">КАБИНЕТ</div>
      </div>
    </div>
  </div>
  <div class="request-content">
    <div class="request-content_title">Мои заявки</div>
    <div class="request-content-container">
      <div class="content-container-list">
        <div class="list-item">
        <img src="public/img/dog.png" alt="" class="list-item_img">
          <div class="list-item-about">
            <p class="item-about_title">Заявка #1</p>
            <p class="item-about_text">информация о заявке</p>
          </div>
        </div>
        <div class="list-item">
        <img src="public/img/dog.png" alt="" class="list-item_img">
          <div class="list-item-about">
            <p class="item-about_title">Заявка #1</p>
            <p class="item-about_text">информация о заявке</p>
          </div>
        </div>
        <div class="list-item">
        <img src="public/img/dog.png" alt="" class="list-item_img">
          <div class="list-item-about">
            <p class="item-about_title">Заявка #1</p>
            <p class="item-about_text">информация о заявке</p>
          </div>
        </div>
      </div>
      <form action="" class="request-form">
        <h4 class="form_title">Создайте заявку</h2>
          <input type="text" class="form_input form_item" placeholder="Текстовое поле">
          <input type="text" class="form_input form_item" placeholder="Текстовое поле">
          <button class="form_button form_item" type="submit">Записаться</button>
      </form>
    </div>
  </div>
  <div class="footer">
    groom-salon.com 2000-2999
  </div>
  <script src="public/js/vue.js"></script>
  <script src="public/js/script.js"></script>
</body>

</html>