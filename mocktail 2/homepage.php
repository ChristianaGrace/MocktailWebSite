<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<style>
body {
     font-family: 'Regina,Fragile,sans-serif';
     background-color:white ;
     margin: 0;
     padding: 0;
     justify-content :center;
 
   }

   .navbar {
     display: flex;
     justify-content: space-between;
     align-items: center;
     background-color: #343a40;
     padding: 30px;
   }
   .navbar-brand {
     color: #fff;
     text-decoration: none;
     font-size: 3.5rem;
     opacity :0.8;
     text-shadow : 2px 2px 4px rgba(0,0,0,0.2);

   }
   .navbar-nav {
     list-style: none;
     display: flex;
     gap: 4rem;
     font-size: 1.2rem;
     opacity :0.8;
   }
   .nav-item {
     margin: 0;
   }
   .nav-link {
     color: #fff;
     text-decoration: none;
     font-size: 1.2rem;
     opacity :0.8;

   }
   .nav-link:hover {
     color: #adb5bd;
   }

   .carousel {
     position: relative;
     width: 100%;
     overflow: hidden;
     height: 40%;
   }
  .carousel .carouselheader h1{
    color:white;
    font-size: 40px;
    position: absolute;
    z-index:100;
    font size: 8.5rem;
    opacity :0.8;
    text-shadow : 2px 2px 4px rgba(0,0,0,0.2);

   }
  .carousel .carouselheader{
    width :100%;
    height :30%;
    display:flex;
    align-items :flex-end;
    justify-content :center;
    z-index:100;
    color:white;
    position: absolute;
  }

   .carousel-inner {
     display: flex;
   }
   .carousel-item {
     min-width: 100%;
     transition: transform 0.5s ease-in-out;
   }
   .carousel-item img {
     width: 100%;
     height: 50%;
     object-fit: cover;
   }
   .carousel-caption {
     position:relative;
     bottom: 20px;
     left: 50%;
     transform: translateX(-50%);
     background: rgba(0, 0, 0, 0.6);
     color: #fff;
     padding: 1rem;
     border-radius: 0.5rem;
   }
   .carousel-control-prev,
   .carousel-control-next {
     position: absolute;
     top: 50%;
     transform: translateY(-50%);
     background: rgba(0, 0, 0, 0.5);
     color: #fff;
     border: none;
     padding: 1rem;
     cursor: pointer;
   }
   .carousel-control-prev {
     left: 10px;
   }
   .carousel-control-next {
     right: 10px;
   }

   .newsletter-signup{
           width :40%;
           background: #fff;
           padding: 20px;
           border-radius: 5px;
           box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
           justify-content :center;
           position : center;
          text-align :center;

       }
       .newsletter-signup h2 {
           margin-bottom: 15px;
           justify-content :center;
           position : center;
       }
       .newsletter-signup input[type="email"] {
           width: 50%;
           padding: 10px;
           margin-bottom: 10px;
           border: 1px solid #ddd;
           border-radius: 3px;
           justify-content :center;
           position : center;

       }

       .newsletter-signup button {
           width: 50%;
           padding: 10px;
           background: #007BFF;
           color: #fff;
           border: none;
           border-radius: 3px;
           cursor: pointer;
           justify-content :center;
           position : center;
       }
   .latest-stories {
           text-align: center;
           margin-top: 20px;
       }
       .latest-stories h2 {
           margin-bottom: 20px;
       }
       .grid {
           display: grid;
           grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
           gap: 20px;
       }
       .card {
           background-color: #fff;
           padding: 20px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       }
       .card img {
           width: 100%;
           height: auto;
       }
       .card h3 {
           margin-top: 15px;
           font-size: 1.5em;
       }
       .card p {
           font-size: 0.9em;
           color: #555;
       }
       .read-more {
           display: inline-block;
           margin-top: 10px;
           color: #3498db;
           text-decoration: none;
       }
       .more-posts {
           text-align: center;
           margin: 30px 0;
       }
       .more-posts a {
           padding: 10px 20px;
           background-color: #3498db;
           color: #fff;
           text-decoration: none;
           border-radius: 5px;
       }

   @media (max-width: 768px) {
     .navbar-nav {
       flex-direction: column;
       gap: 0.5rem;
     }

   }
</style>
</head>
<body>

<nav class="navbar">
<a class="navbar-brand" href="#">Mocktastic</a>
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="posts.php">Browse</a></li>
<li class="nav-item"><a class="nav-link" href="add_recipe.php">Add Recipe</a></li>
<li class="nav-item"><a class="nav-link" href="register_form.php">Sign Up</a></li>
<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
</ul>
<div class ="">
</nav>

<!-- Carousel -->
<div class="carousel" id="homepageCarousel">
   <div class ="carousel">

<div class= "carouselheader">
<h1> Mix,Mingle and Mocktail</h1>
</div>

<div class="carousel-inner">

<div class="carousel-item active">
<img src="images/4.jpg" alt="Slide 1">
</div>

<div class="carousel-item">
<img src="images/6.jpg" alt="Slide 2">
</div>

<div class="carousel-item">
<img src="images/6.jpg" alt="Slide 3">
</div>

</div>

<button class="carousel-control-prev" onclick="prevSlide()">&#10094;</button>
<button class="carousel-control-next" onclick="nextSlide()">&#10095;</button>

</div>
<div class="newsletter-signup">
<h2>Sign Up for Our Newsletter</h2>
<form id="signup-form">
<input type="email" id="email" placeholder="Enter your email" required>
<button type="submit">Subscribe</button>
</form>
<p id="message"></p>
</div>


<div class="container">
<div class="latest-stories">
<h2>Explore</h2>

<div class="grid">
<div class="card">
<img src="images/7.jpg" alt="Guava Lemon">
<h3>Easy Guava-Lemon Mocktail</h3>
<p>May 16, 2024 - Photo, Trending</p>
<p> this recipe has a delicious combination of guava nectar, cleansing lemon juice, fresh mint and hydrating club soda or kombucha, making it both delicious and healthy. The guava nectar and lemon juice are high in Vitamin C, and if you use a kombucha as the mixer you increase the health benefits even further.</p>
<a href="https://mindfulmocktail.com/guava-mocktail/" class="read-more">Read More →</a>

</div>
<div class="card">
<img src="images/8.jpg" alt="Lemon Berry">
<h3>WaterMelon and Berry Mocktail</h3>
<p>May, 2024 - Summer Berry Collection</p>
<p>despite being naturally low in sugar, watermelon is deliciously sweet. This means you don’t need to add sweetener or sugar to this drink. Fresh lime juice adds a hit of vitamin C, and the high water content means it's super hydrating.</p>
<a href="https://mindfulmocktail.com/watermelon-mocktails-recipe/" class="read-more">Read More →</a>
</div>

<div class="card">
<img src="images/9.jpg" alt="Mango and Mint">
<h3>Mango and Mint Mocktail</h3>
<p>April 9, 2024 - Popular</p>
<p> with no added sugars or sweetener, this 'no'jito contains almost 1 serve of your daily fruit intake, as well as fresh lime and mint.</p>
<a href="https://mindfulmocktail.com/mango-mocktail/" class="read-more">Read More →</a>
</div>

<div class="card">
<img src="images/10.jpg" alt="Story Image 4">
<h3>Ginger Beer Mocktail</h3>
<p>April 14, 2024 - Featured,Bitter</p>
<p> ginger is loaded with antioxidants, so pick a naturally brewed variety to reap the benefits. Although some nutrients are lost in processing, pineapple and lime juice are sources of vitamin C. Choose a reduced sugar or diet ginger beer for a lower sugar mocktail. </p>
<a href="https://mindfulmocktail.com/ginger-beer-mocktail/" class="read-more">Read More →</a>
</div>

<div class="card">
<img src="images/11.jpg" alt="Story Image 5">
<h3>Avocado Mocktail</h3>
<p>April 20, 2024 - Featured - 4 Comments</p>
<p>The words 'healthy' and 'mocktail' don't usually go together, but this avocado mocktail ticks both boxes. With a smoothie twist on a traditional non-alcoholic cocktail, you'll be bouncing out of bed the next morning with this delicious recipe.</p>
<a href="https://mindfulmocktail.com/avocado-mocktail/" class="read-more">Read More →</a>
</div>

<div class="card">
<img src="images/12.jpg" alt="Story Image 6">
<h3>The Cherry Mojito Mocktail </h3>
<p>April, 24 - Photo - 3 Comments</p>
<p>Bursting with goodness, these little red power houses are antioxidant rich. They are also a great source of fibre, vitamins and minerals.</p>
<a href="https://mindfulmocktail.com/cherry-mocktail/" class="read-more">Read More →</a>
</div>

</div>
<div class="more-posts">
<a href="testDB1.php">More Posts</a>
</div>
</div>
</div>
</body>
</html>


<script>
   let currentSlide = 0;
   const slides = document.querySelectorAll('.carousel-item');
   function showSlide(index) {
     slides.forEach((slide, i) => {
       slide.style.transform = `translateX(${(i - index) * 100}%)`;
     });
   }
   function nextSlide() {
     currentSlide = (currentSlide + 1) % slides.length;
     showSlide(currentSlide);
   }
   function prevSlide() {
     currentSlide = (currentSlide - 1 + slides.length) % slides.length;
     showSlide(currentSlide);
   }
   showSlide(currentSlide);
</script>

<script>
document.getElementById('signup-form').addEventListener('submit', function(event) {
           event.preventDefault();
           var email = document.getElementById('email').value;
           console.log('Email:', email);
           document.getElementById('message').textContent = 'Thank you for subscribing!';
       });

  </script>

</body>
</html>