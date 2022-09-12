<?php

function populateHeaderList() {

  $arr = ['Recipes', 'Popular', 'Meat & Seafood',
    'Healthy & Diet', 'Holidays', 'Cuisine', 'Seasonal'];

  foreach($arr as $val) {

    echo "
      <li class='the-header__list-item'>
    
        <h3 class='the-header__links-heading'>$val</h3>
    
        <ul class='the-header__inner-list'>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Breakfast & Brunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Lunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Appetizers & Snack Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dinner Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dessert Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Breakfast & Brunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Lunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Appetizers & Snack Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dinner Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dessert Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Breakfast & Brunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Lunch Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Appetizers & Snack Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dinner Recipes</a></li>
          <li><a class='the-header__inner-list-link' href='javascript:void(0)'>Dessert Recipes</a></li>
          <li><a class='the-header__inner-list-link the-header__see-more' href='javascript:void(0)'>See More</a></li>
        </ul>
        
      </li>
    ";
  }
}

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Food.com</title>
  <link rel="stylesheet" href="css/main.css">
  <script type="module" href="js/main.js"></script>

</head>

<body>
  
  <header class="the-header">

    <!-- 1320px dla headera, 1000px dla reszty -->

    <nav class="the-header__content">

      <button class="the-header__menu-button">
        <img class="the-header__menu-icon" src="resources/images/icons/menu.svg">
      </button>
  
      <a class="the-header__logo-container" href="javascript:void(0)">
        <img class="the-header__logo" src="resources/images/misc/logo.svg">
      </a>

      <ul class="the-header__list">

        <?php 
          populateHeaderList();
        ?>

      </ul>

      <div class="the-header__empty-column"></div>

      <a class="the-header__icon-link" href="javascript:void(0)">
        <img src="resources/images/icons/search.svg">
      </a>

      <a class="the-header__icon-link" href="javascript:void(0)">
        <img src="resources/images/icons/flag.svg">
      </a>

      <a class="the-header__icon-link" href="javascript:void(0)">
        <img src="resources/images/icons/person.svg">
      </a>

    </nav>

  </header>

  <main class="the-main">

    <section class="the-main-first-section">

      <a class="first-section__top-link" href="javascript:void(0)">
        <img class="first-section__top-link-image" src="resources/images/carousel/for-kids.jpg">
        <span class="first-section__top-link-span">Top 100 Recipes For Kids</span>
      </a>

      <a class="first-section__top-link" href="javascript:void(0)">
        <img class="first-section__top-link-image" src="resources/images/carousel/pork-chops.jpg">
        <span class="first-section__top-link-span">Pork Chops, 34 Ways</span>
      </a>

      <a class="first-section__top-link" href="javascript:void(0)">
        <img class="first-section__top-link-image" src="resources/images/carousel/side-dishes.jpg">
        <span class="first-section__top-link-span">50 Ultimate Side Dishes</span>
      </a>

      <article class="first-section-whats-fresh">

        <h3 class="whats-fresh__heading" >What's fresh?</h3>

        <div class="whats-fresh__content">

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

          </article>

        </div>

        <a class="whats-fresh__view-all" href="javascript:void(0)">View all</a>

      </article>

    </section>

  </main>

</body>

</html>