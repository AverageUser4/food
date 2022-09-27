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
  <script type="module" src="js/main.js"></script>

</head>

<body>
  
  <header class="the-header">

    <!-- 1320px dla headera, 1000px dla reszty -->

    <nav class="the-header__content">

      <button class="the-header__menu-button">
        <img class="the-header__menu-icon" src="resources/images/icons/menu.svg">
      </button>
  
      <a class="the-header__logo-container">
        <img class="the-header__logo" src="resources/images/misc/logo.svg">
      </a>

      <ul class="the-header__list">

        <?php 
          populateHeaderList();
        ?>

      </ul>

      <div class="the-header__empty-column"></div>

      <a class="the-header__icon-link">
        <img src="resources/images/icons/search.svg">
      </a>

      <a class="the-header__icon-link">
        <img src="resources/images/icons/flag.svg">
      </a>

      <a class="the-header__icon-link">
        <img src="resources/images/icons/person.svg">
      </a>

    </nav>

  </header>

  <main class="the-main">

    <section class="the-main-first-section">

      <a class="first-section__top-link">
        <img class="first-section__top-link-image" src="resources/images/carousel/for-kids.jpg">
        <span class="first-section__top-link-span">Top 100 Recipes For Kids</span>
      </a>

      <a class="first-section__top-link">
        <img class="first-section__top-link-image" src="resources/images/carousel/pork-chops.jpg">
        <span class="first-section__top-link-span">Pork Chops, 34 Ways</span>
      </a>

      <a class="first-section__top-link">
        <img class="first-section__top-link-image" src="resources/images/carousel/side-dishes.jpg">
        <span class="first-section__top-link-span">50 Ultimate Side Dishes</span>
      </a>

      <article class="first-section-whats-fresh">

        <div class="whats-fresh__heading-container">

          <svg class="whats-fresh__heading-sparkle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 59.9663"><defs><style>.cls-1{fill:#f4ce34}</style></defs><title></title><path id="left" class="cls-1 left" d="M21.224 3.201c-.355 2.874-.613 5.763-1.09 8.617-.567 3.396-1.326 6.76-1.986 10.142a5.768 5.768 0 0 1-3.837 4.647 60.835 60.835 0 0 1-8.265 1.974c-1.967.356-3.993.374-5.998.656a38.476 38.476 0 0 1 11.884 3.395c3.576 1.74 6.028 4.261 6.632 8.365.722 4.877 1.594 9.73 2.402 14.592a1.308 1.308 0 0 0 .576.96c.213-1.546.375-3.1.651-4.633.697-3.857 1.497-7.696 2.159-11.558a10.216 10.216 0 0 1 5.865-7.568 29.88 29.88 0 0 1 11.473-3.301 1.6 1.6 0 0 0 .994-.356c-2.121-.17-4.26-.232-6.363-.538a45.841 45.841 0 0 1-6.951-1.43 6.842 6.842 0 0 1-4.793-5.326A102.722 102.722 0 0 1 21.8 4.647c-.03-.503-.148-1.001-.226-1.5-.117.018-.235.035-.35.054"></path><path id="right-bottom" class="cls-1 right-bottom" d="M40.808 34.928c-.459 2.577-.976 5.148-1.358 7.737-.341 2.32-1.836 3.355-3.935 3.767-1.329.26-2.68.401-4.472.662 1.374.33 2.355.519 3.308.807 2.88.871 4.895 2.516 5.301 5.715a28.988 28.988 0 0 0 1.485 6.28c.124-.885.24-1.772.375-2.654.08-.535.201-1.062.288-1.595.988-5.947 2.584-7.517 8.596-8.58-1.267-.191-2.533-.379-3.801-.574-2.54-.387-3.595-1.263-4.128-3.756-.465-2.172-.75-4.382-1.117-6.573-.073-.434-.164-.866-.246-1.296l-.295.06"></path><path id="right-top" class="cls-1 right-top" d="M50.802 25.119c.32-1.74.736-3.47.941-5.221.627-5.349 3.462-6.568 7.578-7.278a4.067 4.067 0 0 0 .679-.285c-1.268-.195-2.337-.353-3.402-.53-3.069-.514-3.947-1.285-4.561-4.306-.495-2.43-.844-4.89-1.501-7.408-.106.45-.232.898-.312 1.356-.408 2.32-.82 4.641-1.202 6.964a3.455 3.455 0 0 1-2.726 2.949c-1.568.408-3.178.664-4.922 1.018 1.222.365 2.354.644 3.44 1.041 2.39.877 4.074 2.387 4.46 5.038.273 1.865.615 3.723.934 5.58.063.363.168.716.252 1.076z"></path></svg>

          <h3 class="whats-fresh__heading">What's fresh?</h3>

          <svg class="whats-fresh__heading-sparkle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 59.9663"><defs><style>.cls-1{fill:#f4ce34}</style></defs><title></title><path id="left" class="cls-1 left" d="M21.224 3.201c-.355 2.874-.613 5.763-1.09 8.617-.567 3.396-1.326 6.76-1.986 10.142a5.768 5.768 0 0 1-3.837 4.647 60.835 60.835 0 0 1-8.265 1.974c-1.967.356-3.993.374-5.998.656a38.476 38.476 0 0 1 11.884 3.395c3.576 1.74 6.028 4.261 6.632 8.365.722 4.877 1.594 9.73 2.402 14.592a1.308 1.308 0 0 0 .576.96c.213-1.546.375-3.1.651-4.633.697-3.857 1.497-7.696 2.159-11.558a10.216 10.216 0 0 1 5.865-7.568 29.88 29.88 0 0 1 11.473-3.301 1.6 1.6 0 0 0 .994-.356c-2.121-.17-4.26-.232-6.363-.538a45.841 45.841 0 0 1-6.951-1.43 6.842 6.842 0 0 1-4.793-5.326A102.722 102.722 0 0 1 21.8 4.647c-.03-.503-.148-1.001-.226-1.5-.117.018-.235.035-.35.054"></path><path id="right-bottom" class="cls-1 right-bottom" d="M40.808 34.928c-.459 2.577-.976 5.148-1.358 7.737-.341 2.32-1.836 3.355-3.935 3.767-1.329.26-2.68.401-4.472.662 1.374.33 2.355.519 3.308.807 2.88.871 4.895 2.516 5.301 5.715a28.988 28.988 0 0 0 1.485 6.28c.124-.885.24-1.772.375-2.654.08-.535.201-1.062.288-1.595.988-5.947 2.584-7.517 8.596-8.58-1.267-.191-2.533-.379-3.801-.574-2.54-.387-3.595-1.263-4.128-3.756-.465-2.172-.75-4.382-1.117-6.573-.073-.434-.164-.866-.246-1.296l-.295.06"></path><path id="right-top" class="cls-1 right-top" d="M50.802 25.119c.32-1.74.736-3.47.941-5.221.627-5.349 3.462-6.568 7.578-7.278a4.067 4.067 0 0 0 .679-.285c-1.268-.195-2.337-.353-3.402-.53-3.069-.514-3.947-1.285-4.561-4.306-.495-2.43-.844-4.89-1.501-7.408-.106.45-.232.898-.312 1.356-.408 2.32-.82 4.641-1.202 6.964a3.455 3.455 0 0 1-2.726 2.949c-1.568.408-3.178.664-4.922 1.018 1.222.365 2.354.644 3.44 1.041 2.39.877 4.074 2.387 4.46 5.038.273 1.865.615 3.723.934 5.58.063.363.168.716.252 1.076z"></path></svg>

        </div>


        <div class="whats-fresh__content">

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">Karen M.</a> 
                reviewed <a class="whats-fresh__generic-link">Savory Ham and Mushroom Quiche.</a>
              </h4>

              <span class="whats-fresh__post-time">7 hours ago</span>

              <div class="whats-fresh__post-rating">
                <span class="rating-full-start"></span>
                <span class="rating-full-start"></span>
                <span class="rating-full-start"></span>
                <span class="rating-full-start"></span>
                <span class="rating-full-start"></span>
              </div>

              <p class="whats-fresh__post-paragraph">
                Extremely easy to prepare, but absolutely delicious!!
              </p>
            
            </div>

          </article>

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">Karen J.</a> followed 
                <a class="whats-fresh__generic-link">na 2309</a>.
              </h4>

              <span class="whats-fresh__post-time">10 hours ago</span>

            </div>

          </article>

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">lazyme</a>
                 added a photo to 
                 <a class="whats-fresh__generic-link">Pasta with Mushroom Garlic Sauce</a>.
              </h4>

              <span class="whats-fresh__post-time">13 hours ago</span>

              <img class="whats-fresh__post-image" src="resources/images/misc/whats-fresh.jpg">

          </article>

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">Kim T.</a>
                asked a question about
                <a class="whats-fresh__generic-link">Green (Un-Ripe) Tomato Salsa for Canning</a>.
              </h4>

              <span class="whats-fresh__post-time">15 hours ago</span>

              <p class="whats-fresh__post-paragraph">
                Can I use red tomatoes instead?
              </p>

            </div>

          </article>

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">Deb N.</a>
                tweaked <a class="whats-fresh__generic-link">Easiest Hot Pepper Jelly</a>.
              </h4>

              <span class="whats-fresh__post-time">16 hours ago</span>

              <p class="whats-fresh__post-paragraph">
                I have orange marmalade on hand and will try your easy method.
                Thanks, because even if I can find hot pepper jelly,
                it really is pricy.
              </p>

            </div>

          </article>

          <article class="whats-fresh__post">

            <div class="whats-fresh__post-icon-container">

              <img class="whats-fresh__post-icon-image" src="resources/images/icons/person-purple.svg">

            </div>

            <div class="whats-fresh__post-content-container">

              <h4 class="whats-fresh__post-heading">
                <a class="whats-fresh__generic-link">CLUBFOODY</a>
                added a recipe for 
                <a class="whats-fresh__generic-link">Flavorful Peri Peri Chicken.</a>
              </h4>

              <span class="whats-fresh__post-time">6 days ago</span>

            </div>

          </article>

        </div>

        <a class="whats-fresh__view-all">View all</a>

      </article>

      <a class="bottom-link">

        <img class="bottom-link__image" src="resources/images/misc/bottom-article.jpg">

        <div class="bottom-link__first-span-container">
          <span class="bottom-link__first-span bottom-link__first-span--black">Tweak of the week</span>
          <div class="bottom-link__first-span-traingles bottom-link__first-span-traingles--black"></div>
        </div>

        <span class="bottom-link__second-span">How to take cheesecake to the next level</span>

      </a>

      <a class="bottom-link">

        <img class="bottom-link__image" src="resources/images/misc/bottom-article.jpg">

        <div class="bottom-link__first-span-container">
          <span class="bottom-link__first-span">Recipe of the day</span>
          <div class="bottom-link__first-span-traingles"></div>
        </div>
        
        <span class="bottom-link__second-span">Algeran Couscous</span>

      </a>

      <a class="bottom-link">

        <img class="bottom-link__image" src="resources/images/misc/bottom-article.jpg">
        <span class="bottom-link__first-span bottom-link__first-span--special"></span>
        <span class="bottom-link__second-span">Enter daily for a chance at $10k!</span>

      </a>

    </section>

    <div class="cool-sections-container">

      <section class="section-type-1">

        <h3 class="section-type-1__heading">Trending Recipes</h3>

        <div class="section-type-1__content-container">

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article.jpg">
            </a>

            <a class="section-type-1__article-name-link">Bourbon Chicken</a>
            
            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">LinMarine</a></span>
            
            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star.svg">
              </div>

              <span class="section-type-1__article-rating-span">(3077)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article.jpg">
            </a>

            <a class="section-type-1__article-name-link">Bourbon Chicken</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">LinMarie</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star.svg">
              </div>

              <span class="section-type-1__article-rating-span">(3077)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article.jpg">
            </a>

            <a class="section-type-1__article-name-link">Bourbon Chicken</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">LinMarie</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star.svg">
              </div>

              <span class="section-type-1__article-rating-span">(3077)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article.jpg">
            </a>

            <a class="section-type-1__article-name-link">Bourbon Chicken</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">LinMarie</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star.svg">
              </div>

              <span class="section-type-1__article-rating-span">(3077)</span>

            </a>

          </article>

        </div>

        <a class="section-type-1__view-all">View All &gt;</a>

      </section>

      <section class="section-type-2">

        <h3 class="section-type-2__heading">Top Collections</h3>

        <div class="section-type-2__content-container">

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">40 Quick Chicken Ideas</h4>
            </a>

          </article>

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">40 Quick Chicken Ideas</h4>
            </a>

          </article>

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">40 Quick Chicken Ideas</h4>
            </a>

          </article>
          
        </div>

      </section>

      <section class="section-type-1">

        <h3 class="section-type-1__heading">Newest Recipes</h3>

        <div class="section-type-1__content-container">

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article-2.jpg">
            </a>

            <a class="section-type-1__article-name-link">To Die for Crock Pot Roast</a>
            
            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">yooper</a></span>
            
            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
              </div>

              <span class="section-type-1__article-rating-span">(2013)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article-2.jpg">
            </a>

            <a class="section-type-1__article-name-link">To Die for Crock Pot Roast</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">yooper</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
              </div>

              <span class="section-type-1__article-rating-span">(2013)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article-2.jpg">
            </a>

            <a class="section-type-1__article-name-link">To Die for Crock Pot Roast</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">yooper</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
              </div>

              <span class="section-type-1__article-rating-span">(2013)</span>

            </a>

          </article>

          <article class="section-type-1__article">

            <a class="section-type-1__article-image-container">
              <img class="section-type-1__article-image" src="resources/images/misc/small-article-2.jpg">
            </a>

            <a class="section-type-1__article-name-link">To Die for Crock Pot Roast</a>

            <span class="section-type-1__article-author-span">by <a class="section-type-1__article-author-link">yooper</a></span>

            <a class="section-type-1__article-rating-container">

              <div class="section-type-1__stars-container">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
                <img class="section-type-1__star-image" src="resources/images/icons/star-full.svg">
              </div>

              <span class="section-type-1__article-rating-span">(2013)</span>

            </a>

          </article>

        </div>

        <a class="section-type-1__view-all">View All &gt;</a>

      </section>

      <section class="section-type-2 section-type-2-last">

        <h3 class="section-type-2__heading">What We're Craving Now</h3>

        <div class="section-type-2__content-container">

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article-2.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">Kids & Family</h4>
            </a>

          </article>

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article-2.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">Kids & Family</h4>
            </a>

          </article>

          <article class="section-type-2__article">

            <a class="section-type-2__article-link">
              <img class="section-type-2__article-image" src="resources/images/misc/big-article-2.jpg">
              <span class="section-type-2__article-span">Photos</span>
              <h4 class="section-type-2__article-heading">Kids & Family</h4>
            </a>

          </article>
          
        </div>

      </section>

    </div>

    <form class="search-form">

      <span class="search-form__span">I Want To Make</span>

      <div class="search-form__input-container">
        <input class="search-form__input-text" type="text" placeholder="Search here or try our suggestions below">
      </div>

      <button class="search-form__button" type="button">View Suggestions</button>

    </form>

  </main>

  <footer class="the-footer">

    <button class="the-footer__back-to-top-button">Back to top</button>

    <nav class="the-footer__nav">

      <ul class="the-footer__ul the-footer__social-ul">

        <li><img class="the-footer__social-icon" src="resources/images/icons/facebook.svg"></li>
        <li><img class="the-footer__social-icon" src="resources/images/icons/facebook.svg"></li>
        <li><img class="the-footer__social-icon" src="resources/images/icons/facebook.svg"></li>
        <li><img class="the-footer__social-icon" src="resources/images/icons/facebook.svg"></li>
        <li><img class="the-footer__social-icon" src="resources/images/icons/facebook.svg"></li>

      </ul>

      <ul class="the-footer__ul the-footer__other-ul">

        <li><a class="the-footer-link">All Categories</a></li>
        <li><a class="the-footer-link">Site Map</a></li>
        <li><a class="the-footer-link">About Us</a></li>
        <li><a class="the-footer-link">Help</a></li>

      </ul>

      <p class="the-footer__paragraph">
        © 2022 Warner Bros. Discovery, Inc. or its subsidiaries and affiliates.
        All rights reserved.
      </p>

      <ul class="the-footer__ul the-footer__last-ul">

        <li><a class="the-footer-link">Privacy Notice</a></li>
        <li><a class="the-footer-link">Visitor Agreement</a></li>

      </ul>

    </nav>

  </footer>

</body>

</html>