# Simple Blog News (Laravel With Cloudinary)

Simple Blog is a lightweight blogging platform built with Laravel, designed for ease of use and flexibility. This README provides an overview of the features and setup instructions for the Simple Blog project.

## Features

1. **Posting Blog**

   - Easily create and publish blog posts using the intuitive and user-friendly interface.
   - Support for Markdown formatting for rich text content.

2. **Image Upload to Cloudinary**

   - Seamlessly upload images to Cloudinary for efficient storage and delivery.
   - Integration with Cloudinary API for smooth handling of image assets.

3. **User Authentication**

   - Secure user authentication system to manage access and permissions.
   - Only authenticated users can create, edit, and delete blog posts.

4. **Responsive Design**

   - The blog is designed to be responsive, providing a consistent experience across various devices and screen sizes.

5. **Tagging System**

   - Categorize your blog posts with tags for easy navigation and content discovery.

6. **Search Functionality**

   - Enable users to search for specific blog posts based on keywords or tags.

7. **Commenting System**

   - Allow readers to engage with your content by adding comments to blog posts.
   - Moderation features for managing and filtering comments.

8. **Social Media Integration**
   - Share your blog posts on popular social media platforms for increased visibility.
   - Social media meta tags for enhanced sharing experience.

## Getting Started

### Prerequisites

- PHP and Composer installed on your machine.
- Laravel installed globally.
- MySQL or another database supported by Laravel.
- Cloudinary account for image storage.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/tettehseth67/simple-news-blog-built-with-laravel-cloudinary.git
   ```

2. Install dependencies:

   ```bash
   cd simple-news-blog-built-with-laravel-cloudinary
   composer install
   ```

3. Copy the `.env.example` file to create a new `.env` file:

   ```bash
   cp .env.example .env
   ```

4. Configure environment variables in the `.env` file:

   - Set your database connection details (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).
   - Set Cloudinary credentials (CLOUDINARY_CLOUD_NAME, CLOUDINARY_API_KEY, CLOUDINARY_API_SECRET).
   - Set the application key (APP_KEY).

5. Run the migration and seed the database:

   ```bash
   php artisan migrate
   ```

6. Generate application key:

   ```bash
   php artisan key:generate
   ```

7. Run the application:

   ```bash
   php artisan serve
   ```

8. Open your browser and visit `http://localhost:8000` to access the Simple Blog.

## Contributing

If you would like to contribute to this project, please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
