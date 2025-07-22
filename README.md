# Mocktail WebSite
Mocktastic is a vibrant and user-friendly web application built using **HTML**, **CSS**, **JavaScript**, and **PHP**. It allows users to explore a wide range of delicious alcohol-free mocktail recipes, search by name or ingredient, view detailed recipes, and even click on ingredients to be redirected to purchase them from an external store.
---

## ✨ Features

- 🔍 **Search Functionality**  
  Search for mocktails by name or ingredient with instant, responsive results.

- 📋 **View Recipes**  
  Each recipe displays ingredients, step-by-step instructions, and user-submitted ratings.

- 🌟 **Rate Recipes**  
  Logged-in users can rate mocktails, helping others discover the best blends.

- 🧾 **Clickable Ingredients**  
  Click on any ingredient to be redirected to a store for purchasing.

- ✍️ **Submit Your Own Recipes**  
  Users can upload their custom mocktail recipes through a fully validated form.

- 👤 **User Authentication**  
  - Register and log in to unlock full site features  
  - Secure session-based login system  
  - User-submitted content is linked to their profile

- 🛠️ **Database Integration**  
  PHP handles all interactions with the MySQL database for storing users, recipes, ratings, and more.

- ✅ **Input Validation**  
  All forms are validated both client-side (JavaScript) and server-side (PHP) to prevent invalid submissions and ensure clean data.

---

## 🛠️ Technologies Used

- **HTML5** – Page structure  
- **CSS3** – Visual design and layout  
- **JavaScript** – Client-side interactivity and validation  
- **PHP** – Backend logic, session handling, database operations  
- **MySQL** – Persistent storage for users, recipes, and ratings

---

## 📸 Screenshots

> _(Optional: Add images of your homepage, recipe view, submission form, and rating system here)_

---

## 🚀 Getting Started

1. **Clone the Repository**
   ```bash
   git clone https://github.com/yourusername/mocktail-mixer.git
   cd mocktail-mixer
Set Up Your Server Environment
Install XAMPP, WAMP, or MAMP
Place the project folder inside the htdocs directory (or your local server root)
Create a Database
Import the provided mocktail_mixer.sql file into your MySQL server (via phpMyAdmin or CLI)
Update db.php with your database credentials
Launch the App
Visit: http://localhost/mocktail-mixer/index.php
📂 Project Structure

mocktail-mixer/
├── index.php
├── login.php
├── register.php
├── search.php
├── submit_recipe.php
├── recipe.php
├── includes/
│   ├── db.php            # DB connection
│   ├── auth.php          # Session/authentication logic
│   └── validation.php    # Server-side validation functions
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
└── sql/
    └── mocktail_mixer.sql # Database structure
⚙️ Core Functionalities in PHP

✅ User authentication (register/login/logout)
✅ Secure session management
✅ Recipe submission with full validation
✅ Rating system (stored and averaged in the database)
✅ SQL injection prevention (via prepared statements)
✅ Error handling and success feedback
🔐 Security Measures

Passwords are hashed before storing in the database
Server-side validation for all user input
Basic input sanitization and SQL injection prevention
🧪 Future Enhancements

Profile pages for each user
Image upload for recipes
Filter recipes by ingredients, rating, or difficulty
Admin dashboard to manage content
Save favorite recipes to your profile
🙌 Contributing

Pull requests and feedback are welcome. Please open an issue to discuss any major changes before submitting a PR.

📄 License

This project is licensed under the MIT License.

