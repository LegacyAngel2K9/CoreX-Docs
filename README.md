# 📖 CoreX-Docs 🚀  

## 🌍 About  
CoreX-Docs is the **official documentation platform** for the **CoreX Framework**. It provides guides, API references, and setup instructions to help developers install, configure, and use CoreX efficiently.

🔗 **Live Documentation:** [docs.core-x.dev](https://docs.core-x.dev)  
💬 **Community Support:** [discord.core-x.dev](https://discord.core-x.dev)  
📂 **GitHub Repository:** [CoreX-Docs](https://github.com/LegacyAngel2K9/CoreX-Docs)  

---

## 📥 Installation  

### **1️⃣ Clone the Repository**
```env
git clone https://github.com/LegacyAngel2K9/CoreX-Docs.git
cd CoreX-Docs
```

### **2️⃣ Install Dependencies**
Ensure **Composer** is installed, then run:
```env
composer install --no-dev --optimize-autoloader
```

### **3️⃣ Configure Environment**
Rename `.env.example` to `.env` and update your database credentials:
```env
cp .env.example .env
nano .env
```

### **4️⃣ Run Migrations (if required)**
```env
php spark migrate
```

### **5️⃣ Start the Server**
```env
php spark serve
```
Access the documentation at:  
➡ **[http://localhost:8080](http://localhost:8080)**  

---

## 🔧 Configuration  

| Setting                | Description                           | Location |
|------------------------|--------------------------------------|----------|
| **Base URL**           | The website's main domain.          | `.env` → `app.baseURL` |
| **Database**           | MySQL/MariaDB connection settings.  | `.env` → `database.default` |
| **GitHub API Key**     | Fetches contributors dynamically.  | `.env` → `GITHUB_API_KEY` |
| **Admin Authentication** | Secure admin panel login.      | `app/Controllers/Auth.php` |

---

## 🛠 Features  

✅ **Structured Documentation for CoreX Framework**  
✅ **Admin Panel to Manage Documentation**  
✅ **Secure Authentication for Admins**  
✅ **Database-Powered Content Management**  
✅ **Fetch Contributors Directly from GitHub API**  
✅ **Fully Responsive UI (Mobile & Desktop)**  

---

## 📌 Admin Panel  

To access the admin dashboard:  
➡ **[http://localhost:8080/admin/login](http://localhost:8080/admin/login)**  

Default Credentials (Change in Production):  
- **Username:** `admin`  
- **Password:** `securepassword`  

Features:  
✔ **Add/Edit/Delete Documentation Entries**  
✔ **Manage Categories & API References**  
✔ **Secure Authentication System**  

---

## 🔗 API Endpoints  

| Endpoint | Description |
|----------|------------|
| `/api/getServerConfig` | Fetches server configuration details. |
| `/api/getTables` | Lists all database tables. |
| `/api/getTableStructure/{table}` | Fetches table schema. |
| `/api/getTableData/{table}` | Retrieves table data (limited). |
| `/api/contributors` | Fetches GitHub contributors dynamically. |

---

## 📜 License  
CoreX-Docs is licensed under the **MIT License**. See [LICENSE](LICENSE) for details.

---

## 🏆 Credits  
Developed by **Legacy DEV Team**  
🔗 **Join Our Community:** [discord.core-x.dev](https://discord.core-x.dev)  
📖 **Live Documentation:** [docs.core-x.dev](https://docs.core-x.dev)  

🔥 **CoreX-Docs - The Official Guide for CoreX Framework!** 🚀  