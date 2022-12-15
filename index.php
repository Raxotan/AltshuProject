<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <title>AltshuProject</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="icon" href="./assets/images/Logo.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
</head>
<body>
  <?php
    include ("./assets/blocks/header.php");
  ?>
  <main>
    <div class="color-back">
      <section class="intro container">
        <div class="intro-column1">
          <h1 class="intro-header1">I develop awesome websites that make an impact.</h1>
          <p class="intro-p1">
            Hi! I'm Anton, a Full Stack Developer based in Russia. I create information systems for fast-growing startups.
          </p>
          <a class="link-button-email" href="#">
            <span>Write me!</span>
          </a>
          <section class="passed-course">
            <div class="passed-img"><img src="./assets/images/cup.svg" alt="#"></div>
            <div>
              <h2>Passed the Altshu Web Developing Course</h2>
              <p>
                <a href="https://altshu.com/course" target="_blank">WebDevelopment 2022</a>
                •
                <a href="https://altshu.com/" target="_blank">altshu.com</a>
              </p>
            </div>
          </section>
        </div>
        <img src="./assets/images/sitting.svg" alt="" class="sitting">
      </section>
    </div>
    <section class="about container">
      <h2 class="unvisible">About</h2> <!-- этого видно не будет. Эта строчка нужна чтобы валидатор не ругался -->
      <section class="about-reviews">
        <h4 id="About">About me</h4>
        <article class="about-reviews-stars">
          <h5 class="unvisible">Grade</h5>
          <?php 
            for($i = 1; $i <= 5; $i++)
            {
              echo "<img src='./assets/images/star.svg'>";
            }
          ?>
        </article>
        <article class="about-reviews-text">
          <h5 class="unvisible">review text</h5>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dignissimos distinctio itaque harum placeat eveniet suscipit magni accusantium, voluptatem optio porro eum sapiente numquam fuga ab ratione quod.
          </p>
        </article>
        <article class="about-reviewer">
          <div>
            <h3>Name</h3>
            <h5>Middle+ FullStack Developer in GEROPHARM</h5>
          </div>
        </article>
        </section>
        <section class="about-right-collumn">
          <h2>Develop websites for fast growing digital startups</h2>
            <dl class="about-right-collumn-list1">
              <div>
                <dt>2+</dt>
                <dd>Months of experience</dd>
              </div>
              <div>
                <dt>2+</dt>
                <dd>Projects completed</dd>
              </div>
              <div>
                <dt>5</dt>
                <dd>Technologies learnt</dd>
              </div>
            </dl>
          <ul class="about-right-collumn-list2">
            <li id="HTML-img">HTML+CSS</li>
            <li id="JS-img">JS, React.js</li>
            <li id="PHP-img">PHP. YII2</li>
            <li id="MySQL-img">MySQL</li>
          </ul>
        </section>
      </section>
    <section class="Work container">
      <h3 id="Work">Work</h3>
      <h2>Bringing great results for every client.</h2>
      <section class="work-first-row">
        <article class="work-first-row-content1">
          <h3>About this <a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a></h3>
          <!-- <img src="#" alt="About this"> -->
          <p>
            Donec maximus blandit porta. Etiam porttitor libero tincidunt, tempus diam id, volutpat nulla. In id pellentesque nunc.
          </p>
        </article>
        <article class="work-first-row-content2">
          <h3>About that<a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a></h3>
          <!-- <img src="#" alt="About that"> -->
          <p>
            Integer mollis fermentum urna, a tempor ante. Nam orci turpis, tristique sit amet pharetra nec, efficitur vel tellus.
          </p>
        </article>
      </section>
      <section class="work-next-line">
        <article>
          <h3>Look at my work<a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a></h3>
          <!-- <img src="#" alt="Look at my work"> -->
          <p>
            Vivamus mattis eu odio non aliquam. Vestibulum tristique congue laoreet. Nulla facilisi.
          </p>
        </article>
      </section>
      <section class="work-last-line">
        <article class="work-last-line-content1">
          <h3>Something interesting<a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a></h3>
          <!-- <img src="#" alt="Something interesting"> -->
          <p>
            Suspendisse lacinia ante vel sapien gravida fringilla. Integer ipsum enim, maximus id turpis ut, sodales egestas libero.
          </p>
        </article>
        <div class="work-last-line-column">
          <article class="work-last-line-column-content2">
            <h3>Origin UI/UX Design<a href="#"><img src="assets/images/arrow.svg" alt="arrow"></a></h3>
            <!-- <img src="#" alt="Origin UI/UX Design"> -->
            <p>
              Morbi sit amet eros sagittis, pellentesque lectus ac, interdum nibh.
            </p>
          </article>
          <a href="#" class="work-last-line-button"><span class="work-last-line-button-text">view all projects</span></a>
        </div>
      </section>
    </section>
    <div class="color-back-service">
      <section class="container">
        <section class="service">
          <h4 id="Service">Service</h4>
          <h2>Pushing the boundaries of your potential</h2>
          <article class="service_content1">
            <h3>Branding</h3>
            <p>Refresh your logo, revamp your website, and even your letterhead— develop a cohesive aesthetic for your brand.</p>
          </article>
          <article class="service_content2">
            <h3>Packaging</h3>
            <p>Rethink labels, boxes, signage, and everything that'll help your product make a great first impression.</p>
          </article>
          </section>
          <section class="servise-next-row">
            <article class="service_content3">
              <h3>Memorabilia</h3>
              <p>Choose from easy, affordable options for merch like custom tees and sets of pins.</p>
            </article>
            <article class="service_content4">
              <h3>Visual Aids</h3>
              <p>Make your point more convincingly with branded flyers, slides, catalogues, infographics.</p>
            </article>
            <button class="service-button">Contact me</button>
          </section>
      </section>
    </div>
    <section class="blog container">
      <h4 id="Blog">blog</h4>
      <section class="blog-first-row">
        <h2>Words On Design, Tech & Other Things I Love</h2>
        <a href="#"><span class="span">Explore all posts</span></a>
      </section>
      
      <?php
        for($i=1; $i<=3; $i++){
          echo <<<HTML
            <article class="blocks">
            <img src="./assets/images/Rectangle.png" alt="How I’ve started learning web">
            <div class="center-column">
              <p class="data">21 Oct, 2022</p>
              <h3>How I’ve started learning web</h3>
              <p>
                Vivamus mattis eu odio non aliquam. Vestibulum tristique congue laoreet. Nulla facilisi.
              </p>
            </div>
            <a href="#">View post</a>
          </article>
          HTML;
        }
      ?>
    </section>
  </main>
  <footer>
      <h3 id="Contact">Contact</h3>
        <p>Have something in mind? Let's connect. Have something in mind?</p>
    <a href="mailto:toxar.raxotan@yandex.ru">toxar.raxotan@yandex.ru</a>
    <ul>
      <li><a href="#Work">Work</a></li>
      <li><a href="#About">About</a></li>
      <li><a href="#Blog">Blog</a></li>
      <li><a href="#Contact">Contact</a></li>
    </ul>
    <ul>
      <li><a href="https://vk.com/anton0369" target="_blank">vk</a></li>
      <li><a href="#" target="_blank">hh</a></li>
      <li><a href="#" target="_blank">Habr</a></li>
      <li><a href="https://github.com/Raxotan" target="_blank">GitHub</a></li>
    </ul>
    <form>
      <p>Subscribe to my weekly newsletter</p>
      <input type="email" required>
      <button type="submit">Subscribe</button>
    </form>
    <hr>
    <p>©  Powered by Anton, 2022</p>
  </footer>
</body>
</html>
