<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
        <link rel="stylesheet" href="css/posts.css" >
</head>
<body>
<div class="search-container">
<input type="text" id="searchInput" placeholder="Search Posts.....">
</div>
<div class="posts-container">
<h2>Explore</h2>
    <div class="grid" >
<!-- Posts in the first column -->
        <div class="card" data-title ="Easy Guava-Lemon Mocktail" >
            <img src="images/7.jpg" alt="Post 1">
            <h3>Easy Guava-Lemon Mocktail</h3>
            <p>May 16, 2024 - Photo, Trending</p>
         <p> this recipe has a delicious combination of guava nectar, cleansing lemon juice, fresh mint and hydrating club soda or kombucha, making it both delicious and healthy. The guava nectar and lemon juice are high in Vitamin C, and if you use a kombucha as the mixer you increase the health benefits even further.</p>
        <a href="https://mindfulmocktail.com/?s=easy+guava" class="card">Read More...</a>
         </div>

        <div class="card" data-title ="WaterMelon and Berry Mocktail"  >
            <img src="images/8.jpg" alt="Post 2">
            <h3>WaterMelon and Berry Mocktail</h3>
            <p>May, 2024 - Summer Berry Collection</p>
             <p>despite being naturally low in sugar, watermelon is deliciously sweet. This means you don’t need to add sweetener or sugar to this drink. Fresh lime juice adds a hit of vitamin C, and the high water content means it's super hydrating.</p>
             <a href="https://mindfulmocktail.com/?s=watermelon" class="card">Read More...</a>
        </div>

    <div class="card"  data-title ="Mango and Mint Mocktail" >
            <img src="images/9.jpg" alt="Post 3">
            <h3>Mango and Mint Mocktail</h3>
             <p>April 9, 2024 - Popular</p>
             <p> with no added sugars or sweetener, this 'no'jito contains almost 1 serve of your daily fruit intake, as well as fresh lime and mint.</p>
             <a href="https://mindfulmocktail.com/mango-mocktail/" class="card">Read More...</a>
    </div>

<div class="card" data-title ="Ginger Beer Mocktail" >
    <img src="images/10.jpg" alt="Post 4">
    <h3>Ginger Beer Mocktail</h3>
    <p>April 14, 2024 - Featured,Bitter</p>
    <p> ginger is loaded with antioxidants, so pick a naturally brewed variety to reap the benefits. Although some nutrients are lost in processing, pineapple and lime juice are sources of vitamin C. Choose a reduced sugar or diet ginger beer for a lower sugar mocktail. </p>
     <a href="https://mindfulmocktail.com/ginger-beer-mocktail/" class="card">Read More...</a>
</div>

<div class="card" data-title ="Avocado Mocktail" >
    <img src="images/11.jpg" alt="Post 5">
    <h3>Avocado Mocktail</h3>
    <p>April 20, 2024 - Featured - 4 Comments</p>
    <p>The words 'healthy' and 'mocktail' don't usually go together, but this avocado mocktail ticks both boxes. With a smoothie twist on a traditional non-alcoholic cocktail, you'll be bouncing out of bed the next morning with this delicious recipe.</p>
     <a href="https://mindfulmocktail.com/avocado-mocktail/" class="card">Read More...</a>
  
</div>

<div class="card" data-title ="The Cherry Mojito Mocktail" >
    <img src="images/12.jpg" alt="Post 6">
    <h3>The Cherry Mojito Mocktail </h3>
    <p>April, 24 - Photo - 3 Comments</p>
    <p>Bursting with goodness, these little red power houses are antioxidant rich. They are also a great source of fibre, vitamins and minerals.</p>
     <a href="https://mindfulmocktail.com/cherry-mocktail/" class="card">Read More... </a>
</div>

<div class="card" data-title ="Strawberry Daiquiri" >
    <img src="images/13.jpg" alt="Post 6">
    <h3>Strawberry Daiquiri</h3>
    <p>April, 30 - Favorites</p>
    <p>This drink has the perfect mix of fresh and frozen strawberries, which creates an ideal creamy texture that doesn't separate as it melts, meaning you can take your time with each delicious sip.</p>
   <a href="https://mindfulmocktail.com/virgin-strawberry-daiquiri-margarita/" class="card">Read More...</a>
</div>


<div class="card" data-title ="Sunrise Mocktail" >
    <img src="images/14.jpg" alt="Post 6">
    <h3>Sunrise Mocktail</h3>
    <p>May, 1 - Features</p>
    <p>With a little twist on my mimosa mocktail, this non alcoholic cocktail ticks all the boxes, so you can be sure it's a winner..</p>
  <a href="https://mindfulmocktail.com/sunrise-mocktail-recipe/" class="card">Read More....</a>
</div>

<div id="noPostsMessage" style="display: none; color: red; margin-top: 20px;">No posts found</div>

</div>

</div>

<script >
document.getElementById('searchInput').addEventListener('input', function() {
    let filter = this.value.toLowerCase().trim();
    let cards = document.querySelectorAll('.card');
    let noPostsMessage = document.getElementById('noPostsMessage');
    let found = false;

    cards.forEach(function(card) {
        let title = card.getAttribute('data-title').toLowerCase();
        let cardVisible = title.includes(filter);
        card.style.display = cardVisible ? '' : 'none';

        if (cardVisible) {
            found = true;
        }
    });

    noPostsMessage.style.display = found ? 'none' : 'block';
});

</script>

</body>
</html>