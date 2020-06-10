####
php artisan make:migration create_stories_table --create=stories
php artisan make:migration create_categories_table --create=categories
php artisan make:migration create_comments_table --create=comments

### 
1. Tạo controller
php artisan make:controller $TEN_CONTROLLER$Controller
php artisan make:controller CategoryController (done)
php artisan make:controller StoryController (done)
php artisan make:controller CommentController (done)
php artisan make:controller UserController (done)


2. Tạo model
php artisan make:model $TEN_MODEL$ (ví dụ)
php artisan make:model Category (done)
php artisan make:model Story (done)
php artisan make:model Comment (done)
php artisan make:model User (done)
3. Tạo view

4. Migrations
php artisan make:migration add_slug_to_categories_table --table=categories
php artisan make:migration add_slug_to_stories_table --table=stories