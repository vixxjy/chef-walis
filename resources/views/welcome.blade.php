@extends('layouts.main')
@section('content')
    <!-- CONTENT
    ================================================== -->

    <!-- section welcome -->
    <section class="section_welcome" id="section_welcome">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-12">
            <div class="welcome_content">
              <h1 class="welcome-video_content_heading">✔ Chefwalis <span>*Recipes*</span></h1>
              <p class="welcome_content_subheading">For Your Birthdays, Marriages, Dedications e.t.c</p>
              <ul class="welcome_content_logo">
                <li><i class="icon ion-ios-minus-empty"></i></li>
                <li><i class="icon ion-fork"></i></li>
                <li><i class="icon ion-wineglass"></i></li>
                <li><i class="icon ion-knife"></i></li>
                <li><i class="icon ion-ios-minus-empty"></i></li>
              </ul>
              <h3 class="welcome_content_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3>
              <div class="welcome_content_btn">
                <a href="#section_blog" class="btn btn-default">Special Recipes</a>
              </div>
            </div> <!-- .welcome_content -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
      <div class="welcome-video_bg">
        <video autoplay muted loop>
          <source src="http://telandeworld.com/video/telande-reel.mp4" type="video/mp4">
          <!-- <source src="assets/video/video_bg.mp4" type="video/mp4"> -->
          Your browser does not support the video tag.
        </video>
      </div>
    </section>

    <!-- section about -->
    <section class="section_about" id="section_about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title"><span>&#8722; Our story &#8722;</span></h2>
            <hr class="section_title_line">
            <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus sint est quidem excepturi rem officia fugit quia maxime explicabo nisi numquam, recusandae quisquam iste earum.</p>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
      <div class="section_about__row">
        <div class="about__img">
          <img src="assets/img/about_1.jpg" class="img-responsive" alt="...">
        </div>
        <div class="about_desc">
          <h3 class="about_desc__title">Traditions</h3>
          <p class="about_desc__text">Service ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolore voluptatem, ipsum, totam molestias accusantium explicabo velit aliquid impedit, reprehenderit libero voluptatum ipsa quae ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum atque debitis commodi architecto. Nulla dolore voluptatem. Eum atque debitis commodi architecto. Totam molestias accusantium explicabo velit aliquid impedit.</p>
        </div>
      </div> <!-- .section_about__row -->
      <div class="section_about__row">
        <div class="about_desc">
          <h3 class="about_desc__title">Professional service</h3>
          <p class="about_desc__text">Roles ipsum dolor sit amet, consectetur adipisicing elit. Nulla dolore voluptatem, ipsum, totam molestias accusantium explicabo velit aliquid impedit, reprehenderit libero voluptatum ipsa quae ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum atque debitis commodi architecto. Groggery ipsum dolor sit amet, consectetur adipisicing elit. Soluta modi esse accusantium sit velit cupiditate minima ipsam ex!</p>
        </div>
        <div class="about__img">
          <img src="assets/img/about_2.jpg" class="img-responsive" alt="...">
        </div>
      </div> <!-- .section_about__row -->
      <!-- <div class="section_about__row">
        <div class="about__img">
          <img src="assets/img/about_3.jpg" class="img-responsive" alt="...">
        </div>
        <div class="about_desc">
          <h3 class="about_desc__title">History</h3>
          <p class="about_desc__text">Blanditiis quidem fugit atque facilis numquam et, minus, iusto pariatur. Laborum commodi consectetur dolor, unde quo nemo molestias provident reprehenderit iure quas ipsam quasi cupiditate, doloribus, consequuntur ea facere dolores impedit dolore blanditiis neque explicabo odio! Labore eveniet sapiente impedit asperiores architecto. Vero quia, quidem aliquam eveniet maiores expedita minima corporis assumenda accusamus at laborum.</p>
        </div>
      </div>  -->
      <!-- .section_about__row -->
    </section>

        <!-- section blog -->
        <section id="section_blog" class="section_blog">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="section_title">&#8722;Our Daily Recipes &#8722;</h2>
                <hr class="section_title_line">
                <p class="section_caption">Read about our latest news, events and much more about life of our friendly family</p>
              </div>
            </div> <!-- .row -->
            <div class="row">
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_1.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>How to serve a table</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#table,</a> <a href="#">#food,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_3.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>Features of Spanish wine</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#cook,</a> <a href="#">#recipe,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_5.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>Interior and design</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 7 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 5 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#bar,</a> <a href="#">#cafe,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
            </div> <!-- .row -->
            <div class="row">
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_4.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>Cafe as a house</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 10 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 12 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#table,</a> <a href="#">#food,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_10.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>Our food traditions</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 5 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 2 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#cook,</a> <a href="#">#recipe,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
              <div class="col-sm-4">
                <div class="blog__item blog__item1">
                  <div class="blog-item__img">
                    <img src="assets/img/gallery_7.jpg" class="img-responsive" alt="...">
                  </div>
                  <div class="blog-item__content">
                    <a href="blog_post.html" class="blog-item__title">
                      <h3>Let's cook together!</h3>
                    </a>
                    <div class="blog-item__info">
                      <ul class="item-info__list">
                        <li class="info-list__item"><i class="ion-android-person" aria-hidden="true"></i> by John Doe</li>
                        <li class="info-list__item"><i class="ion-android-chat" aria-hidden="true"></i> 2 Comments</li>
                        <li class="info-list__item"><i class="ion-android-calendar" aria-hidden="true"></i> 7 hours ago</li>
                      </ul>
                    </div>
                    <div class="blog-item__text">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quis quia laudantium accusantium, sint, perspiciatis magni illum deserunt mollitia quaerat doloribus deleniti incidunt consequuntur earum fuga dolorum consequatur corrupti adipisci.
                    </div>
                    <p class="blog-item__tags"><i class="ion-ios-pricetags" aria-hidden="true"></i> <a href="#">#bar,</a> <a href="#">#cafe,</a> <a href="#">#groggery</a></p>
                  </div> <!-- / .blog-item__content -->
                </div> <!-- / .blog__item -->
              </div>
            </div> <!-- .row -->
            </div class="row">
              <div class="text-center">
                <button type="button" class="btn btn-default">More posts</button>
              </div>
            </div> <!-- .row -->
          </div> <!-- .container -->
        </section>

    <!-- section review -->
    <section class="section_review">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <h2 class="section_review_title">A few words about us...</h2>
          </div>
          <div class="col-sm-8">
            <div id="carousel-review" class="carousel carousel_review slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-review" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-review" data-slide-to="1"></li>
                <li data-target="#carousel-review" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Franz Kafka &#8722;</h5>
                </div>
                <div class="item">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Ernest Hemingway &#8722;</h5>
                </div>
                <div class="item">
                  <p class="review_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate atque eveniet, aut enim quasi eaque repellendus hic, provident tempora sint nulla totam quo nemo velit labore magnam quaerat molestias ad veritatis voluptatibus nobis molestiae illum!</p>
                  <h5 class="review_author">&#8722; Pablo Picasso &#8722;</h5>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-review" role="button" data-slide="prev">
                  <img src="assets/img/arrow_left.svg" alt="Prev">
                </a>
                <a class="right carousel-control" href="#carousel-review" role="button" data-slide="next">
                  <img src="assets/img/arrow_right.svg" alt="Next">
                </a>
              </div> <!-- .carousel_inner -->
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section quote -->
    <!-- <section class="section__quote">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <i class="ion-android-hangout"></i>
            <p class="section-quote__text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
            <h2 class="section-quote__author">by Thomas Ford</h2>
          </div>
        </div> 
      </div> 
    </section>  -->
    <!-- / .section__quote -->

     <!-- section team -->
     <section class="section_team">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="section_title">&#8722; Our team &#8722;</h2>
            <hr class="section_title_line">
            <p class="section_caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, facere.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="assets/img/team_photo_1.jpg" alt="...">
              </div>
              <div class="team__item_name">
                <h3>John Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Master chef</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="assets/img/team_photo_2.jpg" alt="...">
              </div>
              <div class="team__item_name">
                <h3>Jane Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Chef</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
          <div class="col-sm-4">
            <div class="team__item">
              <div class="team__item_photo">
                <img class="img-responsive" src="assets/img/team_photo_3.jpg" alt="...">
              </div>
              <div class="team__item_name">
                <h3>John Doe</h3>
              </div>
              <div class="team__item_overlay">
                <p class="team__item_profession">Barman</p>
                <ul class="team__item_social">
                  <li class="social_icon"><a href="#"><i class="icon ion-social-facebook-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-twitter-outline"></i></a></li>
                  <li class="social_icon"><a href="#"><i class="icon ion-social-instagram-outline"></i></a></li>
                </ul>
              </div>
            </div> <!-- .team_item -->
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section newsletter -->

    <!-- section map-heading -->
    <section class="section_map-heading" id="section_contacts">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <h2 class="map__title">Find us on the map</h2>
              <p class="map__address">10987 1st Avenue, Lorem City, CA</p>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </section>

    <!-- section map -->
    <div class="section_map">
      <div class="section_row">
        <div id="map"></div>
      </div> <!-- / .section_row -->
    </div> <!-- / .section_map -->

@endsection
      
  