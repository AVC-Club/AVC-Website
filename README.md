# Installation Guide

## Minimum Requirements

- **PHP 8 (Version 8.4+)**  
  [Download PHP 8.4.4](https://windows.php.net/downloads/releases/php-8.4.4-nts-Win32-vs17-x64.zip)
- **Composer (Version 2.8+)**  
  [Download Composer](https://getcomposer.org/Composer-Setup.exe)

---

## Installation Steps

### 1. Install PHP 8.4+
1. Download the PHP zip file from the link provided above.
2. Rename your existing PHP folder (e.g., `PHP7.4`) to keep it as a backup.
3. Extract the downloaded PHP zip file to `C:\Program Files\` and rename the folder to `PHP8.4`.
4. Add PHP to the system's environment variables:
   - Open **System Properties**.
   - Navigate to **Advanced** > **Environment Variables**.
   - Under **System Variables**, select `Path` and click **Edit**.
   - Click **New**, then add `C:\Program Files\PHP8.4`.
   - Click **OK** to save and apply changes.

### 2. Install Composer 2.8+
1. Run the Composer installation executable and follow the on-screen instructions.
2. When prompted for the **command-line PHP**, select `C:\Program Files\PHP8.4`. If it is not detected, use the **Browse** option to locate it.
3. Complete the installation with default settings.

### 3. Verify Installation
1. Open a command-line terminal.
2. Run the following command:
   ```sh
   composer --version
   ```
3. Expected output:
   ```sh
   Composer version 2.8.6 2025-02-25 13:03:50
   PHP version 8.4.4 (C:\Program Files\PHP8.4\php.exe)
   Run the "diagnose" command to get more detailed diagnostics output.
   ```

4. (Optional) Run the following command to check Composer’s full details:
   ```sh
   composer -v
   ```
   Expected ASCII output:
   ```sh
      ______
     / ____/___  ____ ___  ____  ____  ________  _____
    / /   / __ \/ __ `__ \/ __ \/ __ \/ ___/ _ \/ ___/
   / /___/ /_/ / / / / / / /_/ / /_/ (__  )  __/ /
   \____/\____/_/ /_/ /_/ .___/\____/____/\___/_/
                        /_/
   Composer version 2.8.6 2025-02-25 13:03:50
   ```

**Congratulations!** 🎉 Composer and PHP are successfully installed!

---

## Setting Up the Development Workspace

### 1. Clone the Repository
```sh
 git clone https://github.com/AVC-Club/AVC-Website
```

### 2. Navigate to the Project Directory
```sh
cd AVC-Website
```

### 3. Install Dependencies
```sh
composer require slim/slim:"4.*"
composer require slim/psr7
composer require slim/php-view
```

### 4. Start the Development Server
```sh
php -S localhost:8888 app.php
```

### 5. Access the Website
Open your browser and visit:
```
http://localhost:8888
```

You should see the website running successfully!

