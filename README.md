```md
# CoreX Documentation Site

## 📌 Overview
This is the **official documentation website** for CoreX, built using **CodeIgniter 4**.  
It provides detailed guides on **installation, configuration, API reference, database structure, and commands**.

---

## 🚀 Features
✅ **Installation Guide** - Step-by-step setup instructions  
✅ **Configuration Reference** - Modify server settings in `config.lua`  
✅ **Command List** - All admin & player commands  
✅ **API Documentation** - Endpoints for integration  
✅ **Database Structure** - Tables & schema details  
✅ **Admin Panel** - Secure login for managing documentation  
✅ **Markdown Editor** - Update docs easily from the dashboard  
✅ **Search Functionality** - Quickly find documentation  

---

## 📥 Installation

### 1️⃣ Clone the Repository
```sh
git clone https://github.com/LegacyAngel2K9/CoreX-Docs.git
cd CoreX-Docs
```

### 2️⃣ Install Dependencies
```sh
composer install
```

### 3️⃣ Set Up the Database (If Needed)
If you're using database-driven documentation, configure your `.env` file:
```sh
cp env .env
```
Then update:
```env
database.default.hostname = localhost
database.default.database = corex_docs
database.default.username = root
database.default.password = yourpassword
```

### 4️⃣ Set Up Admin Credentials
In your `.env` file, add:
```env
ADMIN_USERNAME = "admin"
ADMIN_PASSWORD_HASH = "$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
```
Generate a hashed password using PHP:
```php
echo password_hash("yourpassword", PASSWORD_BCRYPT);
```

### 5️⃣ Start the Development Server
```sh
php spark serve
```
Open **[http://localhost:8080](http://localhost:8080)** in your browser.

---

## 🛠 Configuration

### 📌 **Modify Base URL**
Edit `.env` and update:
```env
app.baseURL = 'http://your-domain.com/'
```

### 📌 **Enable Debugging (For Development)**
```env
app.debug = true
```

---

## 📢 Admin Panel
- Access the **Admin Panel** at: **`/admin`**
- Log in using your **configured credentials**
- Manage **documentation pages** directly in the panel

---

## 📝 License
This project is licensed under the **MIT License**.  
Feel free to **contribute, modify, or distribute** with attribution.

---

## 🏆 Credits
Developed by **Legacy DEV Team**  
Discord Server: [Discord Link](https://discord.gg/dayewa6xP6)
For questions, open an **issue** or contact the **CoreX Team**.

---
🚀 **CoreX Documentation - Making Roleplay Frameworks Easy!** 🚀
``` 

This **README.md** provides a **complete setup guide**, admin panel instructions, and useful configurations.  

Let me know if you need any changes! 🚀🔥