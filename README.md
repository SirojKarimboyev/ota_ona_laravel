## O'rnatish

Loyihani o'rnatish uchun quyidagi qadamlarni bajaring:

1. Repositoryni klonlash:
    ```sh
    git clone https://github.com/SirojKarimboyev/ota_ona_laravel.git
    cd ota_ona_laravel
    ```

2. Composer paketlarini o'rnatish:
    ```sh
    composer install
    ```

3. Environment sozlamalarini nusxalash:
    ```sh
    cp .env.example .env
    ```

4. Environment sozlamalarini tahrirlash va `APP_NAME`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` kabi ma'lumotlarni kiritish.

5. Laravel kalitini yaratish:
    ```sh
    php artisan key:generate
    ```

6. Ma'lumotlar bazasini yaratish va migratsiyalarni bajarish:
    ```sh
    php artisan migrate
    ```

7. Storage link yaratish:
    ```sh
    php artisan storage:link
    ```

8. Serverni ishga tushirish:
    ```sh
    php artisan serve
    ```
