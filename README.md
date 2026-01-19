# 🐦 Twitter Clone

> **Connect. Share. Discover.**  
> A lightweight, full-featured social media platform built with PHP and MySQL.

![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=flat-square&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-4.0-563D7C?style=flat-square&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/Status-Active-success?style=flat-square)

---

## 🚀 About The Project

Welcome to the **Twitter Clone**! This project recreates the core experience of the world's favorite micro-blogging platform. Whether you want to shout your thoughts into the void, follow your friends, or explore trending topics, this app handles it all with a smooth, responsive interface.

Built as a showcase of **Object-Oriented PHP**, it demonstrates robust backend logic paired with a clean frontend.

---

## ✨ Key Features

| Feature | Description |
| :--- | :--- |
| **🔐 Authentication** | Secure Login & Registration system to keep accounts safe. |
| **📝 Tweeting** | Share your thoughts! Support for text (140+ chars) and image uploads. |
| **❤️ Interactions** | **Like**, **Retweet**, and **Comment** to engage with the community. |
| **👥 Social Graph** | **Follow** and **Unfollow** users to curate your personal feed. |
| **💬 Direct Messages** | Private real-time messaging for one-on-one conversations. |
| **🔔 Notifications** | Stay updated with real-time alerts for likes, retweets, and mentions. |
| **#️⃣ Trends & Tags** | Use **Hashtags** and see what's trending globally. |
| **🔍 Discovery** | Advanced search to find users and topics instantly. |
| **👤 Profile Customization** | Edit your profile, header image, and bio to express yourself. |

---

## 🛠️ Tech Stack

This project is built with a classic, reliable stack:

*   **⚡ Backend:** PHP (PDO, OOP Architecture)
*   **🗄️ Database:** MySQL
*   **🎨 Frontend:** HTML5, CSS3, JavaScript (jQuery)
*   **💅 Styling:** Bootstrap Framework & FontAwesome

---

## 📦 Installation Guide

Get your own instance running in minutes!

1.  **Clone the Repo**
    ```bash
    git clone https://github.com/Mohamed2007Sarhan/twitter.git
    ```

2.  **Setup Database**
    *   Create a specific database (e.g., `twitter`).
    *   Import the SQL file located in `Database/twitter.sql`.

3.  **Configure Connection**
    *   Open `core/database/connection.php` (or `core/init.php`).
    *   Update your DB credentials:
        ```php
        $dsn = 'mysql:host=localhost; dbname=twitter';
        $user = 'root';
        $pass = ''; 
        ```

4.  **Launch!** 🚀
    *   Host it on XAMPP, WAMP, or any PHP server.
    *   Navigate to `localhost/twitter` in your browser.

---

## 🤝 Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  Fork the Project
2.  Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3.  Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4.  Push to the Branch (`git push origin feature/AmazingFeature`)
5.  Open a Pull Request

---

<p align="center">
  Made with ❤️ for code.
</p>

